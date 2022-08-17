<?php
include_once "./common.php";
include_once "./include/header.php";
include_once "./include/footer.php";
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
  <section class="signup mt-5">
    <input type="hidden" name="user_ID_OK" id="user_ID_OK" value="0">
    <form action="./user_process.php" name="user_process" id="user_process" method="POST">
      <div class="container-xl">
        <div class="mb-3 row">
          <label for="staticname" class="col-sm-2 col-form-label">이름</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="userName" name="userName" value="" placeholder="이름을 입력하세요">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputID" class="col-sm-2 col-form-label">ID</label>
          <div class="col-sm-10 d-flex">
            <input type="text" class="form-control userID" id="userID" name="userID" value="" placeholder="ID를 입력하세요">
            <div class="btn btn-light" onclick="ID_CHECK()">중복체크</div>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="inputPass" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="userPass" name="userPass" value="" placeholder="Password를 입력하세요">
          </div>
        </div>
        <div class="text-center mt-5">
          <input type="button" class="btn btn-danger " value="가입완료" onclick="frm_input()">
          <a href="../"><input type="submit" class="btn btn-primary " value="뒤로가기"></a>
        </div>
    </form>
  </section>
</body>

</html>