<?
    $fileName = 'test.txt';
    
    $fileHandle = fopen($fileName, 'r');
    $result = fread($fileHandle, filesize($fileHandle)); // или указать размер блока, который нужныо считать
    fclose($fileHandle);
    // или вот так
    $fileContent = file_get_contents($fileName);

?>
