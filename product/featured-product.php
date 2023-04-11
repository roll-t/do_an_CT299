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
 ?>
 
 <div id="feature" class="body-4">
                <h2 class="title">
                    Sản Phẩm Nổi Bật
                </h2>
                <ul class="list-product">
                    <?php
                    for($i=0;$i<4;$i++){
                        $id_pd=$arr_product_selling[$i]['id_product'];
                        $info_prodcut=select_value("SELECT * FROM sanpham WHERE SP_ID=$id_pd");
                        echo '<a href="product-details.php?id_product='.$id_pd.'" class="product-items">
                            <div class="top-product">
                                <img src="'.$info_prodcut["SP_IMG_1"].'" alt="">
                            </div>
                            <div class="product-content">
                                <div class="start">
                                    <ul>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                        <ion-icon name="star"></ion-icon>
                                    </ul>
                                    <p>(45 Đánh Giá)</p>
                                </div>
                                <h3 class="name-product" style="text-align:center;padding-inline:10%;">
                                    '.$info_prodcut["SP_TEN"].'
                                </h3>
                                <div class="product-price">
                                <div class="product-price" style="display:flex;justify-content:center;"><p style="padding-right:3px;">'.number_format($info_prodcut["SP_GIA"]).'</p><span>VND</span></div>
                                </div>
                            </div>
                        </a>';
                    }         
                    ?>
                </ul>
            </div>