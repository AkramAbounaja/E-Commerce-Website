<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
if (!is_logged_in()) {
    flash("Need to be logged in to view orders", "warning");
    header("location: login.php");
}
$results = [];
$db = getDB();
$stmt = $db->prepare("SELECT Orders.id, Orders.total_price, Orders.payment_method, Orders.address FROM Orders
where Orders.user_id = :user_id 
ORDER BY Orders.id DESC
LIMIT 10"); 
try {
    $stmt->execute([":user_id" => get_user_id()]); //specify the user_id so I get only products in tat user's cart
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $results = $r;
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
    <p class ="center">Thank you for shopping!</p>
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
                        <a class="btn btn-primary" href="order_confirmation.php?prevOrderID=<?php echo se($item, "id"); ?>">More Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
    </div>
</div>
<?php
    require(__DIR__ . "/../../partials/footer.php");
?>