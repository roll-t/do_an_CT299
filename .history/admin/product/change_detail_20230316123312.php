
<?php 
include './connect.php';
include './query.php';
include './color_material.php';
include './validate.php';

function value_post(){

}
function add_detail(){
    global $conn;
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
}
add_detail();

function change_detail(){
    if(isset($_POST['product_detail_change'])){

    }
}
change_detail();
?>