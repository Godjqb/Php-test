<?php
echo "111";
if(isset($_POST["submit"]) && ($_POST["submit"]=="登录")){
    $email = $_POST["email"];
    $psw = $_POST["password"];
    if($email = ""||$psw = ""){
        echo "<script>alert('请输入账号或密码');</script>";
    }
    else{
        include_once("user_db.php");
        $sql = "select email,password from users where email='$_POST[email]' and password='$_POST[password]'";
        $result = mysqli_query($link,$sql);
        $num=mysqli_num_rows($result);
        if($num){
            $row=mysqli_fetch_array($result);
//            $url="time.php";
//            header("location:$url");
            echo $row[2];
        }
        else{
            echo "<script>alert('账号或密码错误');</script>";
        }
    }
}
else{
    echo "<script>alert('登陆错误’）;</script>";
}