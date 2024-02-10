<header class="wrapper bg-soft-primary">
        <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
            <div class="container flex-lg-row flex-nowrap align-items-center mt-4">
                <div class="navbar-brand w-100">
                    <a href="{{ url('/') }}">
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
                                    <li class="nav-item"><a class="dropdown-item" href="scoringguide">Scoring Guide</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="rankcalculator">Rank Calculator</a></li>
                                    <li class="nav-item"><a class="dropdown-item" href="faqs">FAQs</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Company</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="about">About</a></li>
                                    <!-- <li class="nav-item"><a class="dropdown-item" href="#">Media</a></li> -->
                                    <!-- <li class="nav-item"><a class="dropdown-item" href="#">Career</a></li> -->
                                    <li class="nav-item"><a class="dropdown-item" href="contact">Contact</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown dropdown-mega">
                                <a class="nav-link" href="pricing">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="dropdown-item" href="pricing">Blog</a></li>
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