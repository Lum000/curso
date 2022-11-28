<?php
include_once('connect.php');
$name = mysqli_real_escape_string($con, trim($_POST['name']));
$email = mysqli_real_escape_string($con, trim($_POST['email']));
$senha = mysqli_real_escape_string($con, trim(md5($_POST['password'])));
$number = $_POST['number'];
$username_error = null;
$sql = ("SELECT COUNT(*) as total from info_user where name = '$name' or email = '$email'");
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    if($row['total'] == 1){
        header('location:index.php?error=Usuario/Email Ja Existe');
        exit;
    }
    else{
        $_SESSION['sucesso'] = true;
        mysqli_query($con,"INSERT INTO info_user(name,email,password,number) VALUES('$name','$email','$senha','$number')");
        header('location:login.php');
    }
    if($_POST['confirmPassword'] != $_POST['password']){
        echo "<script>alert('Por favor coloque senhas iguais')</script>";
        die();
    }
}
?>