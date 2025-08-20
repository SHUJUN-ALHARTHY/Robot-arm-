<?php
include('db_connect.php');  // استيراد الاتصال بقاعدة البيانات

// استرجاع الوضعيات من الجدول
$stmt = $pdo->query("SELECT * FROM poses");
$poses = $stmt->fetchAll(PDO::FETCH_ASSOC);

// تحويل البيانات إلى تنسيق JSON
echo json_encode($poses);
?>