<?php
$a=$_POST["fn"];
$b=$_POST["a"];
$c=$_POST["w"];
$d=$_POST["h"];
$e=$_POST["disease"];
$f=$_POST["dr"];
$con=mysql_connect("localhost","root","");
mysql_select_db("project");
mysql_query("insert into eligibility (fn,a,w,h,disease,dr) values ('$a','$b','$c','$d','$e','$f')");
echo("your successfully registered");
include("Eligibility Requirements.html");
?>