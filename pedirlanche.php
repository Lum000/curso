
<?php
session_start();
$con = new mysqli('localhost','root','root');
$name = $_SESSION['name'];
if($_SESSION['name'] == null){
    die('faca login');
}
if($_SESSION['logged'] == false){
    echo "<script>alert('Atenção voce não está logado,sua compra não sera salva, para futuras aquisicoes!')";
}
else{
    if(isset($_POST['fundie'])){
        $command = mysqli_query($con,"CREATE DATABASE $name");
        $command1 = mysqli_query($con,"SELECT DATABASE $name");
        $concart = new mysqli('localhost','root','root',$name);
        $sql = mysqli_query($concart,"CREATE TABLE carrinho (produto VARCHAR(32) NOT NULL , valor FLOAT(32) NOT NULL , imagem VARCHAR(255), id INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (id))");
        $sql1 = mysqli_query($concart,"INSERT INTO carrinho(produto,valor,imagem) VALUES ('Fondue Burguer',25.00,'imgs/fundieburguer')");
        header('location:cart.php');
        
    }
    else{
        print_r('POR FAVOR FACA LOGIN');
    }
}
?>