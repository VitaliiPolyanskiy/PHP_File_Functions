<?php
$filename = 'my_file.html';
if(unlink($filename))
	echo "Файл успешно удален!";
else
   echo "Ошибка при удалении файла!";
?>