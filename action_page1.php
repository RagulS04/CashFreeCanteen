<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "selva";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql = "CREATE TABLE IF NOT EXISTS RECHARGE (ROLLNO INTEGER PRIMARY KEY, AMOUNT INTEGER)";
mysqli_query($conn,$sql);
$a = $_POST['amount'];
$r = $_POST['rollno'];
$sql1 = "INSERT INTO recharge VALUES ('$r', '$a') ON DUPLICATE KEY UPDATE amount=amount+'$a' ";
mysqli_query($conn,$sql1);
?>