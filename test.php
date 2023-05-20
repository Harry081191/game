<?php
$username = $_GET['username'];
?>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      // 當使用者選擇角色時觸發
      $('#user1').click(function (e) {
        e.preventDefault();
        var username = 'User1'; // 將選擇的角色名稱設為'User1'
        loadData(username); // 載入相對應的資料
      });

      $('#user2').click(function (e) {
        e.preventDefault();
        var username = 'User2'; // 將選擇的角色名稱設為'User2'
        loadData(username); // 載入相對應的資料
      });
      // 初始載入預設角色的資料
      var defaultUsername = 'User1'; // 預設選擇的角色名稱
      loadData(defaultUsername);
    });
    // 載入相對應角色的資料
    function loadData(username) {
      // 發送 GET 請求到 Firebase
      $.ajax({
        url: 'https://game-ab172-default-rtdb.firebaseio.com/Users.json',
        method: 'GET',
        success: function (response) {
          var userData = response[username]; // 根據角色名稱取得對應的資料
          if (userData) {
            // 更新網頁內容
            $('#hp').text('HP: ' + userData.HP);
            $('#mp').text('MP: ' + userData.MP);
            $('#atk').text('ATK: ' + userData.ATK);
            $('#pd').text('物防: ' + userData.PD);
            $('#md').text('魔防: ' + userData.MD);
            $('#damageReduction').text('傷害減免: ' + userData.damagereduction);
          }
        },
        error: function () {
          console.log('Error retrieving data from Firebase');
        }
      });
    }
  </script>
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
    <from class="from-inline" style="text-align: right;">
      <input type="text" class="from-control mr-3 mb-2 mb-sm-0" placeholder="Serch player">
      <button type="submit" class="btn btn-dark">Serch</button>
    </from>
  </nav>
  <div class="container">
    <div class="p-3 wrapper">
      <div class="row justify-content-center">
        <div class="col-6" style="text-align: center">
          <h2>角色資訊</h2>
        </div>
        <div class="col-10 bg-dark text-white" style="text-align: center;">
          <div class="dropdown" style="text-align: right;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
              data-bs-toggle="dropdown" aria-expanded="false">
              角色列表
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#" id="user1">User1</a></li>
              <li><a class="dropdown-item" href="#" id="username">User2</a>
                <?php
                $username = $_GET['username'];
                ?>
              </li>
            </ul>
          </div>
          <h2 style="font-size:80px;">角色圖片</h2>
        </div>
        <div class="col-10 bg-dark text-white" style="text-align: center;">
          <?php
          $url = 'https://game-ab172-default-rtdb.firebaseio.com/Users.json';
          $firebaseKey = 'AIzaSyD1wfBa3TTGdR4xqXg9kU3HaKpkkyQQpE8';

          $options = [
            'http' => [
              'header' => "Content-type: application/json\r\n" .
              "Authorization: key={$firebaseKey}\r\n",
              'method' => 'GET'
            ]
          ];

          $queryUrl = $url . '?orderBy="Username"&equalTo="' . urlencode($username) . '"';
          $context = stream_context_create($options);
          $response = file_get_contents($queryUrl, false, $context);

          // 處理回應
          if ($response === false) {
            echo "Error retrieving data from Firebase";
          } else {
            $data = json_decode($response, true);
            // 處理獲得的資料
            foreach ($data as $key => $value) {
              echo '<span style="font-size: 50px;"> ' . $value['Password'] . '等級</span>';
            }
          }
          ?>
        </div>
        <div class="col-5 bg-dark text-white" style="text-align: center;">
          <?php
          $url = 'https://game-ab172-default-rtdb.firebaseio.com/Users.json';
          $firebaseKey = 'AIzaSyD1wfBa3TTGdR4xqXg9kU3HaKpkkyQQpE8';

          $options = [
            'http' => [
              'header' => "Content-type: application/json\r\n" .
              "Authorization: key={$firebaseKey}\r\n",
              'method' => 'GET'
            ]
          ];

          $queryUrl = $url . '?orderBy="Username"&equalTo="' . urlencode($username) . '"';
          $context = stream_context_create($options);
          $response = file_get_contents($queryUrl, false, $context);

          // 處理回應
          if ($response === false) {
            echo "Error retrieving data from Firebase";
          } else {
            $data = json_decode($response, true);
            // 處理獲得的資料
            foreach ($data as $key => $value) {
              echo '<span style="font-size: 30px;"> HP：' . $value['HP'] . '</span>';
              echo '<br>';
              echo '<span style="font-size: 30px;"> MP：' . $value['MP'] . '</span>';
              echo '<br>';
              echo '<span style="font-size: 30px;"> ATK：' . $value['ATK'] . '</span>';
            }
          }
          ?>
        </div>
        <div class="col-5 bg-dark text-white" style="text-align: center;">
          <?php
          $url = 'https://game-ab172-default-rtdb.firebaseio.com/Users.json';
          $firebaseKey = 'AIzaSyD1wfBa3TTGdR4xqXg9kU3HaKpkkyQQpE8';

          $options = [
            'http' => [
              'header' => "Content-type: application/json\r\n" .
              "Authorization: key={$firebaseKey}\r\n",
              'method' => 'GET'
            ]
          ];

          $queryUrl = $url . '?orderBy="Username"&equalTo="' . urlencode($username) . '"';
          $context = stream_context_create($options);
          $response = file_get_contents($queryUrl, false, $context);

          // 處理回應
          if ($response === false) {
            echo "Error retrieving data from Firebase";
          } else {
            $data = json_decode($response, true);
            // 處理獲得的資料
            foreach ($data as $key => $value) {
              echo '<span style="font-size: 30px;"> 物防：' . $value['PD'] . '</span>';
              echo '<br>';
              echo '<span style="font-size: 30px;"> 魔防：' . $value['MD'] . '</span>';
              echo '<br>';
              echo '<span style="font-size: 30px;"> 傷害減免：' . $value['damagereduction'] . '</span>';
            }
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>