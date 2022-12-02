<?php
include_once('connect.php');
$name = $_POST["user"];
$senha = $_POST['password'];

if(isset($_POST['submit'])){
    $sql = "SELECT COUNT(*) as total FROM info_user WHERE name = '$name' or email = '$name'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    if($row['total'] == 1){
        $sql = "SELECT password FROM info_user WHERE name = '$name' OR email = '$name'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $verify = password_verify($senha,$row['password']);
        if($verify == 1){
            session_start();
            $_SESSION['name'] = $name;
            header('location:index.php');
        }
        else{
            echo "erro";
        }
    }
}
?>