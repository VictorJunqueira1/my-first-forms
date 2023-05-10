<?php
session_start();

//coletar os dados dos inputs fazendo uma verificação
$name = filter_input(INPUT_POST, "name",  FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email",  FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, "password",  FILTER_SANITIZE_SPECIAL_CHARS);

if($name && $password && $email){
    $uppercase_name = strtoupper($name);
    if($uppercase_name === "Victor" && $password === "victorjunqueira" && $email === "victorjunqueira21@gmail.com"){
        header("Location: form.php");
        exit;
    } else {
        $_SESSION['flash'] = "Informações não condizentes!";
        header("Location: login.php");
        exit;
    }
}

$_SESSION['flash'] = "Preencha todos os campos corretamente!";
header("Location: login.php");
exit;