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
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
      aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="discuss.php">討論版 <span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="p-3 wrapper">
      <div class="row justify-content-center">
        <div class="col-6">
          <table class="table table-bordered table-dark table-borderless" table style="text-align:center;" border="1">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" colspan="2">
                  <div class="text-center">
                    <?php
                    $username = $_GET['username'];
                    $password = $_GET['password'];
                    // 輸出 HTML
                    print "<p>歡迎回來: " . $username . "</p>";
                    ?>
                  </div>
                  插入圖片
                </th>
              </tr>
              <tr>
                <th scope="row" colspan="2">等級:123</th>
              </tr>
              <tr scope="row">
                <th>
                  <div class="col">
                    <?php
                    $username = $_GET['username'];
                    $password = $_GET['password'];
                    // 輸出 HTML
                    print "<p>血量: " . $username . "</p>";
                    print "<p>攻擊: " . $username . "</p>";
                    print "<p>魔力: " . $username . "</p>";
                    ?>
                  </div>
                </th>
                <th>
                  <div class="col">
                    <?php
                    $username = $_GET['username'];
                    $password = $_GET['password'];
                    // 輸出 HTML
                    print "<p>物防: " . $password . "</p>";
                    print "<p>魔防: " . $username . "</p>";
                    print "<p>傷害減免: " . $username . "</p>";
                    ?>
                  </div>
                </th>
              </tr>
            </tbody>
          </table>
          <div class="col-6">
          </div>
        </div>
      </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>