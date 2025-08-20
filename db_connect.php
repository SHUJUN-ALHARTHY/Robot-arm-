<?php
$host = 'localhost';
$dbname = 'robot_control';  // اسم قاعدة البيانات
$username = 'root';         // اسم المستخدم (في XAMPP هو 'root')
$password = '';             // كلمة المرور (في XAMPP عادةً فارغة)

try {
    // إنشاء اتصال بقاعدة البيانات
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>