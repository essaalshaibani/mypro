<?php
$servername = "localhost";
$username = "root";
$password = ""; // كلمة المرور الافتراضية لـ phpMyAdmin (اتركها فارغة إذا كنت تستخدم XAMPP)
$dbname = "car_management";

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>