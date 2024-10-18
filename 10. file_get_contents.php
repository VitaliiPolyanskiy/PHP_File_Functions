<?php
$n = file_get_contents("1.txt");
if (!$n) echo "Error in readfile";
else echo $n;
?>