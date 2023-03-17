<?php
        $servername ="localhost";
        $username = "root";
        $password = "";
        $dbname = "website_banhang";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        echo"hello";
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        if(isset($_POST["add_catalog_list"])){
            if(!empty($_POST["name_catalog_list"])){
                $sql="INSERT INTO `catalog_list` (`id`, `name_catalog_list`) VALUES (NULL, '".$_POST["name_catalog_list"]."');";
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
        
        if(isset($_POST["detele_catalog_list"])){
            $sql_dl="SELECT * FROM `product_categories` as a JOIN `catalog_list` as b WHERE a.id_catalog_list=b.id and a.id_catalog_list='".$_POST["value_select"]."'";
            $result_dl=$conn->query($sql_dl);
            $count=$result_dl->fetch_all();
            if(count($count)===0){
                $sql="DELETE FROM catalog_list WHERE `catalog_list`.`id` ='".$_POST["value_select"]."' ";
                $result=$conn->query($sql);
                if($result==true){
                    header("Location: admin.php ");
                }
            }else{
                $message="Không thể xóa danh sách danh mục!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
                header('Refresh: 0.5;url=admin.php');
            }
        }

        if(isset($_POST["change_catalog_list"])){
            if(!empty($_POST["name_catalog_list"])){
                $sql="UPDATE `catalog_list` SET `name_catalog_list` ='".$_POST["name_catalog_list"]."' WHERE `catalog_list`.`id` = '".$_POST["value_select"]."'";
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


        if(isset($_POST["add_category"])){
            if(!empty($_POST["name_category"])){
                $sql="INSERT INTO `product_categories` (`category_id`, `category_name`, `id_catalog_list`) VALUES (NULL,'".$_POST["name_category"]."', '".$_POST["value_select"]."')";
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

        if(isset($_POST["change_category"])){
            if(!empty($_POST["name_category"])){
                $sql="UPDATE `product_categories` SET `category_name` ='".$_POST["name_category"]."'  WHERE `product_categories`.`category_id` = '".$_POST["category_id"]."'";
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
        if(isset($_POST["detele_category"])){
            if(!empty($_POST["category_id"])){
                $sql="DELETE FROM product_categories WHERE `product_categories`.`category_id` ='".$_POST["category_id"]."'";
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


        if(isset($_POST["add-room"])){
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
                        $sql="INSERT INTO `rooms` (`id`, `name`, `description`, `image_path`) VALUES (NULL, '".$_POST["name-room"]."','".$des."','".$target_file."'  )";
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



        if(isset($_POST["detele-room"])){
            $sql="DELETE FROM rooms WHERE `rooms`.`id` ='".$_POST["select_value"]."'";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
            }
        }


        if(isset($_POST["change-room"])){

            $sql_img="SELECT image_path FROM `rooms` WHERE id='".$_POST["select_value"]."'";
            $result_img=$conn->query($sql_img);
            $img=$result_img->fetch_all();

            if(empty($_FILES["img-room"]["name"])){
                $img_path=$img[0][0];
            }

            $uploadOk = true;

            if(!empty($_FILES["img-room"]["name"])){
                $target_dir = "images/room/banner-room/";// đường dẫn tới file upload
    
                $target_file = $target_dir . basename($_FILES["img-room"]["name"]);// taoj duong dan
    
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//lay duoi phan mo rong
    
                $check = getimagesize($_FILES["img-room"]["tmp_name"]);
    
                if($check !== false) { 
                  echo "File is an image - " . $check["mime"] . ".";
                  $uploadOk = true;
                } else {
                  echo "nay hong pai hinh.";
                  $uploadOk = false;
                }
    
                // check file co bi trung hong
              
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
                $img_path=$target_file;
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
                }
                $sql="UPDATE `rooms` SET `name` = '".$_POST["name-room"]."', `description` = '".$des."', `image_path` = '".$img_path."' WHERE `rooms`.`id` = '".$_POST["select_value"]."' ";
                $result=$conn->query($sql);
                if($result==true){
                    header("Location: admin.php ");
                }
            }
        }
?>

        