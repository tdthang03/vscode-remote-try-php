<!DOCTYPE HTML>
<html lang="en">
    
<!-- Mirrored from diamant.kwst.net/site/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:58 GMT -->
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
                        <div class="header-top_contacts"><a href="#"><span>Số điện thoại:</span> +88889999</a><a href="#"><span>Địa chỉ:</span> Đại học Phenikaa</a></div>
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
                        
                    </div>
                    <!--  header-top end  -->
                    <div class="nav-holder-wrap init-fix-header  fl-wrap">
                        <a href="" class="logo-holder"><img src="{{asset('assets') }}/images/logo2.png" alt=""></a>
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ Route('home') }}" class="act-link">Trang Chủ</a>
                                        <!--second level -->
                                        <!--second level end-->
                                    </li>
                                    <li><a href="{{ Route('about') }}">About</a></li>
                                    <li>
                                        <a href="{{ Route('rooms') }}">Phòng</a>
                                       
                                    </li>
                                    <li><a href="{{ Route('restaurant') }}">Restaurant</a></li>
                                    <li><a href="contact">Liên hệ</a></li>
                                    <li><a href="blog">Mới</a></li>
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
                        <div class="show-cart sc_btn   htact"><i class="fa-light fa-basket-shopping-simple"></i><span class="show-cart_count">2</span><span class="header-tooltip">Danh Sách</span></div>
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
                            <div class="wish-list-title">Danh Sách </div>
                            <div class="wish-list-container">
                                <!--wish-list-item-->
                                <div class="wish-list-item fl-wrap">
                                    <div class="wish-list-img"><a href="{{ Route('detail') }}"><img src="{{ asset('assets') }}/images/room/thumbnail/1.jpg" alt=""></a>  
                                    </div>
                                    <div class="wish-list-descr">
                                        <h4><a href="{{ Route('detail') }}">Garden Family Room</a></h4>
                                        <div class="wish-list-price">$129/Night</div>
<<<<<<< HEAD
                                        <a  href="{{ Route('room-single') }}" class="wshil_link">Đặt Phòng</a>
=======
                                        <a  href="{{ Route('detail') }}" class="wshil_link">Book Now</a>
>>>>>>> f6b8ce1ca37e5837fb923e470fe168ecb8baf9ee
                                        <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                                    </div>
                                </div>
                                <!--wish-list-item end-->
                                <!--wish-list-item-->
                                <div class="wish-list-item fl-wrap">
                                    <div class="wish-list-img"><a href="{{ Route('detail') }}"><img src="{{ asset('assets') }}/images/room/thumbnail/2.jpg" alt=""></a>  
                                    </div>
                                    <div class="wish-list-descr">
                                        <h4><a href="{{ Route('detail') }}">Premium Panorama Room</a></h4>
                                        <div class="wish-list-price"> $230/Night</div>
<<<<<<< HEAD
                                        <a  href="{{ Route('room-single') }}" class="wshil_link">Đặt Phòng</a>
=======
                                        <a  href="{{ Route('detail') }}" class="wshil_link">Book Now</a>
