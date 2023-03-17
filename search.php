<?php
include './connect.php';
if(isset($_GET["value_search"])){
    $result_search=$_GET["value_search"];
}
?>
<?php if(isset($result_search)){
    echo '<form class="form-search" method="get" action="product.php?='.$result_search.'">';
}else{
    echo '<form class="form-search" method="get" action="product.php?" >';
}
?>
    <div class="search">
        <input name="value_search"class="input-search" type="text" placeholder="">
        <div class="btn-search"><ion-icon name="search-outline"></ion-icon></div>
        <input type="hidden" class="search-result" value="">
        </div>
</form>