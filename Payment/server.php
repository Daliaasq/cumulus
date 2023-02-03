<?php
include 'connect.php';

// REGISTER USER
if (isset($_POST['pay_emp'])) {
  $username =  $_POST['name'];
  $number = $_POST['number'];
  $amount = $_POST['amount'];
$query = "INSERT INTO employees (name,enumber,amount) 
  			  VALUES('$username', '$number', '$amount')";
  	mysqli_query($connect, $query);
  	header('location: payment.php');
  }

 