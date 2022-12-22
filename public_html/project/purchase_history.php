<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");

if (!is_logged_in()) {
    flash("Need to be logged in to view orders", "warning");
    header("location: login.php");
}
$results = [];
$db = getDB();

//Removed old and added pagination sortering and filtering
$columnOrder = se($_GET, "order", "", false);
$ascordescOrder = se($_GET, "ascdescorder", "", false);
$dateRangeOrder = se($_GET, "dateRanges", "", false);
$categoryOrder = se($_GET, "categories", "", false);

if (!in_array($columnOrder, ["total_price", "created"])) {
    $columnOrder = "created";
}

if (!in_array($ascordescOrder, ["asc", "desc"])) {
    $ascordescOrder = "desc"; 
}


$query = "SELECT Orders.user_id, Orders.id, Orders.created as created, Orders.total_price, Orders.payment_method, Orders.address FROM Orders";
$params = [];
$params[":user_id"] = get_user_id();
if(!empty($dateRangeOrder))
{
    $dateArr = explode(" ", $dateRangeOrder);
    if(count($dateArr) >= 2)
    {
        $date_1 = $dateArr[0];
        $date_2 = $dateArr[2];
        $query .= " where DATE(created) BETWEEN :date_1 AND :date_2 AND";
        $params[":date_1"] = date("Y-m-d",strtotime($date_1));
        $params[":date_2"] = date("Y-m-d",strtotime($date_2));
    }
}
else if(!empty($categoryOrder))
{
    $query .= " INNER JOIN OrderItems ON Orders.id = OrderItems.order_id INNER JOIN Products ON Products.id = OrderItems.product_id WHERE Products.category = :category AND";
    $params[":category"] = $categoryOrder;
}
else
{
    $query .= " where";
}
$query .= " Orders.user_id = :user_id";
$params[":user_id"] = get_user_id();
$total_query = str_replace("Orders.user_id, Orders.id, Orders.created as created, Orders.total_price, Orders.payment_method, Orders.address","count(1) as total",$query);
$per_page = 10;
paginate($total_query, $params, $per_page); 
if((int) $total_pages > 0)
{
    if (!empty($columnOrder) && !empty($ascordescOrder)) {
        $query .= " ORDER BY $columnOrder $ascordescOrder"; 
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
$rangeOfDates = [];
$oldestDate = "";
        $categoryResults = [];
        $stmt = $db->prepare("SELECT category FROM Products WHERE visibility = 1"); 
        try {
            $stmt->execute();
            $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($r) {
                $categoryResults = $r;
            }
            $categories = [];
            if (count($categoryResults) > 0) 
            {
                foreach ($categoryResults as $categoryResult) {
                    $categoryOrder = se($categoryResult, "category", "", false);
                    if (!in_array($categoryOrder, $categories)) {
                        array_push($categories, $categoryOrder);
                    }
                }
                //can't get categories to work for some reason idek
                // var_dump($categories);
            }
        } catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }
        $dates = [];
        $stmt = $db->prepare("SELECT DISTINCT(DATE(created)) as oldestDate FROM Orders WHERE user_id = :u_id ORDER BY oldestDate ASC"); //could have used the distinct keyword here 
        try {
            $stmt->execute([":u_id" => get_user_id()]);
            $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $dates = $r;
            if(count($dates) > 0) 
            {
                $oldestDate = date_create($dates[0]["oldestDate"]);
                $newestDate = date_create($dates[count($dates) - 1]["oldestDate"]);
                $diffBetweenDates = 0;
                if(count($dates) > 1)
                {
                    $diffBetweenDates = date_diff($oldestDate, date_create($dates[1]["oldestDate"]));
                    $diffBetweenDates = $diffBetweenDates->format("%a");
                }
                while((int) date_diff($oldestDate, $newestDate)->format("%a") > 0)
                {
                    array_push($rangeOfDates, $oldestDate->format("Y-m-d") . " to " . date_add($oldestDate,date_interval_create_from_date_string(strval((int) $diffBetweenDates) . " days"))->format("Y-m-d"));
                    error_log($oldestDate->format("Y-m-d"));
                }
            }
        } catch (PDOException $e) {
            flash("<pre>" . var_export($e, true) . "</pre>");
        }



?>
<!-- styling for the title and thank you message -->
<div class="container-fluid">
<style>
    .center {
        display: flex;
        justify-content: center;
        text-align: center;
    }
</style>
<h1 id="myCart" class="center">Your Orders</h1>
    <!-- <p class ="center">Thank you for shopping!</p> -->
    <form class="row row-cols-auto g-3 align-items-center" id="myForm">
        <div class="col">
            <div class="input-group">
                <div class="input-group-text">Filter</div>
                <select class="form-control" name="col" form="myForm">
                    <option value="nofilter"></option>
                    <option value="category">Category</option>
                    <option value="created">Date Purchased</option>
                </select>
                <div class="input-group-text">Categories</div>
                <select class="form-control" name="categories" form="myForm">
                        <option value="nocategory"></option>
                        <?php foreach ($categories as $category) : ?>
                            <option value="<?php echo $category ?>"><?php echo $category ?></option>
                        <?php endforeach; ?>

                </select>
                <script>
                </script>
                <div class="input-group-text">Date Ranges</div>
                <select class="form-control" name="dateRanges" form="myForm">
                        <?php if (count($dates) > 0): ?>
                            <?php if (count($rangeOfDates) > 0): ?>
                                <?php foreach ($rangeOfDates as $dateRange) : ?>
                                    <option value="<?php se($dateRange)?>"><?php se($dateRange); ?></option>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <option value="<?php se($oldestDate->format("Y-m-d") . " to " . date_add($oldestDate,date_interval_create_from_date_string("2 days"))->format("Y-m-d"))?>"><?php se($oldestDate->format("Y-m-d") . " to " . date_add($oldestDate,date_interval_create_from_date_string("2 days"))->format("Y-m-d"))?></option>
                            <?php endif; ?>
                        <?php endif; ?>
                </select>
                <div class="input-group-text">Order By</div>
                <select class="form-control" name="order" form="myForm">
                    <option value="noorderby"></option>
                    <option value="total_price">Total Price</option>
                    <option value="created">Date Purchased</option>
                </select>
                <div class="input-group-text">Sort</div>
                <select class="form-control" name="ascdescorder" form="myForm">
                    <option value="nosort"></option>
                    <option value="desc">High To Low (Price) /Recent to Old (Date)</option>
                    <option value="asc">Low To High (Price) /Old to Recent (Date)</option>
                </select>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="submit" class="btn btn-primary" value="Apply" />
            </div>
        </div>
    </form>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php if (count($results) > 0) : ?>

            <?php foreach ($results as $item) : ?>
                <div id='orderwithID<?php echo $item["id"]; ?>' class="col">
                    <div class="card bg-light">
                        <div class="card-header">
                        <p class="card-text">OrderID: <?php se($item, "id"); ?></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Total price: $<?php se($item, "total_price"); ?></p>
                            <p class="card-text">Payment method: <?php se($item, "payment_method"); ?></p>
                            <p class="card-text">Deliever To: <?php se($item, "address"); ?></p>
                        </div>
                        <div class="card-footer">
                        <a class="btn btn-primary" href="order_details.php?prevOrderID=<?php echo se($item, "id"); ?>">More Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php require(__DIR__ . "/../../partials/pagination.php"); ?>
    </div>
</div>
<?php
?>