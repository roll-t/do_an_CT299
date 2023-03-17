

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
    function check_empty($value){
        echo $value;
        if(!empty($value)){
            echo "hello";
            return true;
        }else{
            $message="Không được bỏ trống!!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            header('Refresh: 0.5;url=admin.php');
            return false;
        }
    }

    check_empty($_POST["name-product"]) && check_empty($_POST["price-product"])&&
    check_empty($_POST["des_product"]);

    function check_img(){
            if(!empty($_FILES["img-room"]["name"])){
                $target_dir = "images/room/banner-room/";// đường dẫn tới file upload
    
                $target_file = $target_dir . basename($_FILES["img-room"]["name"]);// taoj duong dan
                $uploadOk = true;
    
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//lay duoi phan mo rong
    
                $check = getimagesize($_FILES["img-room"]["tmp_name"]);
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
                if($_FILES['img-room']['size']>500000){
                    echo "hinh wa bu";
                    $uploadOk=false;
                }
       
                if($uploadOk){
    
                    if(!file_exists($target_file)){
                        move_uploaded_file($_FILES["img-room"]["tmp_name"],$target_file);
                    }
                    if(!empty($_POST["name-room"])){
                        $des=$_POST['des'];
                        if(empty($_POST["des"])){
                            $des="khong co thong tin noi bat";
                        }
                        $sql="INSERT INTO `PHONG` (`P_ID`, `P_TEN`, `P_MOTA`, `P_IMG`) VALUES (NULL, '".$_POST["name-room"]."','".$des."','".$target_file."'  )";
                        $result=$conn->query($sql);
                        if($result==true){
                            header("Location: admin.php ");
                        }
                    }else{
                        $message="Không được bỏ trống!!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        header('Refresh: 0.5;url=admin.php');
                    }
                }
            }else{
                $message="Không được bỏ trống!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header('Refresh: 0.5;url=admin.php');
            }
        }
}

?>