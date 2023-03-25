<?php
  if(isset($_GET["add_name"])){
    $value_client=explode(",",$_COOKIE["account_homedesign"]);
    $value_client[2]=$_GET["add_name"];
    setcookie("account_homedesign", implode(",",$value_client), time() + (86400 * 30), "/");
    echo($value_client[2]);
    if(!empty($_GET["add_gender"])){
      $value_client=explode(",",$_COOKIE["account_homedesign"]);
      $value_client[3]=$_GET["add_gender"];
      setcookie("account_homedesign", implode(",",$value_client), time() + (86400 * 30), "/");
      echo($value_client[3]);
    }
  }
  if(isset($_GET["add_gender"])){
    $value_client=explode(",",$_COOKIE["account_homedesign"]);
    $value_client[3]=$_GET["add_gender"];
    setcookie("account_homedesign", implode(",",$value_client), time() + (86400 * 30), "/");
    echo($value_client[3]);
  }
?>