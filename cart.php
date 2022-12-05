<?php 
include_once('connectcart.php');




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
    $sql = mysqli_query($con,"SELECT * FROM carrinho"); $result = mysqli_fetch_assoc($sql);
    print_r($result['produto']);$img = $result['imagem']; component($result['imagem']);?></h1>

</body>
</html>