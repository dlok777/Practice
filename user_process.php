<?php
include_once "./common.php";


get_user($_POST);

echo "<script> alert('회원가입이 완료되었습니다.'); 
    location.replace('./index.php');
  </script>";
// header("location: ./index.php");