>>>>>>> f6b8ce1ca37e5837fb923e470fe168ecb8baf9ee
                                        <div class="clear-wishlist"><i class="fa-regular fa-trash-can"></i></div>
                                    </div>
                                </div>
                                <!--wish-list-item end-->
                            </div>
                            <div class="wish-list-wrap-btns">
                                <a href="#" class="wl_btn">Xóa Danh Sách</a>
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
                <div class="bg par-elem " data-bg="{{asset('assets') }}/images/bg/12.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title">
                        <h4>Hãy tận hưởng thời gian của bạn tại khách sạn..</h4>
                        <h2>Thông tin Khách sạn</h2>
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
                        <a href="#">Home</a><a href="#">Pages</a><span>About Hotel</span> 
                    </div>
                </div>
                <!--breadcrumbs-wrap end  -->
                <!-- section   -->
                <div class="content-section">
                    <div class="section-dec"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title text-align_left" style="margin-top: 50px;">
                                    <h4>Hãy tận hưởng thời gian của bạn tại khách sạn</h4>
                                    <h2>Thông tin khách sạn</h2>
                                </div>
                                <div class="text-block tb-sin">
                                    <p class="has-drop-cap">Để bạn có thể thấy tất cả những sai lầm sinh ra từ đâu, tôi sẽ mở ra toàn bộ niềm vui của những người buộc tội và nỗi đau của những người khen ngợi. Và chính những điều đã được nói bởi người khám phá ra sự thật và có thể nói là người kiến ​​tạo nên một cuộc sống hạnh phúc. Vì để đi đến từng chi tiết nhỏ nhất, bất kỳ ai trong chúng ta cũng thực hiện bất kỳ bài tập thể chất nào tốn nhiều công sức, trừ khi anh ta thu được lợi ích nào đó từ việc đó. 
                                    </p>
                                    <a href="{{ Route('contact') }}" class="btn fl-btn ">Gọi để đặt chỗ</a>
                                    <div class="dc_dec-item_left"><span></span></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="image-collge-wrap">
                                    <div class="main-iamge">
                                        <img src="{{ asset('assets') }}/images/all/10.jpg"  class="respimg"  alt="">
                                        <div class="video_link image-popup" id="html5-videos" data-html="#video1"><i class="fas fa-play"></i><span>Play Story Presentation  Video</span></div>
                                    </div>
                                    <div class="dc_dec-item_right"><span></span></div>
                                    <div class="about-img-hotifer dark-bg">
                                        <div class="about-img-hotifer-wrap">
                                            <p>Your website is fully responsive so visitors can view your content from their choice of device.</p>
                                            <h4>Mark Antony</h4>
                                            <h5>Diamnt CEO</h5>
                                        </div>
                                    </div>
                                    <div style="display:none;" id="video1" class="popup_video" data-videolink="{{ asset('assets') }}/video/1.mp4">
                                        <video class="lg-video-object lg-html5" controls preload="none">
                                            <source src="https://diamant.kwst.net/" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sc-dec" style="left: -220px; bottom: -100px;"></div>
                    </div>
                   
                    <div class="content-dec"><span></span></div>
                </div>
                <!-- section end  -->
                <!-- section   -->
                <div class="content-section  parallax-section hidden-section dark-bg" data-scrollax-parent="true">
                    <div class="bg par-elem"  data-bg="{{ asset('assets') }}/images/bg/14.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                    <div class="overlay overlay-bold"></div>
                    <div class="container">
                        <!-- inline-facts -->
                        <div class="inline-facts-wrap">
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="254">154</div>
                                    </div>
                                </div>
                                <h6>New Visiters Every Week</h6>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="12168">12168</div>
                                    </div>
                                </div>
                                <h6>Happy Customers Every Year</h6>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="172">172</div>
                                    </div>
                                </div>
                                <h6>Won Awards</h6>
                            </div>
                            <!-- inline-facts end -->
                            <!-- inline-facts  -->
                            <div class="inline-facts">
                                <div class="milestone-counter">
                                    <div class="stats animaper">
                                        <div class="num" data-content="0" data-num="732">732</div>
                                    </div>
                                </div>
                                <h6>Weekly Deliveries</h6>
                            </div>
                        </div>
                        <!-- inline-facts end -->                          
                    </div>
                    <div class="dec-corner dc_lb"></div>
                    <div class="dec-corner dc_rb"></div>
                    <div class="dec-corner dc_rt"></div>
                    <div class="dec-corner dc_lt"></div>
                </div>	
                <!-- section   -->
                <div class="content-section dark-bg parallax-section no-padding">
                    <div class="row">
                        <div class="st-gallery">
                            <div class="section-title">
                                <h4>Hãy tận hưởng thời gian của bạn tại khách sạn..</h4>
                                <h2>Our Gallery</h2>
                                <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                            </div>
                            <div class="map-dec2"></div>
                        </div>
                        <div class="col-lg-3">		
                        </div>
                        <div class="col-lg-9">
                            <!-- fw-carousel-wrap -->
                            <div class="single-carousle-container2">
                                <div class="single-carousel-wrap2">
                                    <!-- fw-carousel  -->
                                    <div class="single-carousel2   fl-wrap    lightgallery" data-mousecontrol="0">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide hov_zoom">
                                                    <img src="{{ asset('assets') }}/images/room/1.jpg" alt="">
                                                    <a href="{{ asset('assets') }}/images/room/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="{{ asset('assets') }}/images/room/2.jpg" alt="">
                                                    <a href="{{ asset('assets') }}/images/room/2.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="{{ asset('assets') }}/images/room/3.jpg" alt="">
                                                    <a href="{{ asset('assets') }}/images/room/3.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="{{ asset('assets') }}/images/room/5.jpg" alt="">
                                                    <a href="{{ asset('assets') }}/images/room/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                                <!-- swiper-slide-->
                                                <div class="swiper-slide  hov_zoom">
                                                    <img src="{{ asset('assets') }}/images/room/4.jpg" alt="">
                                                    <a href="{{ asset('assets') }}/images/room/4.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                </div>
                                                <!-- swiper-slide end-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fw-carousel end -->
                                    <div class="fw-carousel-button-prev slider-button"><i class="fa-solid fa-caret-left"></i></div>
                                    <div class="fw-carousel-button-next slider-button"><i class="fa-solid fa-caret-right"></i></div>
                                    <div class="sc-controls fwc-contr fwc_pag">
                                        <div class="ss-slider-pagination"></div>
                                    </div>
                                </div>
                                <!-- fw-carousel-wrap end -->						
                            </div>
                        </div>
                    </div>
                </div>
                <!-- section end  -->					
                <!-- section   -->
                <div class="content-section">
                    <div class="container  ">
                        <div class="section-title">
                            <h2>Nhóm chúng tôi</h2>
                            <div class="section-separator"><span><i class="fa-thin fa-gem"></i></span></div>
                        </div>
                        <div class="sc-dec3" style="left: 40%; bottom: -200px;"></div>
                    </div>
                    <div class="testimonilas-carousel-wrap">
                        <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                        <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                        <div class="testimonilas-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="{{ asset('assets') }}/images/avatar/thang.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Trương Đức Thắng</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Hãy đặt phòng và tận hưởng trọn vẹn những dịch vụ cao cấp nhất"</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Booking.com</a>
                                                </div>
                                                <span class="testi-number">01.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="{{ asset('assets') }}/images/avatar/doanh.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Nguyễn Văn Doanh</h3>
                                                    <div class="star-rating" data-starrating="4"> </div>
                                                    <p>"Hãy đặt phòng và tận hưởng trọn vẹn những dịch vụ cao cấp nhất"</p>
                                                    <a href="#" class="testi-link" target="_blank">Via hotels.com</a>													
                                                </div>
                                                <span class="testi-number">02.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item">
                                            <div class="testi-avatar"><img src="{{ asset('assets') }}/images/avatar/an.jpg" alt=""></div>
                                            <div class="testimonilas-text">
                                                <div class="testimonilas-text-item">
                                                    <h3>Lê Phú An</h3>
                                                    <div class="star-rating" data-starrating="5"> </div>
                                                    <p>"Hãy đặt phòng và tận hưởng trọn vẹn những dịch vụ cao cấp nhất"</p>
                                                    <a href="#" class="testi-link" target="_blank">Via Booking.com</a>													
                                                </div>
                                                <span class="testi-number">03.</span>
                                                <div class="testi-item-dec fs-wrapper"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <!--testi-item end-->
                                </div>
                            </div>
                        </div>
                        <div class="tcs-pagination tcs-pagination_init"></div>
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

<!-- Mirrored from diamant.kwst.net/site/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Jun 2024 07:14:58 GMT -->
</html>