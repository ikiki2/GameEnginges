<?php include 'Connect.php'; ?>

<?php 
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
require_once "Connect.php";
 
$uname = $pass = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["uname"]))){
        $username_err = "Please enter username.";
    } else{
        $uname = trim($_POST["uname"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["pass"]))){
        $password_err = "Please enter your password.";
    } else{
        $pass = trim($_POST["pass"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT uname, pass FROM users WHERE uname = ?";
        
        if($stmt = mysqli_prepare($mysqli, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $uname;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $uname, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($pass, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["uname"] = $uname;                            
                            
                            // Redirect user to welcome page
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // // Close connection
    mysqli_close($mysqli);
}

?>

<!DOCTYPE html>
<html>

   

<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>Index</title>

</head>


<body>

    <div class="SL">
        <ul>
            <li><a>Hello, <?php $sql = "SELECT uname FROM users WHERE uname = ?"; echo $uname ?></a></li>
            <li><a href="Login.php">Log-In</a></li>
            <li><a href="Register.php">Sign-Up</a></li>
            <li><a href="logout.php">Log-Out</a></li>
       </ul>
       </div>
       
    <div class="head">
        <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="Engines.php">Engines</a></li>
           <li><a href="Forum.php">Forum</a></li>
           <li><a href="Contact.php">Contact</a></li>
       </ul>
       </div>

       <h2>Log-in</h2>

   
        
    <form action="Login.php" method="post">

    <div class="container">

    <label for="uname"><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="pass"><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
   

    </form>
    </div>

</body>
</html>