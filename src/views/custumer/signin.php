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
            width: 60vw; /* กำหนดความกว้างเป็น 60% ของหน้าจอ */
            max-width: 400px; /* จำกัดความกว้างสูงสุด */
        }
        .container input {
            display: block;
            width: calc(50% - 10px);
            margin: 10px auto;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .container input.full-width {
            width: calc(100% - 20px);
        }
        .container button {
            width: calc(100% - 20px); /* ปรับให้เข้ากับขนาดของ container */
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
        .title {
            font-size: 32px;
            margin-bottom: 20px;
            color: #5b3923;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title">LISSA SHOP</div>
        <input type="text" placeholder="ชื่อ">
        <input type="text" placeholder="นามสกุล">
        <input type="text" class="full-width" placeholder="ที่อยู่">
        <input type="email" class="full-width" placeholder="อีเมล">
        <input type="password" class="full-width" placeholder="รหัสผ่าน">
        <input type="password" class="full-width" placeholder="ยืนยันรหัสผ่าน">
        <button type="submit" name="login" class="btn btn-primary"> Sign In</button>
    </div>
</body>
</html>
