<?php
$selling_product=0;
$arr_id_product=select_value_all("SELECT SP_ID,CDDH_SOLUONG FROM CHITIET_DDH");
$arr_items=[];
$index_items=0;
$arr_quantity=[];    
foreach($arr_id_product as $items){
    if(!in_array($items[0],$arr_items)){
        array_push($arr_items,$items[0]);
        $arr_quantity[$index_items]=$items[1];
        $index_items++;
    }else{
        foreach($arr_items as $key=>$value){
            if($value===$items[0]){
                $arr_quantity[$key]+=$items[1];
            }
        }
    }
}
 $arr_product_selling=[];
  for($i=0;$i<count($arr_items);$i++){
    $arr_product_selling[$i]=[
        'id_product'=>$arr_items[$i],
        'quantity_product'=>$arr_quantity[$i]
    ];
  }
  
  $temp=[];

usort($arr_product_selling, function($a, $b) {
    return $b['quantity_product'] - $a['quantity_product'];
});

  for ($i = 0; $i < 3; $i++) {
    $arr_info=select_value("SELECT SP_TEN,SP_GIA,SP_IMG_1 from sanpham WHERE SP_ID= ".$arr_product_selling[$i]['id_product']."");
    $name_product=$arr_info['SP_TEN'];
    $price_product=$arr_info['SP_GIA'];
    $img=$arr_info["SP_IMG_1"];
      echo ' <li class="product-items">
      <div class="info-top-selling">
      <p><span>Top:</span><span>'.($i+1).'</span></p>
      <p>Số lượng bán ra: <span>'.$arr_product_selling[$i]['quantity_product'].'</span></p>
      </div>
      <div class="top-product">
          <img src=".'.$img.'" alt="">
          <div class="sale-ticker">
              Sale
          </div>
      </div>
      <div class="product-content">
          <h3 class="name-product">'.$name_product.'</h3>
          <div class="product-price"><p  style="padding-right:3px;">'.number_format($price_product).'</p><span>VND</span></div>
      </div>
  </li>';
  }
?>