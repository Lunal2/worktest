<?php
header('Content-Type: application/json');
require 'connect.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$response = array();

// create new user
$insertUser = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($insertUser);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    $user_id = $stmt->insert_id;

    // create user_data default
    $insertUserData = "INSERT INTO user_data (user_id, diamond, heart) VALUES (?, 1000, 100)";
    $stmt2 = $conn->prepare($insertUserData);
    $stmt2->bind_param("i", $user_id);
    $stmt2->execute();

    // add history
    $insertLog = "INSERT INTO login_history (user_id, login_time) VALUES (?, NOW())";
    $stmt3 = $conn->prepare($insertLog);
    $stmt3->bind_param("i", $user_id);
    $stmt3->execute();

    $response['success'] = true;
    $response['message'] = "✅ Register Success";
    $response['user_id'] = $user_id;
} else {
    $response['success'] = false;
    $response['message'] = "❌ Username ซ้ำหรือมีปัญหาอื่น ๆ";
}

echo json_encode($response);
$conn->close();
?>
