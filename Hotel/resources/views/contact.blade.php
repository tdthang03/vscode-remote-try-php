<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from diamant.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:39 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Diamant - Hotel & Resort Booking  Template</title>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">
    </head>
    <body>
        <!-- lodaer  -->
        <div class="loader-wrap">
            <div class="loader-item">
                <div class="cd-loader-layer" data-frame="25">
                    <div class="loader-layer"></div>
                </div>
                <span class="loader"><i class="fa-thin fa-gem"></i></span>
            </div>
        </div>
        <!-- loader end  -->
        <!--  main   -->
        <div id="main">
            <!--  header  -->
            <header class="main-header">
                <div class="container">
                    <!--  header-top -->
                    <div class="header-top  fl-wrap">
                        <div class="header-top_contacts"><a href="#"><span>Call:</span> +489756412322</a><a href="#"><span>Find us:</span> USA 27TH Brooklyn NY</a></div>
                        <div class="header-social">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                        <div class="booking-reviews">
                            <div class="br-counter">
                                <div class="ribbon"></div>
                                <span>4.9</span>
                            </div>
                            <a href="#" target="_blank" class="br_link">
                                <div class="star-rating" data-starrating="5"> </div>
                                <p>Our ratings on Booking.com</p>
                            </a>
                        </div>
                        <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>
                    </div>
                    <!--  header-top end  -->
                    <div class="nav-holder-wrap init-fix-header  fl-wrap">
                        <a href="{{ Route('home') }}" class="logo-holder"><img src="{{ asset('assets') }}/images/logo2.png" alt=""></a>
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ Route('home') }}">Home</a>
                                        
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('about') }}">About</a></li>
                                    <li>
                                        <a href="{{ Route('rooms') }}">Rooms</a>
                                        <!--second level -->
                                        
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('restaurant') }}">Restaurant</a></li>
                                    <li><a href="{{ Route('contact') }}" class="act-link">Contact</a></li>
                                    <li><a href="{{ Route('blog') }}">News</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->  		
                        <div class="serach-header-btn_wrap">							
                            <a href="{{ Route('login_sign-up') }}" class="serach-header-btn"><i class="fa-regular fa-user"></i> <span>logout</span></a>
                        </div>
                        <div class="show-cart sc_btn   htact"><i class="fa-light fa-basket-shopping-simple"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Wishlist</span></div>
                        <div class="show-share-btn showshare htact"><i class="fa-light fa-share-nodes"></i><span class="header-tooltip">Share</span></div>
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->					
                        <!-- share-wrapper -->
                        <div class="share-wrapper isShare">
                            <div class="share-container fl-wrap"></div>
                        </div>
                        <!-- share-wrapper-end -->					
                        <!--wish-list-wrap-->
                        <div class="wish-list-wrap novis_cart">
                            <div class="wish-list-close close_cart-init clwl_btn"><i class="fa-regular fa-xmark"></i></div>
                            <div class="wish-list-title">Your Wishlist </div>
                            <div class="wish-list-container">
                                <!--wish-list-item-->
                                <div class="wish-list-item fl-wrap">
                                    <div class="wish-list-img"><a href="{{ Route('room-single') }}"><img src="{{ asset('assets') }}/images/room/thumbnail/1.jpg" alt=""></a>  
                                    </div>
                                    <div class="wish-list-descr">
                                        <h4><a href="{{ Route('room-single') }}">Garden Family Room</a></h4>
                                        <div class="wish-list-price">$129/Night</div>
                                        <a  href="{{ Route('room-single') }}" class="wshil_link">Book Now</a>
                                        <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                                    </div>
                                </div>
                                <!--wish-list-item end-->
                                <!--wish-list-item-->
                                <div class="wish-list-item fl-wrap">
                                    <div class="wish-list-img"><a href="{{ Route('room-single') }}"><img src="{{ asset('assets') }}/images/room/thumbnail/2.jpg" alt=""></a>  
                                    </div>
                                    <div class="wish-list-descr">
                                        <h4><a href="{{ Route('room-single') }}">Premium Panorama Room</a></h4>
                                        <div class="wish-list-price"> $230/Night</div>
                                        <a  href="{{ Route('room-single') }}" class="wshil_link">Book Now</a>
                                        <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                                    </div>
                                </div>
                                <!--wish-list-item end-->
                            </div>
                            <div class="wish-list-wrap-btns">
                                <a href="#" class="wl_btn">Clear wishlist</a>
                            </div>
                        </div>
                        <!--wish-list-wrap-->
                    </div>
                </div>
            </header>
            <div class="header-overlay close_cart-init"></div>
            <!--  header end  -->
            <!--  section  -->
            <div class="content-section parallax-section hero-section hidden-section" data-scrollax-parent="true">
                <div class="bg par-elem " data-bg="{{ asset('assets') }}/images/bg/7.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Our Contacts</h2>
                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                    </div>
                </div>
                <div class="hero-section-scroll">
                    <div class="mousey">
                        <div class="scroller"></div>
                    </div>
                </div>
                <div class="dec-corner dc_lb"></div>
                <div class="dec-corner dc_rb"></div>
                <div class="dec-corner dc_rt"></div>
                <div class="dec-corner dc_lt"></div>
            </div>
            <!-- section end  -->
            <!--content-->
            <div class="content">
                <!-- breadcrumbs-wrap  -->
                <div class="breadcrumbs-wrap">
                    <div class="container">
                        <a href="#">Home</a><a href="#">Pages</a><span>Contacts</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container">
                        <!-- contacts-cards-wrap  -->	
                        <div class="contacts-cards-wrap">
                            <div class="dec-container">
                                <div class="text-block">
                                    <div class="row">
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-location-dot"></i>
                                                <span>Our Location</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                                <a href="#">USA 27TH Brooklyn NY</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->	
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-phone-rotary"></i>
                                                <span>Our   Phone</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                                <a href="#"> +489756412322</a>
                                                <a href="#"> +123456789222</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->
                                        <!-- contacts-card-item -->	
                                        <div class="col-lg-4">
                                            <div class="contacts-card-item">
                                                <i class="fa-light fa-mailbox"></i>
                                                <span>Our Mail</span>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                                <a href="#">yourmail@domain.com</a>
                                            </div>
                                        </div>
                                        <!-- contacts-card-item end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- contacts-cards-wrap end   -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dec-container">
                                    <div class="text-block">
                                        <div class="text-block ">
                                            <div class="tbc_subtitle">Get In Touch</div>
                                            <div class="tbc-separator"></div>
                                            <div class="contactform-wrap">
                                                <form  class="comment-form" action="https://diamant.kwst.net/site/php/contact.php" name="contactform" id="contactform">
                                                    <fieldset>
                                                        <div id="message"></div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <input type="text" name="name" id="name" placeholder="Your Name *" value="">
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <input type="text"  name="email" id="email" placeholder="Email Address *" value="">
                                                            </div>
                                                        </div>
                                                        <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                        <button class="commentssubmit" id="submit_cnt">Send Message  </button>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="map-container  mapC_vis">
                                    <div id="singleMap" class="fs-wrapper" data-latitude="40.7427837" data-longitude="-73.11445617"></div>
                                    <div class="scrollContorl"></div>
                                </div>
                            </div>
                        </div>
                        <div class="dc_dec-item_left"><span></span></div>
                        <div class="dc_dec-item_right"><span></span></div>
                    </div>
                </div>
                <!-- section end  -->
                <div class="content-dec"><span></span></div>
            </div>
            <!--content end-->
            <!--footer  -->
            <div class="height-emulator"></div>
            <footer class="main-footer">
                <div class="footer-inner">
                    <div class="container">
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap">
                            <div class="footer-separator-wrap">
                                <div class="footer-separator"><span></span></div>
                            </div>
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-lg-3">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">About us</div>
                                        <div class="footer-widget-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. Consectetur adipiscing elit. </p>
                                            <a href="{{ Route('about') }}" class="footer-widget-content-link"><span>Read more</span></a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-lg-3">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Contact info  </div>
                                        <div class="footer-widget-content">
                                            <div class="footer-contacts footer-box">
                                                <ul>
                                                    <li><span>Call :</span><a href="#">+489756412322</a> , <a href="#">+56897456123</a></li>
                                                    <li><span>Write  :</span><a href="#">yourmail@domain.com</a></li>
                                                    <li><span>Find us : </span><a href="#">USA 27TH Brooklyn NY</a></li>
                                                </ul>
                                            </div>
                                            <a href="{{ Route('home') }}" class="footer-widget-content-link"><span>Get in Touch</span></a>                                                    	
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-lg-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Helpful links</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box  ">
                                                <ul>
                                                    <li><a href="#">Our last News</a></li>
                                                    <li><a href="#">Rooms</a></li>
                                                    <li><a href="#">Contacts</a></li>
                                                    <li><a href="#">About</a></li>
                                                    <li><a href="#">Privacy Policy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->								
                                <!-- footer-widget -->
                                <div class="col-lg-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->					
                    </div>
                    <div class="footer-title-dec">Diamant Hotel</div>
                </div>
                <div class="footer-social">
                    <div class="container">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <a href="{{ Route('home') }}" class="footer-logo"><img src="{{ asset('assets') }}/images/logo.png" alt=""></a>
                        <div class="copyright">&#169; Diamant 2024 . All rights reserved. </div>
                        <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
                    </div>
                </div>
            </footer>
            <!--footer end-->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script  src="https://maps.google.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo"></script>    	
        <script  src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script  src="{{ asset('assets') }}/js/plugins.js"></script>
        <script  src="{{ asset('assets') }}/js/scripts.js"></script>
        <script  src="{{ asset('assets') }}/js/map.js"></script>	
    </body>

<!-- Mirrored from diamant.kwst.net/site/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:39 GMT -->
</html>