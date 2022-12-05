<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../partials/nav.php");
$TABLE_NAME = "Products";


//get the table definition
$result = [];
$columns = get_columns($TABLE_NAME);
//echo "<pre>" . var_export($columns, true) . "</pre>";
$ignore = ["id", "modified", "created", "visibility"];
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
?>
<div class="container-fluid">
    <h1><?php se($result,"name"); ?> Details</h1>
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
        <?php if(has_role("Admin")) : ?>
            <a class="btn btn-primary" href="admin/edit_products.php?id=<?php echo se($result, "id", "", false);?>">Edit</a>
        <?php endif; ?>
    </form>
</div>

<?php
//note we need to go up 1 more directory
require_once(__DIR__ . "/../../partials/footer.php");
?>