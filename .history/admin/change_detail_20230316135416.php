
<?php 
include '../connect.php';
include '../query.php';
include './color_material.php';
include './validate.php';

function add_detail(){
    global $conn;
    $upload_detail_ok=false;
    $img_ok=false;  
    $id_pd=$_POST["id_pd"];
    $color=$_POST["color"];
    $material=$_POST["material"];
    $size=[$_POST["width"],$_POST["wide"],$_POST["height"]];
    $arr_size=Implode(",",$size);
    $des_detail=$_POST["des_detail"];
    $arr_img=[$_FILES["img_detail_1"],$_FILES["img_detail_2"],$_FILES["img_detail_3"],$_FILES["img_detail_4"]];
    $arr_name_img=["img_detail_1","img_detail_2","img_detail_3","img_detail_4"];

    if(isset($_POST["product_detail_add"])){
        foreach($size as $row){
            check_empty($row) ? $upload_detail_ok=true : $upload_detail_ok=false;
            if(!$upload_detail_ok){
                alert("không được bỏ trống kích thước");
                break;
            }
        }
        foreach($arr_name_img as $items){
            check_img($items) ? $img_ok=true :$img_ok=false;
            if(!$img_ok){
                alert("lỗi file ảnh");
                break;
            }
        }            

        if($upload_detail_ok && $img_ok){
            $sql_pd_detail="INSERT INTO `chitiet_sanpham` (`SP_ID`, `CHL_ID`, `CSP_IMG_1`, `CSP_KICHTHUOC`, `MS_ID`, `CSP_IMG_2`, `CSP_IMG_3`, `CSP_IMG_4`, `CSP_MOTA`) 
            VALUES ('".$id_pd."', '".$material."', '".target_img($arr_img[0])."', '".$arr_size."', 
            '".$color."', '".target_img($arr_img[1])."', '".target_img($arr_img[2])."', '".target_img($arr_img[3])."', '".$des_detail."')";
            $result_pd_detail=$conn->query($sql_pd_detail);
            if($result_pd_detail){
                alert("Thêm chi tiết sản phẩm thành công");
            }
        }
    }

    if(isset($_POST['product_detail_change'])){
        $arr_detail=select_value("SELECT * FROM `CHITIET_SANPHAM` WHERE 1");
        $arr_img_detail=[$arr_detail["CSP_IMG_1"],$arr_detail["CSP_IMG_2"],$arr_detail["CSP_IMG_3"],$arr_detail["CSP_IMG_4"]];
        $arr_name_img=["img_detail_1","img_detail_2","img_detail_3","img_detail_4"];
        foreach($size as $row){
            check_empty($row) ? $upload_detail_ok=true : $upload_detail_ok=false;
            if(!$upload_detail_ok){
                alert("không được bỏ trống kích thước");
                break;
            }
        }
       
        for($i=0;$i<count($arr_img);$i++){
            if(!check_img($arr_name_img[$i])){
                $arr_img[$i]=$arr_img_detail[$i];
            }
        }
        var_dump($arr_img);
        foreach($arr_name_img as $items){
            check_img($items) ? $img_ok=true :$img_ok=false;
            if(!$img_ok){
                // alert("lỗi file ảnh");
                break;
            }
        }   



    }

}
add_detail();

?>