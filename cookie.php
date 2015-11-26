<?php
setcookie("user","God",time()+3600);
?>
<?php
if (isset($_COOKIE["user"]))
    echo "Welcome! ".$_COOKIE["user"]."<br />";
else
    echo"You are welcome!";

print_r($_COOKIE);

//setcookie("user","",time()-3600);
?>

