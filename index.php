<?php
header("Content-Type: text/html; charset=utf-8");
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>🎮 Work Test</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f9f9f9;
            padding: 40px;
            color: #333;
        }
        h1 {
            color: #2c3e50;
        }
        ul {
            line-height: 1.8;
        }
        code {
            background-color: #eee;
            padding: 2px 6px;
            border-radius: 4px;
        }
        .note {
            color: #888;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <h1>🔌 Basic System (PHP, MySQL, Unity)</h1>
    <p>เพื่อประเมินความสามารถในการพัฒนาและเชื่อมต่อระบบระหว่าง PHP, MySQL และ Unity ในการสร้างระบบพื้นฐาน</p>

    <h2>📌 ขอบเขตของงาน</h2>
    <ul>
        <li><code>การตั้งค่าและสร้างฐานข้อมูล MySQL</code></li>
        <li><code>การเขียนสคริปต์ PHP สำหรับการจัดการฐานข้อมูล</code></li>
        <li><code>การสร้าง UI และเขียนสคริปต์ใน Unity Version2022</code></li>
        <li><code>การสร้างหน้า Lobby ใน Unity เพื่อแสดง Diamond,Heart และไอคอนอื่น ๆ</code></li>
        <li><code>การทดสอบและดีบัก</code></li>
    </ul>
    
    <h3>📌 รายการ API ที่ใช้ในระบบ</h3>
    <ul>
        <li><code>connect.php</code> – เชื่อมต่อฐานข้อมูล</li>
        <li><code>Login.php</code> – ตรวจสอบชื่อผู้ใช้และรหัสผ่าน</li>
        <li><code>Register.php</code> – สมัครผู้ใช้ใหม่</li>
        <li><code>get_heart.php</code> – ดึงจำนวน Heart</li>
        <li><code>get_diamond.php</code> – ดึงจำนวน Diamond</li>
        <li><code>AddDiamond.php</code> – เพิ่มจำนวน Diamond</li>
        <li><code>update_user_data.php</code> – อัปเดตข้อมูล heart/diamond</li>
    </ul>

    <hr>
    <p class="note">© <?php echo date("Y"); ?> - Basic System (PHP, MySQL, Unity)</p>
</body>
</html>
