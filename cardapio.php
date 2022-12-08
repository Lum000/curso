<?php 
session_start();
$name = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cardapio.css">
    <title>inicio</title>
</head>
<body>
    <header>
        <img class="logo" src="imgs/logo.png" alt="logo">
        <nav>
            <ul class="nav_links">
                <li><a href="#">Cardápio</a></li>
                <li><a href="#">Inicio</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <a href="#"><img src="imgs/download-removebg-preview.png" class="cart"></a>
    </header>
    <div class="container">
        <form action="pedirlanche.php" method="post">
            <div class="itens-display-group">
                <div class="menu">
                    <h2 class="menu-heading">LANCHES</h2>
                    <div class="menu-image">
                        <img src="imgs/fundieburguer.png" class="img">
                        <div class="img-header">
                            <span class="iten-name">FONDUE BURGUER</span>
                            <span class="iten-price">R$25,00</span><br>
                            <p>Um lanche delicioso para aqueles que apreciam cheddar<br> Ingredientes: Pão,Hamburguer,Cheddar fatiado,Cheddar liquido,Batata Frita</p>
                            <button type="submit" value="fundie" name="fundie" id="1"><a>ADICIONAR</a></button>
                        </div>
                    </div>
                    <div class="menu-image">
                        <img src="imgs/lanche.png" class="img">
                        <div class="img-header">
                            <span class="iten-name">X-BURCA'S</span>
                            <span class="iten-price">R$32,00</span><br>
                            <p>Esse lanche è para quem esta preparado para se sujar com deliciosos Ingredientes<br> Ingredientes: Pão,2 Hamburguer,2 Ovos,Bacon,Calabresa,Alface,Cebola roxa,Cheddar fatiado,Mussarela,Pepino,Tomate</p>
                            <button type="submit" name="burcas" value="burcas" id="2"><a>ADICIONAR</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>