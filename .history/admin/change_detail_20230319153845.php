
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
   
    $arr_link=[];
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
    if(isset($_POST["product_detail_add"])){
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

             $count=0;
             $arr_img_des=[];
            for($j=1;$j<=5;$j++){
                    if(isset($_FILES["img_des_$j"])){
                        if(check_img("img_des_$j")){
                            $arr_img_des[$j]=target_img($_FILES["img_des_$j"]);
                        }else{
                            alert("Lỗi file ảnh !");
                            break;
                        }
                    }else{
                        $arr_img_des[$j]=" ";
                    }
            }
        if($upload_detail_ok){
            $sql="UPDATE `chitiet_sanpham` SET `CHL_ID` = '".$material."', `MS_ID` = '".$color."', `CSP_IMG_1` ='".$arr_link[0]."', `CSP_KICHTHUOC` = 
            '".$arr_size."', `CSP_IMG_2` = '".$arr_link[1]."', `CSP_IMG_3` ='".$arr_link[2]."', `CSP_IMG_4` = '".$arr_link[3]."', 
            `CSP_MOTA` = '".$des_detail."' WHERE `chitiet_sanpham`.`SP_ID` = '".$id_pd."'";
            $result_insert=$conn->query($sql);
            if($result_insert){
                alert("Thay đổi thông tin thành công");
            }
        }
    }
    
}
add_detail();

?>