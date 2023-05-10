<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="exemplo">
        <form action="form_action.php" method="post">

            <h2>Página de Login</h2> <br>
            <p>
                <?php
                    if(isset($_SESSION['flash'])){
                        echo $_SESSION['flash'];
                        unset($_SESSION['flash']);
                    }
                ?>
            </p>

            Nome: <br>
            <input type="name" name="name"> <br>

            Email: <br>
            <input type="email" name="email"> <br>

            Senha: <br>
            <input type="password" name="password"> <br>

            <button><strong>Login</strong></button>
            <p>Não tem cadastro? <a href="cadastro.php">Cadastre-se</a></p>
        </form>    
    </div>
</body>
</html>