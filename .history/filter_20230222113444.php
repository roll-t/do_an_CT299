
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

$sql_items="SELECT * FROM `product_categories` as a join `catalog_list` as b on a.id_catalog_list=b.id WHERE a.id_catalog_list=$id_menu";
$result=$conn->query($sql_items);
var_dump($result);
?>

<?php 

foreach($result as $row){
    echo "<option value=".$row[0].">".$row[1]."</option>";
}

?>