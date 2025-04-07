# 🎯 "Work Test"

ระบบ API ด้วย PHP สำหรับเชื่อมต่อฐานข้อมูล MySQL ใช้งานร่วมกับ Unity หรืออื่นๆ รองรับการลงทะเบียนผู้ใช้, เข้าสู่ระบบ และระบบ Diamond/Heart

---

## 📁 โครงสร้างโปรเจกต์

worktest/ 
    api/ 
     │ 
     ├── add_diamond.php # เพิ่มจำนวน Diamond ให้ผู้ใช้ │ 
     ├── connect.php # เชื่อมต่อฐานข้อมูล │ 
     ├── get_diamond.php # ดึงข้อมูล Diamond ของผู้ใช้ │ 
     ├── get_heart.php # ดึงข้อมูล Heart ของผู้ใช้ │ 
     ├── Login.php # เข้าสู่ระบบ │ 
     ├── Register.php # ลงทะเบียนผู้ใช้ใหม่ │ 
    sql/ 
     │ 
     └── worktestdb.sql # ไฟล์ฐานข้อมูล SQL 
    README.md # ไฟล์คำอธิบายโปรเจกต์