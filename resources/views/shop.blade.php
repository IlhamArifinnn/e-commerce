<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shop - Shoppers </title>
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
                            class="text-black">Shop</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-9 order-2">

                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="float-md-left mb-4">
                                    <h2 class="text-black h5">Belanja Semua</h2>
                                </div>
                                <div class="d-flex">
                                    <div class="dropdown mr-1 ml-md-auto">
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                            id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Terbaru
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                            <a class="dropdown-item" href="#!">Pria</a>
                                            <a class="dropdown-item" href="#!">Wanita</a>
                                            <a class="dropdown-item" href="#!">Anak-anak</a>
                                        </div>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                            id="dropdownMenuReference" data-toggle="dropdown">Referensi</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                            <a class="dropdown-item" href="#!">Relevansi</a>
                                            <a class="dropdown-item" href="#!">Nama, A ke Z</a>
                                            <a class="dropdown-item" href="#!">Nama, Z ke A</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#!">Harga, rendah ke tinggi</a>
                                            <a class="dropdown-item" href="#!">Harga, tinggi ke rendah</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-5">
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="#!!"><img
                                                src="{{ asset('assets/landing-page/images/cloth_1.jpg') }}"
                                                alt="Image placeholder" class="img-fluid"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#!!">Tank Top</a></h3>
                                        <p class="mb-0">Finding perfect t-shirt</p>
                                        <p class="text-primary font-weight-bold">Rp50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="#!!"><img
                                                src="{{ asset('assets/landing-page/images/shoe_1.jpg') }}"
                                                alt="Image
                                                placeholder"
                                                class="img-fluid"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#!!">Shoes Casual</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">Rp50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="#!!"><img
                                                src="{{ asset('assets/landing-page/images/cloth_2.jpg') }}"
                                                alt="Image placeholder" class="img-fluid"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#!!">Polo Shirt</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">Rp50</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="#!!"><img
                                                src="{{ asset('assets/landing-page/images/cloth_3.jpg') }}"
                                                alt="Image placeholder" class="img-fluid"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#!!">T-Shirt Mockup</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">Rp50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                <div class="block-4 text-center border">
                                    <figure class="block-4-image">
                                        <a href="#!!"><img
                                                src="{{ asset('assets/landing-page/images/shoe-2.jpg') }}"
                                                alt="Image placeholder" class="img-fluid"></a>
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#!!">Shoes Sport</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">Rp50</p>
                                    </div>
                                </div>
                            </div>





                        </div>
                        <div class="row" data-aos="fade-up">
                            <div class="col-md-12 text-center">
                                <div class="site-block-27">
                                    <ul>
                                        <li><a href="#!">&lt;</a></li>
                                        <li class="active"><span>1</span></li>
                                        <li><a href="#!">2</a></li>
                                        <li><a href="#!">3</a></li>
                                        <li><a href="#!">4</a></li>
                                        <li><a href="#!">5</a></li>
                                        <li><a href="#!">&gt;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 order-1 mb-5 mb-md-0">
                        <div class="border p-4 rounded mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Kategori</h3>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><a href="#!" class="d-flex"><span>Pria</span> <span
                                            class="text-black ml-auto">(2,220)</span></a></li>
                                <li class="mb-1"><a href="#!" class="d-flex"><span>Wanita</span> <span
                                            class="text-black ml-auto">(2,550)</span></a></li>
                                <li class="mb-1"><a href="#!" class="d-flex"><span>Anak-anak</span> <span
                                            class="text-black ml-auto">(2,124)</span></a></li>
                            </ul>
                        </div>

                        <div class="border p-4 rounded mb-4">

                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Ukuran</h3>
                                <label for="s_sm" class="d-flex">
                                    <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span
                                        class="text-black">Kecil (2,319)</span>
                                </label>
                                <label for="s_md" class="d-flex">
                                    <input type="checkbox" id="s_md" class="mr-2 mt-1"> <span
                                        class="text-black">Sedang (1,282)</span>
                                </label>
                                <label for="s_lg" class="d-flex">
                                    <input type="checkbox" id="s_lg" class="mr-2 mt-1"> <span
                                        class="text-black">Besar (1,392)</span>
                                </label>
                            </div>

                            <div class="mb-4">
                                <h3 class="mb-3 h6 text-uppercase text-black d-block">Warna</h3>
                                <a href="#!" class="d-flex color-item align-items-center">
                                    <span class="bg-danger color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Merah (2,429)</span>
                                </a>
                                <a href="#!" class="d-flex color-item align-items-center">
                                    <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Hijau (2,298)</span>
                                </a>
                                <a href="#!" class="d-flex color-item align-items-center">
                                    <span class="bg-info color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Biru (1,075)</span>
                                </a>
                                <a href="#!" class="d-flex color-item align-items-center">
                                    <span class="bg-primary color d-inline-block rounded-circle mr-2"></span> <span
                                        class="text-black">Ungu (1,075)</span>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>


                <div class="site-section site-blocks-2">
                    <div class="container">
                        <div class="col-md-7 site-section-heading pt-4">
                            <h2>Categories</h2>
                        </div>
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
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade"
                                data-aos-delay="100">
                                <a class="block-2-item" href="#!">
                                    <figure class="image">
                                        <img src="{{ asset('assets/landing-page/images/children.jpg') }}"
                                            alt="" class="img-fluid" />
                                    </figure>
                                    <div class="text">
                                        <span class="text-uppercase">Koleksi</span>
                                        <h3>Anak-anak</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade"
                                data-aos-delay="200">
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
            </div>
        </div>

        @include('layouts.footer')

    </div>
    @include('layouts.scripts')


</body>

</html>
