<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["ad"];
$d=$_POST["e"];
$e=$_POST["g"];
$f=$_POST["d"];
$con=mysql_connect("localhost","root","");
mysql_select_db("project");
mysql_query("insert into register (n,a,ad,e,g,d) values ('$a','$b','$c','$d','$e','$f')");
echo("your successfully registered");
include("Register-now.html");
?>