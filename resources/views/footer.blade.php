<footer class="footer">
    <div class="feature-boxes-container">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box feature-rounded">
                        <i class="icon-earphones-alt"></i>

                        <div class="feature-box-content">
                            <h3>Customer Support</h3>
                            <h5>Need Assistance?</h5>

{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>--}}
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="feature-box feature-rounded">
                        <i class="icon-credit-card"></i>

                        <div class="feature-box-content">
                            <h3>Secured Payment</h3>
                            <h5>Safe &amp; Fast</h5>

{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapibus lacus.</p>--}}
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->

                <div class="col-md-4">
                    <div class="feature-box feature-rounded">
                        <i class="icon-action-undo"></i>

                        <div class="feature-box-content">
                            <h3>Returns</h3>
                            <h5>Easy &amp; Free</h5>

{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec vestibulum magna, et dapib.</p>--}}
                        </div><!-- End .feature-box-content -->
                    </div><!-- End .feature-box -->
                </div><!-- End .col-md-4 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .section-6 -->

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-2 mb-md-0">
                    <div class="widget">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Address:</span>10/40 ,<br> Gamunupura 1st lane,<br>Kottawa.<br>Sri Lanka
                            </li>
                            <li>
                                <span class="contact-info-label">Phone:</span><a href="tel:">+94 77 642 0633</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a href="mailto:mail@example.com">uvindu98@gmail.com</a>
                            </li>
{{--                            <li>--}}
{{--                                <span class="contact-info-label">Working Days/Hours:</span>--}}
{{--                                Mon - Sun / 9:00 AM - 8:00 PM--}}
{{--                            </li>--}}
                        </ul>
                        <div class="social-icons mb-3 mb-lg-0">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                        </div><!-- End .social-icons -->
                    </div><!-- End .widget -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-9">
                    <div class="widget widget-newsletter d-md-flex d-block">
                        <div class="col-md-6 pr-3 pl-0">
                            <h4 class="widget-title">Subscribe newsletter</h4>

                            <p class="mb-lg-0">Get all the latest information on Events, Sales and Offers. Sign up for newsletter today.</p>
                        </div>

                        <div class="col-md-6 d-flex align-items-center pr-0 pl-0 pl-md-3 pr-md-3">
                            <form action="#" class="d-flex mb-0 w-100">
                                <input type="email" class="form-control mb-0" placeholder="Email Address" required="">

                                <input type="submit" class="btn btn-primary shadow-none" value="Subscribe">
                            </form>
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .widget -->

                    <div class="row">
                        <div class="col-sm-5">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4>

                                <div class="links link-parts row mb-sm-0 mb-3">
                                    <ul class="link-part col-sm-6 mb-sm-0 mb-1">
                                        <li><a href="#" onclick="window.location='{{ url("/about") }}'">About us</a></li>


                                    </ul>

                                    <ul class="link-part col-sm-6 mb-0">
                                        @if(Session::get('login') != TRUE)
                                        <li><a href="#" onclick="window.location='{{ url("/login") }}'">Login</a></li>
                                        @else
                                            <li><a href="#">Order history</a></li>
                                            <li><a href="#">My Account</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 -->

                        <div class="col-sm-7">
                            <div class="widget">
                                <h4 class="widget-title">About Us</h4>

                                <div class="links link-parts row">
                                    <ul class="link-part col-sm-6 mb-sm-0 mb-1">
                                        <li><a href="#">24 X 7 Customer Service</a></li>
                                        <li><a href="#">Fast Delivery Service</a></li>

                                    </ul>

                                    <ul class="link-part col-sm-6 mb-0">
                                        <li><a href="#">100 % Positive Feedback </a></li>
                                    </ul>
                                </div>
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .col-lg-9 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <p class="footer-copyright py-3 pr-sm-4 pr-0 mb-0">Uvindu Mohotti. &copy; 2021. All Rights Reserved</p>

            <img src="{{ URL::asset('assets/images/payments.png')}}" alt="payment methods" class="footer-payments py-3">
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer>
