<?php
session_start();
include 'DBConn.php';
?>

<html>
<body>

<title>Maison pour animaux de compagnie</title>

<h1>Bonjour <?php echo $_SESSION['username'] ?>, bienvenue dans la maison du chat!</h1>

<body bgcolor="#C0A890">
<h1 align="center">Domicile de la maison pour animaux de compagnie</h1>
<h3 align="center"><a href="add.php">nouvelle aide</a>&nbsp;&nbsp&nbsp;&nbsp;<a href="search.php">aide à la recherche</a></h3>

<body bgcolor="#C0A890">
<table width="100%" border="2" >
    <tr>
        <th colspan="coL">id</th>
        <th colspan="COL">le nom de l'animal</th>
        <th colspan="COL">caracteres</th>
        <th colspan="COL">conseils</th>
        <th colspan="COL">la fréquence des baignades</th>
        <th colspan="COL">aliments</th>
        <th colspan="COL">type</th>
        <th colspan="COL">photo</th>
    </tr>

    <?php
    //载入数据库
    include("DBConn.php");

    //利用 查询语句
    $sql="select * from informations";

    //利用索引数组
    $cx=mysqli_query($conn,$sql);
    //遍历出来

    while($sy=mysqli_fetch_row($cx)){
        echo "<tr>";
        echo "<td>$sy[0]</td>";
        echo "<td>$sy[1]</td>";
        echo "<td>$sy[2]</td>";
        echo "<td>$sy[3]</td>";
        echo "<td>$sy[4]</td>";
        echo "<td>$sy[5]</td>";
        echo "<td>$sy[6]</td>";
        echo '<td><img  src="data:image/jpg; base64,'.base64_encode($sy[7]).'"/></td>';
        echo "</tr>";
    }
    ?>
</table>
</body>


</html>



