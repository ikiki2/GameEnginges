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
        <li><a href="Login.php">Log-in</a></li>
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

       <div class="indexTxt">
       <h1>What is a game Engine?</h1>
        <p>A game engine, also known as a game architecture, game framework or gameframe, is a software-development environment designed for people to build video games.</p>
        <h1>Who can use game Engine?</h1>
        <p>A game engine can be used by anyone, usually it is used by Game developers, altough in recent times they are used in film industries etc...</p>
    </div>



</body>
</html>