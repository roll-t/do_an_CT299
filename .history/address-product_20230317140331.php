<?php 
if(isset($_GET["id_product_page"])){
    $id_page=$_GET["id_product_page"];
    $name_page=select_value("SELECT * FROM `DANHMUC` WHERE DM_ID=$id_page ");
}
?>
<div class="address">
                    <h2 class="title-address">
                        <?php
                        if(isset($name_page)){
                            echo $name_page["DM_TEN"]
                        }else{
                            echo " Tất cả sản phẩm";
                        }
                        ?>
                    </h2>
                    <ul class="list-link">
                        <li class="link-items"><a href="index.php">Trang Chủ</a></li>
                        <span></span>
                        <li class="link-items"><a href="./room.php">Phòng khách</a></li>
                    </ul>
</div>  