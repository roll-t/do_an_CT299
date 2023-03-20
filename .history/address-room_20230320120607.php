<?php 
if(isset($_GET["id_rooms"])){
    $id_rooms=$_GET["id_rooms"];
    $sql="SELECT * FROM phong where P_ID=$id =_rooms";
}
?>

<div class="address address-room">
                    <h2 class="title-address">
                        Phòng Khách
                    </h2>
</div>