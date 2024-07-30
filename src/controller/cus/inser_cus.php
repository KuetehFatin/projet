<?php

include 'C:\xampp\htdocs\projet\config\config.php';

// ตรวจสอบว่าค่าจากฟอร์มถูกส่งมาครบถ้วน
if (isset($_POST['customer_name']) && isset($_POST['customer_tel']) && isset($_POST['customer_Address']) && isset($_POST['customer_email']) && isset($_POST['customer_Password'])) {
    $customer_name = $_POST['customer_name'];
    $customer_tel = $_POST['customer_tel'];
    $customer_Address = $_POST['customer_Address'];
    $customer_email = $_POST['customer_email'];
    $customer_Password = $_POST['customer_Password'];

    // เตรียมคำสั่ง SQL
    $stmt = $conn->prepare("INSERT INTO customer (customer_name, customer_tel, customer_Address, customer_email, customer_Password) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . $conn->error);
    }

    // เรียกใช้คำสั่ง SQL
    if ($stmt-> Execute()) {
        // ตรวจสอบข้อผิดพลาดในการ execute
        die('Execute failed: ' . $stmt->error);
    }

    // แสดงข้อความสำเร็จและเปลี่ยนเส้นทาง
    echo "<script>
            alert('Save successfully!');
            window.location.href = '/pj/src/views/customer/login.php';
          </script>";
    exit;

    // ปิดคำสั่ง SQL
    $stmt->close();
} else {
    echo "Required fields are missing.";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>