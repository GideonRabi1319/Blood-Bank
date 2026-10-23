<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["bg"];
$d=$_POST["u"];
$e=$_POST["g"];
$con=mysql_connect("localhost","root","");
mysql_select_db("project");
mysql_query("insert into startdonation (n,a,bg,u,g) values ('$a','$b','$c','$d','$e')");
echo("your successfully registered");
include("Start-donating.html");
?>