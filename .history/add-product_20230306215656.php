

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_bannoithat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
$sql = "SELECT * FROM `nhom_danhmuc` where 1 ";

$sql_2 = "SELECT * FROM `danhmuc` where 1 ";

$sql_3 ="SELECT * FROM `phong` where 1 ";

$result_2=$conn->query($sql_2);

$result=$conn->query($sql);

$result_3=$conn->query($sql_3);

$result_all=$result->fetch_all();

$result_all_2=$result_2->fetch_all();

$result_all_3=$result_3->fetch_all();
?>   
