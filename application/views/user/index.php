<?php

$email = $this->session->userdata('email');

$active_check = $this->db->get_where('payment', ['email' => $email])->row_array();

$waktuSekarang = time();



?>

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
                <!-- <li class="breadcrumb-item active" aria-current="page">
                  Page
                </li> -->
              </ol>
            </nav>
          </div>
        </div>
        <!-- end col -->
      </div>
      <!-- end row -->

      <!-- Content -->
      <?php if ($waktuSekarang >= $active_check['time_out']) : ?>

        <h3> Paket anda sudah berakhir silahkan melakukan check out kembali</h3>



      <?php else : ?>

        <h3>Berakhir Hingga : <?= date('d - F - Y', $active_check['time_out']) ?></h3>


      <?php endif; ?>


      <!-- End Content -->
    </div>
    <!-- ========== title-wrapper end ========== -->
  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->