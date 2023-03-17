


<?php
        //them doan nay de lay duong dan anh
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "website_banghang";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        if(isset($_POST["add_category"])){
            $sql="INSERT INTO `catalog_list` (`id`, `name_catalog_list`) VALUES (NULL, ".$_POST['name_category'].")";
            $result = $conn->query($sql);
            if($result==true){
                
            }
        }
?>