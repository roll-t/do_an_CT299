<?php
$id_rooms=isset($_GET["id_rooms"])?$_GET["id_rooms"]:4;
$sql_menu="SELECT * FROM `SANPHAM` AS A,`PHONG` AS B WHERE A.P_ID=B.P_ID AND A.P_ID=$id_rooms";
$arr_menu=select_value_all($sql_menu);
$arr_render_menu=[];
foreach($arr_menu as $items){
    if(!in_array($items[1],$arr_render_menu)){
        array_push($arr_render_menu,$items[1]);
    }
}
$arr_catalog_list=[];
foreach($arr_render_menu as $items){
    $items_catalog_list=select_value("SELECT * FROM `DANHMUC` AS A,`NHOM_DANHMUC` AS B WHERE  A.NDM_ID=B.NDM_ID AND A.DM_ID=$items");
    array_push($arr_catalog_list,$items_catalog_list);
}
$result_cataloglist=[];
foreach($arr_catalog_list as $items){
    if(!in_array($items["NDM_ID"],$result_cataloglist)){
        array_push($result_cataloglist,$items["NDM_ID"]);
    }
}
var_dump($arr_render_menu);
var_dump($result_cataloglist);
?>

<div class="content-left-room">
                <h3 class="title">Nội Thất <?php echo $name_room ?></h3>
                <h4 class="des">Mẫu <?php echo $name_room ?></h4>
                <?php
                foreach($result_cataloglist as $items){
                    foreach($arr_render_menu as $row){
                    $name_catalog_list=select_value("SELECT * FROM NHOM_DANHMUC WHERE NDM_ID=$items");
         echo '    <ul class="list-title-product">';
                        $name_menu_items=select_value("SELECT * FROM DANHMUC AS A,NHOM_DANHMUC AS B WHERE B.NDM_ID=$items and A.DM_ID=$row");
                        echo '    <li class="title-items-product"><a href="#">'.$name_menu_items["DM_TEN"].'</a></li>';
                   
                        echo '</ul>';
                    }

                }  
                ?>
            
                <!-- <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Ghế Thư Giản</a></li>
                    <li class="title-items-product"><a href="#">Amchair</a></li>
                    <li class="title-items-product"><a href="#">Ghế Dài & Đôn</a></li>
                </ul>
                <ul class="list-title-product">
                    <li class="title-items-product"><a href="#">Bàn Nước</a></li>
                    <li class="title-items-product"><a href="#">Bàn Bên</a></li>
                    <li class="title-items-product"><a href="#">Bàn console</a></li>
                    <li class="title-items-product"><a href="#">Tủ TiVi</a></li>
                </ul> -->
 </div>