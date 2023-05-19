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

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

$data = json_decode($response, true); // 解析 JSON 資料為 PHP 陣列

// 處理回應
if ($data && isset($data['User1'])) {
    $user1 = $data['User1'];

    $username = $user1['Username'];
    echo $username; // 輸出 User1 的使用者名稱
} else {
    echo "User1 not found";
}
?>

<?php
$url = 'https://game-ab172-default-rtdb.firebaseio.com/Users.json';
$firebaseKey = 'AIzaSyD1wfBa3TTGdR4xqXg9kU3HaKpkkyQQpE8';

$data = [
    'name' => 'John',
    'age' => 30,
    'email' => 'john@example.com'
];

$jsonData = json_encode($data);

$options = [
    'http' => [
        'header' => "Content-type: application/json\r\n" .
                    "Authorization: key={$firebaseKey}\r\n",
        'method' => 'POST',
        'content' => $jsonData
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === false) {
    echo "Error sending data to Firebase";
} else {
    echo "Data sent to Firebase successfully";
}
?>