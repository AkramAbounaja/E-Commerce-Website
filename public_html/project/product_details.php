<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";


//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
$ignore = ["id", "modified", "created", "visibility", "average_rating"];
$db = getDB();
//get the item
$id = se($_GET, "id", -1, false);
$stmt = $db->prepare("SELECT * FROM $TABLE_NAME where id =:id");
try {
    $stmt->execute([":id" => $id]);
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($r) {
        $result = $r;
    }
} catch (PDOException $e) {
    error_log(var_export($e, true));
    flash("Error looking up record", "danger");
}
//uses the fetched columns to map via input_map()
function map_column($col)
{
    global $columns;
    foreach ($columns as $c) {
        if ($c["Field"] === $col) {
            return input_map($c["Type"]);
        }
    }
    return "text";
}
if (isset($_POST['comment']) && isset($_POST["vol"])) {
    $comment = se($_POST, "comment", "", false);
    $rating = floatval(se($_POST, "vol", "", false));
    $haserrors = false;
    if ($rating < 1 || $rating > 5) {
        flash("invalid rating", "warning");
        $haserrors = true;
    }
    if (strlen($comment) <= 0) {
        flash("Comment must not be blank", "warning");
        $haserrors = true;
    }
    //MUST PURCHASE THE PRODUCT BEFORE LEAVING A RATING. Database statement below does that.
    $db = getDB();
    $stmt = $db->prepare("SELECT * FROM Orders INNER JOIN OrderItems ON Orders.id = OrderItems.order_id WHERE Orders.user_id = :u_id AND OrderItems.product_id = :p_id");
    try {
        $stmt->execute([":u_id" => get_user_id(), ":p_id" => $id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$r) {
            flash("You must purchase the product before leaving a rating", "warning");
            $haserrors = true;
        }
    } catch (PDOException $e) {
        error_log(var_export($e, true));
        flash("Error looking up record", "danger");
    }
    if (!$haserrors) {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Ratings (comment, product_id, user_id, rating) VALUES (:comment, :p_id, :u_id, :rating) ON DUPLICATE KEY UPDATE comment = VALUES(comment), rating = VALUES(rating)");
        try {
            $stmt->execute([":comment" => $comment, ":p_id" => $id, ":u_id" => get_user_id(), ":rating" => $rating]);
            flash("Thank you for leaving a review!");

            // First, get the current average rating for the product
            $stmt2 = $db->prepare("SELECT SUM(rating) as sum_ratings, COUNT(*) as num_ratings FROM Ratings WHERE product_id = :p_id");
            $stmt2->execute([":p_id" => $id]);
            $result2 = $stmt2->fetch();
            $sum_ratings = $result2['sum_ratings'];
            $num_ratings = $result2['num_ratings'];

            // Calculate the average rating
            $average_rating = $sum_ratings / $num_ratings;

            // Update the average rating in the Products table
            $stmt3 = $db->prepare("UPDATE Products SET average_rating = :average_rating WHERE id = :p_id");
            $stmt3->execute([":average_rating" => $average_rating, ":p_id" => $id]);
        } catch (PDOException $e) {
            flash(var_export($e->errorInfo, true), "warning");
        }
    }
}
$total_query = "SELECT count(1) as total FROM Ratings INNER JOIN Users On Ratings.user_id = Users.id WHERE product_id = :p_id";
$params = [];
$params[":p_id"] = $id;
$per_page = 10;
paginate($total_query, $params, $per_page);
$allRatings = [];
if ((int) $total_pages > 0) {
    $base_query = "SELECT user_id, created, comment, rating FROM Ratings WHERE product_id = :p_id ORDER BY created DESC";
    $query = " LIMIT :offset, :count";
    $params[":offset"] = $offset;
    $params[":count"] = $per_page;
    $stmt = $db->prepare($base_query . $query);
    foreach ($params as $key => $value) {
        $type = is_int($value) ? PDO::PARAM_INT : PDO::PARAM_STR;
        $stmt->bindValue($key, $value, $type);
    }
    $params = null;
    try {
        $stmt->execute($params);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $allRatings = $r;
        }
    } catch (PDOException $e) {
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}
?>
<div class="container-fluid">
    <h1><?php se($result, "name"); ?> Details</h1>
    <form method="POST">
        <?php foreach ($result as $column => $value) : ?>
            <?php /* Lazily ignoring fields via hardcoded array*/ ?>
            <?php if (!in_array($column, $ignore)) : ?>
                <div class="mb-4">
                    <label class="form-label" for="<?php se($column); ?>"><?php se($column); ?>:</label>
                    <label class="form-label" for="<?php se($column); ?>"><?php se($value); ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php if (has_role("Admin")) : ?>
            <a class="btn btn-primary" href="admin/edit_products.php?id=<?php echo se($result, "id", "", false); ?>">Edit</a>
        <?php endif; ?>
        <br>
        <br>
        <label for="vol" form="form1">Average Rating: <?php echo !!floatval(get_average_rating($id)) ? strval(floatval(get_average_rating($id))) . "/5" : get_average_rating($id) ?></label>
        <?php if (is_logged_in()) : ?>
            <form onsubmit="return validate(this)" id="form1" method="POST">
                <div class="mb-3">
                    <br>
                    <select class="form-select" id="vol" name="vol" min="1" max="5" value="<?php echo get_average_rating($id) ?>">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                </div>
                <div class="mb-3">
                    <label for="d">Comment</label>
                    <textarea class="form-control form-control-sm" name="comment" id="d" placeholder="Leave a comment with your rating in this box"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Submit Feedback" />
            </form>
        <?php endif; ?>
        <?php if (count($allRatings) > 0) : ?>
            <h1>Ratings & Reviews</h1>
            <hr>
            <?php foreach ($allRatings as $rating) : ?>
                <div class="card">
                    <div class="card-body">
                        <p><?php echo " Created: " . se($rating, "created", "Unknown created time", false); ?></p>
                        <p>Comment: <?php se($rating, "comment", "Unknown Comment"); ?>
                        <p>
                        <p>Rating: <?php se($rating, "rating", "Unknown rating"); ?>
                        <p>
                    </div>
                </div>
            <?php endforeach; ?>
            <br>
            <?php require(__DIR__ . "/../../partials/pagination.php"); ?>
        <?php endif; ?>
</div>
<script>
    function validate(form) {
        let flashElement = document.getElementById("flash");
        flashElement.innerHTML = "";
        const formFieldOne = form.elements[0];
        const formFieldTwo = form.elements[1];
        let retVal = true;
        if (parseFloat(formFieldOne.value) < 1 || parseFloat(formFieldOne.value) > 5) {
            flash("Invalid rating", "warning");
            retVal = false;
        }
        if (formFieldTwo.value.length <= 0) {
            flash("Need to provide a comment", "warning");
            retVal = false;
        }
        return retVal;

    }
    $(document).ready(function() {
        if (document.getElementById("vol") !== null) {
            document.getElementById("vol").oninput = function() {
                document.getElementsByTagName("label")[0].innerText = document.getElementsByTagName("label")[0].innerText.replace(document.getElementsByTagName("label")[0].innerText.substring(document.getElementsByTagName("label")[0].innerText.indexOf(":")), ": " + document.getElementById("vol").value + "/5");
            };
        }
    });
</script>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/footer.php");
?>