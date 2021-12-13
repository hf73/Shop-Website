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
?>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>
    </div>
  </div>
  <?php foreach ($results as $r) : 
        ?>
  <div class="col-25">
    <div class="container">
      <h4>Cart
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b><div class="card-text">Quantity :<?php se($r, "desired_quantity", 0); ?></b>
        </span>
      </h4>
    
      <div class="card-text">Name: <?php se($r, "name"); ?></div>  
                    <a href="productdetails.php">More Info</a>
                    <div class="card-text">Cost: <?php se($r, "subtotal"); ?></div>
                </div>
      <hr>
      <div class="card-text">Cost: <?php se($r, "subtotal"); ?></div>
      <?php endforeach; ?>
    </div>
  </div>
</div>