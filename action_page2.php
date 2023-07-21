<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "selva";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql = "CREATE TABLE IF NOT EXISTS ITEMS (NAME VARCHAR(20) PRIMARY KEY, AVAILABILITY VARCHAR(5))";
mysqli_query($conn,$sql);
$sql1 = "UPDATE ITEMS SET AVAILABILITY = 'NO' ";
mysqli_query($conn,$sql1);
$checked_count = count($_POST['food']);
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['food'] as $selected) {
        $sql2 = "INSERT INTO items VALUES ('$selected', 'YES') ON DUPLICATE KEY UPDATE AVAILABILITY='YES' ";
mysqli_query($conn,$sql2);
        }
    

?>