<?php

// 取得表單提交的使用者名稱和密碼
$username = $_POST['username'];
$password = $_POST['password'];
$name = "John";
echo "<p>Hello, $name!</p>"; // 雙引號可以直接使用變數
echo '<p>Hello, ' . $name . '!</p>'; // 單引號需要串接字串和變數
// 連接 MySQL 資料庫
$servername = "localhost";
$db_username = "root";
$db_password = "password";
$db_name = "myDB";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// 檢查連線是否成功
if ($conn->connect_error) {
    die("連線失敗: " . $conn->connect_error);
}

// 執行查詢，檢查使用者名稱和密碼是否正確
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// 如果查詢結果的筆數為 1，表示使用者名稱和密碼是正確的，將使用者導向另一個頁面
if ($result->num_rows == 1) {
    header("Location: welcome.php");
} else {
    echo "登入失敗";
}

$conn->close();

?>