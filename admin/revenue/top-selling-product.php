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

  $top_1=0;
  $top_2=0;
  $top_3=0;

  foreach($arr_quantity as $items){
    if($items > $top_1){
        $top_1=$items;
    }else if($items >$top_2 && $items< $top_1){
        $top_2=$items;
    }else if($items >$top_3 && $items < $top_1 && $items < $top_2){
        $top_3=$items;
    }
  }

  $arr_top=[$top_1,$top_2,$top_3];
  $arr_id=[];

  foreach($arr_quantity as $key=>$items){
    if(!in_array($key,$arr_id)){
        foreach($arr_top as $value){
            if($value ==$items){
                array_push($arr_id,$key);
            }
        }
    }
  }
  $arr_id_top=[$arr_items[$arr_id[1]],$arr_items[$arr_id[2]],$arr_items[$arr_id[3]]];
  $arr_product_top=select_value_all("SELECT * FROM SANPHAM WHERE SP_ID=$arr_id_top[0] or SP_ID=$arr_id_top[1] or SP_ID=$arr_id_top[2]");
  for ($i = 0; $i < 3; $i++) {
      echo ' <li class="product-items">
      <div class="info-top-selling">
      <p><span>Top:</span><span>'.($i+1).'</span></p>
      <p>Số lượng bán ra: <span>'.$arr_top[$i].'</span></p>
      </div>
      <div class="top-product">
          <img src="./images/list-product/102411-sofa-elegance-mau-den-da-brown-2_1-768x511.jpg" alt="">
          <div class="sale-ticker">
              Sale
          </div>
      </div>
      <div class="product-content">
          <h3 class="name-product">'.$arr_product_top[$i][3].'</h3>
          <div class="product-price"><p  style="padding-right:3px;">'.number_format($arr_product_top[$i][4]).'</p><span>VND</span></div>
      </div>
  </li>';
  }
?>