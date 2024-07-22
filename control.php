<?php 
// اتصال بقاعدة البيانات 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "control_robot"; 
 
$conn = new mysqli($servername, $username, $password, $dbname); 
 
// التحقق من الاتصال 
if ($conn->connect_error) { 
    die("فشل الاتصال: " . $conn->connect_error); 
} 
 
// إذا تم الضغط على أحد الأزرار 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['direction'])) { 
    $direction = $_POST['direction']; 
 
    // حفظ الحركة في قاعدة البيانات 
    $sql = "INSERT INTO movements (movement) VALUES ('$direction')"; 
    if ($conn->query($sql) === TRUE) { 
        echo "تم تسجيل الحركة بنجاح: " . $direction; 
    } else { 
        echo "خطأ في تسجيل الحركة: " . $conn->error; 
    } 
} 
 
// إغلاق الاتصال بقاعدة البيانات 
$conn->close(); 
?>