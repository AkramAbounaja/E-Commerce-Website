<?php
$response = ["message" => "Purchase Failed. Please Try Again."];
session_start(); 
require(__DIR__ . "/../../../lib/functions.php");

if (isset($_POST["address"]) && isset($_POST["total_price"]) && isset($_POST["payment_method"]) && isset($_POST["user_id"]) && isset($_POST["money_recieved"])) {
    require_once(__DIR__ . "/../../../lib/functions.php");
    $user_id = (int)se($_POST, "user_id", 0, false);
    $address = se($_POST, "address", "", false);
    $total_pice = floatval(se($_POST,"money_recieved", 000.00,false));
    $true_pice = floatval(se($_POST,"total_price", 000.00,false));
    $payment_method = se($_POST, "payment_method", "Unknown payment method", false);
    $isValid = true;
    $errors = [];
    //make sure everything is valid
    if ($user_id <= 0) {
        array_push($errors, "Invalid user");
        $isValid = false;
    }
    if(strlen($address) <= 0)
    {
        array_push($errors,"Invalid address");
        $isValid = false;
    }
    if ($total_pice <= 000.00 || $total_pice !== $true_pice) {
        array_push($errors, "Invalid total price");
        $isValid = false;
    }
    if($payment_method === "Unknown payment method")
    {
        array_push($errors, "Unknown payment method");
        $isValid = false;
    }
    if($isValid){
        $pdo = getDB();
        //get variables to be able to use later as well as check validity of quantity and price
        $query = "SELECT Products_Cart.unit_price as cart_cost, Products.id as product_id, Products.unit_price as product_cost, Products_Cart.desired_quantity, Products.stock, Products.name, Products_Cart.user_id FROM Products INNER JOIN Products_Cart on Products.id = Products_Cart.item_id where Products_Cart.user_id = :user_id AND (Products_Cart.unit_price != Products.unit_price OR Products_Cart.desired_quantity > Products.stock)";
        $stmt = $pdo->prepare($query);
        try{
                $stmt->execute([":user_id" => $user_id]);
                $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $results = $r;
                error_log(var_export($results, true));
                if(count($results) > 0)
                {
                     $empty_str = "";
                    //use variables that we got before to check validity and return a message if validity fails. String concatination is used to create the message.
                    foreach($results as $res)
                    {
                        if((floatval($res['cart_cost']) != floatval($res['product_cost'])) && ((int) $res['desired_quantity'] > (int) $res['stock']))
                        {
                            $str_to_attach = $res["name"] . "cannot be purchased because the cart price: " . $res['cart_cost'] . " has not been updated to the current price: " . " " . $res['product_cost'] . " and the quantity in cart: " . $res['desired_quantity'] . " is greater than the available stock: " . $res['stock'];
                        }
                        else if((int) $res['desired_quantity'] > (int) $res['stock'])
                        {
                            $str_to_attach = $res["name"] . " cannot be purchased because the quantity in cart: " . $res['desired_quantity'] . " is greater than the available stock:" . " " . $res['stock'];
                        }   
                        else
                        {
                            $str_to_attach = $res["name"] . " cannot be purchased because the cart price: " . $res['cart_cost'] . " has not been updated to the current price:" . " " . $res['product_cost'];
                        }
                        $empty_str = $empty_str . $str_to_attach . "\n";
                    }
                    $response["message"] = $empty_str;
                    error_log($empty_str);
                    //delete from cart and direct the user to re-add the products if validity fails.
                    $query2 = "DELETE FROM Products_Cart WHERE user_id = :uid";
                    $stmt = $db->prepare($query2);
                    $stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
                    try {
                        $stmt->execute();
                        flash("Cart has been cleared. Please re-add the products to clear any errors ", "success");
                    } catch (PDOException $e) {
                        error_log(var_export($e, true));
                        flash("Error clearing items", "danger");
                    }
                }
                else
                { 
                    try
                    {
                            //grab the latest order id from Orders to use as order_id later in OrderItems
                            $prevOrderID = save_data("Orders", $_POST);
                            if($prevOrderID > 0)
                            {
                                //insert all needed cart info into OrderItems using the previously binded userid
                                $stmt = $pdo->prepare("INSERT INTO OrderItems (product_id, unit_price, quantity, order_id)
                                SELECT item_id, unit_price, desired_quantity, :o_id FROM Products_Cart where Products_Cart.user_id = :user_id");
                                try{
                                    $stmt->execute([":user_id" => $user_id, ":o_id" => $prevOrderID]);
                                    //remove the amount that the user bought from the store's quantity. if the purchase fails should not be executed.
                                    $stmt = $pdo->prepare("UPDATE Products INNER JOIN Products_Cart ON Products.id = Products_Cart.item_id
                                    SET Products.stock = Products.stock - Products_Cart.desired_quantity WHERE Products_Cart.user_id = :user_id");
                                    try
                                    {
                                        $stmt->execute([":user_id" => $user_id]);
                                        //clear the cart after a successful purchase and give a response.
                                        $stmt = $pdo->prepare("DELETE FROM Products_Cart where user_id = :id");
                                        try {
                                            $stmt->execute([":id" => $user_id]);
                                            $response["message"] = "The Purchase was Successful and Your Cart Has Been Cleared!";
                                            $response["prevOrderID"] = $prevOrderID;
                                            unset($_SESSION["total_cost"]);
                                        } catch (PDOException $e) {
                                            flash("Error getting cost of $item_id: " . var_export($e->errorInfo, true), "warning");
                                        }
                                    }
                                    catch(PDOException $e)
                                    {
                                        flash(var_export($e->errorInfo, true), "warning");
                                    }
                                }
                                catch(PDOException $e)
                                {
                                    flash(var_export($e->errorInfo, true), "warning");
                                } 
                            }
                    }
                    catch(PDOException $e)
                    {
                        flash(var_export($e->errorInfo, true), "warning");
                    }
                }
        }
        catch(PDOException $e)
        {
            flash(var_export($e->errorInfo, true), "warning");
        }
    }
    else
    {
        $response["message"] = join("<br>", $errors);
    }
}
echo json_encode($response);
?>