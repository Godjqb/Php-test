<?php
date_default_timezone_set("Asia/Shanghai");
?>
<?php
$t=time();
$pd = array(
    "time"=>date("h:i:s a D F d Y",$t)
);

echo ($pd['time'])."<br />";
print ($pd["time"]);
echo "<br />";
print_r ($pd);
echo "<br />";
echo json_encode($pd);

?>
