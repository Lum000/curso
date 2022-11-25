<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="form-img">
            <img src="imgs/logo.png" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="index.php">Cadastrar-Se</a></button>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-box">
                        <label for="user">Nome</label>
                        <input type="text" id="user" name="user" placeholder="Usuario/Email">
                    </div>
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" placeholder="Senha">
                    </div>
                    <div class="change-password">
                        <button><a href="#">Esqueci a senha</a></button>
                    </div>
                    <div class="enter-button">
                        <button><a href="#">Logar</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>