<!-- ========== section start ========== -->
<section class="section">
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title mb-30">
            <h2><?= $title; ?></h2>
          </div>
        </div>
        <!-- end col -->
        <div class="col-md-6">
          <div class="breadcrumb-wrapper mb-30">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#0">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Power
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->

      <!-- Content -->
      <div class="container">
        <div class="power-switch mx-auto mt-4 d-block">
          <input type="checkbox" />
          <div class="button">
            <svg class="power-off">
              <use xlink:href="#line" class="line" />
              <use xlink:href="#circle" class="circle" />
            </svg>
            <svg class="power-on">
              <use xlink:href="#line" class="line" />
              <use xlink:href="#circle" class="circle" />
            </svg>
          </div>
          <div class="tombol text-center">
            <h1></h1>
          </div>
        </div>
      </div>

      <!-- SVG -->
      <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" id="line">
          <line x1="75" y1="34" x2="75" y2="58" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 150" id="circle">
          <circle cx="75" cy="80" r="35" />
        </symbol>
      </svg>
      <!-- End Content -->

      <!-- ========== title-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>
<!-- ========== section end ========== -->