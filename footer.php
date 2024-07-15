<footer class="rainbow-footer footer-style-default no-border">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <div class="inner">
                                    <?php 
                                        wp_nav_menu(array('theme_location'=> 'footer-menu','menu_class'=>'footernav'))
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="rainbow-footer-widget">
                                <h4 class="title">Stay With Us.</h4>
                                <div class="inner">
                                    <ul class="social-icon social-default justify-content-start">
                                        <li><a href="https://www.facebook.com/">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.twitter.com">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.instagram.com/">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                        <li><a href="https://www.linkdin.com/">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rbt-separator-mid">
                <div class="container">
                    <hr class="rbt-separator m-0">
                </div>
            </div>
            <div class="copyright-area copyright-style-one no-border">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="copyright-left">
                                <ul class="ft-menu link-hover">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms And Condition</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="copyright-right text-center text-md-right">
                                <p class="copyright-text">© Webskode 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/modernizr.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/waypoint.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/wow.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/counterup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/feather.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/sal.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/masonry.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/imageloaded.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/magnify.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/lightbox.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/easypie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/text-type.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/js.cookie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery-one-page-nav.js"></script>
    <!-- Main JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>

</html>