<?php
include './validate.php';
if(isset($_GET["logout"])){
    setcookie($_GET["logout"], "", time()-3600);
    header('Refresh: 0.1;url=../index.php');
}
?>