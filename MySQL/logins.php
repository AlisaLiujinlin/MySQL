<?php

    include 'DBConn.php';
// 接收表单提交的用户名密码

    session_start();
    $username = $_POST['username'];
    if( $username=='Alisa' || $username=='Liujinlin' || $username=='Jade'){
        $password = $_POST['password'];
//从数据库查询用户名和密码
    }else{
        $password =md5($_POST['password']) ;
    }


    $sqlsel="select nom_client,password from client where nom_client='$username' and password='$password'";
    $result=mysqli_query($conn, $sqlsel);

    if($result->num_rows==1){

        session_start();
        $_SESSION['username'] = $username;
        echo "<script> alert('登录成功')</script>";
        header("Refresh:0.0001;url=homepage.php");


        exit();
    }else{
        header("Refresh:0.0001;url=login.php");
        echo "<script> alert('登录失败')</script>";

    }





