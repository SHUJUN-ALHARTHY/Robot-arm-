<?php
include('db_connect.php');  // استيراد الاتصال بقاعدة البيانات

// التحقق من وجود البيانات
if (isset($_POST['id']) && isset($_POST['status'])) {
    // تحديث حالة الوضعية في الجدول بناءً على ID
    $stmt = $pdo->prepare("UPDATE poses SET status = :status WHERE id = :id");
    $stmt->execute(['status' => $_POST['status'], 'id' => $_POST['id']]);
    echo "Status updated successfully";
}
?>