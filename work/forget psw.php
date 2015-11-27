<?php
if(isset($_POST["submit"]) && ($_POST["submit"]=="确定")){
    $email = $_POST["email"];
    $psw = $_POST["password"];
    $psw_confirm = $_POST["confirm"];
    if($email==""||$psw==""||$psw_confirm==""){
        echo "<script>alert('请输入完整信息');</script>";
    }
    else{
        if($psw==$psw_confirm){
            include_once("user_db.php");
            $sql = "update users set password='$psw' where email='$email'";
            $result = mysqli_query($link,$sql);
            if($result){
                echo "<script>alert('修改成功');</script>";
            }
            else{
                echo "<script>alert('修改错误');</script>";
            }
        }
        else{
            echo "<script>alert('确认两次密码一致');</script>";
        }
    }
}
else{
    echo "<script>alert('提交失败');</script>";
}
