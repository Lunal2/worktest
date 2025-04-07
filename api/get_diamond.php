<?php
header("Content-Type: application/json");
require_once("connect.php");

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $stmt = $conn->prepare("SELECT diamond FROM user_data WHERE user_id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($diamond);
    if ($stmt->fetch()) {
        echo json_encode(array("success" => true, "diamond" => $diamond));
    } else {
        echo json_encode(array("success" => false, "message" => "User not found"));
    }

    $stmt->close();
} else {
    echo json_encode(array("success" => false, "message" => "Missing user_id"));
}

$conn->close();
?>
