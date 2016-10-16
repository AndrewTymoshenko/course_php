<?php

define('COMMENTS_DB', 'comments.txt');
require 'functions.php';
echo uniqid();;
dd($_POST);
dd(ifPublish());
$flashMsg = get('flashMsg');
if (requestIsPost()) {
if (formIsValid()) {

$comment = $_POST;
$comment['datetime'] = date('Y-m-d H:i:s');
$comment = serialize($comment);
file_put_contents(COMMENTS_DB, $comment . PHP_EOL, FILE_APPEND);

redirect('/comments_form?flashMsg=OK');
}

$flashMsg = 'Fill all the fields plzzz';
}
if (get('action') == 'update_rating') {

}
$comments = loadComments();
moderate($comments);
?>

<!doctype html>
<html>
<head>
    <title>Comments page</title>
</head>

<body>
<h1>Comments</h1>

<b><?=$flashMsg?></b>
<form method='post'>

    <label for="username">Name:</label>
    <input type='text' name='username' id="username" value='<?=post('username')?>'> <br><br>

    <label for="email">Email:</label>
    <input type='email' name='email' id="email" value="<?=post('email')?>"> <br><br>

    <label for="message">Message:</label>
    <textarea name='message' id='message'><?=post('message')?></textarea><br><br>

    <label for='publish'>Publish email?</label>
    <input type='checkbox' id='publish' name='publish'>

    <button type='submit'>Go</button>
</form>

<hr>
<div>
    <?php foreach ($comments as $comment) : ?>
        <b><?=$comment['username']?></b> <?=$comment['datetime']?> - 0 +/-<br>
        <?=$comment['message']?>
        <br><br>
    <?php endforeach;?>

</div>

</body>
</html>
