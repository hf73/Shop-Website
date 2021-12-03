<?php
require_once(__DIR__ . "/../../lib/functions.php");
require_once(__DIR__ . "/../../partials/nav.php");

$id = se($_GET, "id", 0, false);
$db = getDB();

$stmt = $db->prepare("SELECT * FROM Products where id = :id");
try{
    $stmt->execute([":id" => $id]);
    $item = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<pre>" . var_export($item, true) . "</pre>";

} catch (PDOException $e) {
    var_export($e);
}
?>

