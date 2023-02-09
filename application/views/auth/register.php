<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-banner-content">
          <h1>Create Account</h1>
          <p class="text-light fs-1 fw-lighter pt-3">to get started now!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Banner End ====== -->
<!-- ====== Login Start ====== -->
<section>
  <div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-lg-6 ">
        <div class="ud-login-logo text-center mb-3">
          <h1><?= $title; ?></h1>
        </div>
        <form class="ud-login-form" action="" method="post">
          <div class="ud-form-group">
            <label for="name" class="form-label float-start">Nama</label>
            <input type="text" name="name" id="name" placeholder="Masukkan nama" />
          </div>
          <div class="ud-form-group">
            <label for="email" class="form-label float-start">Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" />
          </div>
          <div class="ud-form-group">
            <label for="contact" class="form-label float-start">No. Telepon</label>
            <input type="text" name="contact" id="contact" placeholder="0801 2345 6789" />
          </div>
          <div class="row">
            <div class="col ud-form-group">
              <label for="password" class="form-label float-start">Password</label>
              <input type="password" name="password" id="password" placeholder="*********" />
            </div>
            <div class="col-sm ud-form-group">
              <label for="password2" class="form-label float-start">Konfirmasi Password</label>
              <input type="password" name="password2" id="password2" placeholder="*********" />
            </div>
          </div>
          <div class="ud-form-group">
            <button type="submit" class="ud-main-btn w-100">Login</button>
          </div>
        </form>
        <div class="text-center">
          <p class="signup-option">
            Already have an account? <a href="<?= base_url('auth') ?>">Login Now</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Login End ====== -->