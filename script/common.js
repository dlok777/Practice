function ID_CHECK() {
  let userID = $("#userID").val();
  // alert(user_ID);
  $.ajax({
    type: "get",
    url: "IDcheck.php",
    data: { userID: userID },
    success: function (data) {
      console.log("success");
    },
  }).done(function (data) {
    console.log(data);
    params = JSON.parse(data);

    if (params.data == "Y") {
      alert("회원가입이 가능한 아이디 입니다.");
      $("#user_ID_OK").val("1");
    } else {
      alert("중복된 아이디가 존재합니다.");
      $("#user_ID_OK").val("0");
    }
  });
}

function frm_input() {
  let userName = $("#userName").val();
  let userID = $("#userID").val();
  let userPass = $("#userPass").val();
  let check = $("#user_ID_OK").val();

  if (userName == "") {
    alert("이름을 입력하세요");
    $("#userName").focus();
    return false;
  }
  if (userID == "") {
    alert("Id을 입력하세요");
    $("#userID").focus();
    return false;
  }
  if (userPass == "") {
    alert("Password을 입력하세요");
    $("#userPass").focus();
    return false;
  }

  if (check == 0) {
    alert("중복체크가 필요합니다.");
    return false;
  }
  $("form").submit();
}
