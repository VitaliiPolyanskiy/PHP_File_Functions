<?php
$fd = fopen("my_file.html", "w") or die("The file can not be opened");
/* открывает на запись файл my_file.html,
если он существует, или создает пустой
файл с таким именем, если его еще нет */
//$h = fopen("dir/another_file.txt","w+") or die("The file can not be opened");
/* открывает на запись и чтение или создает
файл another_file.txt в директории dir */
$h = fopen(
  "http://www.server.ru/dir/file.php","r") or die("The file can not be opened");
/* открывает на чтение файл, находящийся по
указанному адресу*/
?>