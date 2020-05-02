<?php
 
$file=fopen("karthik.txt","r") or die ("connot opn");
  while(!feof($file)){
  $echo 'fgets($file)';
}

fclose($file);

?>