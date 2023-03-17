
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_banhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id_menu=0;

isset($_GET["id_menu"])? $id_menu=$_GET["id_menu"] : $id_menu=0;


?>