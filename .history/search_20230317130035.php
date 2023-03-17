<?php
include './connect.php';
if(isset($_GET["search"])){
    $search_value=$_GET["value_search"];
}
?>
<?php if(isset($search_value)){
    echo '<form class="form-search" method="get" action="product.php?='.$search_value.'">';
}else{
    echo '<form class="form-search">';
}
?>
    <div class="search">
        <input name="value_search"class="input-search" type="text" placeholder="">
        <div class="btn-search"><ion-icon name="search-outline"></ion-icon></div>
        <input name="search" type="hidden" class="search-result" value="">
        </div>
</form>