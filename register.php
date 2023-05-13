<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="test.html">Home <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div>
    <form method="get">
      <div class="form-group">
        <label for="username">電子郵件</label>
        <input type="text" class="form-control" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
          placeholder="請輸入電子信箱" required>
      </div>
      <div class="form-group">
        <label for="username">ID</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="請輸入角色名" required>
      </div>
      <div class="form-group">
        <label for="username">密碼</label>
        <input type="text" class="form-control" id="username" name="username" pattern="[A-Za-z0-9]{8,12}"
          placeholder="請輸入密碼(只允許8-12位的英文字母和數字的組合)" required>
      </div>
      <button type="submit" class="btn btn-primary">註冊</button>
    </form>
  </div>
</body>
<?php
// 檢查是否有表單提交
if (isset($_GET['email']) && isset($_GET['username'])) {
  // 連接資料庫
  $conn = mysqli_connect("localhost", "root", "", "mydb");
  // 檢查連接是否成功
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // 尋找指定ID的記錄，如果找到就更新email，否則插入新的記錄
  $id = $_GET['username'];
  $email = $_GET['email'];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
  if (mysqli_num_rows($result) > 0) {
    mysqli_query($conn, "UPDATE users SET email='$email' WHERE id='$id'");
    echo "更新成功";
  } else {
    mysqli_query($conn, "INSERT INTO users (id, email) VALUES ('$id', '$email')");
    echo "新增成功";
  }
  // 關閉資料庫連接
  mysqli_close($conn);
}
?>

</html>