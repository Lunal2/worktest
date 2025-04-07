<?php
header("Content-Type: application/json");
require_once("connect.php");

if (isset($_POST['user_id']) && isset($_POST['amount'])) {
    $user_id = $_POST['user_id'];
    $amount = intval($_POST['amount']);

    $stmt = $conn->prepare("UPDATE user_data SET diamond = LEAST(diamond + ?, 10000) WHERE user_id = ?");
    $stmt->bind_param("ii", $amount, $user_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Diamond updated"]);
    } else {
        echo json_encode(["success" => false, "error" => "Database error"]);
    }

    $stmt->close();
} else {
    echo json_encode(["success" => false, "error" => "Missing parameters"]);
}

$conn->close();
?>
