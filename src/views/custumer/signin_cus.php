<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>ลงทะเบียน</title>
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
    <form action="login_cus.php" method="post">
        <div class="container">
            <form action="product.php" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content rounded-4 shadow">
                        <div class="modal-header p-5 pb-4 border-bottom-0">
                            <h1 class="fw-bold mb-0 fs-2">ลงทะเบียน</h1>
                        </div>
                        <div class="modal-body p-5 pt-0">
                            <div class="row form-row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-3" id="floatingFirstName" placeholder="ชื่อ">
                                        <label for="floatingFirstName">ชื่อ</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control rounded-3" id="floatingLastName" placeholder="นามสกุล">
                                        <label for="floatingLastName">นามสกุล</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingAddress" placeholder="เบอร์โทรศัพท์">
                                <label for="floatingTel">เบอร์โทรศัพท์</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control rounded-3" id="floatingAddress" placeholder="ที่อยู่">
                                <label for="floatingAddress">ที่อยู่</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-3" id="floatingEmail" placeholder="อีเมล">
                                <label for="floatingEmail">อีเมล</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="รหัสผ่าน">
                                <label for="floatingPassword">รหัสผ่าน</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-3" id="floatingConfirmPassword" placeholder="ยืนยันรหัสผ่าน">
                                <label for="floatingConfirmPassword">ยืนยันรหัสผ่าน</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Register</button>
                            <hr class="my-4">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </form>
</body>

</html>
