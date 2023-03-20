<?php 
if(isset($_GET["id_rooms"])){
    $id_rooms=$_GET["id_rooms"];
    $sql="SELECT * FROM phong where P_ID=$id_rooms";
    $arr_room=select_value($sql);
}
$name_room=isset($arr_room["P_TEN"]) ? $arr_room["P_TEN"] : "Phòng Khách";
?>
<div class="address address-room">
                    <h2 class="title-address">
                        <?php
                        echo $name_room;
                        ?>
                    </h2>
</div>