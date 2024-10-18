<?php
$h = fopen("my_file.txt","r+");
$content = fgets($h,5);  // считает 5 символов из первой строки файла my_file.txt
fclose($h);
echo $content;
?>
