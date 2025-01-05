<!-- Footer Area -->
<footer id="footer" class="footer">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">

            <div class="row justify-content-center text-center mb-4">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{Helper::assets('front_assets/img/favicon.png')}}" height="80" width="80" alt="Aurorize Logo">
                    </a>
                    <em class="site-logo-bottom">Aurorize Healthcare Solutions</em>
                    {{-- <p class="slogan">Your Trusted Partner for RCM Excellence</p> --}}
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="single-footer">
                        <h2>Our Address</h2>
                        <p><strong>Office 1:</strong> San Francisco Bay Area, CA, USA</p>
                        <p><strong>Office 2:</strong> Ahmedabad, Gujarat, India</p>
                        <p><strong>Email:</strong> rcm@aurorizesolutions.com</p>
                        <p><strong>Phone:</strong> +1(650)451-9908</p>
                    </div>
                </div>
                <!-- About Us Section -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="single-footer">
                        <a href="{{ route('home.aboutUs') }}"><h2>About Us</h2></a>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> --}}
                        <!-- Social Media Links -->
                        <ul class="social">
                            <li><a href="#" class="social-icon"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#" class="social-icon"><i class="icofont-google-plus"></i></a></li>
                            <li><a href="#" class="social-icon"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#" class="social-icon"><i class="icofont-vimeo"></i></a></li>
                            <li><a href="#" class="social-icon"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Links Section -->
                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <div class="single-footer f-link">
                        <h2>Quick Links</h2>
                        <div class="row">
                            <div class="col-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Home</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                    <li><a href="{{ route('home.idr') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> IDR</a></li>
                                    <li><a href="{{ route('home.rcm') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> RCM</a></li>
                                    <li><a href="#blog"><i class="fa fa-caret-right" aria-hidden="true"></i> HIPAA compliant</a></li>
                                </ul>
                            </div>
                            <div class="col-6">
                                <ul>
                                    <li><a href="{{ route('home.inquiry') }}"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact Us</a></li>
                                    <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->

    <!-- Copyright Section -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="copyright-content">
                        <p>© Copyright 2024 | All Rights Reserved by <a href="https://aurorizesolutions.com" target="_blank">aurorizesolutions.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->
