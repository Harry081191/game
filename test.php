<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand titletext" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="navbar-brand titletext" href="discuss.php">討論版</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="p-3 wrapper">
      <div class="row justify-content-center">
        <div class="col-6" style="text-align: center">
          <h2>角色資訊</h2>
        </div>
        <div class="col-10 bg-dark text-white" style="text-align: center;">
          <div style="text-align: right;">
            <select>
              <option>角色名稱1</option>
              <option>角色名稱2</option>
              <option>角色名稱3</option>
            </select>
          </div>
          <h2 style="font-size:80px;">角色圖片</h2>
        </div>
        <div class="col-10 bg-dark text-white" style="text-align: center;">
          <?php
          $username = $_GET['username'];
          $password = $_GET['password'];
          // 輸出 HTML
          echo '<span style="font-size: 50px;"> ' . $username . '等級</span>';
          ?>
        </div>
        <div class="col-5 bg-dark text-white" style="text-align: center;">
          <?php
          $username = $_GET['username'];
          $password = $_GET['password'];
          // 輸出 HTML
          echo '<span style="font-size: 25px;">血量:' . $username . '</span>';
          echo "<br>";
          echo '<span style="font-size: 25px;">攻擊:' . $username . '</span>';
          echo "<br>";
          echo '<span style="font-size: 25px;">魔力:' . $username . '</span>';
          ?>
        </div>
        <div class="col-5 bg-dark text-white" style="text-align: center;">
          <?php
          $username = $_GET['username'];
          $password = $_GET['password'];
          // 輸出 HTML
          echo '<span style="font-size: 25px;">物防:' . $username . '</span>';
          echo "<br>";
          echo '<span style="font-size: 25px;">魔防:' . $username . '</span>';
          echo "<br>";
          echo '<span style="font-size: 25px;">傷害減免:' . $password . '</span>';
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>