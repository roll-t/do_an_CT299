<?php
include '../connect.php';
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
$best_revenue=0;
foreach($arr_mothly_revennue as $value){
    if($value>$best_revenue){
        $best_revenue=$value;
    }
}
$moth=1;

$max_chart=330;

foreach($arr_mothly_revennue as $items){
    $price=$items;
    $items=$items / $best_revenue;
    $height=$max_chart * $items;
    if ($height==0){
        $height=10;
    }
    echo ' <div class="item">
    <div class="muc" style="height:'.$height.'px;""><span class="items_muc">'.number_format($price).'VND</span></div>
    <div class="thang">Tháng '.$moth.'</div>
    </div>';
    $moth++;
}

?>