<?php
$a = array(
    "A","B","C"
);
print_r($a);
echo "<br />".json_encode($a)."<br />";
?>

<?php
$b = array(
    "A","B","C",
    "D"=>array(
        "A","B","C"
    )
);
print_r($b);
echo "<br />".json_encode($b);

