<?php
 $index=isset($_GET["page"])?$_GET["page"]:1;
 $start_page=($index-1) * $quantity_page;
 $sql_product="SELECT * FROM `SANPHAM` LIMIT $start_page,$quantity_page";
 $result_product=$conn->query($sql_product);
 $arr_product=$result_product->fetch_all();
 
?>