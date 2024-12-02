<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Vets</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSS here -->
    <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets1/css/slicknav.css">
    <link rel="stylesheet" href="assets1/css/flaticon.css">
    <link rel="stylesheet" href="assets1/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets1/css/gijgo.css">
    <link rel="stylesheet" href="assets1/css/animate.min.css">
    <link rel="stylesheet" href="assets1/css/animated-headline.css">
    <link rel="stylesheet" href="assets1/css/magnific-popup.css">
    <link rel="stylesheet" href="assets1/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets1/css/themify-icons.css">
    <link rel="stylesheet" href="assets1/css/slick.css">
    <link rel="stylesheet" href="assets1/css/nice-select.css">
    <link rel="stylesheet" href="assets1/css/styless.css">
    <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets1/img/log.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header ">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <a href="home.php" class="logo d-flex align-items-center">
                                <h1 class="sitename">PAWDOPT</h1><span>.</span>
                              </a>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">                                                                                          
                                            <li class="active" ><a href="Home.php">Home</a></li>
                                            <li><a href="Vets.php">Vets</a></li>
                                            <li><a href="blog.php">Blog</a></li>


                                            <li class="button-header"><a href="login.html" class="btn btn3">Log Out</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <main>
        <!--? slider Area Start-->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Our Vets</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="Home.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Vets</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>



        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Vets</h2>
                        </div>
                    </div>
                </div>




                <div class="row">
                    

                                <!-- lhnaa lphp yethat-->
                                <?php
                                require_once('../models/vet.php');
                                require_once('../controllers/vetController.php');

                                $vCtrl = new vetController();
                                $v = $vCtrl->listVet();

                                if ($v) {
                                    foreach ($v as $vet) {
                                        echo "<div class='col-lg-4'>
                                        <div class='properties properties2 mb-30'>
                                            <div class='properties__card'>
                                                <div class='properties__caption'>
                                                    <h3>Name: {$vet['nameVet']}</h3>
                                                    <p>E-mail: {$vet['emailVet']}</p>
                                                    <div class='properties__footer d-flex justify-content-between align-items-center'>
                                                        <div class='price'>
                                                            <span>Phone number: {$vet['phone']}</span>
                                                            <span>Address: {$vet['adresse']}</span>
                                                        </div>
                                                    </div>
                                                    <a href='#' class='border-btn border-btn2'>Find out more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>";
                                    }
                                }
                                
                                ?>


                           
                </div>




                
            </div>
        </div>
        <!-- Courses area End -->


      <!-- Scroll Up -->
      <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="./assets1/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets1/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets1/js/popper.min.js"></script>
    <script src="./assets1/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets1/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets1/js/owl.carousel.min.js"></script>
    <script src="./assets1/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets1/js/wow.min.js"></script>
    <script src="./assets1/js/animated.headline.js"></script>
    <script src="./assets1/js/jquery.magnific-popup.js"></script>

    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets1/js/plugins.js"></script>
    <script src="./assets1/js/main.js"></script>
    
</body>
</html>