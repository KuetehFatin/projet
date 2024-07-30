<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUNUH - Order Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container img {
            width: 250px;
            height: auto;
            display: block;
            margin: 0 auto 20px;
        }
        .form-row {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3 class="mt-5">กรอกรายละเอียดสินค้าที่สั่งซื้อ</h3>
        <hr>
        <form method="post" action="process_order.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="proname" class="form-label">Name</label>
                <input type="text" class="form-control" name="Customername" aria-describedby="Customername" required>
            </div>
            <div class="mb-3">
                <label for="Productid" class="form-label">Product ID</label>
                <input type="text" class="form-control" name="Productid" aria-describedby="Productid" required>
            </div>
            <div class="mb-3">
                <label for="Quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" name="Quantity" required>
            </div>
            <div class="mb-3">
                <label for="Totalprice" class="form-label">Total Price</label>
                <input type="text" class="form-control" name="Totalprice" required>
            </div>
            <div class="mb-3">
                <label for="Slip" class="form-label">Upload Slip</label>
                <input type="file" class="form-control" id="Slip" name="Slip" accept=".pdf, .jpg, .png" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit Order</button>
        </form>
        <hr>
    </div>
</body>
</html>
