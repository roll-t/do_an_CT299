<?php 
if(isset($_GET["id_product_page"])){
    $id_page=$_GET["id_product_page"];
    $name_page=select_value("SELECT * FROM `DANHMUC` WHERE DM_ID=$id_page ");
    $rooms=select_value("SELECT * FROM `SANPHAM` AS A,`PHONG`AS B WHERE  A.P_ID=B.P_ID AND A.DM_ID=$id_page");
}
if(isset($_GET["value_search"])){
    $result_search=$_GET["value_search"];

}
?>
<div class="address">
                    <h2 class="title-address">
                        <?php
                        if(isset($name_page)){
                            echo $name_page["DM_TEN"];
                        }else if(isset($result_search)){
                            echo "Kết quả tìm kiếm : " . "$result_search";
                        }
                        else{
                            echo " Tất cả sản phẩm";
                        }
                        ?>
                    </h2>
                    <ul class="list-link">
                        <li class="link-items"><a href="index.php">Trang Chủ</a></li>
                        
                        <?php
                        if(isset($rooms)){
                          echo '  
                          <span></span>
                          <li class="link-items">
                              <a href="./room.php">'.$rooms["P_TEN"].'</a>
                          </li>' ;
                        }
                        if(isset($name_page)){
                          echo '  
                          <span></span>
                          <li class="link-items">
                              <a href="#">'.$name_page["DM_TEN"].'</a>
                          </li>' ;
                        }
                        ?>
                      
                    </ul>
</div>  