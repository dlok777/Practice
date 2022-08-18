    <?php
    include "./dbconfig.php";
    // 회원가입 함수
    function get_user($params)
    {
      echo "hello";
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

    // 로그인 함수
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


    // 중복아이디 찾기 함수
    function ID_CHECK($params)
    {
      $param = $params['userID'];
      $sql = "select * from user where userID = '{$param}'";
      if (get_rows($sql) == 0) {
        $CHECK = "Y";
      } else {
        $CHECK = "N";
      }
      return $CHECK;
    }
