<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISSA SHOP</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        .container {
            text-align: center;
            border: 2px solid #5b3923;
            padding: 20px;
            border-radius: 10px;
        }
        .container input {
            display: block;
            width: 300px;
            margin: 10px auto;
            padding: 10px;
            font-size: 16px;
        }
        .container button {
            width: 320px;
            padding: 10px;
            font-size: 16px;
            background-color: #5b3923;
            color: white;
            border: none;
            cursor: pointer;
        }
        .container a {
            color: #5b3923;
            text-decoration: none;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LISSA SHOP</h1>
        <input type="text" placeholder="หมายเลขโทรศัพท์ หรืออีเมล">
        <input type="password" placeholder="รหัสผ่าน">
        <button>เข้าสู่ระบบ</button>
        <p>สำหรับลูกค้าที่ยังไม่ลงทะเบียน คลิ๊กที่นี่เพื่อ <a href="signin.php U">ลงทะเบียน</a></p>
    </div>
</body>
</html>
