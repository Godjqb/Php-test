<?php
$link = mysqli_connect("localhost","root","123");
if(!$link){
    die('Could not connect:' .mysqli_error($link));
}
$db_select = mysqli_select_db($link,"user_db");
if(!$db_select){
    die('Could not select:' .mysqli_error($link));
}
mysqli_query($link,"set name 'utf-8'");
?>

