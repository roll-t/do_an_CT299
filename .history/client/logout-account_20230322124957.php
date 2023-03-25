<?php
if(isset($_GET["logout"])){
    setcookie($_GET["logout"], "", time()-3600);
}
?>