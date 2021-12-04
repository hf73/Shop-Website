<?php
require(__DIR__ . "/../../partials/nav.php");
   
$db = getDB();
$results = [];
if (!isset($user_id)) {
    $user_id = get_user_id();
}
error_log("Cart");
$stmt = $db->prepare("SELECT c.id, name, image, desired_quantity, description, (desired_quantity * cost) AS subtotal FROM Cart JOIN Products c on product_id = c.id WHERE user_id = :uid and desired_quantity > 0");

try {
    $stmt->execute([":uid" => $user_id]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    error_log("Could not add Item To Cart, Try Again" . var_export($e, true));
    flash("<pre>" . var_export($e, true) . "</pre>");
}

if (isset($_POST["get_cart"])) {
    $db = getDB();
    $results = [];
    $get_quantity = se($_POST,'desired_quantity', -1, false);
    $get_cart = se($_POST, "get_cart", -1, false);
    $stmt = $db->prepare("UPDATE Cart set desired_quantity = :q WHERE product_id = :id AND user_id = :uid");
   
    try {
        $stmt->execute([":q" => $get_quantity, ":id" => $get_cart, ":uid" => get_user_id()]);
        flash("Updated Quantity", "success");
    } catch (PDOException $e) {
        error_log("<pre>" . var_export($e->errorInfo, true));
    }
}

if (isset($_GET["delete_item"])){ 
    $db = getDB();
    $item_id = se($_GET, "delete_item", -1, false);
    $stmt = $db->prepare("DELETE FROM Cart WHERE product_id = :id AND user_id = :uid");
    
    try {
        $stmt->execute([":id" => $item_id, ":uid" => get_user_id()]);
        flash("Removed Item", "success");

    } catch (PDOException $e) {
        error_log("Could Not Remove Item, Try Again" . var_export($e->errorInfo, true));
        flash("<pre>" . var_export($e, true) . "</pre>");
    }

}

if (isset($_GET["drop_cart"])) {
    
    $db = getDB();
    $item_id = se($_GET, "drop_cart", -1, false);
    $stmt = $db->prepare("DELETE FROM Cart WHERE user_id = :uid");
    
    try{
        $stmt->execute([":uid" => get_user_id()]);
        flash("Emptied Cart", "success");

    } catch (PDOException $e) {
        error_log("Could Not Empty Cart, Try Again" . var_export($e->errorInfo, true));
        flash("<pre>" . var_export($e, true) . "</pre>");
    }
}

?>
<h5>CART</h5>
<div class="row">
    <?php foreach ($results as $r) : 
        ?>
        <div class="col">
            <div class="card bg-dark w-25">
                <div class="card-body">

                    <div class="card-text">Name: <?php se($r, "name"); ?></div>  
                    <a href="productdetails.php">More Info</a>
                    <div class="card-text">Cost: <?php se($r, "subtotal"); ?></div>
                    <div class="card-text">Quantity :<?php se($r, "desired_quantity", 0); ?>
                    <form method="POST">
                                <input type="hidden" name="get_cart" value="<?php se($r, 'id');?>"/>
                                <input type="number" name="desired_quantity" value="<?php se($r, 'desired_quantity');?>"/>
                                <input class="btn btn-primary" type="submit" value="Update Quantity"/>
                            </form>

                </div>
                <div class="card-footer">

                <form method="GET">
                    <input type="hidden" name="delete_item" value="<?php se($r, 'id'); ?>"/>
                    <input class="btn btn-primary" type="submit" value="Delete Item"/>
                    </form>  
                    
                </form>
                
                </div>
            </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<footer>
    <form method="GET">
        <input type="hidden" name="drop_cart" value="<?php se($r, 'id'); ?>"/>
        <input class="btn btn-primary" type="submit" value="Empty Cart"/>
    </form>

</footer>
