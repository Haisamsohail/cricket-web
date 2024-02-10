@include('shared.header');
    <div class="content-wrapper">
        @include('shared.nav.navinnerpages')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-20 pt-md-10 pb-md-22 text-center">
            <div class="row">
                <div class="col-xl-6 mx-auto mb-6">
                    <h1 class="display-1 mb-3">{{$responseData->heading}}</h1>
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
            <p>{{$responseData->content}}</p>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    @include('shared.hero');
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