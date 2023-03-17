function select_value($sql){
        global $conn;
        $arr_value=$conn->query($sql)->fetch_assoc();
        return $arr_value;
    }