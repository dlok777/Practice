<?php

include_once "./common.php";

if (login_check($_POST) == 0) {
  echo "<script>alert('아이디가 없어용')</script>";
} else {
  echo "<script>alert('아이디가 있어용')</script>";
}
