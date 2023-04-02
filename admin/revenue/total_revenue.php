<?php
$arr_product=select_value_all("SELECT * FROM CHITIET_DDH");
$total_revenue=0;
foreach($arr_product as $items){
    $total_revenue+=($items[2]*$items[3]);
}
echo number_format($total_revenue);
?>