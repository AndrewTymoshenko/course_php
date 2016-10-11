<?php


function dd($a)
{
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}


function post($key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}




$flashMsg = null;

if ($_POST) {

    $validationResult = $_POST['username'] != '' && $_POST['email'] != '' && $_POST['message'] != '';

    if ($validationResult) {
        $comment = $_POST;
        $comment['datetime'] = date('Y-m-d H:i:s');
        dd($comment);
    } else {
        $flashMsg = 'Fill all the fields plzzz';
    }
}



print_r($_POST);

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comments</title>
</head>
<body>
<h1>Comments</h1>
<b><?=$flashMsg;?></b>


<form action="4oct.php" method="post">
    <label for="username">Name:</label>
    <input type="text" name="username" id="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br><br>

    <label for="message">Message:</label>
    <textarea name="message" id="message" cols="40" rows="5"></textarea><br><br>

    <button type="submit">Go</button>
</form>
<hr>
comments here...

</body>
</html>