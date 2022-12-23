<?php
function get_average_rating($id_of_product)
{
    $query = "SELECT AVG(rating) AS avgRating FROM Ratings where product_id = :p_id";
    $db = getDB();
    $stmt = $db->prepare($query);

    try{
        $stmt->execute([":p_id" => $id_of_product]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if(is_null($row["avgRating"]))
        {
            return "No Ratings on file. Be the first to rate this product below.";
        }
        return number_format($row["avgRating"], 2);
    }
    catch (PDOException $e) {
        flash(var_export($e->errorInfo, true), "warning");
    }
    return "<pre>" . var_export($e->errorInfo, true) . "</pre>";
}

?>