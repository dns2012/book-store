<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/fontawesome/css/all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('royalui/images/logo-mini.png') }}" />
</head>

<body>

    <header class="block-header sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark block-header__navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('frontend/images/logo.svg') }}" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse mt-2 ml-1" id="navbarTogglerDemo03">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="fas fa-file-invoice fa-2x" style="vertical-align: middle"></i>
                                <span> Cek Pesanan </span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <i class="fas fa-luggage-cart fa-2x" style="vertical-align: middle"></i>
                                <span> Keranjang </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="block-search mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-3">
                    <input type="text" name="" class="form-control" placeholder="Apa yang kamu butuhkan?">
                </div>
                <div class="col-lg-4 mt-3">
                    <button class="btn btn-primary btn-book-primary form-control">Temukan Buku</button>
                </div>
            </div>
        </div>
    </section>

    <section class="block-book mt-4">
        <div class="container">
            <div class="row">
                @foreach ($book as $book)
                <div class="col-lg-3 mt-4">
                    <div class="card block-book__card">
                        <div class="block-book__card-image">
                            <img src="{{ $book['image'] }}" class="card-img-top" alt="...">
                        </div>
                        <div class="block-book__card-body">
                            <div class="block-book__card-body-title mt-3">
                                {{ $book['title'] }}
                            </div>
                            <div class="block-book__card-body-author">
                                {{ $book['author'] }}
                            </div>
                            <div class="block-book__card-body-price">
                                Rp {{ number_format($book['price'], '2', ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="block-subscribe mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-9 mt-1">
                            <input type="text" name="" class="form-control" placeholder="Dapatkan informasi menarik dan edisi terbaru">
                        </div>
                        <div class="col-lg-3 mt-1">
                            <button class="btn btn-primary btn-book-default form-control">SUBSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="block-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 text-left mt-5">
                    <div class="block-footer__title">Hubungi Kami</div>
                    <div class="block-footer__contact">
                        Telp: <a href="tel:+62742885822">0274-2885822</a> <br>
                        WA: <a href="https://api.whatsapp.com/send?phone=6282136286579">082136286579</a> <br>
                        Senin - Minggu <br>
                        24 Jam Non Stop
                    </div>
                </div>
                <div class="col-lg-3 text-left mt-5">
                    <div class="block-footer__title">Info Lokasi</div>
                    <div class="block-footer__contact">
                        Jl. Palagan Tentara Pelajar <br>
                        No 81 Jongkang, Sariharjo, <br>
                        Ngaglik, Sleman <br>
                        Daerah Istimewa Yogyakarta <br>
                        55581
                    </div>
                </div>
                <div class="col-lg-3 text-left mt-5">
                    <div class="block-footer__title">Tentang Kami</div>
                    <div class="block-footer__contact">
                        Tim kecil untuk berbagi inspirasi, <br>
                        pemikiran, dan ilmu pengetahuan <br>
                        agama melalui penjualan buku <br>
                        guna mempermudah akses untuk <br>
                        masyarakat luas.
                    </div>
                </div>
                <div class="col-lg-3 text-left mt-5">
                    <div class="block-footer__title">Kenapa Book Store?</div>
                    <div class="block-footer__contact">
                        Mudah, akses online dimana saja. <br>
                        Aman, langsung terhubung via WA. <br>
                        Praktis, bisa tunai atau non tunai. <br>
                        InsyaAllah amanah.
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="block-footer__copyright text-center">
                        Copyright ©2019 Book Store | Inspire reading for religious insight
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>