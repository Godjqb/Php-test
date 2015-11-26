<?php
$myfile=fopen("text file.txt","w")or die("Unable to open file.");
$txt="Billy Herrington \n";
fwrite($myfile,$txt);
$txt="Chirs Redfiled \n";
fwrite($myfile,$txt);
fclose($myfile);
?>
<?php
$myfile=fopen("text file.txt","r")or die("Unable to open file 2.");
echo fread($myfile,filesize("text file.txt"));
fclose($myfile);
?>
