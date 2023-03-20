
<?php 
include '../connect.php';
include '../query.php';
include './color_material.php';
include './validate.php';

function add_detail(){
    global $conn;
    $upload_detail_ok=false;
    $id_pd=$_POST["id_pd"];
    $color=$_POST["color"];
    $material=$_POST["material"];
    $size=[$_POST["width"],$_POST["wide"],$_POST["height"]];
    $arr_size=Implode(",",$size);
    $des_detail=$_POST["des_detail"];

    if(isset($_POST["product_detail_add"])){

        function render_arr_img(){
            $img_oke=false;
            $arr_img_des=[];
            $count_arr_img=0;
            for($i=1;$i<=5;$i++){
                if(isset($_FILES["img_des_$i"])){
                    if(check_img("img_des_$i")){
                        $arr_img_des[$count_arr_img]=target_img($_FILES["img_des_$i"]);
                        $img_oke=true;
                        $count_arr_img++;
                    }else{
                        $img_oke=false;
                        alert("lỗi file ảnh!");
                        break;
                    }
                }
            }
            if($img_oke){
                return $arr_img_des;
            }else{
                return false;
            }
        }
    
        $arr_img_des=render_arr_img() ? implode(",",render_arr_img()):false;
        foreach($size as $row){
            check_empty($row) ? $upload_detail_ok=true : $upload_detail_ok=false;
            if(!$upload_detail_ok){
                alert("không được bỏ trống kích thước");
                break;
            }
        }

        if($upload_detail_ok && $arr_img_des){
            $sql_pd_detail="INSERT INTO `chitiet_sanpham` (`SP_ID`, `CHL_ID`, `CSP_KICHTHUOC`, `MS_ID`, `CSP_MOTA`, `CSP_DS_IMG`) 
            VALUES ('".$id_pd."', '".$material."','".$arr_size."','".$color."', '". $des_detail."','".$arr_img_des."')";
            $result_pd_detail=$conn->query($sql_pd_detail);
            if($result_pd_detail){
                alert("Thêm chi tiết sản phẩm thành công");
            }
        }
    }



    if(isset($_POST['product_detail_change'])){
        $arr_detail=select_value("SELECT * FROM `CHITIET_SANPHAM` WHERE 1");
        $arr_img_detail=explode(",",$arr_detail["CSP_DS_IMG"]);

        foreach($size as $row){
            check_empty($row) ? $upload_detail_ok=true : $upload_detail_ok=false;
            if(!$upload_detail_ok){
                alert("không được bỏ trống kích thước");
                break;
            }
        }
        function render_arr_img(){
            $count=0;
            $arr_img_des=[];
            for($i=1;$i<=5;$i++){
                if(isset($_FILES["img_des_$i"])){
                    if(check_img("img_des_$i")){
                        $arr_img_des[$count]=target_img($_FILES["img_des_$i"]);
                        $count++;
                    }else{
                        $arr_img_des[$count]=" ";
                        $count++;
                    }
                }
            }
            return $arr_img_des;
        }
    
        $arr_img_des=render_arr_img();
        for($i=0;$i<$arr_img_des)
    }
    
}
add_detail();

?>