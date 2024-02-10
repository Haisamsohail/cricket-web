@include('shared.header');
<div class="content-wrapper">
    @include('shared.nav.navinnerpages')
    <section class="wrapper bg-gray">
        <div class="container pt-10 pt-md-14 text-center">
            <div class="row">
                <div class="col-xl-6 mx-auto">
                    <h1 class="display-1 mb-4">Hello! This is CricClubs</h1>
                    <p class="lead fs-lg mb-0">A company turning ideas into beautiful things.</p>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <figure class="position-absoute" style="bottom: 0; left: 0; z-index: 2;"><img
                src="{{ URL::asset('public/assets/img/photos/bg12.jpg')}}" alt="" /></figure>
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end lower-end">
        <div class="container py-14 py-md-16">
            <div class="row gx-lg-8 gx-xl-12 gy-10 mb-14 mb-md-17 align-items-center">
                <div class="col-lg-6 position-relative order-lg-2">
                    <div class="shape bg-dot primary rellax w-16 h-20" data-rellax-speed="1"
                        style="top: 3rem; left: 5.5rem"></div>
                    <div class="overlap-grid overlap-grid-2">
                        <div class="item">
                            <figure class="rounded shadow"><img
                                    src="{{ URL::asset('public/assets/img/photos/about2.jpg')}}"
                                    srcset="./assets/img/photos/about2@2x.jpg 2x" alt=""></figure>
                        </div>
                        <div class="item">
                            <figure class="rounded shadow"><img
                                    src="{{ URL::asset('public/assets/img/photos/about3.jpg')}}"
                                    srcset="./assets/img/photos/about3@2x.jpg 2x" alt=""></figure>
                        </div>
                    </div>
                </div>
                <!--/column -->
                <div class="col-lg-6">
                    <img src="{{ URL::asset('public/assets/img/icons/lineal/megaphone.svg')}}"
                        class="svg-inject icon-svg icon-svg-md mb-4" alt="" />
                    <h2 class="display-4 mb-3">Who Are We?</h2>
                    <p class="mb-6">
                        CricClubs one of the leading cricket technology platform helps the league administrator,
                        players, team managers, to manage, follow and experience Cricket Like Never Before. CricClubs is
                        working closely with 18+ NGB along with 16,000+ leagues, 25,000+ tournaments, 1Mn+ players in
                        57+ countries and growing daily. CricClubs is known for ease of navigation, comprehensive league
                        management and is absolutely loved by our users.</p>
                    <!--/.row -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-16 pb-14 pb-md-0">
            <div class="row gx-lg-8 gx-xl-0 align-items-center">
                <div class="col-md-5 col-lg-5 col-xl-4 offset-xl-1 d-none d-md-flex position-relative align-self-end">
                    <div class="shape rounded-circle bg-pale-primary rellax w-21 h-21 d-md-none d-lg-block"
                        data-rellax-speed="1" style="top: 7rem; left: 1rem"></div>
                    <figure><img src="{{ URL::asset('public/assets/img/photos/co1.png')}}"
                            srcset="./assets/img/photos/co1@2x.png 2x" alt=""></figure>
                </div>
                <!--/column -->
                <div class="col-md-7 col-lg-6 col-xl-6 col-xxl-5 offset-xl-1">
                    <div class="swiper-container dots-start dots-closer mt-md-10 mb-md-15" data-margin="30"
                        data-dots="true">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <blockquote class="icon fs-lg">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur
                                            nulla dapibus curabitur blandit.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Coriss Ambady</h5>
                                                <p class="mb-0">Financial Analyst</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="icon fs-lg">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur
                                            adipiscing dapibus curabitur blandit.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Cory Zamora</h5>
                                                <p class="mb-0">Marketing Specialist</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                                <div class="swiper-slide">
                                    <blockquote class="icon fs-lg">
                                        <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.
                                            Vestibulum ligula porta felis euismod semper. Cras justo odio consectetur
                                            adipiscing dapibus curabitur blandit.”</p>
                                        <div class="blockquote-details">
                                            <div class="info ps-0">
                                                <h5 class="mb-1">Nikolas Brooten</h5>
                                                <p class="mb-0">Sales Manager</p>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!--/.swiper-slide -->
                            </div>
                            <!--/.swiper-wrapper -->
                        </div>
                        <!-- /.swiper -->
                    </div>
                    <!-- /.swiper-container -->
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->


    @include('shared.professionalteam')
    
    <section class="wrapper bg-soft-primary">
        <div class="container py-14 py-md-16">
            <div class="row mb-10">
                <div class="col-xl-10 mx-auto">
                    <div class="row align-items-center counter-wrapper gy-6 text-center">
                        <div class="col-md-3">
                            <img src="{{ URL::asset('public/assets/img/icons/lineal/check.svg')}}"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">7518</h3>
                            <p>Completed Projects</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="{{ URL::asset('public/assets/img/icons/lineal/user.svg')}}"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">3472</h3>
                            <p>Satisfied Customers</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="{{ URL::asset('public/assets/img/icons/lineal/briefcase-2.svg')}}"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">2184</h3>
                            <p>Expert Employees</p>
                        </div>
                        <!--/column -->
                        <div class="col-md-3">
                            <img src="{{ URL::asset('public/assets/img/icons/lineal/award-2.svg')}}"
                                class="svg-inject icon-svg icon-svg-lg text-primary mb-3" alt="" />
                            <h3 class="counter">4523</h3>
                            <p>Awards Won</p>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</div>
<!-- /.content-wrapper -->
@include('shared.footer')