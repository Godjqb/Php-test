<?php
date_default_timezone_set("Asia/Shanghai");
$t = time();
$d = array( "time" => date("h:i:s a <br /> y/m/d",$t) );
echo json_encode($d);
?>