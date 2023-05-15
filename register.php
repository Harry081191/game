<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
  <h2>
    <div class="container">
      <div class="p-5 wrapper">
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="jumbotron">
              <form action="longin.php" method="get">
                <h1>登入</h1>
                <strong>電子郵件</strong>
                <input type="text" class="form-control" id="email" name="email" placeholder="請輸入信箱">
                </br>
                <strong>密碼</strong>
                <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼">
                <div class="d-grid gap-2 col-6 mx-auto">
                  <div class="d-grid gap-2 d-md-flex justify-content-center" style="margin-top: 10px;">
                    <button type="submit" class="btn btn-outline-danger">註冊</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </h2>
</body>
<?php
// 檢查是否有表單提交
if (isset($_GET['email']) && isset($_GET['password'])) {
  // 連接資料庫
  $conn = mysqli_connect("localhost", "root", "", "mydb");
  // 檢查連接是否成功
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // 尋找指定ID的記錄，如果找到就更新email，否則插入新的記錄
  $pwd = $_GET['password'];
  $email = $_GET['email'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id='$pwd'");
  if (mysqli_num_rows($result) > 0) {
    mysqli_query($conn, "UPDATE users SET email='$email' WHERE id='$pwd'");
    echo "更新成功";
  } else {
    mysqli_query($conn, "INSERT INTO users (id, email) VALUES ('$pwd', '$email')");
    echo "新增成功";
  }
  // 關閉資料庫連接
  mysqli_close($conn);
}
?>

</html>