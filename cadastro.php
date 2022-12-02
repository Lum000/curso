<?php
include_once('connect.php');
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = ("SELECT COUNT(*) as total from info_user where name = '$name' or email = '$email'");
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    if($row['total'] == 1){
        header('location:index.php?error=USUARIO JA EXISTE');
    }
    elseif($_POST['confirmPassword'] != $password){
        header('location:cadastrar.php?error_senha=Senhas Não Batem !!');
    }
    $sql = "INSERT INTO info_user(name,email,number,password) VALUES('$name','$email','$number','$password')";
    $action = mysqli_query($con,$sql);
    header('location:login.php?success=CADASTRO EFETUADO');
}
?>