<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- The above 3 meta tags *must* come first in the head -->

    <!-- SITE TITLE -->
    <title>Bangladesh Local Guides</title>
    <meta name="description" content="Bangladesh Local Guides 10 years calibration"/>

    <!-- facebook open graph starts from here, if you don't need then delete open graph related  -->
    <meta property="og:title" content="Bangladesh Local Guides"/>
    <meta property="og:url" content=""/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:site_name" content="Bangladesh Local Guides"/>
    <!--meta property="fb:admins" content="" /-->  <!-- use this if you have  -->
    <meta property="og:type" content="website"/>
    <meta property="og:image" content=""/>
    <!-- when you post this page url in facebook , this image will be shown -->
    <!-- facebook open graph ends from here -->

    <!--  FAVICON AND TOUCH ICONS -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/star.png"/>
    

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/bootstrap/css/bootstrap.min.css')}}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('assets/libs/fontawesome/css/font-awesome.min.css')}}" media="all"/>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('assets/libs/maginificpopup/magnific-popup.css')}}" media="all"/>

    <!-- Time Circle -->
    <link rel="stylesheet" href="{{asset('assets/libs/timer/TimeCircles.css')}}" media="all"/>

    <!-- OWL CAROUSEL CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/owlcarousel/owl.carousel.min.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('assets/libs/owlcarousel/owl.theme.default.min.css')}}" media="all" />

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:400,700%7cRaleway:300,400,400i,500,600,700,900"/>

    <!-- MASTER  STYLESHEET  -->
    <link id="lgx-master-style" rel="stylesheet" href="assets/css/style-default.min.css" media="all"/>

    <!-- MODERNIZER CSS  -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body class="home">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->

<div class="lgx-container ">
<!-- ***  ADD YOUR SITE CONTENT HERE *** -->



<!--HEADER-->
<header>
    <div id="lgx-header" class="lgx-header">
        <div class="lgx-header-position lgx-header-position-white lgx-header-position-fixed "> 
            <div class="lgx-container"> <!--lgx-container-fluid-->
                <nav class="navbar navbar-default lgx-navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="lgx-logo" style="padding-top: 20px;">
                            <a href="index.html" class="lgx-scroll">
                                <img src="assets/img/logo.png" width="160" alt="Emeet Logo"/>
                            </a>
                        </div>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="lgx-nav-right navbar-right">
                            <div class="lgx-cart-area">
                                <a class="lgx-btn lgx-btn-red" href="contact.html"><span>Registration</span></a>
                            </div>
                        </div>
                        <ul class="nav navbar-nav lgx-nav navbar-right">
                            <li> <a class="lgx-scroll" href="#lgx-banner">Home </span></a> <li>
                            <li><a class="lgx-scroll" href="#lgx-speakers">Guests</a></li>
                            <li><a class="lgx-scroll" href="#lgx-schedule">Schedule</a></li>
                            <li><a class="lgx-scroll" href="#lgx-sponsors">Sponsors</a></li>
                            <!-- <li><a class="lgx-scroll" href="#lgx-news">News</a></li>
                            <li><a class="lgx-scroll" href="contact.html">Contact</a></li> -->
                        </ul>
                    </div><!--/.nav-collapse -->
                </nav>
            </div>
            <!-- //.CONTAINER -->
        </div>
    </div>
