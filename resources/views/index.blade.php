<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoppers</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    @include('layouts.links')

</head>

<body>
    <div class="site-wrap">

        @include('layouts.header')

        <div class="site-blocks-cover" style="background-image: url({{ asset('assets/landing-page/images/hero_1.jpg') }})"
            data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2">Temukan Sepatu Sempurna Anda</h1>
                        <div class="intro-text text-center text-md-left">
                            <p class="mb-4">
                                Jelajahi koleksi sepatu terbaru kami yang dirancang untuk kenyamanan
                                dan gaya. Temukan pilihan terbaik untuk berbagai aktivitas dan acara.
                            </p>
                            <p>
                                <a href="/cart" class="btn btn-sm btn-primary">Belanja Sekarang</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section site-section-sm site-blocks-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-truck"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Pengiriman Gratis</h2>
                            <p>
                                Nikmati layanan pengiriman gratis untuk setiap pembelian tanpa minimum order. Belanja
                                lebih mudah dan hemat!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-refresh2"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Pengembalian Gratis</h2>
                            <p>
                                Kami menawarkan pengembalian gratis untuk semua produk dalam waktu 30 hari. Kepuasan
                                Anda adalah prioritas kami.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon mr-4 align-self-start">
                            <span class="icon-help"></span>
                        </div>
                        <div class="text">
                            <h2 class="text-uppercase">Dukungan Pelanggan</h2>
                            <p>
                                Tim dukungan pelanggan kami siap membantu Anda 24/7 dengan pertanyaan atau masalah
                                apapun yang Anda hadapi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section site-blocks-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                        <a class="block-2-item" href="#!">
                            <figure class="image">
                                <img src="{{ asset('assets/landing-page/images/women.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Koleksi</span>
                                <h3>Wanita</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                        <a class="block-2-item" href="#!">
                            <figure class="image">
                                <img src="{{ asset('assets/landing-page/images/children.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Koleksi</span>
                                <h3>Anak-anak</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                        <a class="block-2-item" href="#!">
                            <figure class="image">
                                <img src="{{ asset('assets/landing-page/images/men.jpg') }}" alt=""
                                    class="img-fluid" />
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Koleksi</span>
                                <h3>Pria</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section block-3 site-blocks-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Produk Unggulan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nonloop-block-3 owl-carousel">
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="{{ asset('assets/landing-page/images/cloth_1.jpg') }}" alt="Tank Top"
                                            class="img-fluid" />
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Tank Top</a></h3>
                                        <p class="mb-0">Tank top nyaman dan bergaya</p>
                                        <p class="text-primary font-weight-bold">Rp 750,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="{{ asset('assets/landing-page/images/shoe-2.jpg') }}" width=""
                                            alt="Sepatu Olahraga" class="img-fluid" />
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Sepatu Olahraga</a></h3>
                                        <p class="mb-0">Sepatu nyaman untuk aktivitas olahraga</p>
                                        <p class="text-primary font-weight-bold">Rp 1,200,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="{{ asset('assets/landing-page/images/cloth_2.jpg') }}"
                                            alt="Polo Shirt" class="img-fluid" />
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Polo Shirt</a></h3>
                                        <p class="mb-0">Polo shirt elegan dan berkualitas</p>
                                        <p class="text-primary font-weight-bold">Rp 850,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="{{ asset('assets/landing-page/images/cloth_3.jpg') }}"
                                            alt="T-Shirt" class="img-fluid" />
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">T-Shirt</a></h3>
                                        <p class="mb-0">Kaos nyaman untuk keseharian</p>
                                        <p class="text-primary font-weight-bold">Rp 500,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="{{ asset('assets/landing-page/images/shoe_1.jpg') }}"
                                            alt="Sepatu Kasual" class="img-fluid" />
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Sepatu Kasual</a></h3>
                                        <p class="mb-0">Sepatu stylish untuk tampilan kasual</p>
                                        <p class="text-primary font-weight-bold">Rp 900,000</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section block-8">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Diskon Besar!</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7 mb-5">
                        <a href="#">
                            <img src="{{ asset('assets/landing-page/images/blog_1.jpg') }}" alt="Gambar placeholder"
                                class="img-fluid rounded" />
                        </a>
                    </div>
                    <div class="col-md-12 col-lg-5 text-center pl-md-5">
                        <h2><a href="#">Diskon 50% untuk Semua Produk</a></h2>
                        <p class="post-meta mb-4">
                            Oleh <a href="#">Carl Smith</a>
                            <span class="block-8-sep">&bullet;</span> 3 September 2018
                        </p>
                        <p>
                            Nikmati diskon besar untuk semua produk di toko kami. Jangan lewatkan kesempatan emas ini
                            untuk mendapatkan barang berkualitas dengan harga terbaik.
                        </p>
                        <p><a href="/cart" class="btn btn-primary btn-sm">Belanja Sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts/footer')

    </div>

    @include('layouts.scripts')

</body>

</html>
