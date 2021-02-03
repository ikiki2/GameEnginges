<?php

// Check connection

$mysqli = new mysqli('localhost', 'root', '', 'gamee');

if ($mysqli->connect_error) {
   die("Connection failed: " . $mysqli->connect_error);
}
?>