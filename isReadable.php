<?php
    $fileName = 'test.txt';

    if (is_readable($filename)) {
        echo 'Чтение файла доступно';
    } else {
        echo 'Чтение файла не доступно';
    }
