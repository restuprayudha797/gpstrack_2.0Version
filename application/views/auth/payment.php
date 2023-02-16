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
          <h1>Total Bayar Rp. 200.000</h1>
        </div>
        <form class="ud-login-form" action="<?= base_url('auth/payment') ?>" method="post">
          <div class="">
            <p>- Mandiri : 1080023334981 Zidan Rafif Pratama</p>
            <p>- BSI : 7205987007 Zidan Rafif Pratama</p>
            <p>- BRI : 107901012900539 Zidan Rafif Pratama</p>
          </div>

          <div class="ud-form-group">
            <div class="image-upload">
              <input type="file" name="" id="logo" onchange="fileValue(this)">
              <label for="logo" class="upload-field" id="file-label">
                <div class="file-thumbnail">
                  <img id="image-preview" src="https://www.btklsby.go.id/images/placeholder/basic.png" alt="Empty Image">
                  <h3 id="filename" class="my-2">
                    Drag and Drop
                  </h3>
                  <p>Supports JPG, DOC, DOCX, PDF</p>
                </div>
              </label>
              <div class="text-center">
                <button onclick="removeUpload()" class="btn btn-danger">Hapus</button>
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
            </div>

        </form>
      </div>

      </form>
    </div>
  </div>
  </div>
</section>
<!-- ====== Payment End ====== -->