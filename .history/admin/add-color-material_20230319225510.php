<?php 
include '../connect.php';
include './validate.php';

if(isset($_GET["add_material"])){
    $name_material=$_GET["add_material"];
    $sql="INSERT INTO `chat_lieu` (`CHL_ID`, `CHL_TEN`) VALUES (NULL, '".$name_material."')";
    $result=$conn->query($sql);
    if($result){
        alert("Thêm chất liệu thành công");
    }
}

if(isset($_GET["delete_material"])){
    $id_material=$_GET["delete_material"];
    $sql= "DELETE FROM chat_lieu WHERE `chat_lieu`.`CHL_ID` = $id_material";
}

?>