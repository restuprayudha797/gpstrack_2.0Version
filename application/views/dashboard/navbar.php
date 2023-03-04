<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">
    <!-- ========== header start ========== -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-6">
                    <div class="header-left d-flex align-items-center">
                        <div class="menu-toggle-btn mr-20">
                            <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                                <i class="lni lni-chevron-left me-2"></i> Menu
                            </button>
                        </div>
                        <div class="header-search d-none d-md-flex">
                            <form action="#">
                                <input type="text" placeholder="Search..." />
                                <button><i class="lni lni-search-alt"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-6">
                    <div class="header-right">
                        <!-- notification start -->
                        <div class="notification-box ml-15 d-none d-md-flex">
                            <button class="dropdown-toggle" type="button" id="notification" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="lni lni-alarm"></i>
                                <span>2</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notification">
                                <li>
                                    <a href="#0">
                                        <div class="image">
                                            <img src="<?= base_url('assets/img/logo-dark.webp') ?>" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6>
                                                John Doe
                                                <span class="text-regular">
                                                    comment on a product.
                                                </span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consect etur adipiscing
                                                elit Vivamus tortor.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <div class="image">
                                            <img src="<?= base_url('assets/img/logo-dark.webp') ?>" alt="" />
                                        </div>
                                        <div class="content">
                                            <h6>
                                                Jonathon
                                                <span class="text-regular">
                                                    like on a product.
                                                </span>
                                            </h6>
                                            <p>
                                                Lorem ipsum dolor sit amet, consect etur adipiscing
                                                elit Vivamus tortor.
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== header end ========== -->