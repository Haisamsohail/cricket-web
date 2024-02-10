@include('shared.header');
<div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
        @include('shared.nav.navinnerpages')
        <!-- /.navbar -->
    </header>
    <!-- /header -->
    <section class="wrapper bg-soft-primary">
        <div class="container pt-10 pb-10 pt-md-14 pb-md-10 text-center">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 col-xxl-5 mx-auto">
                    <h1 class="display-1 mb-3">Frequently Asked Questions</h1>
                    <nav class="d-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">FAQs</li>
                        </ol>
                    </nav>
                    <!-- /nav -->
                </div>
                <!-- /column -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light angled upper-end">
        <div class="container py-5 py-md-10">
            <section id="snippet-1" class="wrapper py-10">
                <h2 class="mb-3">Frequently Asked Questions</h2>
                <p class="lead mb-5">If you don't see an answer to your question here, please feel free to contact us
                    with the links below:</p>
                <a href="contact" class="btn btn-primary rounded-pill me-2"
                    target="_blank">Contact Form</a>
                @include('shared.accordion.accordion-wrapper')
                <!--/.accordion -->
            </section>
        </div>
        <!-- /.container -->
    </section>
    <!-- /section -->
</div>
<!-- /.content-wrapper -->
<!-- /.content-wrapper -->
@include('shared.footer');