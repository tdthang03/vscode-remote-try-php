<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from diamant.kwst.net/site/restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:40 GMT -->
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
                                        <a href="{{ Route('home') }}" class="act-link">Home</a>
                                        <!--second level -->
                                        
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('about') }}">About</a></li>
                                    <li>
                                        <a href="{{ Route('rooms') }}">Rooms</a>
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
                <div class="bg par-elem " data-bg="{{ asset('assets') }}/images/bg/8.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>Our Restaurant</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>Restaurant</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title text-align_left" style="margin-top: 50px;">
                                    <h4>Special selection</h4>
                                    <h2>About Our Restaurant</h2>
                                </div>
                                <div class="text-block tb-sin">
                                    <div class="dc_dec-item_left"><span></span></div>
                                    <p class="has-drop-cap">Ged ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.Ut enim ad minima Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur. 
                                    </p>
                                    <p>Fames massa tortor sit nisl sit. Duis nulla tempus quisque et diam condimentum nisl. Rhoncus quisque elementum nulla lorem at turpis vitae quisque. Vulputate duis vel et odio hendrerit magna. Nec lacus dui egestas sit. Vulputate tincidunt viverra viverra etiam porta facilisis.    Fames massa tortor sit nisl sit. Duis nulla tempus quisque et diam condimentum nisl. Rhoncus quisque elementum nulla lorem at turpis vitae quisque. Vulputate duis vel et odio hendrerit magna. Nec lacus dui egestas sit. Vulputate tincidunt viverra viverra etiam porta facilisis.   </p>
                                    <a href="#secmenu" class="btn fl-btn custom-scroll-link">Explore Our Menu</a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-collge-wrap">
                                    <!-- blog media -->
                                    <div class="blog-media">
                                        <div class="single-slider-wrap">
                                            <div class="single-slider">
                                                <div class="swiper-container">
                                                    <div class="swiper-wrapper lightgallery">
                                                        <div class="swiper-slide hov_zoom"><img src="{{ asset('assets') }}/images/all/13.jpg" alt=""><a href="{{ asset('assets') }}/images/all/13.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom"><img src="{{ asset('assets') }}/images/all/8.jpg" alt=""><a href="{{ asset('assets') }}/images/all/8.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                        <div class="swiper-slide hov_zoom"><img src="{{ asset('assets') }}/images/all/9.jpg" alt=""><a href="{{ asset('assets') }}/images/all/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i></div>
                                            <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i></div>
                                            <div class="sc-controls fwc_pag">
                                                <div class="ss-slider-pagination"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- blog media end -->	
                                    <div class="dc_dec-item_right"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end  -->
                <!-- section   -->
                <div class="content-section no-padding dark-bg  hidden-section">
                    <div class="bg-ser fs-wrapper"></div>
                    <div class="overlay"></div>
                    <!-- fw-aminit-wrap   -->
                    <div class="fw-aminit-wrap">
                        <!-- fw-aminit-item  -->
                        <div class="fw-aminit-item full-height" data-bgtab="{{ asset('assets') }}/images/bg/9.jpg">
                            <div class="fw-aminit-item-container">
                                <h5>Gourmet Breakfast</h5>
                                <h3>Breakfast Buffet</h3>
                                <h6>Location : Lobby Level</h6>
                                <i class="fa-thin fa-croissant"></i>
                            </div>
                            <div class="aminit-work-time">
                                <span>Monday - Sunday</span>
                                <strong>06:00 am - 22:30 pm</strong>
                            </div>
                        </div>
                        <!-- fw-aminit-item   -->
                        <!-- fw-aminit-item  -->
                        <div class="fw-aminit-item full-height" data-bgtab="{{ asset('assets') }}/images/bg/10.jpg">
                            <div class="fw-aminit-item-container">
                                <h5>Lunch and Dinner</h5>
                                <h3>The Restaurant</h3>
                                <h6>Location :  Location: The 2nd Floor East Wing</h6>
                                <i class="fa-thin fa-salad"></i>
                            </div>
                            <div class="aminit-work-time">
                                <span>Monday - Sunday</span>
                                <strong>06:00 am - 22:30 pm</strong>
                            </div>
                        </div>
                        <!-- fw-aminit-item   -->					
                        <!-- fw-aminit-item  -->
                        <div class="fw-aminit-item full-height" data-bgtab="{{ asset('assets') }}/images/bg/11.jpg">
                            <div class="fw-aminit-item-container">
                                <h5>Bar, Lunch, Dinner</h5>
                                <h3>Japanese Sushi Bar</h3>
                                <h6>Location : Terrace</h6>
                                <i class="fa-thin fa-sushi"></i>
                            </div>
                            <div class="aminit-work-time">
                                <span>Monday - Sunday</span>
                                <strong>06:00 am - 22:30 pm</strong>
                            </div>
                        </div>
                        <!-- fw-aminit-item   -->							
                    </div>
                    <!-- fw-aminit-wrap   -->
                </div>
                <!-- section end  -->	
                <!-- section   -->
                <div class="content-section" id="secmenu">
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container  ">
                        <div class="section-title">
                            <h4>Special selection</h4>
                            <h2>Discover Our Menu</h2>
                            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                        </div>
                        <div class="tabs-act">
                            <div class="hero-menu_header">
                                <ul class="tabs-menu">
                                    <li class="current"><a href="#tab-1"> Main Dishes</a></li>
                                    <li><a href="#tab-2"> Starters</a></li>
                                    <li><a href="#tab-3"> Desserts</a></li>
                                    <li><a href="#tab-4"> Drinks</a></li>
                                </ul>
                            </div>
                            <!--hero-menu-wrap-->
                            <div class="hero-menu-wrap dec-container anim_tabs">
                                <div class="dc_dec-item_left"><span></span></div>
                                <div class="dc_dec-item_right"><span></span></div>
                                <div class="tabs-container">
                                    <div class="tab">
                                        <!--tab -->
                                        <div id="tab-1" class="tab-content first-tab">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/1.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/1.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6>Soft Shell Crab</h6>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Our tender, juicy filet paired with a steamed lobster tail.  </p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/2.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/2.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Miso Chicken <span class="hot-desc">-15%</span></h6>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/3.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/3.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Salmon Riverland </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/4.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/4.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Victoria's Filet Mignon </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/3.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/6.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Salmon Riverland </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-2" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/5.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/5.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Fried Potatoes </h6>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/6.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/6.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Slow-Roasted Prime Rib <span class="hot-desc">-10%</span></h6>
                                                    <span class="hero-menu-item-price">$104</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/7.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/7.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Prime Cuts of Beef </h6>
                                                    <span class="hero-menu-item-price">$27</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/3.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/3.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Salmon Riverland </h6>
                                                    <span class="hero-menu-item-price">$14</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/4.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/4.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Victoria's Filet Mignon </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->												
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-3" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/8.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/8.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Doner Burger <span class="hot-desc">-40%</span></h6>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Our tender, juicy filet paired with a steamed lobster tail.  </p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/9.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/9.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Cayenne Shrimp </h6>
                                                    <span class="hero-menu-item-price">$37</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/11.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/11.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Meatball Tagliatelle <span class="hot-desc">-25%</span></h6>
                                                    <span class="hero-menu-item-price">$54</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/12.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/12.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Tarte Tatin </h6>
                                                    <span class="hero-menu-item-price">$35</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                        </div>
                                        <!--tab end-->
                                        <!--tab -->
                                        <div id="tab-4" class="tab-content">
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/13.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/13.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Creme Brulee </h6>
                                                    <span class="hero-menu-item-price">$29</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Our tender, juicy filet paired with a steamed lobster tail.  </p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/14.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/14.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Chapel Down </h6>
                                                    <span class="hero-menu-item-price">$12</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit amet.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->	
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/15.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/15.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Lobster With Melted Mozarella </h6>
                                                    <span class="hero-menu-item-price">$107</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur   nunc.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                            <!--hero-menu_item-->
                                            <div class="hero-menu-item">
                                                <a href="{{ asset('assets') }}/images/menu/16.jpg" class="hero-menu-item-img image-popup"><img src="{{ asset('assets') }}/images/menu/thumbnails/16.jpg" alt=""></a>
                                                <div class="hero-menu-item-title  ">
                                                    <h6> Butterfly Fried Shrimps Platter <span class="hot-desc">-50%</span></h6>
                                                    <span class="hero-menu-item-price">$19</span>
                                                </div>
                                                <div class="hero-menu-item-details">
                                                    <p>Seasoned with an herb crust, served with au just  to order.</p>
                                                </div>
                                            </div>
                                            <!--hero-menu_item end-->
                                        </div>
                                        <!--tab end-->						
                                    </div>
                                </div>
                            </div>
                            <!--hero-menu-wrap end-->						
                        </div>
                        <a href="#" download class="dwonload_btn">Download PDF Menu</a>
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

<!-- Mirrored from diamant.kwst.net/site/restaurant.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:55 GMT -->
</html>