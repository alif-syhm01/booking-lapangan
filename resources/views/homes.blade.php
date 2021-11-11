<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/home.css') }}">
    <!-- TITLE -->
    <title>Booking Lapangan</title>
</head>
<body>
    <header class="main-header">
        <!-- make a navbar -->
        <nav class="navbar navbar-expand-lg pt-4">
            <div class="container">
                <a class="navbar-brand text-light" href="{{ url('/') }}}">Booking Lapangan</a>
                <button class="navbar-toggler ml-auto custom-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="javascript:;" id="nav-list-field">List Lapangan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;" id="nav-list-how-order">Cara Pesan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;" id="nav-list-feedback">Penilaian Pengguna</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login-page') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('register-page') }}">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <button class="back-to-top"></button>
    </header>
    <main>
        <section class="section-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pt-5">
                        <h1 class="heading-primary mb-4">Pesan Lapangan tanpa ribet, tanpa perlu datang ketempat</h1>
                        <p class="hero-description mb-5">
                            Dengan satu aplikasi kamu bisa langsung pakai, tidak perlu ribet antri sana sini, sehat jadi lebih mudah dan cepat. 
                            Disesuaikan dengan kondisi lapangan yang anda suka.
                        </p>
                        <a class="btn btn-lg btn-custom-order me-3" href="javascript:;">Pesan sekarang</a>
                        <a class="btn btn-lg btn-bordered-custom-order" href="javascript:;">Pelajari lebih lanjut</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="{{ asset('images/image-hero-section.png') }}" class="" alt="all-yard-services">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-list-yards" id="list-field">
            <div class="container text-center">
                <span class="subheader">List Lapangan</span>
                <h2 class="content-list">Lapangan rekomendasi dari kami untuk kalian semua</h2>
            </div>
            <div class="container my-3">
                <div class="row mx-auto my-auto">
                    <div class="owl-carousel">
                        <div class="card">
                            <img src="{{ asset('images/badminton-field.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Lapangan Badminton
                                </h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text price">Rp 200.000,00/jam</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge bg-primary">Terlaris</span>
                                <span class="badge bg-success">Tersedia</span>
                                <span class="badge bg-purple">Rekomendasi</span>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('images/basketball-field.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lapangan Basket</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text price">Rp 270.000,00/jam</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge bg-primary">Terlaris</span>
                                <span class="badge bg-success">Tersedia</span>
                                <span class="badge bg-danger">Ternyaman</span>
                                <span class="badge bg-purple">Rekomendasi</span>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('images/footbal-field.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lapangan Bola</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text price">Rp 175.000,00/jam</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge bg-info">Terbaik</span>
                                <span class="badge bg-primary">Terlaris</span>
                                <span class="badge bg-warning">Penuh</span>
                                <span class="badge bg-purple">Rekomendasi</span>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('images/badminton-field.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lapangan Badminton</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text price">Rp 180.000,00/jam</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge bg-info">Termurah</span>
                                <span class="badge bg-primary">Terlaris</span>
                                <span class="badge bg-success">Tersedia</span>
                                <span class="badge bg-purple">Rekomendasi</span>
                            </div>
                        </div>
                        <div class="card card-custom">
                            <img src="{{ asset('images/footbal-field.jpg') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Lapangan Bola</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p class="card-text price">Rp 250.000,00/jam</p>
                            </div>
                            <div class="card-footer">
                                <span class="badge bg-info">Termahal</span>
                                <span class="badge bg-primary">Terlaris</span>
                                <span class="badge bg-success">Tersedia</span>
                                <span class="badge bg-purple">Rekomendasi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <h6>
                    <a href="javascript:;" class="subfooter">Lihat semua lapangan &rarr;</a>
                </h6>
            </div>
        </section>
        <section class="section-to-orders" id="how-to-order">
            <div class="container text-center">
                <span class="subheader">Cara Pesan</span>
                <h2 class="content-list">Cukup 4 langkah untuk memesan</h2>
            </div>
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col col-lg-6">
                        <h6 class="title-orders">01 Pilih Lapangan</h6>
                        <span class="paragraph-orders">
                            Pilih lapangan yang sesuai dengan kebutuhan tim anda, kami sudah sediakan beberapa kategori lapangan yang mungkin anda sukai nantinya. 
                            Banyak pilihan dan banyak juga jenis lapangannya.
                        </span>
                    </div>
                    <div class="col col-lg-6">
                        <img class="image-orders" src="{{ asset('images/select-field.svg') }}" alt="select-field">
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col col-lg-6">
                        <img class="image-orders" src="{{ asset('images/form-input.svg') }}" alt="form-input">
                    </div>
                    <div class="col col-lg-6">
                        <h6 class="title-orders">02 Isi Form Pemesanan</h6>
                        <span class="paragraph-orders">
                            Isi form data diri anda sesudah memilih lapangan, mulai dari data pribadi
                            hingga lama sewa lapangan yang akan anda pesan.
                        </span>
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col col-lg-6">
                        <h6 class="title-orders">03 Lakukan Pembayaran</h6>
                        <span class="paragraph-orders">
                            Setelah mengisi form, anda akan melakukan pembayaran, cukup mudah anda kirimkan
                            bukti pembayaran dan upload ke form yang sudah kami sediakan.
                        </span>
                    </div>
                    <div class="col col-lg-6">
                        <img class="image-orders" src="{{ asset('images/payment.svg') }}" alt="payment">
                    </div>
                </div>
                <div class="row align-items-center mb-5">
                    <div class="col col-lg-6">
                        <img class="image-orders" src="{{ asset('images/success.svg') }}" alt="success">
                    </div>
                    <div class="col col-lg-6">
                        <h6 class="title-orders">04 Pemesanan Berhasil</h6>
                        <span class="paragraph-orders">
                            Setelah mengisi form dan melakukan pembayaran, anda tinggal menunggu konfirmasi
                            apakah pemesanan anda sudah sesuai apa belum, apabila telah selesai anda akan
                            menerima pesan dari kami dan bisa mencetak kode booking.
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-feedbacks" id="feedback">
            <div class="container-fluid">
                <div class="container text-center">
                    <span class="title-feedback">Penilaian</span>
                    <h2 class="content-feedback">Masukan kepuasan pelanggan</h2>
                </div>
                <div class="container">
                    <div class="row row-feedbacks">
                        <div class="col-lg-4" align="center">
                            <img src="{{ asset('images/boy.svg') }}" class="img-feedback" alt="avatar">
                            <span class="rating-text">&quot;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam sed id fugiat facere totam!&quot;</span>
                            <p class="rating-name">John Doe</p>
                        </div>
                        <div class="col-lg-4" align="center">
                            <img src="{{ asset('images/boy-1.svg') }}" class="img-feedback" alt="avatar">
                            <span class="rating-text">&quot;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam sed id fugiat facere totam!&quot;</span>
                            <p class="rating-name">Peeter Parkour</p>
                        </div>
                        <div class="col-lg-4" align="center">
                            <img src="{{ asset('images/man-1.svg') }}" class="img-feedback" alt="avatar">
                            <span class="rating-text">&quot;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam sed id fugiat facere totam!&quot;</span>
                            <p class="rating-name">Han Jee Pyoung</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4" align="center">
                            <img src="{{ asset('images/man-2.svg') }}" class="img-feedback" alt="avatar">
                            <span class="rating-text">&quot;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam sed id fugiat facere totam!&quot;</span>
                            <p class="rating-name">Lee Dan Dan</p>
                        </div>
                        <div class="col-lg-4" align="center">
                            <img src="{{ asset('images/man-3.svg') }}" class="img-feedback" alt="avatar">
                            <span class="rating-text">&quot;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam sed id fugiat facere totam!&quot;</span>
                            <p class="rating-name">Michael Left</p>
                        </div>
                        <div class="col-lg-4" align="center">
                            <img src="{{ asset('images/man-4.svg') }}" class="img-feedback" alt="avatar">
                            <span class="rating-text">&quot;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam sed id fugiat facere totam!&quot;</span>
                            <p class="rating-name">Bruno Pluto</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/home.js') }}"></script>
</body>
</html>