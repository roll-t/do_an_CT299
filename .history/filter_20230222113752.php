
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

$id_menu=15;

isset($_GET["id_menu"])? $id_menu=$_GET["id_menu"] : $id_menu=0;

$sql_items="SELECT * FROM `product_categories` as a join `catalog_list` as b on a.id_catalog_list=b.id WHERE a.id_catalog_list=15";
$result=$conn->query($sql_items);
$result_all=$result->fetch_all();
var_dump($result_all);
?>

<?php 

foreach($result_all as $row){
    echo "<option value=".$row[0].">".$row[1]."</option>";
}

?>