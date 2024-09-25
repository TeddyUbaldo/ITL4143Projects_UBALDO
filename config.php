<?php 


$localhost="localhost";
$user="root";
$pass="";
$dbase="itl3233_final";
$port=3307;

//create connection

$conn= mysqli_connect($localhost, $user, $pass, $dbase,$port) or die ("Sorry, can't connect to database!");




 ?>