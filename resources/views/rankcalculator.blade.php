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
            <h1 class="display-1 mb-3">Rank Calculator</h1>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Rank Calculator</li>
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
        <h2 class="display-4 mb-3">Player Ranking Calculation</h2>
        @include('shared.accordion.accordion-wrapper')
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
 <!-- /.content-wrapper -->
@include('shared.footer');