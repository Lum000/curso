<?php
include_once('connect.php');
$name = $_POST["user"];
$senha = $_POST['password'];

if(isset($_POST['submit'])){
    $sql = "SELECT password FROM info_user WHERE name = '$name' or email ='$name'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    echo print_r($row);
}
?>