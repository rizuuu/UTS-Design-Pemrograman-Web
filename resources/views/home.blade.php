@php
use App\Models\galery;
use App\Models\kontak;
use App\Models\home;
use App\Models\produk;
use App\Models\about;
$galery = galery::all();
$kontak = kontak::all();
$home = home::all();
$produk = produk::all();
$about = about::all();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Karya Alam Abadi</title>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/all.min.css'>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="navbar navbar-expand-custom navbar-mainbg fixed-top overflow-hidden">
        <div class="d-flex justify-content-start">
            <a class="navbar-brand navbar-logo" href="#">Karya Alam Abadi</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item active">
                    <a class="nav-link" href="#home"><i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about"><i class="far fa-address-book"></i>About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#products"><i class="far fa-clone"></i>Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimoni"><i class="far fa-calendar-alt"></i>Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts"><i class="far fa-chart-bar"></i>Contacts</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Home Section -->
    <section id="home" class="d-flex align-items-center hero overflow-hidden mt-5">
        <div class="container mt-5 mb-5">
            <div class="row mt-3">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-right" data-aos-delay="200">
                    @foreach ($home as $item)
                    <h2>{{ $item->nama }}</h2>
                    <p class="text-capitalize">
                        {{ $item->deskripsi }}
                    </p>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in-up">
                    <img src="/img/home/{{ $item->gambar }}" alt="Hero Image" class="img-fluid hvr-float" />
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Company Profile Section -->

    <section id="about" class="services bg-light pt-2 overflow-hidden">
        <div class="container mt-5">
            <div class="section-header" data-aos="fade-up">
                <h3 class="text-capitalize text-center">
                    CV Karya Alam Abadi
                </h3>
                <p class="text-capitalize text-center">
                    Tentang Kami
                </p>
            </div>
            <br>
            <div class="row mb-5">

                @foreach ($about as $item)
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="box px-4 py-4">
                        <div class="icon">
                            <i class="fa fa-info-circle c-green"></i>
                            <h4 class="title mt-4 text-center c-green">{{ $item->judul }}</h4>
                            <br>
                            <p class="text-capitalize text-center">{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="products" class="section-products overflow-hidden">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center text-center mb-4">
                <div class="col-md-8 col-lg-6">
                    <div class="">
                        <h3>Produk Unggulan</h3>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($produk as $item)
                <style>
                    .section-products #products .part-1::before {
                        background: url("../img/product/{{ $item->gambar }}") no-repeat center;
                        background-size: cover;
                        transition: all 0.3s;
                    }
                </style>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div id="products" class="single-product">
                        <div class="part-1">

                        </div>
                        <div class="part-2">
                            <h3 class="product-title">{{ $item->judul }}</h3>
                            <p>{{ $item->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
    </section>

    <section id="testimoni" class="home-testimonial py-5 overflow-hidden">
        <div class="container-fluid" data-aos="zoom-out-right">
            <div class="row d-flex justify-content-center testimonial-pos mb-3">
                <div class="col-md-12 pt-4 d-flex justify-content-center">
                    <h1>Testimonial</h1>
                </div>
                <div class="col-md-12 d-flex justify-content-center">
                    <h2>Tesmimoni Pelanggan CV Karya Alam Abadi</h2>
                </div>
            </div>
            <section class="home-testimonial-bottom">
                <div class="container testimonial-inner mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="box px-4 py-4">
                                <div class="icon">
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="https://lh3.googleusercontent.com/a-/AOh14GiSCaUvVxtpwXjUwGcQpDzrxLljQRKI2O9l6Z_obw=w60-h60-p-rp-mo-br100"
                                            alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Irfani Nur Rokhman</div>
                                    <div class="link-position d-flex justify-content-center">Pelanggan</div>
                                    <br>
                                    <p class="text-capitalize text-center">
                                        ???Salut dengan CV.KAA yg dibangun dari nol yg sangat membutuhkan perjuangan dan
                                        pemikiran yang hebat,selamat buat
                                        keluarga CV.KAA semoga diberi kelancaran dalam kinerjanya maupun pendapatannya.???
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="box px-4 py-4">
                                <div class="icon">
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="https://lh3.googleusercontent.com/a-/AOh14GhkhVq7ohF5lxiZWxigKJ-JONpqXpXsenfY6NjtUA=w60-h60-p-rp-mo-ba4-br100"
                                            alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Bekti Pamungkas</div>
                                    <div class="link-position d-flex justify-content-center">Pelanggan</div>
                                    <br>
                                    <p class="text-capitalize text-center">
                                        ???Batching plant dengan stone crusher sendiri menjamin mutu produk beton dari CV
                                        KAA. recomended untuk
                                        bangunan anda???
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                            <div class="box px-4 py-4">
                                <div class="icon">
                                    <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people"
                                            src="https://3.bp.blogspot.com/-4YRoAswlMME/VQ3vUlgD3AI/AAAAAAAAAJc/r6SzvMeZfPc/s1600/DSCN5529.JPG"
                                            alt=""></div>
                                    <div class="link-name d-flex justify-content-center">Mustktar Aslam</div>
                                    <div class="link-position d-flex justify-content-center">Pelanggan</div>
                                    <br>
                                    <p class="text-capitalize text-center">
                                        ???Sangat bagus untuk kualitas batu dan betonya, sangat cocok untuk sebuah
                                        pembangunan.???
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </section>

    <!-- Page Content -->
    <div class="container page-top">
        <div class="row d-flex justify-content-center mb-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h3>Galery</h3>
            </div>
        </div>
        <div class="row mb-5">
            @foreach ($galery as $item)
            <div class="col-lg-3 col-md-4   col-xs-6 thumb" data-aos="flip-right">
                <a href="/img/galery/{{ $item->gambar }}" class="fancybox" rel="ligthbox">
                    <img src="/img/galery/{{ $item->gambar }}" class="zoom img-fluid " alt="">
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <section id="contacts" class="overflow-hidden py-5 bg-green c-white">
        <div class="row d-flex justify-content-center mb-4" data-aos="fade-in">
            <div class="col-md-12 pt-4 d-flex justify-content-center">
                <h3 class="sec-subtitle">Kontak</h3>
            </div>
            <div class="col-md-12 d-flex justify-content-center" data-aos="fade-in">
                <h2 class="sec-title">Dapatkan informasi mengenai Kami</h2>
            </div>
        </div>
        <div class="container container-fluid" data-aos="fade-in">
            <div class="row px-2 py-2">
                @foreach ($kontak as $item)
                <div class="col-sm-12 col-md-3">
                    <div class="contact-item">
                        <span>Alamat</span>
                        <p>{{ $item->alamat }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="contact-item">
                        <span>Email</span>
                        <p>{{ $item->email }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="contact-item">
                        <span>Telepon</span>
                        <p>{{ $item->telp }}</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3">
                    <div class="contact-item">
                        <span>Social Media</span>
                        <i class="fa fa-instagram c-dark"></i>
                        <p>{{$item->social }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <br>
            <div class="row">
                <div class="col" data-aos="fade-right">
                    <div class="maps">
                        @foreach ($kontak as $item)
                        <iframe src="{{ $item->maps }}" style="border:0;" width="100%" height="400px" allowfullscreen=""
                            loading="lazy"></iframe>
                        @endforeach
                    </div>
                </div>
                <div class="col" data-aos="fade-left">
                    <div class="">
                        <form action="#" method="post">
                            <div class="row mb-3">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Anda">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="input-group">
                                    <input class="form-control" type="email" name="email" placeholder="Email Anda">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="d-flex gap-3">
                                    <input class="form-control" type="telp" name="telp" placeholder="No.Telp">
                                    <input class="form-control" type="subject" name="subject" placeholder="Subjek">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="input-group">
                                    <textarea class="form-control" name="message" placeholder="Pesan"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-group justify-content-center">
                                    <button type="submit" class="btn btn-contact">Kirim Pesan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <!-- Copyright -->
        <div class="text-center p-2 bg-dark-green c-white">
            ?? UTS Design Pemrograman Web
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/"></a>
        </div>
        <!-- Copyright -->
    </footer>

    <!-- partial -->
    <script src='js/jquery.min.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/bootstrap.bundle.min.js'></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
