<?php
// ข้อมูลเชื่อมต่อฐานข้อมูล PostgreSQL
$host = "localhost"; // ชื่อ host ของ PostgreSQL
$port = "5432"; // พอร์ตที่ PostgreSQL ทำงานอยู่ (เริ่มต้นคือ 5432)
$dbname = "custompassword"; // ชื่อฐานข้อมูลที่ต้องการเชื่อมต่อ
$user = "customuser"; // ชื่อผู้ใช้ของฐานข้อมูล PostgreSQL
$password = "custompassword"; // รหัสผ่านของผู้ใช้ฐานข้อมูล PostgreSQL

// ทำการเชื่อมต่อกับฐานข้อมูล PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// ตรวจสอบว่ามีการเชื่อมต่อสำเร็จหรือไม่
if (!$conn) {
    echo "ไม่สามารถเชื่อมต่อกับฐานข้อมูล PostgreSQL ได้";
} else {
    echo "เชื่อมต่อกับฐานข้อมูล PostgreSQL สำเร็จแล้ว";
    // ทำสิ่งที่ต้องการในการใช้งานฐานข้อมูลต่อไป...
}
?>
