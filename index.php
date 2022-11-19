<?php 

if(isset($_POST['submit'])){
    include_once('connect.php');
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $c_password = $_POST['confirmPassword'];

    if($c_password != $password){
        echo
        "<script> alert('Senhas nao conferem')</script>";
    }
    else{
        try{
            $result = mysqli_query($con, "INSERT INTO info_user(name,email,password,number) VALUES ('$name','$email','$password','$number')");
            header ('location: login.html');
        }
        catch(\Exception $e){
            echo "<script> alert('erro no envio')</script>";
        }
          
    }
}


?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form-image">
            <img src="imgs/undraw_join_re_w1lh.svg" alt="">
        </div>
        <div class="form">
            <form action="index.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.html">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input id="name" type="text" name="name" placeholder="Digite seu nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>
                <div class="continue-button">
                    <button id="confirmbutton" type="submit" name="submit">Continuar</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>