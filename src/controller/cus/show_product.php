<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISSA SHOP - Customer Information</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #fff;
        }
        .sidebar {
            width: 200px;
            background-color: #333;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding-top: 20px;
        }
        .sidebar a {
            display: block;
            color: white;
            padding: 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .content {
            margin-left: 200px;
            padding: 20px;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: right;
        }
        .header a {
            color: white;
            text-decoration: none;
        }
        .title {
            text-align: center;
            font-size: 32px;
            color: #5b3923;
            margin: 20px 0;
        }
        .table-container {
            width: 100%;
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #5b3923;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .actions {
            display: flex;
            justify-content: center;
        }
        .actions a {
            margin: 0 5px;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#">หน้าหลัก</a>
        <a href="#">ลูกค้า</a>
        <a href="#">ข้อมูลลูกค้า</a>
        <a href="#">พนักงาน</a>
        <a href="#">ข้อมูลพนักงาน</a>
        <a href="#">สินค้า</a>
        <a href="#">รายการสินค้า</a>
        <a href="#">ประเภทสินค้า</a>
        <a href="#">การขายสินค้า</a>
        <a href="#">การคืนสินค้า</a>
        <a href="#">วัตถุดิบ</a>
        <a href="#">วัตถุดิบหลัก</a>
        <a href="#">รายการสั่งซื้อวัตถุดิบ</a>
        <a href="#">หน่วย</a>
        <a href="#">รายการผลิตที่ผลิตเสร็จแล้ว</a>
        <a href="#">อัพเดทรายการ</a>
        <a href="#">ข้อมูลยอดขายรายปี</a>
        <a href="#">ข้อมูลบัญชี</a>
    </div>
    <div class="header">
        <a href="#">log out</a>
    </div>
    <div class="content">
        <div class="title">LISSA SHOP</div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>เลขสมาชิก</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>ที่อยู่</th>
                        <th>แก้ไข</th>
                        <th>ลบ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100001</td>
                        <td>บุฟผา ฟ้าดิน</td>
                        <td>061-0869812</td>
                        <td>15 สุโหงพานี</td>
                        <td class="actions"><a href="#">✎</a></td>
                        <td class="actions"><a href="#">✖</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>