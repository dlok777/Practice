    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/common.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./script/common.js"></script>

    <?php
    include_once "./dbconfig.php";
    include_once "./include/header.php";
    include_once "./include/footer.php";



    // 회원가입 함수
    function get_user($params)
    {
      global $con;
      foreach ($params as $key => $val) {
        $text = "";
        $flds[] = "`{$key}` = '{$val}'";

        $text .= implode(',', $flds) . " ";
      }
      $sql = "INSERT INTO user SET $text";
      echo $sql;
      mysqli_query($con, $sql);
    }

    function login_check($params)
    {
      $text = "";
      foreach ($params as $key => $val) {
        $flds[] = "`{$key}` = '{$val}'";
      }
      $text .= implode(' and ', $flds) . " ";
      $sql = "select * from user where " . $text;
      $get_rows = get_rows($sql);

      return $get_rows;
    }

    // sql 결과값 int형으로 가져오기
    function get_rows($sql)
    {
      global $con;
      $result = mysqli_query($con, $sql);
      $cnt_rows = 0;
      while ($row = mysqli_fetch_array($result)) {
        if ($row['idx']) {
          $cnt_rows++;
        }
      }
      return $cnt_rows;
    }
