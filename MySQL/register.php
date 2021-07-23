<?php
include 'DBConn.php';
?>

<html>
<head>
    <meta charset="utf-8">
    <title>INSCRIT</title>

    <style type="text/css">
        body{
            background-image: url("01.jpg");
        }
    </style>

</head>
<body>
<h1>INSCRIT</h1>
<h3>Bienvenue à la maison des animaux!</h3>
<div>
    <form method="post" action="register.php" onSubmit="return check();">
        <table border="0">
            <tr>
                <td>username：</td>
                <td><input type="text" id="username" name="username" required="required"></td>
            </tr> <tr>
                <td>password：</td> <td><input type="password" id="password" name="password" required="required"></td>
            </tr> <tr>
                <td>confirmez le mot de passe：</td> <td><input type="password" id="password2" name="password2" required="required"></td>
            </tr> <tr>
                <td>sex：</td>
                <td> <input type="radio" id="male" name="sex" value="M">M
                    <input type="radio" id="female" name="sex" value="F">F </td>
            </tr> <tr>
                <td>pet：</td> <td><input type="text" id="pet" name="pet" required="required">
                </td> </tr>

                   <tr>
                   <td colspan="2" align="center">
                       <input type="hidden" id="id"  name="id" value=""/>

                       <br>
                       <input type="submit" id="register" name="register" value="INSCRIT">
               </tr><tr>
                <td colspan="2" align="center">
                    Si vous avez déjà un compte, n'hésitez pas et <a href="login.php">connectez-vous</a>！ </td> </tr>

           </table>
       </form>
   </div>



   <script type="text/javascript">
       function check(){
           var password=document.getElementById('password').value;
           var password2=document.getElementById('password2').value;
           if(password==password2){
               return true;
           }else{
               alert("Les deux mots de passe sont incohérents.");
               document.getElementById('password').value="";
               document.getElementById('password2').value="";
               return false;
           }
       }
   </script>




   <?php
   if(isset($_POST["username"])&&isset($_POST["sex"])&&isset($_POST["pet"])&&isset($_POST["password"])){

       $username=$_POST["username"];
       $sex=$_POST["sex"];
       $pet=$_POST["pet"];
       $password=md5($_POST["password"]);

       //用户名不可重复
       $sqlSelect=" select nom_client from client where nom_client='$username' ";
       $result=mysqli_query($conn, $sqlSelect);

       if ($result->num_rows==1){
           echo  "<script>alert('Ce username existe déjà ！')</script>";
       }else{
           $sql = "INSERT into client (nom_client,genre,nom_animal,password)
                   VALUES ('$username','$sex','$pet','$password')";
           if (mysqli_query($conn, $sql)) {
               echo  "<script>alert('réussite！')</script>"; //这里不能关闭数据库
               header("Refresh:0.0001;url=login.php");
           } else {
               echo "Error: " . $sql . "<br>" . mysqli_error($conn);
           }
       }

   }
?>


<style type="text/css">
    h1{
        background-color:#678;
        color:white;
        text-align:center;
    }
    body {
        height: 100%;
        width: 100%;
        border: none;
        overflow-x: hidden;
    }
    div{
        width:100%;
        text-align:center;
    }

</style>


</body>
</html>