<?php
session_start();
require 'config.php';
$minLength = 6;

// ตรวจค่าจากฟอร์ม
if(isset($_POST['signin_cuss.php'])) {
    $customer_name = $_POST['customer_name'];
    $customer_tel = $_POST['customer_tel'];
    $customer_address = $_POST['customer_address'];
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];
    $customer_password_hash = $_POST['customer_password_hash'];

    // ตรวจสอบค่าว่าง
    if(empty($customer_name)) {
        $_SESSION['error'] = "Please enter your name";
        header("Location: signin_cuss.php");
        exit;
    } else if(!filter_var($customer_email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Please enter a valid email";
        header("Location: signin_cuss.php");
        exit;
    } else if($customer_password != $customer_password_hash) {
        $_SESSION['error'] = "Passwords do not match";
        header("Location: signin_cuss.php");
        exit;
    } else {
        // เตรียมคำสั่ง SQL
        $stmt = $conn->prepare("INSERT INTO customer (customer_name, customer_tel, customer_address, customer_email, customer_password) VALUES (?, ?, ?, ?, ?)");
        if ($stmt === false) {
            die('Prepare failed: ' . $conn->error);
        }

        // ผูกค่าพารามิเตอร์
        $hashed_password = password_hash($customer_password, PASSWORD_DEFAULT);
        $stmt->bind_param("sssss", $customer_name, $customer_tel, $customer_address, $customer_email, $password_hash);

        // เรียกใช้คำสั่ง SQL
        if ($stmt->execute() === false) {
            die('Execute failed: ' . $stmt->error);
        }

        // แสดงข้อความสำเร็จและเปลี่ยนเส้นทาง
        echo "<script>
                alert('Save successfully!');
                window.location.href = '/projet/src/views/customer/signin_cuss.php';
              </script>";
        exit;

        // ปิดคำสั่ง SQL
        $stmt->close();
    }
} else {
    echo "Required fields are missing.";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$conn->close();
?>
