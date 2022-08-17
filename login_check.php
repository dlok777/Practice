<?php
include_once "./dbconfig.php";

include_once "./common.php";

if (login_check($_POST) == 0) {
  echo
  "<script>alert('로그인에 실패하였습니다.');
  location.replace('./login.php');</script>";
} else {
  echo
  "<script>alert('로그인에 성공하였습니다.');
  location.replace('./index.php');</script>";
}
