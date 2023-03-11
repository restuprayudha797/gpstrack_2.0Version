  <!-- ====== Header Start ====== -->
  <header class="ud-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?= base_url('home') ?>">
              <img class="py-3" src="<?= base_url('assets/img/logo-dark.webp') ?>" alt="Logo" />
            </a>
            <!-- Hamburger -->
            <button class="navbar-toggler">
              <span class="toggler-icon"> </span>
              <span class="toggler-icon"> </span>
              <span class="toggler-icon"> </span>
            </button>
            <!-- End Hamburger -->

            <div class="navbar-collapse">
              <ul id="nav" class="navbar-nav mx-auto">
                <?php if ($title == "Home Page") : ?>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#features">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#team">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="<?= base_url('auth') ?>">Sign In</a>
                  </li>
                <?php else : ?>
                  <li class="nav-item">
                    <a href="<?= base_url('home') ?>#home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('home') ?>#features">Features</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('home') ?>#pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('home') ?>#team">Team</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url('home') ?>#contact">Contact</a>
                  </li>
                  

                <?php endif; ?>
                <!-- <li class="nav-item nav-item-has-children">
                  <a href="javascript:void(0)"> Pages </a>
                  <ul class="ud-submenu">
                    <li class="ud-submenu-item">
                      <a href="about.html" class="ud-submenu-link">
                        About Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="pricing.html" class="ud-submenu-link">
                        Pricing Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="contact.html" class="ud-submenu-link">
                        Contact Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="blog.html" class="ud-submenu-link">
                        Blog Grid Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="blog-details.html" class="ud-submenu-link">
                        Blog Details Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="login.html" class="ud-submenu-link">
                        Sign In Page
                      </a>
                    </li>
                    <li class="ud-submenu-item">
                      <a href="404.html" class="ud-submenu-link">404 Page</a>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </div>

            <?php if ($this->session->userdata('email')) : ?>
              <div class="navbar-btn d-none d-sm-inline-block">
                <a class="ud-main-btn ud-white-btn" href="<?= base_url('auth') ?>">
                  Dashboard
                </a>
                <a class=" btn btn-danger" href="<?= base_url('logout') ?>">
                  Logout
                </a>
              </div>

            <?php else : ?>
              <div class="navbar-btn d-none d-sm-inline-block">
                <a class="ud-main-btn ud-white-btn" href="<?= base_url('auth') ?>">
                  Sign In
                </a>
              </div>
            <?php endif; ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ====== Header End ====== -->