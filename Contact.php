<?php 


if(isset($_POST['submit'])){


$fname = $_POST['firstname'];
$email = $_POST['email'];
$message = $_POST['message'];

$mailTO = "izubi7083@gmail.com";
$headers = "From: ".$email;
$txt = "You have recieved an e-mail from ".$fname.".\n\n".$message;

mail($mailTO, $fname, $txt, $headers);
header("Location: Contact.php?mailsent");


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

       

<div class="conFor">
    <form action="Contact.php" method="POST">
        <h3>Contact Form</h3>
        <br>
    <label for="fname">Your name:</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name...">
    <br>
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" placeholder="Your last name...">
    <br>
    <label for="subject">Subject:</label>
    <textarea type ="text" id="subject" name="message" placeholder="Write your message..." style="height:200px"></textarea>

    <button type="submit" name="submit">Submit</button type="reset" value="Clear">
    </form>
</div>



</body>
</html>