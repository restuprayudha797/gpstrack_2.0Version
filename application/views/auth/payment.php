<?php

$checkPayment = $this->db->get_where('payment', ['email' => $this->session->userdata('email')])->row_array();



?>


<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-banner-content">
          <h1 class="wow fadeInUp" data-wow-delay=".2s">Payment 💵</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== -->
<!-- ====== Payment Start ====== -->
<section>
  <div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-lg-6 ">
        <div class="ud-login-logo text-center mb-3">
          <h1>Total Bayar Rp. 270.000</h1>
          <?= $this->session->flashdata('auth_message') ?>
        </div>

        <?php if ($checkPayment) : ?>

          <h1>Halaman Tunggu Konfirmasi admin</h1>

        <?php else : ?>

          <?= form_open_multipart('auth/pay'); ?>
          <!-- Tombol Upload Tidak dapat di tekan -->
          <!-- <div class="">
          <p>- Mandiri : 1080023334981 Zidan Rafif Pratama</p>
          <p>- BSI : 7205987007 Zidan Rafif Pratama</p>
          <p>- BRI : 107901012900539 Zidan Rafif Pratama</p>
        </div>
        <div class="ud-form-group mt-3">
          <div class="image-upload">
            <input type="file" name="gambar" id="logo" onchange="fileValue(this)">
            <label for="logo" class="upload-field" id="file-label">
              <div class="file-thumbnail">
                <img id="image-preview" src="https://www.btklsby.go.id/images/placeholder/basic.png" alt="Empty Image">
                <h3 id="filename" class="my-2">
                  Drag and Drop
                </h3>
                <p>Supports JPG, DOC, DOCX, PDF</p>
              </div>
            </label>
            <div class="text-center mt-5">
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>
          </div> -->

          <input type="file" required name="bukti">
          <button type="submit">Kirim</button>
          </form>

        <?php endif; ?>
      </div>

      </form>
    </div>
  </div>
  </div>
</section>
<!-- ====== Payment End ====== -->