<?php
require(__DIR__ . "/../../partials/nav.php");

$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility FROM Products WHERE stock > 0 AND visibility=1 LIMIT 10");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching items", "danger");
}
$resultsOfCategory = [];
$stmt = $db->prepare("SELECT category FROM Products WHERE stock > 0 AND visibility = 1");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $resultsOfCategory = $r;
    }
    if (count($resultsOfCategory) > 0)
    {
        $finalCategories = [];
        foreach ($resultsOfCategory as $resultOfCategory) {
            $categoryValue = se($resultOfCategory, "category", "", false);
            if (!in_array($categoryValue, $finalCategories)) {
                array_push($finalCategories, $categoryValue);
            }
        }
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching category", "danger");
}

$finalPrices = [];
$stmt = $db->prepare("SELECT MAX(unit_price) FROM Products WHERE stock > 0 AND visibility=1"); //MAX allows all the prices to enter the dropdown compared to MIN
try {
    $stmt->execute();
    $r = $stmt->fetch();
    $r = (int) ceil((float) se($r, "MAX(unit_price)","", false));
    $counter = 0;
    while($counter < $r)
    {
        $counter = $counter + 5;
        array_push($finalPrices,$counter);
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error fetching price", "danger");
}
if (isset($_POST["nameOfItem"])) {
    if(strlen($_POST["nameOfItem"]) > 0)
    {
        $selected = se($_POST,"nameOfItem","",false);
        $stmt = $db->prepare("SELECT id, name, description, stock, unit_price, visibility from Products WHERE name like :name AND visibility=1 AND stock > 1 LIMIT 10");
        try {
            $stmt->execute([":name" => "%" . $selected . "%"]);
            $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $results = $r;
        } catch (PDOException $e) {
            error_log(var_export($e, true));
            flash("Error fetching item name", "danger");
        }
    }
}
if (isset($_POST["submitCategory"])) {
       if(!empty($_POST["categories"]))
       {
           $selected = se($_POST,"categories","",false);
           $stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE category = :category AND visibility=1 AND stock > 0 LIMIT 10");
            try {
                $stmt->execute([":category" => $selected]);
                $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $results = $r;
            } catch (PDOException $e) {
                error_log(var_export($e, true));
                flash("Error submitting category", "danger");
            }
       }
       else
       {
           $results = [];
       }
    }
if (isset($_POST["submitPrice"])) {
    if(!empty($_POST["price"]))
    {
        $selected = se($_POST, "price", "", false);
        preg_match_all("!\d+!", $selected, $matches); //patern used to match prices
        $lowerPrice = intval($matches[0][0]);
        $upperPrice = intval($matches[0][1]);

        $stmt = $db->prepare("SELECT id, name, description, category, stock, unit_price, visibility from Products WHERE visibility=1 AND stock > 0 AND unit_price BETWEEN :lowerPrice AND :upperPrice LIMIT 10");
        try {
            $stmt->execute([":lowerPrice" => $lowerPrice, ":upperPrice" => $upperPrice]);
            $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $results = $r;
        } catch (PDOException $e) {
            error_log(var_export($e, true));
            flash("Error submitting price", "danger");
        }
    }
    else
    {
        $results = [];
    }
}

?>

<div class="container-fluid">
    <h1>Shop</h1>
    <form method="POST">
        <label for="categories">Filter By Category:</label>
        <select name="categories" id="categories">
            <?php foreach ($finalCategories as $category) : ?>
                <option value="<?php echo $category ?>"><?php echo $category ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="submitCategory" value="Submit">
    </form>
    <form method="POST">
        <input type="search" name="nameOfItem" placeholder="Search for an Item" />
        <input type="submit" value="Search" />
    </form>
    <form method="POST">
        <label for="priceSort">Sort By:</label>
        <select name="price" id="priceSort">
            <?php foreach ($finalPrices as $i => $value) : ?>
                    <?php if ($i == 0) : ?>
                        <option><?php echo "$" . 0 . " to " . "$" . $finalPrices[$i]?></option>
                    <?php endif; ?>
                    <?php if ($i < count($finalPrices) - 1) : ?>
                        <option><?php echo "$" . $finalPrices[$i] . " to " . "$" . $finalPrices[$i + 1]?></option>
                    <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <input type="submit" name="submitPrice" value="Submit">
    </form> 
    <div class="row row-cols-sm-2 row-cols-xs-1 row-cols-md-3 row-cols-lg-6 g-4">
        <?php foreach ($results as $item) : ?>
            <div class="col">
                <div class="card bg-light">
                    <div class="card-header">
                        Products Placeholder
                    </div>
                    <?php if (se($item, "image", "", false)) : ?>
                        <img src="<?php se($item, "image"); ?>" class="card-img-top" alt="...">
                    <?php endif; ?>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                        
                    </div>
                    <div class="card-footer">
                        Cost: <?php se($item, "unit_price"); ?>
                        <?php if (has_role("Admin")) : ?>
                            <a class="btn btn-primary" href="admin/edit_products.php?id=<?php echo $item["id"];?>">Edit</a>
                        <?php endif; ?>
                            <a class="btn btn-primary" href="product_details.php?id=<?php echo $item["id"];?>">Details</a>
                        <form method="POST" action="cart.php">
                            <input type="hidden" name="item_id" value="<?php se($item, "id");?>"/>
                            <input type="hidden" name="action" value="add"/>
                            <input type="number" name="desired_quantity" value="1" min="1" max="<?php se($item, "stock");?>"/>
                            <input type="submit" class="btn btn-primary" value="Add to Cart"/>
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>