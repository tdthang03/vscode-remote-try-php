<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from diamant.kwst.net/site/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:39 GMT -->
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
                                        <!--second level -->
                                       
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('about') }}">About</a></li>
                                    <li>
                                        <a href="{{ Route('rooms') }}" class="act-link">Rooms</a>
                                        <!--second level -->
                                       
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('restaurant') }}">Restaurant</a></li>
                                    <li><a href="{{ Route('contact') }}">Contact</a></li>
                                    <li><a href="{{ Route('blog') }}">News</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->  		
                        <div class="nav-holder main-menu">	
                            <nav>
                                <ul>
                                    <li>
                                        <a class="fas fa-caret-down"><i class="fa-regular fa-user"><span></i> {{Auth::user()->name}}</span><i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="index.html"><i class="fa-regular fa-user"></i> User</a></li>
                                            <li><a href="{{ Route('login_sign-up') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                </ul>
                            </nav>						
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
                                    <div class="wish-list-img"><a href=""><img src="{{ asset('assets') }}/images/room/thumbnail/1.jpg" alt=""></a>  
                                    </div>
                                    <div class="wish-list-descr">
                                        <h4><a href="">Garden Family Room</a></h4>
                                        <div class="wish-list-price">$129/Night</div>
                                        <a  href="" class="wshil_link">Book Now</a>
                                        <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                                    </div>
                                </div>
                                <!--wish-list-item end-->
                                <!--wish-list-item-->
                                <div class="wish-list-item fl-wrap">
                                    <div class="wish-list-img"><a href=""><img src="{{ asset('assets') }}/images/room/thumbnail/2.jpg" alt=""></a>  
                                    </div>
                                    <div class="wish-list-descr">
                                        <h4><a href="">Premium Panorama Room</a></h4>
                                        <div class="wish-list-price"> $230/Night</div>
                                        <a  href="" class="wshil_link">Book Now</a>
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
                <div class="bg par-elem " data-bg="{{ asset('storage/images') }}/{{$product->image}}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>{{$product->name}}</h2>
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
                        <a href="#">Home</a><a href="#">Rooms</a><span>Room single</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section notp">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <!-- fw-carousel-wrap -->
                    <div class="single-carousle-container">
                        <div class="single-carousel-wrap ">
                            <!-- fw-carousel  -->
                            <div class="single-carousel   fl-wrap    lightgallery" data-mousecontrol="0">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- swiper-slide-->
                                       @foreach($product->images as $item)
                                        <div class="swiper-slide hov_zoom">
                                            <img src="{{ asset('storage/images') }}/{{$item->image}}" alt="">
                                            <a href="{{ asset('storage/images') }}/{{$item->image}}" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                        </div>
                                       @endforeach
                                        <!-- swiper-slide end-->
                                        <!-- swiper-slide-->
                                        
                                        <!-- swiper-slide end-->
                                    </div>
                                </div>
                            </div>
                            <!-- fw-carousel end -->
                            <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i></div>
                            <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i></div>
                            <div class="sc-controls fwc_pag">
                                <div class="ss-slider-pagination"></div>
                            </div>
                        </div>
                        <!-- fw-carousel-wrap end -->			
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="dec-container">
                                    <div class="dc_dec-item_left"><span></span></div>
                                    <div class="text-block">
                                        <div class="text-block-title">
                                            <h4>About Accommodation</h4>
                                            <div class="sr-opt">
                                                <div class="sa-price">$ {{number_format($product->Price)}}/Night</div>
                                                <div class="sa_towishlist"><a href="">Add to Wishlist</a></div>
                                            </div>
                                        </div>
                                        <div class="room-card-details rcd-single">
                                            <ul>
                                                <li><i class="fa-light fa-crop"></i><span>44m2</span></li>
                                                <li><i class="fa-light fa-user"></i><span>4 Guest</span></li>
                                                <li><i class="fa-light fa-bed-front"></i><span>2 Bed</span></li>
                                                <li><i class="fa-light fa-bath"></i><span>2 Bath</span></li>
                                            </ul>
                                        </div>
                                        <div class="text-block-container">
                                            <p class="has-drop-cap">{!!$product->description!!}</p>
                                            
                                        </div>
                                        <div class="tbc-separator"></div>
                                        <div class="tbc_subtitle">Room Amenities  </div>
                                        <div class="meg_aminites">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-water-ladder"></i><span>Free Swimming Pool</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-baby-carriage"></i><span>Extra  Baby Bed</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-dryer"></i><span>Washing Machine</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-wifi"></i><span>Free  Wi Fi</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-air-conditioner"></i><span>Air Conditioned</span></div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="meg_aminites_item"><i class="fa-light fa-refrigerator"></i><span>In-room Refrigerator</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tbc-separator"></div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="tbc_subtitle">What  included in this suite?</div>
                                                <div class="text-block_list">
                                                    <ul>
                                                        <li>Upholstered seat beside the panoramic window</li>
                                                        <li>Bathroom with rain shower</li>
                                                        <li>Private balcony</li>
                                                        <li>Service station with   coffee machine  and tea</li>
                                                        <li>Upholstered seat beside the panoramic window</li>
                                                        <li>TV-UHD screen for watching</li>
                                                        <li>Writing desk with USB ports</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="tbc_subtitle">Room Video Presentation</div>
                                                <div class="video-box">
                                                    <img src="{{ asset('assets') }}/images/room/2.jpg" class="respimg" alt="">
                                                    <div class="overlay"></div>
                                                    <div class="video-box-btn image-popup color-bg" id="html5-videos" data-html="#video1"><i class="fas fa-play"></i></div>
                                                </div>
                                                <div style="display:none;" id="video1" class="popup_video" data-videolink="{{ asset('assets') }}/video/1.mp4">
                                                    <video class="lg-video-object lg-html5" controls preload="none">
                                                        <source src="https://diamant.kwst.net/" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tbc-separator"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fix-bar-init">
                                    <div class="fw-search-wrap">
                                        <div class="fw-search-wrap-title">Book  This Suite</div>
                                        <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                                        <form  class="custom-form" action="https://diamant.kwst.net/" name="bookform">
                                            <fieldset>
                                                <div class="input-wrap">
                                                    <label>Your Name:</label>
                                                    <input type="text" placeholder="Your Name *" value="">
                                                </div>
                                                <div class="input-wrap">
                                                    <label>Phone:</label>
                                                    <input type="text" placeholder="Your Phone" value="">
                                                </div>
                                                <div class="date-container input-wrap">
                                                    <label>Date:</label>
                                                    <input type="text" id="res_date"     name="resdate"   value="">
                                                </div>
                                                <div class="quantity input-wrap ">
                                                    <div class="quantity_title">Guests: </div>
                                                    <div class="quantity-item">
                                                        <input type="button" value="-" class="minus">
                                                        <input type="text"    name="quantity"   title="Qty" class="qty color-bg" data-min="1" data-max="10" data-step="1" value="1">
                                                        <input type="button" value="+" class="plus">
                                                    </div>
                                                </div>
                                                <button class="searchform-submit bs_btn">Book Your Stay</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="limit-box"></div>
                        <!--post-related-->
                        <div class="post-related">
                            <div class="post-related_title">
                                <h6>Similar Rooms</h6>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                            </div>
                            <!-- post-related -->  
                            <div class=" row">
                                <!-- 1  --> 
                                @foreach ($related as $item)
                                <div class="item-related col-lg-4">
                                    <a href="{{Route('detail',$item->slug)}}" class="item-related_img">
                                        <img src="{{ asset('storage/images') }}/{{$item->image}}" class="respimg"   alt="">
                                        <div class="overlay"></div>
                                        <span>View Details</span>
                                    </a>
                                    <h3><a href="{{Route('detail',$item->slug)}}">{{$item->name}}</a></h3>
                                    <span class="post-date post-price">$ {{number_format($item->Price)}}/Night</span>
                                    <div class="room-card-details">
                                        <ul>
                                            <li><i class="fa-light fa-user"></i><span>1 Guest</span></li>
                                            <li><i class="fa-light fa-bed-front"></i><span>1 Bed</span></li>
                                            <li><i class="fa-light fa-bath"></i><span>1 Bath</span></li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach
                                <!-- 1 end--> 
                                <!-- 2  --> 
                              
                                <!-- 3 end-->                                        
                            </div>
                        </div>
                        <!-- post-related  end--> 						
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
        <script  src="{{ asset('assets') }}/js/jquery.min.js"></script>
        <script  src="{{ asset('assets') }}/js/plugins.js"></script>
        <script  src="{{ asset('assets') }}/js/scripts.js"></script>
    </body>

<!-- Mirrored from diamant.kwst.net/site/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:39 GMT -->
</html>