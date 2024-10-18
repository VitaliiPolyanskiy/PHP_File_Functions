<?php
$filename = 'my_file.html';
if (file_exists($filename)) {
  print "Файл <b>$filename</b> существует";
} else {
  print "Файл <b>$filename</b> 
        НЕ существует";
}
?>