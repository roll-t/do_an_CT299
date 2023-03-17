<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website_bannoithat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
$sql = "SELECT * FROM `nhom_danhmuc` where 1 ";

$sql_2 = "SELECT * FROM `danhmuc` where 1 ";

$sql_3 ="SELECT * FROM `phong` where 1 ";

$result_2=$conn->query($sql_2);

$result=$conn->query($sql);

$result_3=$conn->query($sql_3);

$result_all=$result->fetch_all();

$result_all_2=$result_2->fetch_all();

$result_all_3=$result_3->fetch_all();
?>


<?php
function alert($value){
    $message="$value";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Refresh: 0.2;url=admin.php');
}

    function check_empty($value){
        if(!empty($value)){
            return true;
        }else{
            $message="Không được bỏ trống!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.1;url=admin.php');
            return false;
        }
    }

    function check_img($value){
        if(!empty($_FILES[$value]["name"])){
            $target_dir = "images/list-product/";// đường dẫn tới file upload
            $target_file = $target_dir . basename($_FILES[$value]["name"]);// taoj duong dan
            $uploadOk = true;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//lay duoi phan mo rong
            
            $check = getimagesize($_FILES[$value]["tmp_name"]);
            if($check != false) {
              echo "File is an image - " . $check["mime"] . ".";
              $uploadOk = true;
            } else {
              echo "nay hong pai hinh.";
              $uploadOk = false;
            } 
            // ham check duoi
            $arr_img=["jpg","png","jpeg","gif"];
            // ham in_arr kiem tra 1 phan tu co trong mang hay khong
            if(!in_array($imageFileType,$arr_img)){
                echo "Hong dung dinh dang hinh roi";
                $uploadOk=false;
            }
            // check dung luong don vi kb
            if($_FILES[$value]['size']>500000){
                echo "hinh wa bu";
                $uploadOk=false;
            }
            if($uploadOk){
                if(!file_exists($target_file)){
                    move_uploaded_file($_FILES[$value]["tmp_name"],$target_file);
                }
            }
            var_dump($uploadOk);
            return $uploadOk;
        }
    }

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
            $target_dir = "images/list-product/";// đường dẫn tới file upload
            $target_file_1 = $target_dir . basename($img_1["name"]);
        }else{
            $target_file_1='';
        }


        if(check_img("img_2")){
            $target_dir = "images/list-product/";// đường dẫn tới file upload
            $target_file_2 = $target_dir . basename($img_2["name"]);
        }else{
            $target_file_2="";
        }

       $sql=" INSERT INTO `sanpham` (`SP_ID`, `DM_ID`, `P_ID`, `SP_TEN`, `SP_GIA`, `SP_IMG_1`, `SP_IMG_2`,`SP_DES`) 
              VALUES (NULL, '".$cate_id."', '".$room_id."', '".$name_product."', '".$price_product."', '". $target_file_1."', '". $target_file_2."','".$des_product."') ";
       $add=$conn->query($sql);
       if($add==true){
        $message="thêm sản phẩm thành công ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.1;url=admin.php');
       }
    }
    check_empty($_POST["name-product"]) && 
    check_empty($_POST["price-product"])&&
    check_empty($_POST["des_product"]) && 
    check_img("img_1") && 
    check_img("img_2")&& $uploadproduct=true;
    $uploadproduct && insert_product();
}



if(isset($_POST["product_detail_add"])){
    $upload_detail_ok=false;

    $id_pd=$_POST["id_pd"];
    $color=$_POST["color"];
    $material=$_POST["material"];
    $size=[$_POST["width"],$_POST["wide"],$_POST["height"]];
    $arr_size=Implode(",",$size);
    $des_detail=$_POST["des_detail"];
    $arr_img=[$_POST["img_detail_1"],$_POST["img_detail_2"],$_POST["img_detail_3"],$_POST["img_detail_4"]];


    foreach($size as $row){
        check_empty($row) ? $upload_detail_ok=true : $upload_detail_ok=false;
    }
    
    if($upload_detail_ok){
        $sql_pd_detail="INSERT INTO `chitiet_sanpham` (`SP_ID`, `CHL_ID`, `CSP_IMG_1`, `CSP_KICHTHUOC`, 
        `CSP_ID`, `MS_ID`, `CSP_IMG_2`, `CSP_IMG_3`, `CSP_IMG_4`, `CSP_MOTA`) 
        VALUES ('".$id_pd."', '".$material."', '".$arr_img[0]."', '".$arr_size."', 
        NULL, '".$color."', '".$arr_img[1]."', '".$arr_img[3]."', '".$arr_img[2]."', '".$des_detail."')";

        $result_pd_detail=$conn->query($sql_pd_detail);
        if($result_pd_detail){
            $message="Thêm chi tiết sản phẩm thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.2;url=admin.php');
        }
    }else{

    }

}


function confirm_change_info_product(){
    global $conn;
    if(isset($_POST["change_info_product"])){
       $id_product=$_POST["id-product"];
       $arr_img=$conn->query("SELECT SP_IMG_1,SP_IMG_2,DM_ID,P_ID FROM `SANPHAM` WHERE SP_ID=$id_product")->fetch_assoc();
       $change_info_ok=false;
       $name_product=$_POST["name-product"];
       $des_product=$_POST["des-product"];
       $price_product=$_POST["price-product"];
       $img_1=$_FILES["img-1"];
       $img_2=$_FILES["img-2"];

       $target_dir = "images/list-product/";

       $_POST["id-cate"]==0 ? $cate_id=$arr_img["DM_ID"] :$cate_id=$_POST["id-cate"];  
       $_POST["id-rooms"]==0 ? $rooms_id=$arr_img["P_ID"] :$rooms_id=$_POST["id-rooms"];  
       check_empty($name_product) &&
       check_empty($price_product) && 

       $change_info_ok=true;

       empty($img_1) || $link_img_1=$arr_img['SP_IMG_1'];

       empty($img_2) || $link_img_2=$arr_img['SP_IMG_2'];


       if(isset($link_img_1)){
        $target_file_1 = $target_dir . basename($img_1["name"]);
        check_img("img-1") && 
        $link_img_1=$target_file_1;
       }

       if(isset($link_img_2)){
        $target_file_2 = $target_dir . basename($img_2["name"]);
        check_img("img-2") && 
        $link_img_2=$target_file_2;
       }

       if($change_info_ok){
        $sql_insert_product="UPDATE `sanpham` SET  `DM_ID` = ' $cate_id ' , `P_ID` = ' $rooms_id' ,`SP_TEN` = '".$name_product."', `SP_GIA` = '".$price_product."',
         `SP_IMG_1` = '".$link_img_1."', `SP_IMG_2` ='".$link_img_2."', `SP_DES` = '".$des_product."' WHERE `sanpham`.`SP_ID` =".$id_product."";
         
         $resul_update=$conn->query($sql_insert_product);

         if($resul_update==true){
            $message="Thay đổi thông tin thành công";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.1;url=admin.php');
         }
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
