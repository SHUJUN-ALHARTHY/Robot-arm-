<?php
include('db_connect.php');  // استيراد الاتصال بقاعدة البيانات

// التحقق من وجود بيانات الموديل
if (isset($_POST['motor1'], $_POST['motor2'], $_POST['motor3'], $_POST['motor4'], $_POST['motor5'], $_POST['motor6'])) {
    // إدخال البيانات في الجدول
    $stmt = $pdo->prepare("INSERT INTO poses (motor1, motor2, motor3, motor4, motor5, motor6) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$_POST['motor1'], $_POST['motor2'], $_POST['motor3'], $_POST['motor4'], $_POST['motor5'], $_POST['motor6']]);
    echo "Pose saved successfully";
}
?>