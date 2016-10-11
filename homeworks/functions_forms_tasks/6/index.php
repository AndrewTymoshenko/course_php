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

<p>Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны
    помещаться в папку gallery и выводиться на странице в виде таблицы.</p>
<br><br>

<form action="index.php" method="post" enctype="multipart/form-data">

    Choose files: <input type="file" name="file" id="file" multiple accept="image/jpeg, image/gif, image/png,
    image/jpg">
    <input type="submit" value="Upload">

</form>

</body>
</html>



<?php

$uploadDir = 'gallery';
$validTypesOfFile = ['jpeg', 'gif', 'jpg', 'png',];

