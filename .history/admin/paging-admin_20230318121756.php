<?php
$count_index=10;
$index=isset($_GET["page"])?$_GET["page"]:1;
$start_from = ($index - 1) * $count_index;

if(isset($_GET["see-all-product"])){
  $sql="SELECT * FROM `sanpham` LIMIT $start_from, $count_index";
  $arr_pd=select_value_all($sql);
  show_list($arr_pd);
}
?>