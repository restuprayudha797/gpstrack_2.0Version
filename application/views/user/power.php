<?php

$email = $this->session->userdata('email');

$emailName = explode('@', $email);

$dbStateName = $emailName[0];


$active_check = $this->db->get_where('user_active', ['email' => $email])->row_array();


$waktuSekarang = time();


$states = $this->db->get('ledstatus_' . $dbStateName)->result_array();

foreach ($states as $state) {
  $colorState = $state['state'];
}









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

      <?php if ($waktuSekarang >= $active_check['time_out']) : ?>

        <h3> Paket anda sudah berakhir silahkan melakukan check out kembali</h3>

      <?php else : ?>
        <div class="container">

          <div class="container p-5 border text-center">

            <div class="titile">
              <h6></h6>Klick tombol dibawah ini untuk mengidupkan atau mematikan motor</h6>
            </div>
            <?php if ($colorState == 1) : ?>
              <div class="gambar mt-3">
                <a href="<?= base_url('user/off') ?>">
                  <img src="<?= base_url('assets/images/power/on.png') ?>" width="100px" alt="">
                </a>
                <br>
                <b class="mt-3">Hidup</b>
              </div>

            <?php else : ?>

              <div class="gambar mt-3">
                <a href="<?= base_url('user/on') ?>">
                  <img src="<?= base_url('assets/images/power/off.png') ?>" width="100px" alt="">
                </a>
                <br>
                <b class="mt-3">Mati</b>
              </div>

            <?php endif ?>


          </div>



        <?php endif; ?>
        <!-- End Content -->

        <!-- ========== title-wrapper end ========== -->
        </div>
        <!-- end container -->
</section>
<!-- ========== section end ========== -->