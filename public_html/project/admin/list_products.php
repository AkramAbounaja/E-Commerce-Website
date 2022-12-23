<?php
require(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You don't have permission to view this page", "warning");
    die(header("Location: $BASE_PATH/" . "home.php"));
}
$results = [];
$db = getDB();
$ascDescOrder = se($_GET, "ascdescorder", "asc", false);
//allowed list
if (!in_array($ascDescOrder, ["asc", "desc"])) {
    $ascDescOrder = "asc"; 
}

$PriceRangeValues = se($_GET, "price", "", false);
$categoryValue = se($_GET, "categories", "", false);
$RatingRanges = se($_GET, "ratings", "", false);
$itemName = se($_GET, "itemName", "", false);
$query = "SELECT id, name, description, category, unit_price, stock FROM Products";
$whereQuery = [];
$params = [];

if(!empty($categoryValue))
{
    array_push($whereQuery,"category = :category");
    $params[":category"] = $categoryValue;
}
if(!empty($PriceRangeValues))
{
    preg_match_all("!\d+!", $PriceRangeValues, $matches);
    if(count($matches) > 0 && count($matches[0]) >= 2)
    {
        $lowPriceBound = intval($matches[0][0]);
        $highPriceBound = intval($matches[0][1]);
        array_push($whereQuery,"unit_price BETWEEN :lowPriceBound AND :highPriceBound");
        $params[":lowPriceBound"] = $lowPriceBound;
        $params[":highPriceBound"] = $highPriceBound;
    }
}
if(!empty($RatingRanges))
{
        $rateArr = explode(" ", $RatingRanges);
        if(count($rateArr) >= 3)
        {
            $rate_1 = $rateArr[0];
            $rate_2 = $rateArr[2];
            array_push($whereQuery,"average_rating BETWEEN :rate_1 AND :rate_2");
            $params[":rate_1"] = $rate_1;
            $params[":rate_2"] = $rate_2;
        }
}
if(!empty($itemName))
{
    array_push($whereQuery,"name like :name");
    $params[":name"] = "%" . $itemName . "%";
}
$query .= " where visibility = 1 and stock >= 0 and unit_price > 0 ";
if(count($whereQuery) > 0)
{
    $query .= " and " . join(" and ",$whereQuery);
}
$total_query = str_replace("id, name, description, category, unit_price, stock","count(1) as total",$query);
$per_page = intval(se($_GET, "results_per_page", 10, false));
if(!($per_page > 0))
{
    $per_page = 10;
}
paginate($total_query, $params, $per_page);
if((int) $total_pages > 0)
{
    if (!empty($ascDescOrder)) {
        $query .= " ORDER BY unit_price $ascDescOrder";
    }
    $query .= " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
    $stmt = $db->prepare($query);
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = null;
    try {
        $stmt->execute($params);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $results = $r;
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
$resultsOfCategory = [];
$stmt = $db->prepare("SELECT category FROM Products WHERE visibility = 1");
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $resultsOfCategory = $r;
    }
    $finalCategories = [];
    if (count($resultsOfCategory) > 0) 
    {
        foreach ($resultsOfCategory as $categoryResult) {
            $categoryValue = se($categoryResult, "category", "", false);
            if (!in_array($categoryValue, $finalCategories)) {
                array_push($finalCategories, $categoryValue);
            }
        }
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
//ratings
$theRatings = [];
$stmt = $db->prepare("SELECT DISTINCT(average_rating) as average_Rating FROM Products WHERE visibility = 1 ORDER BY average_Rating ASC"); 
try {
    $stmt->execute();
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $avgRatings = $r;
    if(count($avgRatings) > 0)
    {
        $minAvgRating = floatval($avgRatings[0]["average_Rating"]);
        $maxAvgRating = floatval($avgRatings[count($avgRatings) - 1]["average_Rating"]);
        $diffBetweenAvgRatings = 0;
        if(count($avgRatings) > 1)
        {
            $diffBetweenAvgRatings = floatval($avgRatings[1]["average_Rating"]) - $minAvgRating;
        }
        array_push($theRatings, $minAvgRating);
        while($minAvgRating < $maxAvgRating)
        {
            $minAvgRating += $diffBetweenAvgRatings;
            array_push($theRatings,$minAvgRating);
        }
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
//prices 
$finalPrices = [];
$stmt = $db->prepare("SELECT MAX(unit_price) FROM Products WHERE visibility = 1"); // check if this the right query 
try {
    $stmt->execute();
    $r = $stmt->fetch();
    $r = (int) ceil((float) se($r, "MAX(unit_price)", "", false));
    $counter = 0;
    while ($counter < $r) {
        $counter = $counter + 50;
        array_push($finalPrices, $counter);
    }
} catch (PDOException $e) {
    flash("<pre>" . var_export($e, true) . "</pre>");
}
?>
<style>
    .center {
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>
<div class="container-fluid">
<h1 id="myCart" class="center">All Products</h1>
<br>
    <form id="myForm">
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Filter By Category:</div>
                    <select class="form-control" name="categories" form="myForm">
                            <option></option>
                        <?php foreach ($finalCategories as $category) : ?>
                            <option value="<?php echo $category ?>"><?php echo $category ?></option>
                        <?php endforeach; ?>
                    </select>
            
                <div class="input-group-text">Rating Between:</div>
                    <select class="form-control" name="ratings" form="myForm">
                            <option></option>
                        <?php if (count($theRatings) == 1): ?>
                            <option value="<?php echo $theRatings[0] . " and " . ($theRatings[0] + 1);?>"><?php echo $theRatings[0] . " and " . ($theRatings[0] + 1);?></option>
                        <?php else: ?>
                            <?php for($i = 0; $i < count($theRatings) - 1; $i++) : ?>
                                <option value="<?php echo $theRatings[$i] . " and " . $theRatings[$i + 1];?>"><?php echo $theRatings[$i] . " and " . $theRatings[$i + 1];?></option>
                            <?php endfor; ?>
                        <?php endif; ?>
                    </select>
            
            
                <div class="input-group-text">Select a Price Range:</div>
                    <select class="form-control" name="price" form="myForm">
                            <option></option>
                        <?php foreach ($finalPrices as $index => $value) : ?>
                            <?php if ($index == 0) : ?>
                                <option value="<?php echo "$" . 0 . " to " . "$" . $finalPrices[$index] ?>"><?php echo "$" . 0 . " to " . "$" . $finalPrices[$index] ?></option>
                            <?php endif; ?>
                            <?php if ($index < count($finalPrices) - 1) : ?>
                                <option value="<?php echo "$" . $finalPrices[$index] . " to " . "$" . $finalPrices[$index + 1] ?>"><?php echo "$" . $finalPrices[$index] . " to " . "$" . $finalPrices[$index + 1] ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
            
                <div class="input-group-text">Sort:</div>
                    <select class="form-control" name="ascdescorder" form="myForm">
                        <option></option>
                        <option value="asc">Low To High</option>
                        <option value="desc">High To Low</option>
                    </select>
                <input class="form-control me-2" type="search" form="myForm" name="itemName" placeholder="Item Filter" />
            </div>
        </div>
        <br>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>
    <?php if (count($results) == 0) : ?>
        <p>No results to show</p>
    <?php else : ?>
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <!-- <?php var_export($results); ?> -->
            <?php foreach ($results as $item) : ?>
                <div id='cardwithID<?php echo $item["id"]; ?>' class="col">
                    <div id="aCard" class="card bg-light">
                        <div class="card-header">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Description: <?php se($item, "description"); ?></p>
                            <p class="card-text">Category: <?php se($item, "category"); ?></p>
                            <?php if(!empty(se($item, "average_rating", "", false))): ?>
                                <p class="card-text">Average Rating: <?php se($item, "average_rating");?></p>
                            <?php endif; ?>
                        </div>
                        <div class="card-footer">
                            Cost: $<?php se($item, "unit_price"); ?>
                            <?php if (has_role("Admin")) : ?>
                                <a class="btn btn-primary" href="admin/edit_product.php?id=<?php echo $item["id"]; ?>">Edit</a>
                            <?php endif; ?>
                            <a class="btn btn-primary" href="product_details.php?id=<?php echo $item["id"]; ?>">Details</a>
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
        <br>
        <?php require(__DIR__ . "/../../../partials/pagination.php"); ?>
    <?php endif; ?>
</div>
<?php
require(__DIR__ . "/../../../partials/flash.php");
?>