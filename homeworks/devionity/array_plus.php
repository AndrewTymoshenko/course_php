<?php

function arrayPlus(array & $arr)
{
    array_push($arr, count($arr));
}

$arr = [1, 2, 3, 4, 5, 6, 8,];

arrayPlus($arr);
echo "<pre>";
print_r($arr);