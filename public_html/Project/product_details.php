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
<div class="row row-cols-1 row-cols-md-5 g-4">
            <div class="col">
                <div class="card bg-dark">
                    <div class="card-header">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Name: <?php se($item, "name"); ?></h5>
                        <p class="card-text">Description: <?php se($item, "description"); ?></p>
                        <p class="card-text">Category: <?php se($item, "category"); ?></p>
                        <p class="card-text">cost: <?php se($item, "cost"); ?></p>
                    </div>

                    <div class="card-footer">
                    </div>
