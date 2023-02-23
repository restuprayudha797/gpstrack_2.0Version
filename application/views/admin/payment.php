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
        <div class="col-md-6">
          <div class="breadcrumb-wrapper mb-30">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                </li>
                <!-- <li class="breadcrumb-item active" aria-current="page">
                  Page
                </li> -->
              </ol>
            </nav>
          </div>
        </div>
      </div>

      <!-- Content -->

      <table class="table table-striped table-hover text-center">

        <tr>
          <td>No.</td>
          <td>Bukti</td>
          <td>Email</td>
          <td>Paket</td>
          <td>Tanggal Upload</td>
          <td>Aksi</td>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($payment as $pay) : ?>
          <tr>
            <td><?= $i ?></td>
            <td>
              <img src="<?= base_url('assets/images/bukti/' . $pay['bukti']) ?>" width="120px" alt="">
            </td>
            <td><?= $pay['email'] ?></td>
            <td><?= $pay['package'] ?></td>
            <td><?= date('Y', $pay['purchase_date']) ?></td>
            <td>
              <a href="" class="btn btn-danger">Tolak</a>
              <a href="<?= base_url('admin/Konfirmasi/' . $pay['id_payment']) ?>" class="btn btn-primary">Konfirmasi</a>
            </td>
          </tr>
          <?php $i++ ?>
        <?php endforeach; ?>

      </table>


      <!-- End Content -->
    </div>
    <!-- ========== title-wrapper end ========== -->
  </div>
  <!-- end container -->
</section>
<!-- ========== section end ========== -->