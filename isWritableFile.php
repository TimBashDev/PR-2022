<?php
    $fileName = 'test.txt';

    if (is_writable($filename)) {
        echo 'Запись в файл доступна';
    } else {
        echo 'Запись в файл не доступна';
    }
?>
