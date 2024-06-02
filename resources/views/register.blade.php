<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/register.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    {{-- <img class="wave" src="images/wave.png"> --}}

    <div class="container">
        <div class="img">
            <img src="images/logo-vector.svg" width="200px" height="200px">
        </div>
        <div class="login-content">
            <form action="/beranda">
                <h2 class="title">DAFTAR</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Nama</h5>
                        <input type="text" class="input">
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>NIS</h5>
                        <input type="password" class="input">
                    </div>
                </div>

                <div class="input-div nomor">
                    <div class="i">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="div">
                        <h5>No Telepon</h5>
                        <input type="number" class="input">
                    </div>
                </div>

                <div class="select-container">
					<div class="i">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                    <select class="select-box">
						<option value="">Pilih Role</option>
                        <option value="penjual">Penjual</option>
                        <option value="pembeli">Pembeli</option>
                    </select>
					<div class="i-select">
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>	
                </div>`

                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>
