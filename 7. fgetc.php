<?php
$h = fopen("my_file.txt","r");
while (!feof ($h)) {
    $content = fgetc($h);
    echo $content,"<br>";
}
fclose($h);
?>