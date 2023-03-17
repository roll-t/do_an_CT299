

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
        }
        if(check_img("img_2")){
            $target_dir = "images/list-product/";// đường dẫn tới file upload
            $target_file_2 = $target_dir . basename($img_2["name"]);
        }

       $sql=" INSERT INTO `sanpham` (`SP_ID`, `DM_ID`, `P_ID`, `SP_TEN`, `SP_GIA`, `SP_IMG_1`, `SP_IMG_2`,`SP_DES`) 
              VALUES (NULL, '".$cate_id."', '".$room_id."', '".$name_product."', '".$price_product."', '". $target_file_1."', '". $target_file_2."','".$des_product."') ";
       $add=$conn->query($sql);
       if($add==true){
        $message="thêm sản phẩm thành công ";
            echo "<script type='text/javascript'>alert('$message');</script>";
            // header('Refresh: 0.4;url=admin.php');
       }
    }

    function check_empty($value){
        if(!empty($value)){
            global $uploadproduct;
            $uploadproduct=true;
            return true;
        }else{
            $message="Không được bỏ trống!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.5;url=admin.php');
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
            if($check !== false) {
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
            return $uploadOk;
        }else{
            $message="Không được bỏ trống!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.5;url=admin.php');
            return false;
        }
    }

    check_empty($_POST["name-product"]) && check_empty($_POST["price-product"])&&
    check_empty($_POST["des_product"]) && check_img("img_1") && check_img("img_2");

    $uploadproduct && insert_product();
}
?>




<?php
if(isset($_POST["product_detail_add"])){
    $id_pd=$_POST["id_pd"];
    $color=$_POST["color"];
    $material=$_POST["material"];
    $size=[$_POST["width"],$_POST["wide"],$_POST["height"]];
    $des_detail=$_POST["des_detaile"];
    var_dump($size);

}
?>