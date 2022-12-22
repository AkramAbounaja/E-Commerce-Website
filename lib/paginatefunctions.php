<?php
function paginate($query, $params, $per_page = 10)
{
    global $page;
    try {
        $page = (int)se($_GET, "page", 1, false);
    } catch (Exception $e) {
        $page = 1;
    }
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        error_log("paginate error: " . var_export($e, true));
    }
    $total = 0;
    if (isset($result)) {
        $total = (int)se($result, "total", 0, false);
    }
    global $total_pages; 
    $total_pages = ceil($total / $per_page);
    global $offset; 
    $offset = ($page - 1) * $per_page;
}

function persistQueryString($page)
{
    $_GET["page"] = $page;
    return http_build_query($_GET);
}

function check_apply_disabled_prev($page)
{
    echo $page < 1 ? "disabled" : "";
}
function check_apply_active($page, $i)
{
    echo ($page - 1) == $i ? "active" : "";
}
function check_apply_disabled_next($page)
{
    global $total_pages;
    echo ($page) >= $total_pages ? "disabled" : "";
}
?>