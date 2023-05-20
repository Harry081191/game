<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 設定 Firebase Realtime Database 的資料庫 URL
    $databaseUrl = 'https://game-ab172-default-rtdb.firebaseio.com/Users.json';

    // 構建查詢 URL
    $queryUrl = $databaseUrl . '?orderBy="Username"&equalTo="' . $username . '"&limitToFirst=1';

    // 建立 cURL 請求
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $queryUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // 解析回應 JSON
    $data = json_decode($response, true);

    if ($response === false) {
        // 回應錯誤，導向 test.html
        header('Location: test.html?error=' . urlencode('回應解析錯誤'));
        exit;
    }
    
    $data = json_decode($response, true);
    if ($data === null) {
        // 回應解析錯誤，導向 test.html
        header('Location: test.html?error=' . urlencode('回應解析錯誤'));
        exit;
    }

    // 檢查使用者是否存在並驗證密碼
    if (!empty($data)) {
        foreach ($data as $user) {
            if ($user['Username'] === $username && password_verify($password, $user['Password'])) {
                header('Location: test.php?username=' . urlencode($username) . '&password=' . urlencode($password));
                exit;
            }
        }   
    }
    // 使用者名稱或密碼錯誤，導向 test.html
    $errorMessage = '錯誤的使用者名稱或密碼';
    header('Location: test.html?error=' . urlencode($errorMessage));
    exit;
}
?>