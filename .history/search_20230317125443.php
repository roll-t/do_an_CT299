<?php
include './connect.php';
if($_GET["search"]){
    $search_value=$_GET["search"];
}
?>
<form class="form-search" method="get" action="product.php">
    <div class="search">
        <input name="";  class="input-search" type="text" placeholder="">
        <div class="btn-search"><ion-icon name="search-outline"></ion-icon></div>
        <input name="search" type="hidden" class="search-result" value="">
        </div>
</form>