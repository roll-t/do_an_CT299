
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


if(isset($_GET["id_menu"])){
  $id_menu=$_GET["id_menu"];
  $sql_items="SELECT * FROM `product_categories` as a join `catalog_list` as b on a.id_catalog_list=b.id WHERE a.id_catalog_list=$id_menu";
  $result=$conn->query($sql_items);
  $result_all=$result->fetch_all();
  
  foreach($result_all as $row){
      echo "<option value=".$row[0].">".$row[1]."</option>";
  }
}

?>

<?php 
if(isset($_GET["id_room"])){
 echo' <select name="category_id" class="detele-catalog-list select-none-chilrent">';
 echo' </select>';
}

?>