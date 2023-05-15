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
        <div class="col-6" style="text-align: center">
          <h2>角色資訊</h2>
        </div>
        <div class="col-7 bg-dark text-white" style="text-align: center;">
          <h2 style="font-size:100px;">角色資訊</h2>
        </div>
        <div class="col-7 bg-dark text-white" style="text-align: center;">
          <?php
          $username = $_GET['username'];
          $password = $_GET['password'];
          // 輸出 HTML
          echo '<span style="font-size: 50px;"> ' . $username.  '等級</span>';
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

</html>