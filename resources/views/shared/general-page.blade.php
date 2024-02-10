<div class="content-wrapper">
    @include('shared.nav.nav');

    <!-- <section class="wrapper bg-gradient-primary">
      <div class="container pt-10 pt-md-14 pb-8 text-center">
        <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
          <div class="col-lg-7">
            <figure><img class="w-auto" src="{{ URL::asset('public/assets/img/illustrations/i2.png')}}" srcset="./assets/img/illustrations/i2@2x.png 2x" alt="" /></figure>
          </div>
          <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-5 text-center text-lg-start">
            <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Grow Your Business with Our Solutions.</h1>
            <p class="lead fs-lg mb-7">We help our clients to increase their website traffic, rankings and visibility in search results.</p>
            <span><a class="btn btn-primary rounded-pill me-2">Try It For Free</a></span>
          </div>
        </div>
      </div>
    </section> -->

    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-300"
        data-image-src="{{ URL::asset('public/assets/img/photos/home-bg.png')}}">
        <div class="container pt-17 pb-19 pt-md-18 pb-md-17 text-center">
            <div class="row">
                <div class="col-lg-8 col-xl-7 col-xxl-8 mx-auto" data-cues="slideInDown" data-group="page-title">
                    <h1 class="display-1 text-white fs-60 mb-4 px-md-15 px-lg-0">Cricket like never before .
                        <!-- <span class="underline-3 style-2 yellow">BEFORE</span> -->
                    </h1>
                    <p class="lead fs-24 text-white lh-sm mb-7 mx-md-13 mx-lg-10">CricClubs is one of the leading
                        cricket technology platforms which helps all the stakeholders of cricket irrespective of their
                        roles such as administrator, player, scorer, umpires,fans to experience cricket like never
                        before.</p>
                    <div>
                        <a class="btn btn-white rounded mb-10 mb-xxl-5">Read More</a>
                    </div>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="overflow-hidden">
            <div class="divider text-light mx-n2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60">
                    <path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z" />
                </svg>
            </div>
        </div>
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container pb-15 pb-md-17">
            <div class="row gx-md-5 gy-5 mt-n19 mb-14 mb-md-17">

            @if ($productActiveList != 0)
                @foreach($productActiveList as $key => $data)
                    <div class="col-md-6 col-xl-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <i class="{{$data->icon}} bg-pale-primary text-primary rounded-circle p-1"></i>
                                <h4>{{$data->heading}}</h4>
                                <p class="mb-2">{{\Illuminate\Support\Str::limit($data->content, 100)}}</p>
                                <a href="{{ URL::to('product/'.$data->id) }}" class="more hover link-fuchsia">Learn More</a>
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                @endforeach
            @endif
                
                <!--/column -->
            </div>
            <!--/.row -->
            <div class="row">
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2 mx-auto text-center">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Why Choose CricClubs?</h2>
                    <h3 class="display-3 mb-10 px-xl-10 px-xxl-15">Here are a few <span
                            class="underline-3 style-2 yellow">reasons</span> why our customers choose CricClubs.</h3>
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
            <ul
                class="nav nav-tabs nav-tabs-bg nav-tabs-shadow-lg d-flex justify-content-between nav-justified flex-lg-row flex-column">
                <li class="nav-item"> <a class="nav-link d-flex flex-row active" data-bs-toggle="tab" href="#tab2-1">
                        <div><img src="{{ URL::asset('public/assets/img/icons/solid/bulb.svg')}}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-fuchsia me-4" alt="" /></div>
                        <div>
                            <h4>Collect Ideas</h4>
                            <p>Duis mollis commodo luctus cursus commodo tortor mauris.</p>
                        </div>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-2">
                        <div><img src="{{ URL::asset('public/assets/img/icons/solid/compare.svg')}}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-violet me-4" alt="" /></div>
                        <div>
                            <h4>Data Analysis</h4>
                            <p>Vivamus sagittis lacus augue fusce dapibus tellus nibh.</p>
                        </div>
                    </a> </li>
                <li class="nav-item"> <a class="nav-link d-flex flex-row" data-bs-toggle="tab" href="#tab2-3">
                        <div><img src="{{ URL::asset('public/assets/img/icons/solid/delivery-box.svg')}}"
                                class="svg-inject icon-svg icon-svg-sm solid-mono text-green me-4" alt="" /></div>
                        <div>
                            <h4>Finalize Product</h4>
                            <p>Vestibulum ligula porta felis maecenas faucibus mollis.</p>
                        </div>
                    </a> </li>
            </ul>
            <!-- /.nav-tabs -->
            <div class="tab-content mt-6 mt-lg-8">
                <div class="tab-pane fade show active" id="tab2-1">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6">
                            <figure class="rounded shadow-lg"><img
                                    src="{{ URL::asset('public/assets/img/photos/se5.jpg')}}"
                                    srcset="./assets/img/photos/se5@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="mb-3">Collect Ideas</h2>
                            <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
                                fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus,
                                tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                                amet risus. Nullam quis risus eget urna.</p>
                            <ul class="icon-list bullet-bg bullet-soft-fuchsia">
                                <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                                <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                                <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                            </ul>
                            <a href="#" class="btn btn-fuchsia mt-2">Learn More</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab2-2">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <figure class="rounded shadow-lg"><img
                                    src="{{ URL::asset('public/assets/img/photos/se6.jpg')}}"
                                    srcset="./assets/img/photos/se6@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="mb-3">Data Analysis</h2>
                            <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
                                fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus,
                                tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                                amet risus. Nullam quis risus eget urna.</p>
                            <ul class="icon-list bullet-bg bullet-soft-violet">
                                <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                                <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                                <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                            </ul>
                            <a href="#" class="btn btn-violet mt-2">Learn More</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.tab-pane -->
                <div class="tab-pane fade" id="tab2-3">
                    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
                        <div class="col-lg-6">
                            <figure class="rounded shadow-lg"><img
                                    src="{{ URL::asset('public/assets/img/photos/se7.jpg')}}"
                                    srcset="./assets/img/photos/se7@2x.jpg 2x" alt=""></figure>
                        </div>
                        <!--/column -->
                        <div class="col-lg-6">
                            <h2 class="mb-3">Finalize Product</h2>
                            <p>Etiam porta sem malesuada magna mollis euismod. Donec ullamcorper nulla non metus auctor
                                fringilla. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus,
                                tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                                amet risus. Nullam quis risus eget urna.</p>
                            <ul class="icon-list bullet-bg bullet-soft-green">
                                <li><i class="uil uil-check"></i>Aenean eu leo quam. Pellentesque ornare.</li>
                                <li><i class="uil uil-check"></i>Nullam quis risus eget urna mollis ornare.</li>
                                <li><i class="uil uil-check"></i>Donec id elit non mi porta gravida at eget.</li>
                            </ul>
                            <a href="#" class="btn btn-green mt-2">Learn More</a>
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                </div>
                <!--/.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-gray">
        <div class="container py-15 py-md-17 pb-md-19 mb-10">
            <div class="row align-items-center gy-8 mb-13">
                <div class="col-lg-7 text-center text-lg-start">
                    <h2 class="fs-16 text-uppercase text-muted mb-3">Save Time and Money</h2>
                    <h3 class="display-3 mb-0 pe-xl-10 pe-xxl-15">Words from our <span
                            class="underline-3 style-2 yellow">clients</span></h3>
                </div>
                <!-- /column -->
                <div class="col-lg-5">
                    <div class="row gy-6 text-center">
                        <div class="col-md-6">
                            <div class="progressbar semi-circle fuchsia" data-value="95"></div>
                            <h4 class="mb-0">Customer Satisfaction</h4>
                        </div>
                        <!-- /column -->
                        <div class="col-md-6">
                            <div class="progressbar semi-circle orange" data-value="80"></div>
                            <h4 class="mb-0">Increased Revenue</h4>
                        </div>
                        <!-- /column -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
        <div class="container py-16 py-md-10">
            <div class="card shadow-lg mt-n21 mt-md-n23">
                <div class="row gx-0">
                    <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start"
                        data-image-src="{{ URL::asset('public/assets/img/photos/tm2.jpg')}}">
                    </div>
                    <!--/column -->
                    <div class="col-lg-6">
                        <div class="p-10 p-md-11 px-lg-13 py-lg-14">
                            <div class="swiper-container dots-closer mb-6" data-margin="30" data-dots="true">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor. Vestibulum ligula porta felis euismod semper. Cras justo
                                                    odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Coriss Ambady</h5>
                                                        <p class="mb-0">Financial Analyst</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor. Vestibulum ligula porta felis euismod semper. Cras justo
                                                    odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
                                                    <div class="info ps-0">
                                                        <h5 class="mb-1">Cory Zamora</h5>
                                                        <p class="mb-0">Marketing Specialist</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                        <!--/.swiper-slide -->
                                        <div class="swiper-slide text-center">
                                            <span class="ratings five mt-4 mb-3"></span>
                                            <blockquote class="border-0 fs-lg text-center">
                                                <p>“Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
                                                    auctor. Vestibulum ligula porta felis euismod semper. Cras justo
                                                    odio.”</p>
                                                <div class="blockquote-details justify-content-center text-center">
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
                        <!--/div -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</div>