<?php 
include '../connect.php';
include '../query.php';
    $count_index=10;
    $index=isset($_GET["page"])?$_GET["page"]:1;
    $start_from = ($index - 1) * $count_index;
    $page_cate_true=false;
    $page_search_true=false;

        if(isset($_GET["cate_id"])){
            $page_cate_true=true;
            $cate_id=$_GET["cate_id"];
            $sql_count="SELECT COUNT(*) AS total FROM `SANPHAM` WHERE DM_ID=$cate_id";
        }
        else if (isset($_GET["search_id"])){
            $page_search_true=true;
            $value_search=$_GET["search_id"];
            $sql_count="SELECT COUNT(*) AS total FROM `SANPHAM` WHERE SP_TEN LIKE '%".$value_search."%'";
        }else if(isset($_GET["all_id"])){
            $sql_count="SELECT COUNT(*) AS total FROM `sanpham`";
        }
        else{
            $sql_count="SELECT COUNT(*) AS total FROM `sanpham`";
        }
        $count_page=$conn->query($sql_count)->fetch_assoc();

        $page_items=ceil(($count_page["total"]) / $count_index);

        echo '<input class="quantity-page" type="hidden" value='.$page_items.' />';

        if($page_items>=4){
            echo ' <a href="./paging-admin.php?page=1&all_id" class="page-items page-per"><ion-icon name="chevron-back-outline"></ion-icon></a>';
        }
        $quantity_paging=$page_items>3?3:$page_items;

        if($page_cate_true){
            for($i=1;$i<=$quantity_paging;$i++){
                        echo '<a href="./paging-admin.php?page='.$i.'&cate_id='.$cate_id.' " class="page-items page-index">'.$i .'</a>';
                    }
        }else if($page_search_true){
            for($i=1;$i<=$quantity_paging;$i++){
                            echo '<a href="./paging-admin.php?page='.$i.'&search_id='.$value_search.'" class="page-items page-index">'.$i .'</a>';
                    }
        }
        else{
        for($i=1;$i<=$quantity_paging;$i++){
                             echo '<a href="./paging-admin.php?page='.$i.'&all_id" class="page-items page-index">'.$i .'</a>';
                        }
        }
        if($page_items>=4){
            echo ' <a href="./paging-admin.php?page=4&all_id" class="page-items page-next"><ion-icon name="chevron-forward-outline"></ion-icon></a>';
        }
        echo '<script src="./javascript/paging-admin.js"></script>';
?>