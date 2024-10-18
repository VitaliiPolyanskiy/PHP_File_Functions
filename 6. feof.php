<?php
$h = fopen("1.txt","r");
while (!feof ($h)) {
    $content = fgets($h);
    echo $content,"<br>";
}
fclose($h);
?>