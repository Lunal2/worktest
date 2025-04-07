<?php
header('Content-Type: application/json');
require 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$response = array();

$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        
        $user_id = $user['id'];
        $query2 = "SELECT * FROM user_data WHERE user_id = ?";
        $stmt2 = $conn->prepare($query2);
        $stmt2->bind_param("i", $user_id);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $userData = $result2->fetch_assoc();

        // add history
        $insertLog = "INSERT INTO login_history (user_id, login_time) VALUES (?, NOW())";
        $stmtLog = $conn->prepare($insertLog);
        $stmtLog->bind_param("i", $user_id);
        $stmtLog->execute();

        $response['success'] = true;
        $response['message'] = "Login Success";
        $response['user_id'] = $user_id;
        $response['diamond'] = $userData['diamond'];
        $response['heart'] = $userData['heart'];
    } else {
        $response['success'] = false;
        $response['message'] = "❌ รหัสผ่านไม่ถูกต้อง";
    }
} else {
    $response['success'] = false;
    $response['message'] = "❌ ไม่พบชื่อผู้ใช้นี้";
}

echo json_encode($response);
$conn->close();
?>
