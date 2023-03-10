<!-- ========== section start ========== -->
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">

            <?= $this->session->flashdata('admin_message'); ?>

            <!-- Content -->
            <div class="container border bg-light p-3 rounded-4">
                <div class="title">
                    <h3><?= $title; ?></h3>
                </div>
                <hr>

                <div class="table-responsive mt-3 p-4">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Bukti</th>
                                <th>Email</th>
                                <th>Paket</th>
                                <th>Tanggal Upload</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            <?php foreach ($payment as $pay) : ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td>
                                    <img src="<?= base_url('assets/images/bukti/' . $pay['bukti']) ?>" width="120px"
                                        alt="">
                                </td>
                                <td><?= $pay['email'] ?></td>
                                <td><?= $pay['package'] ?></td>
                                <td><?= date('Y', $pay['purchase_date']) ?></td>
                                <td>
                                    <a href="" class="badge bg-danger"
                                        onclick="return confirm('apakah anda akan menolak pembayaran ini?')">Tolak</a>
                                    <a href="<?= base_url('admin/Konfirmasi/' . $pay['id_payment']) ?>"
                                        onclick="return confirm('apakah anda akan mengkonfirmasi pembayaran ini?')"
                                        class="badge bg-primary">Konfirmasi</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- End Content -->
        </div>
        <!-- ========== title-wrapper end ========== -->
    </div>
    <!-- end container -->
</section>
<!-- ========== section end ========== -->