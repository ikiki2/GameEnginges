<!DOCTYPE html>
<html>

   

<head>
    <link rel="stylesheet" href="Style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
    <title>Game engines</title>

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


    <div class="engines">
	
		<div class="logoe">
			<div class="box">
				<a href="https://www.unrealengine.com/"><img src="Logo/UE4.png">
				
			</div>
				
			<div class="box">
                <a href="https://godotengine.org/"><img src="Logo/godot.png">
				
			</div>
				
			<div class="box">
				<a href="https://unity.com/"><img src="Logo/unity.png">
				
            </div>
            
            <div class="box">
				<a href="https://www.ea.com/frostbite"><img src="Logo/frostbite.png">
				
            </div>

            <div class="box">
				<a href="https://www.cryengine.com/"><img src="Logo/cryengine.png">
				
            </div>

            <div class="box">
				<a href="https://www.yoyogames.com/gamemaker"><img src="Logo/GMS.png">
				
            </div>

			</div>
        </div>
	</div>




</body>
</html>