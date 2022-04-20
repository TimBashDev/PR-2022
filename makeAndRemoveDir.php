<?php
    $dirname = 'testDir';

    if (!is_dir($dirname)) {
        mkdir($dirname);
    }

    rmdir($dirname);
?>
