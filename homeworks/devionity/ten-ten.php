<?php

$file = fopen('test.txt', 'w');
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 0; $j < $i; $j++) {
            fwrite($file, $i);
        }
        fwrite($file, PHP_EOL);
    }
fclose($file);