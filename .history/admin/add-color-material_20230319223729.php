<?php 
include '../connect.php';
if(isset($_GET["add_material"])){
    $name_material=$_GET["add_material"];
    $sql="INSERT INTO `chat_lieu` (`CHL_ID`, `CHL_TEN`) VALUES (NULL, '".$name_material."')";
    $result=$conn->query($sql);
    if($result){
        alert("Thêm chất liệu thành công");
    }
}
?>