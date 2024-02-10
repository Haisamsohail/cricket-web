<header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-logo transparent position-absolute navbar-dark">
        <div class="container justify-content-between align-items-center">
          <div class="d-flex flex-row w-100 justify-content-between align-items-center d-lg-none">
            <div class="navbar-brand"><a href="#">
                <img class="logo-dark" src="https://cricclubs.com/" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
                <img class="logo-light" src="https://cricclubs.com/utilsv2/home/img/cricclubs-logo.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" style=" margin: auto; width: 50%; "/>
              </a></div>
            <div class="navbar-other ms-auto">
              <ul class="navbar-nav flex-row align-items-center">
                <li class="nav-item d-lg-none">
                  <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
              </ul>
              <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
          </div>
          <!-- /.d-flex -->
          <div class="mt-2 navbar-collapse-wrapper d-flex flex-row align-items-center w-100">
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
              <div class="offcanvas-header mx-lg-auto order-0 order-lg-1 d-lg-flex px-lg-15">
                <a href="./" class="transition-none d-none d-lg-flex">
                  <img class="logo-dark" src="{{ URL::asset('public/assets/img/footerlogo.png')}}" srcset="{{ URL::asset('public/assets/img/logo-dark@2x.png 2x')}}" alt="" />
                  <img class="logo-light" src="https://cricclubs.com/utilsv2/home/img/cricclubs-logo.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" style=" margin: auto; width: 50%; "/></a>
                <h3 class="text-white fs-30 mb-0 d-lg-none">Sandbox</h3>
                <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="w-100 order-1 order-lg-0 d-lg-flex offcanvas-body">
                <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">

                @if ($productActiveList != 0)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Product</a>
                    <ul class="dropdown-menu">
                      @foreach($productActiveList as $key => $data)
                      <li class="nav-item"><a class="dropdown-item" href="{{ URL::to('product/'.$data->id) }}">{{$data->heading}}</a></li>
                      @endforeach
                    </ul>
                  </li>
                @endif

                  
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
                 
                </ul>
                <!-- /.navbar-nav -->
              </div>
              <div class="w-100 order-3 order-lg-2 d-lg-flex offcanvas-body">
                <ul class="navbar-nav me-lg-auto">
                  <li class="nav-item dropdown dropdown-mega">
                    <a class="nav-link" href="pricing" >Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">More</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="pricing">Blog</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="#">Match Centre</a></li>
                    </ul>
                  </li>
                  <li class="nav-item d-md-block">
                    <a href="#" class="btn btn-sm btn-white rounded-pill mt-3" data-bs-toggle="modal" data-bs-target="trueLink">Sign In</a>
                  </li>
                </ul>
                <!-- /.navbar-nav -->
              </div>
              <div class="offcanvas-body d-lg-none order-4 mt-auto">
                <div class="offcanvas-footer">
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
              </div>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>