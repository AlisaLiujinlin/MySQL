<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maison pour animaux de compagnie</title>
    <style type="text/css">
        body{
            background-image: url("01.jpg");
        }
    </style>
    <link rel="stylesheet" href="SignUpStyle.css">
    <link href="https://fonts.googleapis.com/css?familymPermanent+Marker" >

</head>

<body>
<div class="sign-div">

    <form class="" action="logins.php" method="post">
        <h1>CONNEXION</h1>
        <input class="sign-text" type="text" name="username" placeholder="username" >
        <input class="sign-text" type="password" name="password" placeholder="password">

        <h2>Bienvenue à la maison des animaux!</h2>

        <input type="submit" onclick="window.location.href='logins.php'" value="ENTRER"/>
        <br>
        <input type="button" onclick="window.location.href='register.php'" value="INSCRIT">

    </form>

</div>

<style>
    body{
        margin: 0;
        padding: 0;
    }
    .sign-div{
        width: 300px;
        padding: 20px;
        text-align: center;
        background: url(bg02.jpg);
        position:absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        overflow: hidden;
    }
    .sign-div h1 ,h2{
        margin-top: 100px;
        color: #fff;
        font-size: 40px;
    }
    .sign-div input{
        display: block;
        width: 100%;
        padding: 0 16px;
        height: 44px;
        text-align: center;
        box-sizing: border-box;
        outline: none;
        border: none;
        font-family: "montserrat",sans-serif;
    }
    .sign-text{
        margin:4px;
        background: rgba(255,255,255,5);
        border-radius: 6px;
    }

    .sign-btn:hover{
        transform:scale(0.96);
    }
    .sign-div a{
        text-decoration: none;
        color: #fff;
        font-family: "montserrat", sans-serif;
        font-size: 14px;
        padding: 10px;
        transition: 0.8s;
        display: block;
    }
    .sign-div a:hover{
        background: rgba(0,0,0,.3);
    }

</style>

</body>
</html>


