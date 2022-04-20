<?
    $fileName = 'test.txt';

    if (file_exists($fileName) && !is_dir($fileName)) {
        $fileHandle = fopen($fileName, 'r');
    }
?>
