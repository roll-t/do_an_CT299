<?php
if(isset($_GET["logout"])){
    setcookie("account_homedesign", "", time()-(86400 * 30),"/");
    setcookie("address_homedesign","", time() - (86400 * 30), "/");
    header('Refresh: 0.1;url=../index.php');
}
?>