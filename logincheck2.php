<?php
if(isset($_POST["submit"])&&$_POST["submit"]=="Login"){
    $user=$_POST["username"];
    $psw=$_POST["password"];
    if($user==""||$psw=""){
        echo"<script>alert('Please input username or password.');history.go(-1);</script>";
    }
    else{
        mysqli_connect("localhost","root","123");
        mysql_select_db("users_db");
        mysql_query("set name 'gbk'");
        $sql="select username,password from users where username='$_POST[username]' and password='$_POST[password]'";
        $result=mysql_query($sql);
        $num=mysql_num_rows($result);
        if($num){
            $row=mysql_fetch_array($result);
            echo $row[0];
        }
        else{
            echo"<script>alert('Username or password is worry.');history.go(-1);</script>";
        }
    }
}
else{
    echo "<script>alert('Submit is worry!')</script>";
}
?>