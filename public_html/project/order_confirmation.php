<?php
require(__DIR__ . "/../../partials/nav.php");
$results = [];
$id = se($_GET, "prevOrderID", -1, false);
//var_dump($_GET['prevOrderID']);
if($id <= 0)
{
    flash("Need to checkout from cart first.", "warning");
    header("Location: cart.php");
    exit;
}


$db = getDB();
$stmt = $db->prepare("SELECT Orders.id, Orders.user_id, Orders.total_price, Orders.payment_method, Orders.address, OrderItems.product_id, OrderItems.unit_price, OrderItems.quantity, Products.name
FROM Orders
INNER JOIN OrderItems ON OrderItems.order_id = Orders.id
INNER JOIN Products ON Products.id = OrderItems.product_id
WHERE Orders.id = :o_id");// inner joins to be able to get the values i needed from multiple tables under specific conditions of matching ids
try {
    $stmt->execute([":o_id" => $id]);
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

<h1 id="myCart" class="center">Your Order Details</h1>
    <p class ="center">Thank you for shopping!</p>
    <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php if (count($results) > 0) : ?>
            <?php foreach ($results as $item) : ?>
                <?php
                //the code below allows only the user that purchased the items to be able to see his order confirmation.
                //without it, anyone could write numbers into the link and see other people's confirmations.
                // Get the user id of the logged in user from the session
                    $loggedInUserId = $_SESSION['user']['id'];

                    // Get the user id of the order being displayed
                    $orderUserId = $item['user_id'];

                    // Check if the user id of the logged in user matches the user id of the order being displayed
                    if ($loggedInUserId != $orderUserId) {
                        // Redirect the user to another page
                        header("Location: index.php");
                        exit;
                    }
                ?>
                
                <div id='orderwithID<?php echo $item["id"]; ?>' class="col">
                    <div class="card bg-light">
                        <div class="card-header">
                        <h5 class="card-text"><?php se($item, "name"); ?></h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Unit price: $<?php se($item, "unit_price"); ?></p>
                            <p class="card-text">Quantity: <?php se($item, "quantity"); ?></p>
                            <p class="card-text">Product ID: <?php se($item, "product_id"); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
    <!-- nice looking table for the concurrent values (outside of foreach loop since concurrent) -->
        <table class="table">
  <tbody>
    <tr>
      <th scope="row">Total Price Paid</th>
      <td>$<?php se($item, "total_price"); ?></td>
    </tr>
    <tr>
      <th scope="row">Your Order ID</th>
      <td><?php se($item, "id"); ?></td>
    </tr>
    <tr>
      <th scope="row">Payment Method</th>
      <td><?php se($item, "payment_method"); ?></td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><?php se($item, "address"); ?></td>
    </tr>
  </tbody>
</table>
<?php endif; ?>
    </div>
</div>
<?php
    require(__DIR__ . "/../../partials/footer.php");
?>