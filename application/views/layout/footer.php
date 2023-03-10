<!-- ====== Footer Start ====== -->
<?php if ($title == "Application") : ?>
    <!-- footer doesnt exist -->
<?php else : ?>
    <footer class="ud-footer wow fadeInUp" data-wow-delay=".15s">
        <div class="ud-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="ud-widget">
                            <a href="index.html" class="ud-footer-logo">
                                <img class="pb-3" src="<?= base_url('assets/img/logo-dark.webp') ?>" alt="Logo" />
                            </a>
                            <p class="ud-widget-desc">
                                We create digital experiences for brands and companies by
                                using technology.
                            </p>
                            <ul class="ud-widget-socials">
                                <li>
                                    <a href="https://twitter.com/MusharofChy">
                                        <i class="lni lni-facebook-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/MusharofChy">
                                        <i class="lni lni-twitter-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/MusharofChy">
                                        <i class="lni lni-instagram-filled"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/MusharofChy">
                                        <i class="lni lni-linkedin-original"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">About Us</h5>
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="<?= base_url('home') ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('home') ?>">Features</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('home') ?>">About</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('home') ?>">Testimonial</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">Features</h5>
                            <ul class="ud-widget-links">
                                <li>
                                    <a href="<?= base_url('home') ?>">How it works</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('home') ?>">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('home') ?>">Terms of service</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('home') ?>">Refund policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-6">
                        <div class="ud-widget">
                            <h5 class="ud-widget-title">Our Products</h5>
                            <ul class="ud-widget-links">
                                <!-- <li>
                                    <a href="https://lineicons.com/" rel="nofollow noopner" target="_blank">Lineicons
                                    </a>
                                </li>
                                <li>
                                    <a href="https://ecommercehtml.com/" rel="nofollow noopner" target="_blank">Ecommerce
                                        HTML</a>
                                </li>
                                <li>
                                    <a href="https://ayroui.com/" rel="nofollow noopner" target="_blank">Ayro UI</a>
                                </li> -->
                                <li>
                                    <a href="" target="_blank">GPS Track Limbungan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-8 col-sm-10">
                        <div class="ud-widget">
                            <h5 class="fs-6 ud-widget-title">&copy; 2023 GPS Track Limbungan</h5>
                            <!-- <ul class="ud-widget-brands">
                            <li>
                                <a href="https://ayroui.com/" rel="nofollow noopner" target="_blank">
                                <img src="assets/images/footer/brands/ayroui.svg" alt="ayroui" />
                                </a>
                            </li>
                            <li>
                                <a href="https://ecommercehtml.com/" rel="nofollow noopner" target="_blank">
                                <img src="assets/images/footer/brands/ecommerce-html.svg" alt="ecommerce-html" />
                                </a>
                            </li>
                            <li>
                                <a href="https://graygrids.com/" rel="nofollow noopner" target="_blank">
                                <img src="assets/images/footer/brands/graygrids.svg" alt="graygrids" />
                                </a>
                            </li>
                            <li>
                                <a href="https://lineicons.com/" rel="nofollow noopner" target="_blank">
                                <img src="assets/images/footer/brands/lineicons.svg" alt="lineicons" />
                                </a>
                            </li>
                            <li>
                                <a href="https://uideck.com/" rel="nofollow noopner" target="_blank">
                                <img src="assets/images/footer/brands/uideck.svg" alt="uideck" />
                                </a>
                            </li>
                            <li>
                                <a href="https://tailwindtemplates.co/" rel="nofollow noopner" target="_blank">
                                <img src="assets/images/footer/brands/tailwindtemplates.svg" alt="tailwindtemplates" />
                                </a>
                            </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>
<!-- ====== Footer End ====== -->

<!-- ====== Back To Top Start ====== -->
<a class="back-to-top">
    <i class="lni lni-chevron-up"> </i>
</a>
<!-- ====== Back To Top End ====== -->

<!-- ====== All Javascript Files ====== -->
<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/wow.min.js"></script>
<script src="<?= base_url('assets/') ?>js/main.js"></script>
<script>
    // ==== for menu scroll
    const pageLink = document.querySelectorAll(".ud-menu-scroll");
    pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
            e.preventDefault();
            document.querySelector(elem.getAttribute("href")).scrollIntoView({
                behavior: "smooth",
                offsetTop: 1 - 60,
            });
        });
    });
    // section menu active
    function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
            window.pageYOffset ||
            document.documentElement.scrollTop ||
            document.body.scrollTop;
        for (let i = 0; i < sections.length; i++) {
            const currLink = sections[i];
            const val = currLink.getAttribute("href");
            const refElement = document.querySelector(val);
            const scrollTopMinus = scrollPos + 73;
            if (
                refElement.offsetTop <= scrollTopMinus &&
                refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
            ) {
                document
                    .querySelector(".ud-menu-scroll")
                    .classList.remove("active");
                currLink.classList.add("active");
            } else {
                currLink.classList.remove("active");
            }
        }
    }
    window.document.addEventListener("scroll", onScroll);
</script>
<!-- DragNDrop Image -->
<script>
    function fileValue(value) {
        var path = value.value;
        var extenstion = path.split('.').pop();
        document.getElementById('image-preview').src = window.URL.createObjectURL(value.files[0]);
        var filename = path.replace(/^.*[\\\/]/, '').split('.').slice(0, -1).join('.');
        document.getElementById("filename").innerHTML = filename;
    }

    function removeUpload() {
        $('#preview').hide();
    }
</script>
</body>

</html>