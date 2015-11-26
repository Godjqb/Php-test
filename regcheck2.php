<?php
if(isset($_POST["submit"]) && ($_POST["submit"]=="Register")){
    $user=$_POST["username"];
    $psw=$_POST["password"];
    $psw_confirm=$_POST["confirm"];
    if($user==""||$psw==""||$psw_confirm==""){
        echo "<script>alert('Please input username or password.')";
    }
    else{
        if($psw==$psw_confirm){
            mysql_connect("localhost","root","123");
            mysql_select_db("users_db");
            mysql_query("set name 'gbk'");
            $sql="select username from users where username='$_POST[username]'";
            $result=mysql_query($sql);
            $num=mysql_num_rows($result);
            if($num){
                echo"<script>alert('This username already existed.');history.go(-1)</script>";
            }
            else{
                $sql_insert="insert into users(userid,username,password) values('','$_POST[username]','$_POST[password]')";
                $res_insert=mysql_query($sql_insert);
                if($res_insert){
                    echo "<script>alert('Register is successed.');history.go(-1);</script>";
                }
                else{
                    echo "<script>alert('Rehister is worried.');history.go(-1);</script>";
                }
            }
        }
        else{
           echo "<script>alert('Password are different.');history.go(-1);</script>";
        }
    }
}
else{
    echo "<script>alert('Submit is worring.');history.go(-1);</script>";
}
?>