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
function get($key, $default = null)
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}
function requestIsPost()
{
    return strtolower($_SERVER['REQUEST_METHOD']) == 'post';
}
function formIsValid()
{
    return 	post('username') != '' &&
    post('email') !='' &&
    post('message') != '';
}
function redirect($to)
{
    header('Location: ' . $to);
    die;
}
function loadComments($file = COMMENTS_DB)
{
    $commentsRaw = file($file);
    $comments = [];
    foreach ($commentsRaw as $comment) {
        $comments[] = unserialize($comment);
    }

    return $comments;
}
function ifPublish()
{
    return (int)(post('publish') !== null);
}
function moderate(array &$comments)
{
    $badWords = ['as', 'beach', 'smuck'];
    foreach ($comments as &$comment) {
        $comment['message'] = str_replace($badWords, '***', $comment['message']);
    }
}
