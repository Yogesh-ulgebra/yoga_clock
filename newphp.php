<?php 

session_start();

$id = $_SESSION['main_user_id'];
$message = $_REQUEST['message'];
$date = date("h : i : s a");

$dbc = new mysqli('localhost','root','','yoga');

$q = "INSERT INTO `yoga`.`reg_message` (`id`, `message`, `date`) VALUES ('$id', '$message', '$date');";
$r = mysqli_query($dbc,$q);



?>