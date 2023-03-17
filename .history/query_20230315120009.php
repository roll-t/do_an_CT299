
<?php 
    include './connect.php';
    
    function select_value($sql){
        global $conn;
        $arr_value=$conn->query($sql)->fetch_assoc();
        return $arr_value;
    }
    function select_value_all($sql){
        global $conn;
        $arr_value=$conn->query($sql)->fetch_all();
        return $arr_value;
    }
    
?>