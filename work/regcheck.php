<?php
if(isset($_POST["submit"]) && ($_POST["submit"]=="注册")){
    $email = $_POST["email"];
    $psw = $_POST["password"];
    $psw_confirm = $_POST["confirm"];
    $name = $_POST["name"];
    $tel = $_POST["tel"];
    if($email==""||$psw==""||$psw_confirm==""||$name==""||$tel==""){
        echo "<script>alert('请输入完整信息');</script>";
    }
    else{
        if($psw==$psw_confirm){
            include_once("user_db.php");
            $sql = "select email from users where email='$_POST[email]'";
            $result = mysqli_query($link,$sql);
            $num = mysqli_num_rows($result);
            if($num){
                echo "该邮箱已被注册";
            }
            else{
                $sql_insert = "insert into users(userid,email,password,name,tel) values('','$_POST[email]','$_POST[password]','$_POST[name]','$_POST[tel]')";
                $res_insert = mysqli_query($link,$sql_insert);
                if($res_insert){
                    echo "<script>alert('注册成功');</script>";
                }
                else{
                    echo "<script>alert('注册错误1');</script>";
                }
            }
        }
        else{
            echo "<script>alert('密码不一致');</script>";
        }
    }
}
else{
    echo "<script>alert('提交失败')</script>";
}
?>