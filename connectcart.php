<?php 
session_start();
$name = $_SESSION['name'];
$con = new mysqli('localhost','root','root',$name);

?>