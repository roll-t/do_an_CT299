<?php
$sql_menu="SELECT * FROM `SANPHAM` AS A,`PHONG` AS B WHERE A.P_ID=B.P_ID AND A.P_ID=$id_rooms ";
?>

<div class="content-left-room">
                <h3 class="title">Nội Thất <?php echo $name_room ?></h3>
                <h4 class="des">Mẫu <?php echo $name_room ?></h4>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Sofa</a></li>
                    <li class="title-items-product"><a href="#">Sofa góc</a></li>
                    <li class="title-items-product"><a href="#">Sofa da</a></li>
                    <li class="title-items-product"><a href="#">Sofa</a></li>
                </ul>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Ghế Thư Giản</a></li>
                    <li class="title-items-product"><a href="#">Amchair</a></li>
                    <li class="title-items-product"><a href="#">Ghế Dài & Đôn</a></li>
                </ul>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Bàn Nước</a></li>
                    <li class="title-items-product"><a href="#">Bàn Bên</a></li>
                    <li class="title-items-product"><a href="#">Bàn console</a></li>
                    <li class="title-items-product"><a href="#">Tủ TiVi</a></li>
                </ul>
 </div>