<?php 
$host ="rm-l4v58dr9t157n55zc.mysql.me-central-1.rds.aliyuncs.com";
$port = "3306"
$user ="root";
$pass ="Ro123456";
$db_name="payment"; //for conecting the database with the page we make four varibles

$connect =mysqli_connect($host,$user,$pass,$db_name,$port); //this function opens the commincation with the database

?>