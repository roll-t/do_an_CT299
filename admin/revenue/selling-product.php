<?php
include '../connect.php';
include '../query.php';
$id_month=isset($_GET["month"]) ? $_GET["month"] : 1;
$selling_product=0;
$arr_id_product=select_value_all("SELECT SP_ID,CDDH_SOLUONG,DDH_NGAYDAT FROM CHITIET_DDH as a, don_dat_hang as b where a.DDH_ID=b.DDH_ID and MONTH(DDH_NGAYDAT)=$id_month");
$arr_items=[];
$index_items=0;
$arr_quantity=[];
if(count($arr_id_product)>0){
    
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
    $best_selling=0;
    
    foreach($arr_quantity as $value){
        if($value >$best_selling){
            $best_selling=$value;
        }
    }
    $id_best_selling=0;
    foreach($arr_quantity as $key=>$value){
        if($best_selling==$value){
            $id_best_selling=$key;
        }
    }
    $arr_best_selling_product=select_value("SELECT SP_ID,SP_TEN FROM SANPHAM WHERE SP_ID=$arr_items[$id_best_selling]");
    $best_selling_product_name=$arr_best_selling_product["SP_TEN"];
    $best_selling_product_id=$arr_best_selling_product["SP_ID"];
    
    echo '<span>sản phẩm bán chạy nhất: <p><span>MS'.$best_selling_product_id.':</span>'.$best_selling_product_name.'<span class="name_product"></span></p></span>';
    echo "<p>Tổng số lượng bán ra: <span>".$best_selling."</span> </p>";
}
?>