</header>
<!--HEADER END-->



    <!--Banner Inner-->
    <section>
        <div class="lgx-banner lgx-banner-inner">
            <div class="lgx-page-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading-area">
                                <div class="lgx-heading lgx-heading-white">
                                    <h2 class="heading">10 Years Celebration</h2>
                                </div>
                                <ul class="breadcrumb">
                                    <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                                    <li class="active">Registration</li>
                                </ul>
                            </div>
                        </div>
                    </div><!--//.ROW-->
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section> <!--//.Banner Inner-->


    <main>
        <div class="lgx-page-wrapper">
            <!--News-->
            <section>
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12 col-md-10 col-md-offset-1">

                            <form method="POST" class="lgx-contactform" action="{{ route('registration')}}">
                                @csrf
                                <div class="form-group col-md-6">
                                    <input type="text" name="f_name" class="form-control full_name" id="full_name" placeholder="Enter Your First Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="l_name" class="form-control full_name" id="full_name" placeholder="Enter Your Last Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control email" id="email" placeholder="Enter Your Email" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <input type="number" name="phone" class="form-control phone" id="phone" placeholder="Enter phone" required>
                                </div>

                                <div class="form-group col-md-6">
                                    <select class="form-control" id="t_shirt_size" name="t_shirt_size" required>
                                        <option value="">T-Shirt Size</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                        <option value="XXL">XXL</option>
                                        <option value="XXXL">XXXL</option>
                                    </select>                                
                                </div>

                                <div class="form-group col-md-6">
                                    <select class="form-control" id="lg_level" name="lg_level" required>
                                        <option value="">Local Guides Level</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>                                
                                </div>

                                <div class="form-group col-md-6">
                                    <select class="form-control" id="gender" name="gender" required>
                                        <option value="">Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>                                
                                </div>

                                
                                <div class="form-group col-md-6">
                                    <input type="text" name="dob" class="form-control phone" id="dob" placeholder="Date of Birth" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <input type="text" name="profession" class="form-control phone" id="Profession" placeholder="Profession" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <input type="text" name="organization" class="form-control phone" id="" placeholder="Institute/Organization" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="text" name="fb_link" class="form-control " id="" placeholder="Facebook Profile Link" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="connect_profile" class="form-control " id="" placeholder="Connect Profile Link" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="map_profile" class="form-control " id="" placeholder="Maps Profile Link" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="present_address" class="form-control " id="" placeholder="Present Address" required>
                                </div>t_division" class="form-control phone" id="" placeholder="Present Division" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="present_district" class="form-control phone" id="" placeholder="Present District" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="present_upazila" class="form-control phone" id="" placeholder="Present Upazila" required>
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <input type="text" name="permanent_address" class="form-control phone" id="" placeholder="Permanent Address" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="permanent_division" class="form-control phone" id="" placeholder="Permanent Division" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="permanent_district" class="form-control phone" id="" placeholder="Permanent District" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="permanent_upazila" class="form-control phone" id="" placeholder="Permanent Upazila" required>
                                </div>


                                {{-- <button type="submit" class="lgx-btn hvr-glow hvr-radial-out lgxsend lgx-send"><span>Submit</span></button> --}}
                                <button type="submit" class="lgx-btn hvr-glow hvr-radial-out "><span>Submit</span></button>
                            </form>

                            <!-- MODAL SECTION -->
                            {{-- <div id="lgx-form-modal" class="modal fade lgx-form-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content lgx-modal-content">
                                        <div class="modal-header lgx-modal-header">
                                            <button type="button" class="close brand-color-hover" data-dismiss="modal" aria-label="Close">
                                                <i class="fa fa-power-off"></i>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="alert lgx-form-msg" role="alert"></div>
                                        </div> <!--//MODAL BODY-->

                                    </div>
                                </div>
                            </div> <!-- //MODAL --> --}}

                        </div> <!--//.COL-->
                    </div>
                </div><!-- //.CONTAINER -->
            </section>
            <!--News END-->
        </div>
    </main>




<!--FOOTER-->
<footer>
    <div id="lgx-footer" class="lgx-footer"> <!--lgx-footer-white-->
        <div class="lgx-inner-footer">
            <div class="lgx-subscriber-area ">
                <div class="container">
                    <div class="lgx-subscriber-inner">  <!--lgx-subscriber-inner-indiv-->
                        <h3 class="subscriber-title">Join Newsletter</h3>
                        <form class="lgx-subscribe-form" >
                            <div class="form-group form-group-email">
                                <input type="email" id="subscribe" placeholder="Enter your email Address  ..." class="form-control lgx-input-form form-control"  />
                            </div>
                            <div class="form-group form-group-submit">
                                <button type="submit" name="lgx-submit" id="lgx-submit" class="lgx-btn lgx-submit"><span>Subscribe</span></button>
                            </div>
                        </form> <!--//.SUBSCRIBE-->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="lgx-footer-area">
                    <div class="lgx-footer-single">
                        <a class="logo" href="index.html"><img src="assets/img/footer-logo.png" width="200" alt="Logo"></a>
                    </div> <!--//footer-area-->
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Venue Location </h3>
                        <h4 class="date">
                            16 February, 2024
                        </h4>
                        <address>
                            85 Golden Street, Darlinghurst <br>
                            ERP 2021, United States
                        </address>
                        <a id="myModalLabel2" data-toggle="modal" data-target="#lgx-modal-map" class="map-link" href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> View Map location</a>
                    </div>
                    <div class="lgx-footer-single">
                        <h3 class="footer-title">Social Connection</h3>
                        <p class="text">
                            You should connect social area <br> for Any update
                        </p>
                        <ul class="list-inline lgx-social-footer">
                            <li><a href="https://www.facebook.com/groups/BangladeshLocalGuides"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <!-- <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li> -->
                        </ul>
                    </div>
                    <!--<div class="lgx-footer-single">
                        <h2 class="footer-title">Instagram Feed</h2>
                        <div id="instafeed">
                        </div>
                    </div>-->
                </div>
                <!-- Modal-->
                <div id="lgx-modal-map" class="modal fade lgx-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="lgxmapcanvas map-canvas-default" id="map_canvas"> </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- //.Modal-->

                <div class="lgx-footer-bottom">
                    <div class="lgx-copyright">
                        <p> <span>©</span> 2024 <a href="https://www.facebook.com/LocalGuidesBD">BDLG</a> is powered by <a href="https://codershub.codes/">Codershub</a> The property of their owners.</p>
                    </div>
                </div>

            </div>
            <!-- //.CONTAINER -->
        </div>
        <!-- //.footer Middle -->
    </div>
</footer>
<!--FOOTER END-->


</div>
<!--//.LGX SITE CONTAINER-->
<!-- *** ADD YOUR SITE SCRIPT HERE *** -->
<!-- JQUERY  -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

<!-- BOOTSTRAP JS  -->
<script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>

<!-- Smooth Scroll  -->
<script src="assets/libs/jquery.smooth-scroll.js"></script>

<!-- SKILLS SCRIPT  -->
<script src="assets/libs/jquery.validate.js"></script>

<!-- if load google maps then load this api, change api key as it may expire for limit cross as this is provided with any theme -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIKbFTvAyZuB8CuFqSIEVEHmbqfDm6UD8"></script>

<!-- CUSTOM GOOGLE MAP -->
<script type="text/javascript" src="assets/libs/gmap/jquery.googlemap.js"></script>

<!-- adding magnific popup js library -->
<script type="text/javascript" src="assets/libs/maginificpopup/jquery.magnific-popup.min.js"></script>

<!-- Owl Carousel  -->
<script src="assets/libs/owlcarousel/owl.carousel.min.js"></script>

<!-- COUNTDOWN   -->
<script src="assets/libs/countdown.js"></script>
<script src="assets/libs/timer/TimeCircles.js"></script>

<!-- Counter JS -->
<script src="assets/libs/waypoints.min.js"></script>
<script src="assets/libs/counterup/jquery.counterup.min.js"></script>

<!-- SMOTH SCROLL -->
<script src="assets/libs/jquery.smooth-scroll.min.js"></script>
<script src="assets/libs/jquery.easing.min.js"></script>

<!-- type js -->
<script src="assets/libs/typed/typed.min.js"></script>

<!-- header parallax js -->
<script src="assets/libs/header-parallax.js"></script>

<!-- instafeed js -->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>-->
<script src="assets/libs/instafeed.min.js"></script>

<!-- CUSTOM SCRIPT  -->
<script src="assets/js/custom.script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



</body>
</html>
