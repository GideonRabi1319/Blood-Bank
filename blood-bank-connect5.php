<?php
$a=$_POST["e"];
$b=$_POST["p"];
$con=mysql_connect("localhost","root","");
mysql_select_db("project");
mysql_query("insert into login (e,p) values ('$a','$b')");
echo("your successfully registered");
include("login.html");
?>