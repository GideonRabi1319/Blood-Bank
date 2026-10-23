<?php
$a=$_POST["n"];
$b=$_POST["e"];
$c=$_POST["a"];
$d=$_POST["ad"];
$e=$_POST["m"];
$f=$_POST["r"];
$con=mysql_connect("localhost","root","");
mysql_select_db("project");
mysql_query("insert into volunteerteam (n,e,a,ad,m,r) values ('$a','$b','$c','$d','$e','$f')");
echo("your successfully registered");
include("Vol-team.html");
?>