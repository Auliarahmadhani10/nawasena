<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css ">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>Detail Barang</title>
</head>

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

    <div class="wrapper">
        <div class="title">
            <img class="gambar-product" src="{{ asset('/storage/products/' . $barang->image) }}" />
        </div>
        <div class="div2">
            <div class="product-sec">
                <h1>{{ $barang->nama_barang }}</h1>
                <div>
                    <h4>Deskripsi</h4>
                    <p>{{ $barang->keterangan }}</p>
                </div>
                <h2>{{ number_format($barang->harga, 2, ',', '.') }} IDR</h2>
                <p>Stok: {{ $barang->stok }}</p>
            </div>
            <div class="seller-section">
                <h2>Oleh: {{ $barang->user->nama }}</h2>
                <a href="{{ 'https://wa.me/' . $barang->user->no_telp }}">Hubungi Penjual</a>
            </div>
        </div>
    </div>
</body>

</html>
