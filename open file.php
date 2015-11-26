<?php
//echo
 readfile("read file.txt");
echo "<br />"
?>
<?php
$myfile=fopen("read file.txt","r") or die("Unable to open file!");
echo fread($myfile,filesize("read file.txt"));
echo fgets($myfile);
fclose($myfile);
//fopen("read file.txt","a+");
echo "<br />";
?>
<?php
//$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//// 输出一行直到 end-of-file
//while(!feof($myfile)) {
//    echo fgets($myfile) . "<br>";
//}
//fclose($myfile);
//?>
<?php
//$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
//// 输出单字符直到 end-of-file
//while(!feof($myfile)) {
//    echo fgetc($myfile);
//}
//fclose($myfile);
//?>

