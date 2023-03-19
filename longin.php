<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $username = $_GET['username'];
    $password = $_GET['password'];

    // 連接到數據庫並檢查用戶記錄
    // 假設我們已經創建了一個名為 users 的數據庫表
    $connection = mysqli_connect('localhost', 'root', '', 'test');
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        header('Location: test.php?username=' . urlencode($username) . '&password=' . urlencode($password));
        exit;
    } else {
        header('Location: test.html');
        exit;
    }
}
?>