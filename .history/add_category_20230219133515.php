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

        if(isset($_POST["add_category"])){
            $sql="INSERT INTO `product_categories` (`category_id`, `category_name`, `id_catalog_list`) VALUES (NULL,'".$_POST["name_category"]."', '".$_POST["value_select"]."');";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
            }
        }

        if(isset($_POST["detele_category"])){
            $sql="DELETE FROM catalog_list WHERE `catalog_list`.`id` = 10";
            $result=$conn->query($sql);
            if($result==true){
                header("Location: admin.php ");
            }
        }




?>