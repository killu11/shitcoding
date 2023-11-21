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

    <h1>Приветствую</h1>
    <p>Ваш логин: <?php echo $_SESSION['login'] ?></p>
    <p>Ваш пароль: <?php echo $_SESSION['pass'] ?></p>
    <button name="out"><a HREF="">Выйти</a></button>
</body>
</html>