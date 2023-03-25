<?php
if(isset($_GET["logout"])){
    setcookie("account_homedesign", "", time()-3600);
    header('Refresh: 0.1;url=../index.php');
}
?>