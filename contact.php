<?php 
//Template Name:contact
    get_header();
?>
        <!-- Start Theme Style  -->
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
        <!-- End Theme Style  -->
        <!-- Start Contact Area  -->
        <div class="main-content">
            <div class="rainbow-contact-area rainbow-section-gapnew">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb--40">
                            <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                <h2 class="title w-600 mb--20">CONTACT US</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row row--15">
                        <div class="col-lg-12">
                            <div class="rainbow-contact-address mt_dec--30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rainbow-address">
                                            <span class="color-white material-icons icon">
                                            phone_iphone
                                            </span>
                                            <div class="inner">
                                                <h4 class="title">Our Phone Number</h4>
                                                <p><a href="#">+91 7988291614</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rainbow-address">
                                            <span class="color-white material-icons icon">
                                                email
                                            </span>
                                            <div class="inner">
                                                <h4 class="title">Our Email Address</h4>
                                                <p><a href="/mailto:admin@gmail.com">info@webskode.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="rainbow-address">
                                            <span class="color-white material-icons icon">
                                                location_on
                                            </span>
                                            <div class="inner">
                                                <h4 class="title">Our Location</h4>
                                                <p><a href="#">7001, Signature Globel Synera 81, Sector 81, Gurgaon, 122004</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt--40 row--15">
                        <div class="col-lg-7">
                            <form class="contact-form-1 rainbow-dynamic-form" id="contact-form" method="POST" action="mail.php">
                                <div class="form-group">
                                    <input type="text" name="contact-name" id="contact-name" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact-phone" id="contact-phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="email" id="contact-email" name="contact-email" placeholder="Your Email">
                                </div>

                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" placeholder="Your Subject">
                                </div>

                                <div class="form-group">
                                    <textarea name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                                </div>

                                <div class="form-group">
                                    <button name="submit" type="submit" id="submit" class="btn-default btn-large rainbow-btn">
                                        <span>Submit Now</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-5 mt_md--30 mt_sm--30">
                            <div class="google-map-style-1">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.111180683157!2d76.94981847549184!3d28.385709725800382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d3dce80817a03%3A0x8bf81f0340e89372!2sSignature%20Global%20Synera%2081!5e0!3m2!1sen!2sin!4v1721062150109!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Contact Area  -->

<?php 
    get_footer();
?>