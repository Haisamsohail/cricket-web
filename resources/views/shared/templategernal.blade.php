@include('shared.header');
<div class="content-wrapper">

    <header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center mt-4">
                <div class="navbar-brand w-100">
                    <a href="./">
                        <img src="{{ URL::asset('public/assets/img/footerlogo.png')}}"
                            srcset="./assets/img/logo@2x.png 2x" alt="" />
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <h3 class="text-white fs-30 mb-0">Sandbox</h3>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Product</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="product">League Management</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="product">Live Scoring App</a>
                                    </li>
                                    <li class="nav-item"><a class="dropdown-item" href="product">Live Stream</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="product">Custom Apparels /
                                            Balls</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="product">LED Scoreboard</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="product">Academy Management</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Resources</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="#">Scoring Guide</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Rank Calculator</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">FAQs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Company</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="#">About</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Media</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Career</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link" href="#" data-bs-toggle="dropdown">Pricing</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="#">Blog</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="#">Match Centre</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                        <div class="offcanvas-footer d-lg-none">
                            <div>
                                <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
                                <br /> 00 (123) 456 78 90 <br />
                                <nav class="nav social social-white mt-4">
                                    <a href="#"><i class="uil uil-twitter"></i></a>
                                    <a href="#"><i class="uil uil-facebook-f"></i></a>
                                    <a href="#"><i class="uil uil-dribbble"></i></a>
                                    <a href="#"><i class="uil uil-instagram"></i></a>
                                    <a href="#"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                        </div>
                        <!-- /.offcanvas-footer -->
                    </div>
                    <!-- /.offcanvas-body -->
                </div>
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        <li class="nav-item d-none d-md-block">
                            <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Login</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-20 pt-md-10 pb-md-22 text-center">
            <div class="row">
                <div class="col-xl-5 mx-auto mb-6">
                    <h1 class="display-1 mb-3">League Management</h1>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    
    <section class="wrapper bg-light">
        <div class="container pb-14 pb-md-5">
            <div class="row text-center mb-12 mb-md-15">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mt-n18 mt-md-n22">
                    <figure><img class="w-auto" src="{{ URL::asset('public/assets/img/illustrations/1.png')}}"
                            srcset="./assets/img/illustrations/i8@2x.png 2x" alt="" /></figure>
                </div>
                <!-- /column -->
            </div>

            <p>CricClubs league management solution provides all the tools necessary for Cricket administrators to
                manage their league with ease. With an instant league website, 5-minute tournament setup, match center,
                automatic points table, comprehensive statistics, mobile app, News, Picture Gallery, Social media
                integrations and much more, CricClubs puts technology at your finger tips!</p>


            <section id="snippet-3" class="wrapper py-10">
                <div class="card">
                    <div class="card-body">
                        <ul
                            class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                            <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab"
                                    href="#tab2-1">
                                    <div><img src="{{ URL::asset('public/assets/img/icons/lineal/rocket.svg')}}"
                                            class="svg-inject icon-svg icon-svg-md text-yellow me-4" alt="" /></div>
                                    <div>
                                        <h4 class="mb-1">Dashboard</h4>
                                    </div>
                                </a> </li>
                            <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab"
                                    href="#tab2-2">
                                    <div><img src="{{ URL::asset('public/assets/img/icons/lineal/savings.svg')}}"
                                            class="svg-inject icon-svg icon-svg-md text-green me-4" alt="" /></div>
                                    <div>
                                        <h4 class="mb-1">Field Management</h4>
                                    </div>
                                </a> </li>
                        </ul>
                        <!-- /.nav-tabs -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab2-1">
                                <p class="mb-0">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla
                                    non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                    eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                    fermentum massa justo sit amet risus. Nullam quis risus eget urna. Curabitur blandit
                                    tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                    et. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem
                                    lacinia quam venenatis vestibulum.</p>
                            </div>
                            <!--/.tab-pane -->
                            <div class="tab-pane fade" id="tab2-2">
                                <p class="mb-0">Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla
                                    non metus auctor fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at
                                    eros. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut
                                    fermentum massa justo sit amet risus. Nullam quis risus eget urna. Curabitur blandit
                                    tempus porttitor. Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                    et. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem
                                    lacinia quam venenatis vestibulum.</p>
                            </div>
                            <!--/.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!--/.card-body -->

                    <!--/.card-footer -->
                    <div id="collapse-3" class="card-footer bg-dark p-0 accordion-collapse collapse">
                        <div class="code-wrapper">
                            <div class="code-wrapper-inner">

                            </div>
                            <!--/.code-wrapper-inner -->
                        </div>
                        <!--/.code-wrapper -->
                    </div>
                    <!--/.card-footer -->
                </div>
                <!--/.card -->
            </section>

            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->

    <section class="wrapper bg-light">
        <div class="container py-14">
            <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                <div class="col-lg-7">
                    <figure><img class="w-auto" src="{{ URL::asset('public/assets/img/illustrations/i5.png')}}"
                            srcset="./assets/img/illustrations/i5@2x.png 2x" alt="" /></figure>
                </div>
                <!--/column -->
                <div class="col-lg-5">
                    <h2 class="fs-15 text-uppercase text-line text-primary text-center mb-3">Get In Touch</h2>
                    <h3 class="display-5 mb-7">Got any questions? Don't hesitate to get in touch.</h3>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Address</h5>
                            <address>Moonshine St. 14/05 Light City, London</address>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">Phone</h5>
                            <p>00 (123) 456 78 90</p>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1">E-mail</h5>
                            <p class="mb-0"><a href="mailto:sandbox@email.com" class="link-body">sandbox@email.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--/column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</div>
<!-- /.content-wrapper -->
@include('shared.footer');