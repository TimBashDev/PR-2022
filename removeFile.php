<?
    $fileName = 'test.txt';

    if (file_exists($fileName) && !is_dir($fileName)) {
        unlink($fileName);
    }
?>
