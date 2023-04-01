<?php
include '../connect.php';
include '../query.php';
$arr_mothly_revennue=[];
for($i=1;$i<=12;$i++){
    $sql="SELECT * FROM don_dat_hang
    WHERE MONTH(DDH_NGAYDAT) = $i ";
    $arr_info_order=select_value_all($sql);
    $price=0;
    foreach($arr_info_order as $items){
        $id_order=$items[0];
        $price_details=0;
        $arr_order_detail=select_value_all("SELECT * FROM CHITIET_DDH WHERE DDH_ID=$id_order");
        foreach($arr_order_detail as $value){
            $price_details+=($value[3] * $value[2]);
        }
        $price+=$price_details;
    }
    $arr_mothly_revennue[$i]=$price;
}
if(isset($_GET["moth"])){
    echo number_format($arr_mothly_revennue[$_GET["moth"]]);
}
?>