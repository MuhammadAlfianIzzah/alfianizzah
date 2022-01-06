<x-main-layout>
    <div class="container py-5 header">
        <div class="row">
            <div class="col-12 col-lg-6  d-flex justify-content-center" style="max-height: 400px" data-aos="fade-up"
                data-aos-delay="300" data-aos-easing="linear">
                <img style="height: 100%;" src="{{ asset('assets/img/alfianizzah3.png') }}" alt="header"
                    class="img-fluid">
            </div>
            <div data-aos="fade-right" data-aos-delay="600" data-aos-duration="1000"
                class="col-12 right col-lg-6 d-flex align-items-start flex-column justify-content-center">
                <p class="badge bg-danger">Hi, I am</p>
                <h1>Muhammad alfian izzah</h1>
                <p class="text-muted">Saya seorang Web developer,<br> saya mahasiswa jurusan ilmu komputer</p>
                <a href="https://pasarakyat.digital/" target="_blank" class="btn btn-success"
                    style="border: 2px dashed white">https://pasarakyat.digital/</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="slider owl-carousel">
            @forelse ($patners as $p)
                <div><img src="{{ asset("storage/$p->picture") }}" alt="{{ $p->nama }}" class="img-fluid"
                        style="max-height: 60px;object-fit: contain"></div>
            @empty
                {{-- <div class="alert alert-warning me-2">
                    <h5>Comming soon</h5>
                </div>
                <div class="alert alert-warning">
                    <h5>Comming soon</h5>
                </div> --}}

            @endforelse
        </div>
    </div>
    <div class="bg-dark text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-dark">
                    <div class="row">
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as
                                                a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as
                                                a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="..." class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as
                                                a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-2">
                    <h1>Top Service</h1>
                    <h1>Top Service</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam eos sint sapiente porro
                        dolorem
                        dicta magnam commodi labore deserunt quas.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore neque laborum assumenda dicta,
                        minus qui reiciendis nam magni fugit molestiae rem? Reiciendis sapiente aperiam totam expedita
                        provident nihil id, doloribus sed, vel possimus, minima vitae. Nostrum accusantium magni tenetur
                        quam?</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container section-testimoni">
        <div class="container">
            <h2 class="section-header text-center">
                Project complete
            </h2>
            <p class="section-description text-center">
                berikut beberapa project yang telah saya selesaikan ...
            </p>

            <div class="testimoni-item owl-carousel owl-theme">

                <div class="item">
                    <div class="card">

                        <a class="card-header p-0" style="height: 300px"
                            href="https://images.pexels.com/photos/1447885/pexels-photo-1447885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            data-lightbox="models" data-title="Caption1">
                            <img style="height: 100%;object-fit: cover;width: 100%;object-position: top"
                                src="https://images.pexels.com/photos/1447885/pexels-photo-1447885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                        </a>

                        <div class="card-body border-0">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="card">

                        <a class="card-header p-0" style="height: 300px"
                            href="https://images.pexels.com/photos/1447885/pexels-photo-1447885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            data-lightbox="models" data-title="Caption1">
                            <img style="height: 100%;object-fit: cover;width: 100%;object-position: top"
                                src="https://images.pexels.com/photos/1447885/pexels-photo-1447885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                        </a>

                        <div class="card-body border-0">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
                <div class="item">
                    <div class="card">

                        <a class="card-header p-0" style="height: 300px"
                            href="https://images.pexels.com/photos/1447885/pexels-photo-1447885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                            data-lightbox="models" data-title="Caption1">
                            <img style="height: 100%;object-fit: cover;width: 100%;object-position: top"
                                src="https://images.pexels.com/photos/1447885/pexels-photo-1447885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" />
                        </a>

                        <div class="card-body border-0">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section-keuntungan bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 intro-text col-12 d-flex justify-content-center" style="border: 4px dashed white">
                    <img src="{{ asset('assets/img/alfianizzahheader.png') }}"
                        class="d-none d-md-block img-line img-fluid" style="object-fit: cover" height="450" alt="">
                </div>
                <div class="col-12 col-lg-9">
                    <h2 class="section-header">
                        Saya tertarik dengan ...
                    </h2>

                    <div class="row keuntungan-item-container">
                        <div class="item-keuntungan owl-carousel owl-theme py-3">
                            <div class="item">
                                <div class="col-12 mb-3">
                                    <div class="card bg-dark">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/img/combination.png') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="content-body mt-3">
                                        <h4>Kerja sama</h4>
                                        <p>Saya tertarik dengan tawaran kerja sama, misalnya dalam pembangunan startup,
                                            sabagai bagian dari bisnis dan lainnya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-12 mb-3">
                                    <div class="card bg-dark">
                                        <div class="card-body">
                                            <img src="{{ asset('assets/img/tech.png') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="content-body mt-3">
                                        <h4>Mengajar</h4>
                                        <p>Saya tertarik dengan tawaran mengajar, saya cukup berpengalaman dalam hal
                                            mengajar</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-tim">
        <div class="container   ">
            <h2 class="section-header text-center">
                Skill's & Technology
            </h2>
            <p class="section-description text-center">
                berikut skill dan teknologi yang biasa saya gunakan...
            </p>
            <div class="row mt-4">
                <div class="col-lg-1 col-2" style="max-height: 90px">
                    <img style="object-fit: cover;height: 100%;width: 100%;"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/640px-HTML5_logo_and_wordmark.svg.png"
                        alt="" class="img-fluid">
                </div>
                <div class="col-lg-1 col-2" style="max-height: 90px">
                    <img style="object-fit: cover;height: 100%;width: 100%;"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/800px-CSS3_logo_and_wordmark.svg.png"
                        alt="" class="img-fluid">
                </div>
                <div class="col-lg-1 col-2" style="max-height: 90px">
                    <img style="object-fit: cover;height: 100%;width: 100%;"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/800px-CSS3_logo_and_wordmark.svg.png"
                        alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="py-1" style="background-color: rgb(41, 38, 38)">
        <div class="container text-center mt-5">
            <h2 class="text-muted">Apa Kata <span class="text-primary">Mereka</span>?</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, accusantium
                officiis?
            </p>
        </div>
        <div class="container mt-4">
            <div class="owl-carousel">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.pexels.com/photos/8169/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="img-fluid h-100" style="object-fit: cover" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-quote-right"></i></h5>
                                <p class="card-text text-muted">This is a wider card with supporting text below as a
                                    natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <p class="m-0 h6">~alfianizzah</p>
                                <p class="text-muted m-0">CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <img src="https://images.pexels.com/photos/8169/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="img-fluid  h-100 rounded-start" style="object-fit: cover" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-quote-right"></i></h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <p class="m-0 h6">~alfianizzah</p>
                                <p class="text-muted m-0">CEO</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.pexels.com/photos/8169/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                                class="img-fluid  h-100 rounded-start" style="object-fit: cover" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins
                                        ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    @push('script')
        <script>
            AOS.init();
            $('.tim-item').owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            })
            $(document).ready(function() {
                $(".slider").owlCarousel({
                    responsive: {
                        0: {
                            items: 3,
                            nav: true
                        },
                        600: {
                            items: 2,
                            nav: false
                        },
                        1000: {
                            items: 5,
                            nav: true,
                            loop: false
                        }
                    }
                });
            });
            $('.testimoni-item').owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 2
                    }
                }
            })
            // $(document).ready(function() {
            //     $(".owl-carousel").owlCarousel({
            //         loop: true,
            //         margin: 10,
            //         responsiveClass: true,

            //         responsive: {
            //             0: {
            //                 items: 1,
            //                 nav: true
            //             },
            //             600: {
            //                 items: 2,
            //                 nav: false
            //             },
            //             1000: {
            //                 items: 2,
            //                 nav: true,
            //                 loop: false
            //             }
            //         }
            //     });
            // });
            $('.item-keuntungan').owlCarousel({
                loop: false,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        </script>
    @endpush
</x-main-layout>
