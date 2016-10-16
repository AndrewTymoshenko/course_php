<?php

require 'function.php';
if (!file_exists('uploads')) {
    mkdir('uploads');
}
function reArrayFiles(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);
    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
function fileHasNoError(array $file)
{
    return !$file['error'];
}
function fileIsJpeg(array $file)
{
    return $file['type'] == 'image/jpeg';
}
function fileIsOfTypes(array $file, array $types)
{
    return in_array($file['type'], $types);
}
function fileIsLessThan(array $file, $size)
{
}
if (requestIsPost()) {
    if (isset($_FILES['attachment'])) {
        $files = $_FILES['attachment'];
        $files = reArrayFiles($files);
        foreach ($files as $file) {
            if (!fileHasNoError($file)) {
                echo 'error';
                continue;
            }
            if (!fileIsJpeg($file)) {
                echo 'error';
                continue;
            }
            $filename = uniqid();
            $extension = explode('.', $file['name']);
            $extension = end($extension);
            // new full filename
            $filename .= ".$extension";
            $move_result = move_uploaded_file(
                $file['tmp_name'],
                'uploads/' . $filename
            );
            if (!$move_result) {
                header('HTTP/1.1 500 Internal Server Error');
                continue;
            }
        }
        redirect('../6?msg=uploaded');

    }
}
if (get('action') == 'delete') {
    unlink('uploads/' . get('file'));
}
$files = scandir('uploads');
array_shift($files);
array_shift($files);
?>

<!doctype html>
<html>
<head>
    <title>Gallery</title>
</head>
<body>
<h2>Gallery</h2>

<hr>

<form 	method='post'
         enctype="multipart/form-data">

    <input type="file" name="attachment[]" multiple>
    <button type='submit'>Go</button>

</form>

<hr>

<?php foreach ($files as $file) : ?>
    <img src='uploads/<?=$file?>' width='100'>
    <a href="?action=delete&amp;file=<?=$file?>">		Delete
    </a>
<?php endforeach;?>




</body>
</html>