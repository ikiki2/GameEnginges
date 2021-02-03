<?php include 'Connect.php'; ?>
<?php
session_start();


if($_SERVER['REQUEST_METHOD']=='POST'){

if($_POST['pass']==$_POST['pass1']){

$fname = $_POST['fname'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pass  =  md5($_POST['pass']);


$sql = "INSERT INTO users (name, uname, email, pass)" . "VALUES('$fname', '$uname', '$email', '$pass')";

        if($mysqli->query($sql) === true){
            
                header("location: index.php");
         }
         else{
                $_SESSION['message']= "User could not be added!";
         }

       }
       else{
        $_SESSION['message']= "Password did not match!";
        }
    
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
            <li><a>Hello, <?php $uname =""; $sql = "SELECT uname FROM users WHERE uname = ?"; echo $uname ?></a></li>
            <li><a href="Login.php">Log-In</a></li>
            <li><a href="Register.php">Sign-Up</a></li>
            <li><a href="logout.php">Log-Out</a></li>
       </ul>
       </div>
       
    <div class="head">
        <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="Engines.php">Engines</a></li>
           <li><a href="blog.php">Blog</a></li>
           <li><a href="Contact.php">Contact</a></li>
       </ul>
       </div>

       <h2>Sign-Up</h2>

   
        
    <form action="Register.php" method="post">

    <div class="alert alert-error"></div>

    <div class="container">

    <label><b>Name:</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label><b>Username:</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>E-mail:</b></label>
    <input type="email" placeholder="Enter E-mail" name="email" required>

    <label><b>Password:</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <label><b>Repeat Password:</b></label>
    <input type="password" placeholder="Re-enter Password" name="pass1" required>

    <button type="submit" name="register" value="Register">Sign-Up</button> 

    </form>
    </div>

</body>
</html>