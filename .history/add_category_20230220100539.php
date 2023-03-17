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
            $sql="INSERT INTO `catalog_list` (`id`, `name_catalog_list`) VALUES (NULL, '".$_POST["name_catalog_list"]."');";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
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
            $sql="UPDATE `catalog_list` SET `name_catalog_list` ='".$_POST["name_catalog_list"]."' WHERE `catalog_list`.`id` = '".$_POST["value_select"]."'";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
            }
        }

        if(isset($_POST["add_category"])){
            $sql="INSERT INTO `product_categories` (`category_id`, `category_name`, `id_catalog_list`) VALUES (NULL,'".$_POST["name_category"]."', '".$_POST["value_select"]."')";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
            }
        }

        if(isset($_POST["change_category"])){
            $sql="UPDATE `product_categories` SET `category_name` ='".$_POST["name_category"]."'  WHERE `product_categories`.`category_id` = '".$_POST["category_id"]."'";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
            }
        }
        if(isset($_POST["detele_category"])){
            $sql="DELETE FROM product_categories WHERE `product_categories`.`category_id` ='".$_POST["category_id"]."'";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
            }
        }


?>