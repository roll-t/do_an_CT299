<?php 
     function alert($value){
        $message=$value;
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Refresh: 0.7;url=admin.php');
    }
    function check_empty($value){
        if(!empty($value)){
            return true;
        }else{
            return false;
        }
    }

    function check_img($value){
        if(!empty($_FILES[$value]["name"])){
            $target_dir = "images/list-product/";// đường dẫn tới file upload
            $target_file = $target_dir . basename($_FILES[$value]["name"]);// taoj duong dan
            $uploadOk = true;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//lay duoi phan mo rong

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
        }
    }

    function target_img($name){
        $target_dir = "images/list-product/";
        $target_file_1 = $target_dir . basename($name["name"]);
        return $target_file_1;
    }
?>