<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from diamant.kwst.net/site/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:55 GMT -->
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
                                        <a href="#">Home</a>
                                        <!--second level -->
                                        
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('about') }}">About</a></li>
                                    <li>
                                        <a href="#">Rooms<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                       
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('restaurant') }}">Restaurant</a></li>
                                    <li><a href="{{ Route('contact') }}">Contact</a></li>
                                    <li><a href="{{ Route('blog') }}" class="act-link">News</a></li>
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
                <div class="bg par-elem " data-bg="{{ asset('assets') }}/images/bg/6.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Enjoy your time in our Hotel with pleasure.</h4>
                        <h2>How to Book a Room online</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>Rooms And Suites</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="content-dec2 fs-wrapper"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="post-container">
                                    <div class="dec-container">
                                        <div class="text-block">
                                            <!-- blog media -->
                                            <div class="blog-media">
                                                <div class="single-slider-wrap">
                                                    <div class="single-slider">
                                                        <div class="swiper-container">
                                                            <div class="swiper-wrapper lightgallery">
                                                                <div class="swiper-slide hov_zoom"><img src="{{ asset('assets') }}/images/all/1.jpg" alt=""><a href="{{ asset('assets') }}/images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom"><img src="{{ asset('assets') }}/images/all/2.jpg" alt=""><a href="{{ asset('assets') }}/images/all/2.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                                                <div class="swiper-slide hov_zoom"><img src="{{ asset('assets') }}/images/all/3.jpg" alt=""><a href="{{ asset('assets') }}/images/all/3.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
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
                                            <div class="text-block post-single_tb">
                                                <div class="text-block-container">
                                                    <div class="tbc_subtitle">Sed tempor iaculis massa faucibus feugiat</div>
                                                    <div class="room-card-details" style="margin-bottom: 20px">
                                                        <ul>
                                                            <li><i class="fa-light fa-calendar-days"></i><span>August 10, 2023</span></li>
                                                            <li><i class="fa-light fa-comment"></i><span>2 comments</span></li>
                                                        </ul>
                                                    </div>
                                                    <p class="has-drop-cap">Qraesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim.   </p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra. Interdum et malesu they adamale fames ac anteipsu pimsine faucibus curabitur arcu site feugiat in tortor in, volutpat sollicitudin libero. Hotel non lorem acer suscipit bibendum vulla facilisi nedeuter .</p>
                                                    <div class="post-img-row">
                                                        <div class="post-img-row_item">
                                                            <img src="{{ asset('assets') }}/images/all/5.jpg" class="respimg" alt=""> 
                                                        </div>
                                                        <div class="post-img-row_item">
                                                            <img src="{{ asset('assets') }}/images/all/6.jpg" class="respimg" alt=""> 
                                                        </div>
                                                    </div>
                                                    <p>Fames massa tortor sit nisl sit. Duis nulla tempus quisque et diam condimentum nisl. Rhoncus quisque elementum nulla lorem at turpis vitae quisque. Vulputate duis vel et odio hendrerit magna. Nec lacus dui egestas sit. Vulputate tincidunt viverra viverra etiam porta facilisis. Diam dui euismod eget donec. Pharetra leo sed felis urna. At a viverra urna elementum tristique ac integer pretium. Vel tincidunt sed mi nulla lectus sagittis.</p>
                                                    <blockquote>
                                                        <p> Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.Cras lacinia magna vel molestie faucibus.   </p>
                                                    </blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec nisi et nibh sollicitudin pellentesque vitae sit amet tortor. Vestibulum lacinia mi non lacus tincidunt accumsan. Nunc venenatis erat ac enim facilisis pulvinar. Donec placerat et velit nec bibendum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec luctus, augue vitae blandit lobortis, augue urna varius tellus, et viverra odio ipsum id velit. Morbi pellentesque scelerisque dignissim. In dignissim luctus augue. Phasellus viverra nibh vel sapien facilisis, id placerat nunc congue. Aliquam erat volutpat. Aenean semper dui id accumsan pulvinar. Aliquam congue mollis turpis, a volutpat metus lobortis nec. Integer in mollis quam. Cras nisl mi, dapibus a ante non, accumsan luctus augue.</p>
                                                </div>
                                                <div class="tbc-separator"></div>
                                                <div class="tagcloud tc_single">
                                                    <span class="tc_single_title">Post Tags:</span>
                                                    <a href="#">Lifystyle</a>
                                                    <a href="#">Travel</a>
                                                    <a href="#">Trip</a>
                                                    <a href="#">Outdoor</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-nav-fixed dark-bg scale_anim">
                                        <ul>
                                            <li>
                                                <a href="{{ Route('blog-single') }}" class="ln"><i class="fal fa-long-arrow-left"></i><span>Prev <strong>- Post Title</strong></span></a>
                                                <div class="content-nav_mediatooltip cnmd_leftside">
                                                    <div class="overlay"></div>
                                                    <div class="bg" data-bg="{{ asset('assets') }}/images/all/1.jpg"></div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="{{ Route('blog-single') }}" class="rn"><span >Next <strong>- Post Title</strong></span> <i class="fal fa-long-arrow-right"></i></a>
                                                <div class="content-nav_mediatooltip cnmd_rightside">
                                                    <div class="overlay"></div>
                                                    <div class="bg" data-bg="{{ asset('assets') }}/images/all/3.jpg"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text-block post-single_tb">
                                        <div class="dec-container">
                                            <div class="text-block">
                                                <div class="text-block-container">
                                                    <div class="tbc_subtitle">Post Comments</div>
                                                    <div class="tbc-separator"></div>
                                                    <div class="comments-wrap">
                                                        <!-- comments-item -->   
                                                        <div class="comments-item">
                                                            <div class="comments-avatar">
                                                                <img src="{{ asset('assets') }}/images/avatar/4.jpg" alt=""> 
                                                            </div>
                                                            <div class="comments-item-text">
                                                                <div class="comments-header">
                                                                    <h4><a href="#">Liza Rose</a></h4>
                                                                </div>
                                                                <div class="comments-item-text-wrap">
                                                                    <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>
                                                                </div>
                                                                <div class="comments-item-footer">
                                                                    <div class="comments-item-date"><span><i class="fa-light fa-calendar"></i>12 April 2024</span></div>
                                                                    <a href="#" class="reply-item">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--comments-item end--> 
                                                        <!-- comments-item -->  
                                                        <div class="comments-item">
                                                            <div class="comments-avatar">
                                                                <img src="{{ asset('assets') }}/images/avatar/2.jpg" alt=""> 
                                                            </div>
                                                            <div class="comments-item-text">
                                                                <div class="comments-header">
                                                                    <h4><a href="#">Adam Koncy</a></h4>
                                                                </div>
                                                                <div class="comments-item-text-wrap">
                                                                    <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>
                                                                </div>
                                                                <div class="comments-item-footer">
                                                                    <div class="comments-item-date"><span><i class="fa-light fa-calendar"></i>03 December 2023</span></div>
                                                                    <a href="#" class="reply-item">Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--comments-item end-->                                                                
                                                    </div>
                                                    <div class="tbc-separator"></div>
                                                    <div class="tbc_subtitle">Add Comment</div>
                                                    <div class="tbc-separator"></div>
                                                    <div class="comment-form">
                                                        <div class="section-title n_dec st_small">
                                                        </div>
                                                        <form  class="comment-form"   name="commentform" id="commentform">
                                                            <fieldset>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <input type="text" name="name" id="name" placeholder="Your Name *"  value="">
                                                                    </div>
                                                                    <div class="col-sm-6">	
                                                                        <input type="text"  name="email" id="email" placeholder="Email Address *" value="">
                                                                    </div>
                                                                </div>
                                                                <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                                                <button class="commentssubmit" id="commentssubmit">Send Comment</button>
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="tbc-separator"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <!-- main-sidebar -->   
                                <div class="main-sidebar fixed-bar">
                                    <!-- main-sidebar-widget-->   
                                    <div class="main-sidebar-widget">
                                        <div class="search-widget">
                                            <form action="#">
                                                <input name="se" id="se" type="text" class="search-inpt-item" placeholder="Search.." value="Search...">
                                                <button class="search-submit color-bg" id="submit_btn"><i class="fa-light fa-magnifying-glass"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- main-sidebar-widget end-->                            
                                    <!-- main-sidebar-widget-->   
                                    <div class="main-sidebar-widget">
                                        <h3>Recent Posts</h3>
                                        <div class="recent-post-widget">
                                            <ul>
                                                <li>
                                                    <div class="recent-post-img"><a href="#"><img src="{{ asset('assets') }}/images/all/6.jpg" alt=""></a></div>
                                                    <div class="recent-post-content">
                                                        <h4><a href="#">How to Book a Room online</a></h4>
                                                        <div class="recent-post-opt">
                                                            <span class="post-date">March 10, 2024</span> 
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="recent-post-img"><a href="#"><img src="{{ asset('assets') }}/images/all/5.jpg" alt=""></a></div>
                                                    <div class="recent-post-content">
                                                        <h4><a href="#">Snowy Mountains Trip</a></h4>
                                                        <div class="recent-post-opt">
                                                            <span class="post-date">August 10, 2023</span> 
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="recent-post-img"><a href="#"><img src="{{ asset('assets') }}/images/all/3.jpg" alt=""></a></div>
                                                    <div class="recent-post-content">
                                                        <h4><a href="#">Traveller on our Hotel</a></h4>
                                                        <div class="recent-post-opt">
                                                            <span class="post-date">September 10, 2023</span> 
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- main-sidebar-widget end-->  
                                    <!-- main-sidebar-widget-->   
                                    <div class="main-sidebar-widget">
                                        <h3>Resent tags </h3>
                                        <div class="tags-widget">
                                            <div class="tagcloud">
                                                <a href="#">Lifystyle</a>
                                                <a href="#">Travel</a>
                                                <a href="#">Trip</a>
                                                <a href="#">Outdoor</a>
                                                <a href="#">Camping</a>
                                                <a href="#">Photos</a>
                                                <a href="#">Adventure</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- main-sidebar-widget end-->                       
                                    <!-- main-sidebar-widget end-->
                                    <!-- main-sidebar-widget-->   
                                    <div class="main-sidebar-widget">
                                        <h3>Categories</h3>
                                        <div class="category-widget">
                                            <ul class="cat-item">
                                                <li><a href="#">Hotel</a><span>12</span></li>
                                                <li><a href="#">Video</a><span>21</span></li>
                                                <li><a href="#">Dishes</a><span>34</span></li>
                                                <li><a href="#">Travel</a><span>8</span></li>
                                                <li><a href="#">Photos</a><span>9</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- main-sidebar-widget end-->
                                    <!-- main-sidebar-widget-->   
                                    <div class="main-sidebar-widget">
                                        <h3>Social widget</h3>
                                        <div class="social-widget">
                                            <ul>
                                                <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- main-sidebar-widget end--> 
                                </div>
                                <!-- main-sidebar end-->                                        
                            </div>
                        </div>
                    </div>
                    <div class="limit-box"></div>
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

<!-- Mirrored from diamant.kwst.net/site/blog-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:58 GMT -->
</html>