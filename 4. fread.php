<?php
$h = fopen("myfile.html","r+") or die("The file can not be opened");
// отрываем файл на запись и чтение
$content = fread($h, filesize("myfile.html"));
// считываем содержимое файла в строку
fclose($h); // закрываем соединение с файлом
echo $content;
// выводим содержимое файла
// на экран браузера
?>