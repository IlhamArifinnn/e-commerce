<!DOCTYPE html>
<html lang="en">

<head>
    <title>About - Shoppers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    @include('layouts.links')

</head>

<body>

    <div class="site-wrap">
        @include('layouts.header')

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong
                            class="text-black">About</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="block-16">
                            <figure>
                                <img src="{{ asset('assets/landing-page/images/blog_1.jpg') }}" alt="Gambar placeholder"
                                    class="img-fluid rounded">

                            </figure>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="site-section-heading pt-3 mb-4">
                            <h2 class="text-black">Sejarah Kami</h2>
                        </div>
                        <p>Kami memulai perjalanan ini dengan tujuan memberikan produk berkualitas terbaik kepada
                            pelanggan. Berawal dari usaha kecil, kini kami telah berkembang menjadi salah satu toko
                            e-commerce terpercaya.</p>
                        <p>Kami selalu berkomitmen untuk menjaga kepuasan pelanggan dengan menyediakan produk-produk
                            unggulan dan layanan yang memuaskan. Terima kasih atas kepercayaan Anda kepada kami.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section border-bottom" data-aos="fade">
            <div class="container">
                <div class="row justify-content-center mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Tim Kami</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="{{ asset('assets/landing-page/images/person_3.jpg') }}"
                                        alt="Gambar Aulia Rahman" class="mb-4">
                                    <h3 class="block-38-heading h4">Aulia Rahman</h3>
                                    <p class="block-38-subheading">CEO/Co-Founder</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Aulia memiliki pengalaman lebih dari 15 tahun di industri e-commerce dan telah
                                        memimpin perusahaan ini sejak awal.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="{{ asset('assets/landing-page/images/person_4.jpg') }}"
                                        alt="Gambar Raka Duta" class="mb-4">
                                    <h3 class="block-38-heading h4">Raka Duta</h3>
                                    <p class="block-38-subheading">Co-Founder</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Raka adalah ahli dalam strategi bisnis dan pengembangan produk, membantu
                                        menciptakan visi jangka panjang untuk perusahaan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="block-38 text-center">
                            <div class="block-38-img">
                                <div class="block-38-header">
                                    <img src="{{ asset('assets/landing-page/images/person_2.jpg') }}"
                                        alt="Gambar Fatiya " class="mb-4">
                                    <h3 class="block-38-heading h4">Fatiya </h3>
                                    <p class="block-38-subheading">Marketing</p>
                                </div>
                                <div class="block-38-body">
                                    <p>Fatiya bertanggung jawab atas semua kegiatan pemasaran dan promosi, memastikan
                                        produk kami dikenal luas oleh konsumen.</p>
                                </div>
                            </div>
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


        @include('layouts.footer')


    </div>

    @include('layouts.scripts')


</body>

</html>
