<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
  <link rel="stylesheet" href="css/login.css">
<div class="Login-input">
  <div class="input"> 
      <div class="login-title">
      <h1>Selamat Datang!</h1>
      </div>

    <div class="inputnama">
        <input type="text" name="nama" id=""  required="required">
        <span>Nama</span>
    </div>

    <div class="inputpassword">
          <input type="password" name="password" id="" required="required">
          <span>Password</span>
    </div>

    <div class="input-btn">
    <form action="open" method=""> 
        <a href="/beranda" class="button">Masuk</a>
    </form>
    </div>

    <div class="checkbox"> 
    <input type="checkbox" id="check">
    <label for="check">Remember Me</label>
    </div>
  </div> 

<div class="login-text">
  <div class="logo">
    <img src="images/logo.png" alt="" width="200px" height="200px">
    <label for="img">NAWASENA</label>
  </div>
</div>


</body>
</html>