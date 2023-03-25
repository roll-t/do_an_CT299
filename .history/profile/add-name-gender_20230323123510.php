<?php
  if(isset($_GET["add_name"])){
    $value_client=explode(",",$_COOKIE["account_homedesign"]);
    array_push($value_client,$_GET["add_name"]);
    setcookie("account_homedesign", implode(",",$value_client), time() + (86400 * 30), "/");
    echo($value_client[2]);
  }
?>