<?php 
if(isset($_GET["add_material"])){
    $name_material=$_GET["add_material"];
    $sql="INSERT INTO `chat_lieu` (`CHL_ID`, `CHL_TEN`) VALUES (NULL, 'Sứ')";
}
?>