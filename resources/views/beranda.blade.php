<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/beranda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
</head>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<body>

    <header class="header">
        <nav class="header--menu">
            <div class="burger--icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="search--box">
                <i class="fa.solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search">
            </div>
            <div class="menu--icons">
                <a href="{{ route('profile.index') }}"><i class="fa-solid fa-user"></i></a>
                <div class="cart--icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>0</span>
                </div>
            </div>
        </nav>
    </header>

    <!-- menu section -->

    {{-- <div class="daftar">
        <h2 class="daftar-semua">Semua</h2>
        <h2 class="daftar-makanan">Makanan</h2>
        <h2 class="daftar-minuman">Minuman</h2>
        <h2 class="daftar-suka">Suka</h2> 
    </div> --}}

    <!-- cover section -->
    <section class="cover">
        <div class="cover--overlay">
            <img class="image--overlay" img="images/cover.png" alt="">
            <h1 class="text--overlay">MASUKAN PRODUK ANDA <br>
                <span class="slogan">Diskon Hingga 15%</span>
            </h1>
        </div>

        </div>
    </section>

    <main>
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
            @foreach ($barangs as $barang)
                <a href="{{ '/' . $barang->nama_barang }}">
                    <div class="card">
                        <img src="{{ asset('/storage/products/' . $barang->image) }}" alt="">
                        <h4 class="card--title">{{ $barang->nama_barang }}</h4>
                        <div class="card--price">
                            <div class="price">Rp. {{ number_format($barang->harga, 2, ',', '.') }} IDR</div>
                            <i class="fa-solid fa-plus add-to-cart"></i>
                        </div>
                    </div>
                </a>
            @endforeach
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
