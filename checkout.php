<!DOCTYPE html>
<html lang="en">
<?php
include './head.php';
?>
<link rel="stylesheet" href="./assets/css/checkout.css">
<body>
    <div class="wrapper">
        <header id="top" class="header  header-banner">
            <?php
            include './header.php';
            ?>
        </header>
        <?php 
        if(isset($_GET["order"])){
            $id_client=explode(",",$_COOKIE["account_homedesign"])[0];
            if(is_array(json_decode($_GET["order"],true))){
                $arr_order=json_decode($_GET["order"],true);
                $name_client=$arr_order[0];
                $format_date = "d/m/y";
                $date= date($format_date, time());
                $tinh=select_value("SELECT * FROM TINH where T_ID=$arr_order[2]")["T_TEN"];
                $huyen=select_value("SELECT * FROM HUYEN where H_ID=$arr_order[3]")["H_TEN"];
                $main_address=$arr_order[1]."/".$huyen."/".$tinh;
                $phone=$arr_order[4];
                $sql ="INSERT INTO `don_dat_hang` (`DDH_ID`, `KH_ID`, `DDH_NGAYDAT`, `DDH_GHICHU`, `DDH_SDT`, 
                `DDH _DIACHI`, `DDH_TENKH`)
                 VALUES (NULL, '".$id_client."', '".$date."', '', '".$phone."', '".$main_address."', '".$name_client."')";
                          $result=$conn->query($sql);
                          if($result){
                              $list_order=select_value_all("SELECT DDH_ID FROM DON_DAT_HANG WHERE KH_ID=$id_client");
                              $index_id=count($list_order)-1;
                              $id_order=$list_order[$index_id][0];
                              $arr_order_items=json_decode($_GET["list_product"],true);
                              foreach($arr_order_items as $items){
                              $sql_order="INSERT INTO `chitiet_ddh` (`SP_ID`, `DDH_ID`, `CDDH_SOLUONG`, 
                              `CDDH_DONGIA`, `CDDH_ID`,`CDDH_TENSP`) 
                              VALUES ('".$items[3]."', '".$id_order."', '".$items[1]."', '".$items[2]."', NULL ,'".$items[0]."')";
                              $result_item_order=$conn->query($sql_order);
                              }
                          }
                }else{
                $id_address=$_GET["order"];
                $info_address=select_value("SELECT * FROM diachi where DC_ID=$id_address");
                $name_client=$info_address["KH_TEN"];
                $id_tinh=$info_address["T_ID"];
                $id_huyen=$info_address["H_ID"];
                $format_date = "d/m/y";
                $date= date($format_date, time());
                $tinh=select_value("SELECT * FROM TINH where T_ID=$id_tinh")["T_TEN"];
                $huyen=select_value("SELECT * FROM HUYEN where H_ID=$id_huyen")["H_TEN"];
                $des_address=$info_address["DC_MOTA"];
                $phone_number=select_value("SELECT KH_SDT FROM KHACHHANG WHERE KH_ID=$id_client")["KH_SDT"];
                $sql ="INSERT INTO `don_dat_hang` (`DDH_ID`, `KH_ID`, `DDH_NGAYDAT`, `DDH_GHICHU`, `DDH_SDT`, 
                `DDH _DIACHI`, `DDH_TENKH`)
                 VALUES (NULL, '".$id_client."', '".$date."', '', '".$phone_number."', '".$des_address."/".$huyen."/".$tinh."', '".$name_client."')";
                $result=$conn->query($sql);
                if($result){
                    $list_order=select_value_all("SELECT DDH_ID FROM DON_DAT_HANG WHERE KH_ID=$id_client");
                    $index_id=count($list_order)-1;
                    $id_order=$list_order[$index_id][0];
                    $arr_order_items=json_decode($_GET["list_product"],true);
                    foreach($arr_order_items as $items){
                    $sql_order="INSERT INTO `chitiet_ddh` (`SP_ID`, `DDH_ID`, `CDDH_SOLUONG`, 
                    `CDDH_DONGIA`, `CDDH_ID`,`CDDH_TENSP`) 
                    VALUES ('".$items[3]."', '".$id_order."', '".$items[1]."', '".$items[2]."', NULL ,'".$items[0]."')";
                    $result_item_order=$conn->query($sql_order);
                    }
                }
            }
            include './checkout/order-success.php';

        }else{
            include './checkout/body-checkout.php';
        }
        include './footer.php';

        ?>
    </div>
</body>
<?php 
if(!isset($_GET["order"])){
    echo '<script src="./checkout/js/validate-checkout.js"></script>';
}
?>
<script src="./assets/javascript/show-search.js"></script>
<script src="./assets/javascript/sticky-header.js"></script>
<script src="./assets/javascript/cr-menu-item.js"></script>
<script src="./assets/javascript/show-left-meu.js"></script>
<script src="./assets/javascript/cart.js"></script>
<script src="./assets/javascript/info-checkout.js"></script>
<script src="./checkout/js/select-address.js"></script>
</html>