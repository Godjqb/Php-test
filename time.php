<?php
date_default_timezone_set("Asia/Shanghai");
?>
<?php
$pd = array(
    "time"=>date("h:i:s a D F d Y",$ts)
);
echo json_encode($pd);
?>
