<?php
include './query.php';
if(isset($_GET["id_tinh"])){
    $id_tinh=isset($_GET["id_tinh"]);
    $arr_huyen=select_value_all("SELECT * FROM HUYEN WHERE $T_ID=$id_tinh");
    echo '<option value="" selected disabled>Chọn Huyện</option>';
    foreach($arr_huyen as $items){
        echo '<option value="'.$items[0].'">chon 1</option>';
    }

}
?>


                                            
                                            <option value="">chon 1</option>
                                            <option value="">chon 1</option>