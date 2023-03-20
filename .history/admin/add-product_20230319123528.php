<?php

include '../connect.php';

include '../query.php';

include './validate.php';

session_start();

$result_all=select_value_all("SELECT * FROM `nhom_danhmuc` where 1 ");

$result_all_2=select_value_all("SELECT * FROM `danhmuc` where 1 ");

$result_all_3=select_value_all("SELECT * FROM `phong` where 1 ");
?>
<?php
    if(isset($_POST["confirm_add_product"])){
        $uploadproduct=false;
        function insert_product(){
            global $conn;
            $cate_id=$_POST["cate_id"];
            $room_id=$_POST["rooms_id"];
            $name_product=$_POST["name-product"];
            $price_product=$_POST["price-product"];
            $des_product=$_POST["des_product"];

            $img_1=$_FILES["img_1"];
            $img_2=$_FILES["img_2"];

            if(check_img("img_1")){
                $target_file_1 = target_img($img_1);
            }else{
                $target_file_1='';
            }

            if(check_img("img_2")){
                $target_file_2 = target_img($img_2);
            }else{
                $target_file_2="";
            }

        $sql=" INSERT INTO `sanpham` (`SP_ID`, `DM_ID`, `P_ID`, `SP_TEN`, `SP_GIA`, `SP_IMG_1`, `SP_IMG_2`,`SP_DES`) 
                VALUES (NULL, '".$cate_id."', '".$room_id."', '".$name_product."', '".$price_product."', '". $target_file_1."', '". $target_file_2."','".$des_product."') ";
        $add=$conn->query($sql);
                if($add==true){
                    alert("Thêm sản phẩm thành công"); 
        }
        }
        check_empty($_POST["name-product"]) && 
        check_empty($_POST["price-product"])&&
        check_img("img_1") && 
        check_img("img_2")&& $uploadproduct=true;
        $uploadproduct ? insert_product() : alert("Thong tin trong");
    }
    function confirm_change_info_product(){
        global $conn;
        if(isset($_POST["change_info_product"])){
        $id_product=$_POST["id-product"];
        $arr_img=select_value("SELECT * FROM `sanpham` where SP_ID=$id_product");
        $change_info_ok=false;
        $name_product=$_POST["name-product"];
        $des_product=$_POST["des-product"];
        $price_product=$_POST["price-product"];

        $img_1=isset($_FILES["img-1"])?$_FILES["img-1"]:"";
        $img_2=isset($_FILES["img-2"])?$_FILES["img-2"]:"";

        $_POST["id-cate"]==0 ? $cate_id=$arr_img["DM_ID"] :$cate_id=$_POST["id-cate"];  
        $_POST["id-rooms"]==0 ? $rooms_id=$arr_img["P_ID"] :$rooms_id=$_POST["id-rooms"];  
        check_empty($name_product) &&
        check_empty($price_product) && 
        $change_info_ok=true;

        if(check_img("img-1")){
            $target_file_1 =target_img($img_1);
        }else{
            $target_file_1=$arr_img["SP_IMG_1"];
        }
        if(check_img("img-2")){
            $target_file_2 =target_img($img_2);
        }else{
            $target_file_2=$arr_img["SP_IMG_2"];
        }
        if($change_info_ok){
            $sql_insert_product="UPDATE `sanpham` SET  `DM_ID` = ' $cate_id ' , `P_ID` = ' $rooms_id' ,`SP_TEN` = '".$name_product."', `SP_GIA` = '".$price_product."',
            `SP_IMG_1` = '".$target_file_1."', `SP_IMG_2` ='".$target_file_2 ."', `SP_DES` = '".$des_product."' WHERE `sanpham`.`SP_ID` =".$id_product."";
            
            $resul_update=$conn->query($sql_insert_product);

            if($resul_update){
                alert("Thay đổi thông tin sản phẩm thành công");
            }
        }else{
            alert("Khong duoc bo trong");
        }
        }
    }

    confirm_change_info_product();

 function delete_product(){
        global $conn;
        if(isset($_GET["id_delete"])){
        $sql= "DELETE FROM sanpham WHERE `sanpham`.`SP_ID` = ".$_GET["id_delete"]."";
        $result=$conn->query($sql);
        if($result){
            $message="Xóa sản phẩm thành công ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.1;url=admin.php');
        }
        }
  }
  delete_product();
?>
