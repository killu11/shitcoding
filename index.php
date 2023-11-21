<?php
    require __DIR__ . '/vendor/autoload.php';

    error_reporting(-1);
    session_start();
    $DB = new \classes\DB();
    $auth = new \classes\Auth();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <p> Ваш логин <br>
        <input type="text" name="login">
    </p>
    <p>
        Ваш пароль <br>
        <input type="text" name="pass">
    </p>
    <button class="name" name = "send">Войти</button>
</form>
</body>
</html>
