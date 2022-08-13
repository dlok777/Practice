<?php
include_once "./common.php";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    현승 놀이
  </title>
</head>

<body>
  <section class="login mt-5">
    <div class="container-xl">
      <div class="title">
        <h1 class="display-4">로그인을 해주셔야해용</h1>
      </div>
      <div class="mt-4 ">
        <div class="login-box">
          <form action="./login_check.php" method="post" name="user_info" id="user_info">
            <div class="mb-3">
              <label class="form-label" for="id">아이디</label>
              <input class="form-control" type="text" name="userId" id="userId" value="" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="pwd">비밀번호</label>
              <input class="form-control" type="password" name="userPass" id="userPass" value="" />
            </div>

            <input class="btn btn-primary btn-sm" type="submit" value="로그인">
            <a href="#">
              <div class="btn btn-danger btn-sm" type="submit">회원가입</div>
            </a>
          </form>

        </div>
      </div>
    </div>
  </section>
</body>


</html>