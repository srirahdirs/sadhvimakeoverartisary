        <!--================Footer Area =================-->
        <footer class="footer-section">
            <div class="footer_area">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_title">
                        <p class="text-white text-center">
                            Sadhvi Makeover Artistry — freelance beauty services at your location. Makeup,
                            mehandi, hair, facials, nail art, and more.
                        </p>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 text-white">
                            <div class="footer-about">
                                <div class="footer-logo">
                                    <img src="img/logo.png" alt="logo">
                                </div>
                            <div class="social-links-footer">
                                <span class="social-label">Follow me on Instagram</span>
                                <a href="https://www.instagram.com/sadhvimakeoverartistry?igsh=MXh4MHo1N2M5ODZw" target="_blank" rel="noopener">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                               
                                
                            </div>
                        </div>
                        
                        <div class="col-lg-2 col-md-3">
                            <div class="footer-widget pl-55">
                                <div class="f_title"><h3>Quick Links</h3></div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="index">Home</a></li>
                                        <li><a href="services">Services</a></li>
                                        <li><a href="contact-us">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8 col-sm-5 col-xs-12 ">
                            <aside class="footer-widget pl-75 mb-none">
                                <div class="f_title"><h3>Contact</h3></div>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="media-left"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></div>
                                            <div class="media-body">
                                                <p class="color-white">Freelance Services</p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="tel:8056811214">
                                                <div class="media-left"><i class="fa fa-phone-alt" aria-hidden="true"></i></div>
                                                <div class="media-body">+91 8056811214</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:sadhvimakeoverartistry@gmail.com">
                                                <div class="media-left"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                                <div class="media-body">sadhvimakeoverartistry@gmail.com</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_copyright">
                <div class="container">
                    <div class="footer_copyright_inner">
                    <p>
<?php echo "© " . date("Y") . " All Rights Reserved | Developed by <a href='https://youngzen.in' target='_blank'>YoungZen Technologies</a>"; ?>
</p>

                    </div>
                </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
    <script src="js/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/gallery.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countto/1.2.0/jquery.countTo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="js/theme.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('.mobile-menu-toggle').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    var menu = btn.parentElement.querySelector('.mobile_menu');
                    if (!menu) return;
                    menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
                });
            });

            if (window.jQuery) {
                jQuery(function ($) {
                    var WHATSAPP_NUMBER = '918056811214';
                    $('#appointmentForm').on('submit', function (e) {
                        e.preventDefault();
                        var name = ($('#appt_name').val() || '').trim();
                        var email = ($('#appt_email').val() || '').trim();
                        var phone = ($('#appt_phone').val() || '').trim();
                        var msg = ($('#appt_message').val() || '').trim();
                        var lines = ['Hello! I\'d like to make an appointment.'];
                        if (name) lines.push('Name: ' + name);
                        if (email) lines.push('Email: ' + email);
                        if (phone) lines.push('Phone: ' + phone);
                        if (msg) lines.push('Message: ' + msg);
                        var text = lines.join('\n');
                        var url = 'https://wa.me/' + WHATSAPP_NUMBER + '?text=' + encodeURIComponent(text);
                        window.open(url, '_blank');
                    });
                });
            }
        });
    </script>
    <script src="js/counternew.js"></script>
    <script src="js/mobilemenu.js"></script>
    <script src="dist/jquery-simple-mobilemenu.js"></script>
</body>
</html>
