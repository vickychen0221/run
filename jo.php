 <head>


<style type=text/css>
<!--
body{
background-image:url(https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-frc1/267695_553848007999497_582165238_n.jpg);
background-position:80% 20%;
background-attachment:fixed;
background-repeat:no-repeat;}
-->
</style>
</head>
<body>
<font color="#dedede" face="Verdana" size="6">
        Runners Records
</font><br>
<font color="#37FDFF" face="Verdana" size="4">
        copyright SooChow
</font><br>
<br>
<font color="#FF0000" face="微軟正黑體" size="6">
        資料新增成功
</font>
</body>
<?php
$link = mysql_connect("127.0.0.1","root","0000");

mysql_select_db("demorun",$link);

$a=$_POST['SEQnumber'];
$b=$_POST['idnumber'];
$c=$_POST['TimeArrive'];
$d=$_POST['SpendTime'];
$e=$_POST['name'];
$f=$_POST['sex'];
$g=$_POST['tpyesofgame'];
$h=$_POST['Sdate'];
$sql = "INSERT into demorun(SEQ,ID,ATIME,TIME,NAME,GENDER,CATE,SELECTDATE) Values ('$a','$b','$c','$d','$e','$f','$g','$h')";

mysql_query($sql,$link);
mysql_close($link);
?>
