<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-banner-content">
          <h1 class="wow fadeInUp" data-wow-delay=".2s">Welcome👋</h1>
          <p class="text-light fs-1 fw-lighter pt-3 wow fadeInUp" data-wow-delay=".25s">Glad to see you!</p>
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
      <div class="col-lg-4">
        <div class="ud-login-logo text-center mb-3">
          <h1><?= $title; ?></h1>
        </div>
        <form class="ud-login-form" action="" method="post">
          <div class="ud-form-group">
            <label for="email" class="form-label float-start">Email</label>
            <input type="email" name="email" id="email" placeholder="example@gmail.com" />
          </div>
          <div class="ud-form-group">
            <label for="password" class="form-label float-start">Password</label>
            <input type="password" name="password" id="password" placeholder="*********" />
          </div>
          <div class="ud-form-group">
            <button type="submit" class="ud-main-btn w-100">Login</button>
          </div>
        </form>
        <div class="text-center">
          <a class="forget-pass" href="javascript:void(0)">
            Forget Password?
          </a>
          <p class="signup-option">
            Don't have an account? <a href="<?= base_url('auth/register') ?>">Sign Up</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Login End ====== -->