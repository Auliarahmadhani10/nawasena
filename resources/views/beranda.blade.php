<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/beranda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
</head>


<body>

    <header class="header">
        <nav class="header--menu">
            <div class="logo">
            <img class="logo-img" src="images/logo.svg" alt="">
                <h1 class="logo-text">NAWASENA</h1>
            </div>
            
                <!-- menu section -->
            <div class="daftar">
                <h4 class="daftar-semua">Semua</h4>
                <h4 class="daftar-makanan">Makanan</h4>
                <h4 class="daftar-minuman">Minuman</h4>
                <h4 class="daftar-suka">Suka</h4>
            </div>
            <div class="menu--icons">
                <i class="fa-solid fa-user"></i>

                <div class="cart--icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>0</span>
                </div>
            </div>

        </nav>
    </header>

    <main>
            <!-- cover section -->
    <section class="cover" >
        <img  class="cover-img" img="images/cover.svg" alt="">
            {{-- <h1 class="text--overlay">MASUKAN PRODUK ANDA <br>
                <span class="slogan">Diskon Hingga 15%</span>
            </h1> --}}
    </section>

        <h2 class="section-heading">Menu Popular</h2>
        <div class="menu--list">
            <div class="menu--item">
                <img src="images/menu-2.png" alt="">
                <h5>Mochi</h5>
            </div>

            <div class="menu--item">
                <img src="images/menu-1.png" alt="">
                <h5>Bakso</h5>
            </div>

            <div class="menu--item">
                <img src="images/menu-2.png" alt="">
                <h5>Mochi</h5>
            </div>

            <div class="menu--item">
                <img src="images/menu-1.png" alt="">
                <h5>Bakso</h5>
            </div>

            <div class="menu--item">
                <img src="images/menu-2.png" alt="">
                <h5>Mochi</h5>
            </div>

            <div class="menu--item">
                <img src="images/menu-1.png" alt="">
                <h5>Bakso</h5>
            </div>
        </div>

        <!-- card item section-->
        <h2 class="section-heading">Makanan Lain</h2>
        <div class="card--list">
            <div class="card">
                <img src="images/menu-1.png" alt="">
                <h4 class="card--title">Bakso</h4>
                <div class="card--price">
                    <div class="price">12.000 IDR</div>
                    <i class="fa-solid fa-plus add-to-cart"></i>
                </div>
            </div>

            <div class="card">
                <img src="images/menu-2.png" alt="">
                <h4 class="card--title">Mochi</h4>
                <div class="card--price">
                    <div class="price">8.000 IDR</div>
                    <i class="fa-solid fa-plus add-to-cart"></i>
                </div>
            </div>

            <div class="card">
                <img src="images/menu-1.png" alt="">
                <h4 class="card--title">Bakso</h4>
                <div class="card--price">
                    <div class="price">12.000 IDR</div>
                    <i class="fa-solid fa-plus add-to-cart"></i>
                </div>
            </div>

            <div class="card">
                <img src="images/menu-2.png" alt="">
                <h4 class="card--title">Mochi</h4>
                <div class="card--price">
                    <div class="price">8.000 IDR</div>
                    <i class="fa-solid fa-plus add-to-cart"></i>
                </div>
            </div>

            <div class="card">
                <img src="images/menu-1.png" alt="">
                <h4 class="card--title">Bakso</h4>
                <div class="card--price">
                    <div class="price">12.000 IDR</div>
                    <i class="fa-solid fa-plus add-to-cart"></i>
                </div>
            </div>

            <div class="card">
                <img src="images/menu-2.png" alt="">
                <h4 class="card--title">Mochi</h4>
                <div class="card--price">
                    <div class="price">8.000 IDR</div>
                    <i class="fa-solid fa-plus add-to-cart"></i>
                </div>
            </div>
        </div>

        <!-- cart sidebar section -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar--close">
                <i class="fa-solid fa-close"></i>
            </div>
            <div class="cart-menu">
                <h3>My Cart</h3>
                <div class="cart-items"></div>
            </div>

            <div class="sidebar--footer">
                <div class="total--amount">
                    <h5>Total</h5>
                    <div class="cart-total">0 IDR</div>
                </div>
                <button class="checkout-btn">Beli</button>
            </div>
        </div>
        </div>
    </main>

    <script src="js/beranda.js"></script>
</body>

</html>
