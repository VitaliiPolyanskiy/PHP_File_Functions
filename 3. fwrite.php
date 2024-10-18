<?php
$h = fopen("my_file.txt","w") or die("The file can not be opened");
$text = "This text is written in the file.";
if (fwrite($h,$text))
  echo "File successfully written!";
else
  echo "An error occurred while writing data!";
fclose($h);
?>

<?php
$h = fopen("my_file.txt","a");
$add_text = "Add text to a file.";
if(fwrite($h,$add_text,8))
  echo "Adding text was successful!";
else echo "An error occurred while adding data!";
fclose($h);
?>
