<?php 
include '../connect.php';
include './validate.php';
include '../query.php';
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
    $arr_ct=select_value_all("SELECT * FROM CHITIET_SANPHAM AS A WHERE A.CHL_ID=$id_material");
    if(count($arr_ct)>0){
        alert("khong the xoa chat lieu nay");
    }else{
        var_dump(count($arr_ct));
        $result=$conn->query($sql);
        if($result){
            alert("Xóa chất liệu thành công");
        }
    }
}
if(isset($_GET["change_material"])){
    $value_change=$_GET["change_material"];
    $id_material=$_GET["id_change"];
    $sql= "UPDATE `chat_lieu` SET `CHL_TEN` = '$value_change' WHERE `chat_lieu`.`CHL_ID` = $id_material";
    $result=$conn->query($sql);
    if($result){
        alert("Thay đổi chất liệu thành công");
    }
}
if(isset($_GET["add_color"])){
    $name_color=$_GET["add_color"];
    $sql="INSERT INTO `mau_sac` (`MS_ID`, `MS_TEN`) VALUES (NULL, '".$name_color."')";
    $result=$conn->query($sql);
    if($result){
        alert("Thêm màu thành công");
    }
}

if(isset($_GET["delete_color"])){
    $id_color=$_GET["delete_color"];
    $sql= "DELETE FROM mau_sac WHERE `mau_sac`.`MS_ID` = $id_color";
    $arr_ct=select_value_all("SELECT * FROM CHITIET_SANPHAM AS A WHERE A.MS_ID=$id_color");
    if(count($arr_ct)>0){
        alert("khong the xoa chat lieu nay");
    }else{
        $result=$conn->query($sql);
        if($result){
            alert("Xóa chất liệu thành công");
        }
    }
}
if(isset($_GET["change_color"])){
    $value_change=$_GET["change_color"];
    $id_color=$_GET["id_change_color"];
    $sql= "UPDATE `mau_sac` SET `MS_TEN` = '$value_change' WHERE `mau_sac`.`MS_ID` = $id_color";
    $result=$conn->query($sql);
    if($result){
        alert("Thay đổi màu thành công");
    }
}
?>