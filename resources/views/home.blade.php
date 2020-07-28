<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <!-- Site Metas -->
      <title>Digital Marketing - Responsive HTML5 Template</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Site Icons -->
      <link rel="shortcut icon" href="#" type="image/x-icon" />
      <link rel="apple-touch-icon" href="#" />
      <!-- Bootstrap CSS -->
      <!-- <link rel="stylesheet" href="/assets/css/bootstrap.min.css" /> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/bootstrap.min.css') }}">

      <!-- Pogo Slider CSS -->
      <!-- <link rel="stylesheet" href="/assets/css/pogo-slider.min.css" /> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/pogo-slider.css') }}">

      <!-- Site CSS -->
      <!-- <link rel="stylesheet" href="/assets/css/style.css" /> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/style.css') }}">

      <!-- Responsive CSS -->
      <!-- <link rel="stylesheet" href="/assets/css/responsive.css" /> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/responsive.css') }}">

      <!-- Custom CSS -->
      <!-- <link rel="stylesheet" href="/assets/css/custom.css" /> -->
      <link rel="stylesheet" type="text/css" href="{{ asset('public/assets/css/custom.css') }}">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">
      <!-- LOADER -->
      <div id="preloader">
         <div class="loader">
            <img src="{{ ('public/assets/images/loader.gif') }}" alt="#" />
         </div>
      </div>
      <!-- END LOADER -->
      <div class="wrapper">
      <nav id="sidebar">
         <div class="menu_section">
            <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="about.html">About</a></li>
               <li><a href="services.html">Services</a></li>
               <li><a href="contact.html">Contact us</a></li>
            </ul>
         </div>
      </nav>
      <div id="content">
         <!-- Start header -->
         <header class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="logo_main">
                        <a href="index.html"><img src="{{ ('public/assets/images/main_logo.png') }}" /></a>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn"><img src="{{ ('public/assets/images/menu_icon.png') }}"></button>
                  </div>
               </div>
            </div>
         </header>
         <!-- End header -->
         <!-- Start Banner -->
         <div class="ulockd-home-slider">
            <div class="container-fluid">
               <div class="row">
                  <div class="pogoSlider" id="js-main-slider">
                     <!-- <div class="pogoSlider-slide" style="background-image:url(public/assets/images/slider_1.jpg);"> -->
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="slide_text">
                                    <h6>Grow your business</h6>
                                    <h3>Digital</h3>
                                    <h4>Marketing</h4>
                                    <br>
                                    <a class="readmore_bt" href="about.html">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(public/assets/images/slider_1.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="slide_text">
                                    <h6>Grow your business</h6>
                                    <h3>Digital</h3>
                                    <h4>Marketing</h4>
                                    <br>
                                    <a class="readmore_bt" href="about.html">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="pogoSlider-slide" style="background-image:url(public/assets/images/slider_1.jpg);">
                        <div class="container">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="slide_text">
                                    <h6>Grow your business</h6>
                                    <h3>Digital</h3>
                                    <h4>Marketing</h4>
                                    <br>
                                    <a class="readmore_bt" href="about.html">Read More</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .pogoSlider -->
               </div>
            </div>
         </div>
         <!-- End Banner -->
         <!-- section -->
         <div class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2>What We Do</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="{{ ('public/assets/images/icon_1.png') }}" alt="#" />
                            <img class="default-none" src="{{ ('public/assets/images/icon_1w.png') }}" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Link Building</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="{{ ('public/assets/images/icon_2.png') }}" alt="#" />
                            <img class="default-none" src="{{ ('public/assets/images/icon_2w.png') }}" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Monthly SEO Task</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="{{ ('public/assets/images/icon_3.png') }}" alt="#" />
                            <img class="default-none" src="{{ ('public/assets/images/icon_3w.png') }}" alt="#" />
                         </div>
                         <div class="full">
                            <h4>On Page SEO</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src="{{ ('public/assets/images/icon_4.png') }}" alt="#" />
                            <img class="default-none" src="{{ ('public/assets/images/icon_4w.png') }}" alt="#" />
                         </div>
                         <div class="full">
                            <h4>Online marketing</h4>
                         </div>
                         <div class="full">
                           <p>It is a long established fact that a reader will be distracted by the readable content..</p>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2 class="margin-bottom_30"><strong class="small theme_color">Increase your client for</strong><br>Better position of Business</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full">
                        <div class="heading_small">
                          <h4>Increase your client</h4>
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a pass<br><br>age of Lorem Ipsum, you need to be sure there isn'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn</p>
                      </div>
                      <div class="full margin-top_30">
                        <a class="readmore_bt" href="about.html">Read More</a>
                      </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full text_align_center">
                        <img class="img-responsive" src="{{ ('public/assets/images/icon_f1.png') }}" alt="#" />   
                      </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><strong class="small theme_color">Previous Projects</strong><br>Our Case Studies</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-10 offset-lg-1">
                     <div class="full text_align_center">
                         <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some 
                          form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a 
                          passage of Lorem Ipsum, you need to be sure there isn'</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="full text_align_center">
                       <img class="img-responsive" src="{{ ('public/assets/images/video_img.jpg') }}" alt="#" />
                     </div>
                     <div class="full center">
                        <a class="readmore_bt" href="about.html">Read More</a>
                      </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section dark_blue_layout white_fonts layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-lg-4">
                     <div class="full">
                        <div class="heading_main text_align_left" style="margin-bottom: 0;">
                           <h2><strong class="small">Get your  free quote</strong><br>Today</h2>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                     <div class="full">
                         <div class="form_section">
                            <form class="news_submit_form">
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="Enter url" name="#" required />
                                    <button>Submit</button>
                                 </div>
                              </fieldset>
                            </form>
                         </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2><strong class="small theme_color">We’ve done lot’s of work, Let’s</strong><br>Check some from here</h2>
                        </div>
                     </div>
                  </div>
               </div>
              <div class="row">

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="{{ ('public/assets/images/blog1.jpg') }}" alt="#" />
                      <div class="hover_workblog">
                          <img src="{{ ('public/assets/images/icon.png') }}" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="public/assets/images/blog2.jpg" alt="#" />
                      <div class="hover_workblog">
                          <img src="{{ ('public/assets/images/search_icon.png') }}" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="{{ ('public/assets/images/blog3.jpg') }}" alt="#" />
                      <div class="hover_workblog">
                          <img src="{{ ('public/assets/images/search_icon.png') }}" alt="#" />
                      </div>
                   </div>
                </div>

                <div class="col-sm-6 col-md-3 col-lg-3">
                   <div class="work_blog margin-top_30">
                      <img class="img-responsive" src="{{ ('public/assets/images/blog4.jpg') }}" alt="#" />
                      <div class="hover_workblog">
                          <img src="{{ ('public/assets/images/search_icon.png') }}" alt="#" />
                      </div>
                   </div>
                </div>

              </div>
            </div>
         </div>
         <!-- end section -->
         <!-- section -->
         <div class="section about_section layout_padding padding_top_0">
            <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center margin-bottom_30">
                           <h2>Get in touch</h2>
                        </div>
                     </div>
                  </div>
               </div>
         </div>
         <!-- section -->
         <div class="section contact_section">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 theme_color_bg fc3726 padding_0">
                     <div class="full">
                        <div class="row">
                           <div class="col-sm-12 col-md-10 offset-lg-1">
                              <div class="full contact_form">
                                 <form class="contact_form_inner" action="#">
                                    <fieldset>
                                       <div class="field">
                                          <input type="text" name="name" placeholder="Your name" />
                                       </div>
                                       <div class="field">
                                          <input type="email" name="email" placeholder="Email" />
                                       </div>
                                       <div class="field">
                                          <input type="text" name="phone_no" placeholder="Phone number" />
                                       </div>
                                       <div class="field">
                                          <textarea placeholder="Message"></textarea>
                                       </div>
                                       <div class="field center">
                                          <button class="margin-top_30">SEND</button>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 padding_0">
                     <div class="full">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="full map_section">
                                 <div id="map">
                                    <div id="googleMap" style="width:100%;height:440px;"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end section -->
         <!-- Start Footer -->
         <footer class="footer-box">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Contact us</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                         <p>Address<br><small>151 Ho Ba Kien Street,<br>Ward 15, District 10,<br>Ho Chi Minh City, Vietnam</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                        <p>Phone<br><small>+84 126 922 0162<br>+84 905 333 333<br>Monday - Sunday<br>08:00 am - 05:00 pm</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>Email<br><small>support@sofbox.com<br>24 X 7 online support</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Social media</p>
                         <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                         </p>
                     </div>
                  </div>
              
               </div>
            </div>
         </footer>
         <!-- End Footer -->
         <div class="footer_bottom">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <p class="crp">© Copyrights 2019 design by <a href="https://html.design" title="Free Website Templates">Free Website Templates</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.pogo-slider.min.js"></script>
      <script src="js/slider-index.js"></script>
      <script src="js/smoothscroll.js"></script>
      <script src="js/form-validator.min.js"></script>
      <script src="js/contact-form-script.js"></script>
      <script src="js/isotope.min.js"></script>
      <script src="js/images-loded.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- End Google Map -->
      <script>
         $(document).ready(function() {
           $('#sidebarCollapse').on('click', function() {
             $('#sidebar, #content').toggleClass('active');
             $('.collapse.in').toggleClass('in');
             $('a[aria-expanded=true]').attr('aria-expanded', 'false');
           });
         });
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js -->
   </body>
</html>
