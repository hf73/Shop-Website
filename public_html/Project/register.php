<?php
require(__DIR__ . "../../../partials/nav.php");?>

<form onsubmit="return validate(this)" method="POST">
    <div>
        <label for="username">Username</label>
        <input type = "text" name="username" requried maxlength="30"/>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <label for="pw">Password</label>
        <input type="password" id="pw" name="password" required minlength="8" />
    </div>
    <div>
        <label for="confirm">Confirm</label>
        <input type="password" name="confirm" required minlength="8" />
    </div>
    <input type="submit" value="Register" />
</form>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
 //TODO 2: add PHP Code
 if(isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"])){
    $username = se($_POST, "username", "", false); 
    //get the email key from $_POST, default to "" if not set, and return the value
     $email = se($_POST, "email","", false);
     //same as above but for password and confirm
     $password = se($_POST, "password", "", false);
     $confirm = se($_POST, "confirm", "", false);
     //TODO 3: validate/use
     $errors = [];
     if(!preg_match('/^[a-z0-9_-]{3,30}$/', $username)){
         flash("Invalid username, must be alphanumberic");
     }
     if(empty($email)){
        //array_push($errors, "Email must be set");
        flash("Email must be set");
        $hasErrors = true;
     }
     //sanitize
     $email = sanitize_email($email);
     //validate
     if (!is_valid_email($email)) {
       // array_push($errors, "Invalid email address");
        flash("Invalid email address");
        $hasErrors = true;
     }

     if(empty($password)){
        // array_push($errors, "Password must be set");
        flash("Password must be set");
        $hasErrors = true;
     }

     if(empty($confirm)){
         //array_push($errors, "Confirm password must be set");
         flash("Confirm password must be set");
         $hasErrors = true;
     }

     if(strlen($password) < 8){
        // array_push($errors, "Password must be 8 or more characters");
         flash("Password must be 8 or more characters");
         $hasErrors = true;
     }

     if(strlen($password) > 0 && $password !== $confirm){
       // array_push($errors, "Passwords don't match");
        flash("Passwords don't match");
        $hasErrors = true;
     }
     if ($hasErrors){
        
    }
     else{
         echo "Welcome, $email!";
         //TODO 4
         $hash = password_hash($password, PASSWORD_BCRYPT);
         $db = getDB();
         $stmt = $db -> prepare("INSERT INTO Users (email, password) Values (:email, :password)");
         try{
             $stmt -> execute([":email" => $email, ":password" => $hash]);
             echo "You've been registered!";
         }catch(Exception $e){
             echo "There was a problem registering";
             echo "<pre?>" . var_export($e,true) . "</pre>"; 
         }
    
     }
 }
?>

<?php
require(__DIR__ . "../../../partials/flash.php"); ?>