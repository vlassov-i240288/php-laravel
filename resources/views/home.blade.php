<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title')@show</title>
</head>
<body>
    <h1>Сайт с новостями</h1>
    <!--<h2>Добро пожаловать: <i>--><?//= $user ?><!--</i> </h2>-->
    <a href="/news">Выберите категорию</a>

    <?php
    //require_once ('news/index.php')
    //?>

    <div>
        <p>Авторизация: </p>
        <a href="/admin">для администратора</a><br>
        <a href="/user">для пользователя</a>
    </div>
</body>
</html>

