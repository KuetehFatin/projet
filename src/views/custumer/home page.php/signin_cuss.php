<?php
session_start();  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lissa Shop</title>
<link rel="stylesheet" href="sign-in.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<body class="d-flex align-items-center justify-content-center vh-100"></body>

<main class="form-signin w-100 m-auto">
  <form action="signin.db.php" method="post">
    <h1 class="h3 mb-3 fw-normal">sign up</h1>

    <div class="form-floating">
      <input type="text" class="form-control my-2" name="customer_name" placeholder="enter your username...">
      <label for="Username">username</label>
    </div>

    <div class="form-floating">
      <input type="tel" class="form-control my-2" name="customer_tel" id="floatingInput" placeholder="tel">
      <label for="floatingInput">Tel</label>
    </div>

    <div class="form-floating">
      <input type="address" class="form-control my-2" name="customer_address" id="floatingInput" placeholder="address">
      <label for="floatingInput">Address</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control my-2" name="customer_email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control my-2" name="customer_password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control my-2" name="password_hash" id="floatingPassword" placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>

    <button class="btn btn-primary w-100 py-2" name="signin_cuss" type="submit">Sign in <a href="lognin_cuss.php"</button>
  </form>
</main>
    


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>




</body>
</html>