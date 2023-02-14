<!-- ====== Banner Start ====== -->
<section class="ud-page-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="ud-banner-content">
          <h1 class="wow fadeInUp" data-wow-delay=".2s">Forget your password?🤔</h1>
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
          <p class="h6 mb-4 alert alert-warning">No problem! Enter your email and we'll send you instructions to reset your password.</p>
        </div>
        <form class="ud-login-form" action="<?= base_url('auth/forgetPass') ?>" method="post">
          <div class="ud-form-group">
            <label for="email" class="form-label float-start">Email</label>
            <input type="text" name="email" id="email" autofocus autocomplete="OFF" value="<?php echo set_value('email'); ?>" placeholder="example@gmail.com" />
            <i class="text-danger fw-light">
              <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </i>
          </div>
          <div class="ud-form-group">
            <button type="submit" class="ud-main-btn w-100">Send reset instructions</button>
          </div>

        </form>
        <div class="text-center">
          <p class="signup-option">
            Can't reset your password? <a href="#">Let us know</a> and we'll help!
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Login End ====== -->