<?php 
if(isset($_GET["id_rooms"])){
    $id_rooms=$_GET["id_rooms"];
    $sql="SELECT * FROM phong where P_ID=$id =_rooms";
    $arr_room=select_value($sql);
    $name_room=isset($arr_room["P_TEN"];)
}
?>

<div class="address address-room">
                    <h2 class="title-address">
                        <?php
                        isset($name_room) 
                        ?>
                        Phòng Khách
                    </h2>
</div>