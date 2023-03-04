<?php

$checkPayment = $this->db->get_where('payment', ['email' => $this->session->userdata('email')])->row_array();

$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();



?>


<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-banner-content">
          <h1 class="wow fadeInUp" data-wow-delay=".2s"><?= $title; ?> 💵</h1>
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
      <div class="col-lg-6">
        <?php if ($checkPayment) : ?>

          <div class="  text-center">

            <div class="card text-center mt-4">
              <div class="card-header">
                Pembayaran Berhasil
              </div>
              <div class="card-body">
                <h5 class="card-title">Terimakasih kepada <?= $user['name'] ?> Telah melakukan
                  pembayaran</h5>
                <p class="card-text">mohon ditunggu karena Proses membutuhkan waktu selama 1x24 jam untuk
                  melakukan konfirmasi informasi selanjutnya akan kami kirim Kepada Email anda:
                  <b> <?= $user['email'] ?></b>
                </p>
                <a href="#" class="badge bg-primary">Chat admin</a>
              </div>
              <div class="card-footer text-muted">
                Terimakasih telah menggunakan produk kami
              </div>
            </div>

          </div>

        <?php else : ?>
          <div class="ud-login-logo text-center mb-3">
            <h1>Total Bayar Rp. 270.000</h1>
            <?= $this->session->flashdata('auth_message') ?>
          </div>



          <?= form_open_multipart('auth/pay'); ?>
          <!-- Tombol Upload Tidak dapat di tekan -->
          <div class="alert alert-primary">
            <table class="w-75 mx-auto">
              <tr class="text-center">
                <td class="text-start"><strong>Mandiri</strong></td>
                <td>:</td>
                <td>1080023334981 Zidan Rafif Pratama</td>
              </tr>
              <tr class="text-center">
                <td class="text-start"><strong>BRI</strong></td>
                <td>:</td>
                <td>1080023334981 Zidan Rafif Pratama</td>
              </tr>
              <tr class="text-center">
                <td class="text-start"><strong>BSI</strong></td>
                <td>:</td>
                <td>1080023334981 Zidan Rafif Pratama</td>
              </tr>
            </table>
          </div>
          <div class="ud-form-group mt-3">
            <div class="image-upload">
              <input type="file" name="bukti" id="logo" onchange="fileValue(this)">
              <label for="logo" class="upload-field" id="file-label">
                <div class="file-thumbnail">
                  <img id="image-preview" src="https://www.btklsby.go.id/images/placeholder/basic.png" alt="Empty Image">
                  <h3 id="filename" class="my-2">
                    Drag and Drop
                  </h3>
                </div>
              </label>

            </div>
            <div class="text-center mt-3">
              <button type="submit" class="btn btn-primary">Upload</button>
            </div>

            <!-- <input type="file" required name="bukti">
          <button type="submit">Kirim</button> -->
            </form>

          <?php endif; ?>
          </div>

          </form>
      </div>
    </div>
  </div>
</section>
<!-- ====== Payment End ====== -->