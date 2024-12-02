
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
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

    <style>
        .select-container {
            display: flex;
        }

        select[name="idrace"] {
            flex: 1;
            width: 70%; 
            padding: 10px;
            margin-top: 10px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
            background-color: #fff;
        }

        .submit-button {
            width: auto;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #ff9f67;
            color: #fff;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
            background-color: #e88b55;
        }

    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets1/image/log.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom header-sticky">
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
                                            <li class="active"><a href="home.php">Home</a></li>
                                            <li><a href="vets.php">Vets</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li class="button-header"><a href="logout.php" class="btn btn3">Log Out</a></li>
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
        <!-- Slider Area Start -->
        <section class="slider-area slider-area2">
            <div class="slider-active">
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">Our cats</h1>
                                    <!-- Breadcrumb Start -->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Cats</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- Breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>

        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our cats</h2>
                            <form action="byBreed.php" method="GET">
                                <div class="select-container">
                                    <select name="idrace">
                                    
                                        <option value="">Breeds</option>
                                        <?php

                                        require_once('../database/config.php');
                                        require_once('../controllers/breedController.php');
                                        $bCtrl = new breedController();
                                        $res = $bCtrl->listRace();
                                        foreach ($res as $row) {
                                            echo "<option value='{$row['idrace']}'>{$row['namerace']}</option>";
                                        }
                                        ?>
                                    </select>
                                    <button type="submit" class="submit-button">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php
                    
                    
                    require_once('../models/cat.php');
                    require_once('../controllers/catController.php');
                    

                    $cCtrl = new catController();
                    $c = $cCtrl->listCat();
                    if ($c) {
                        foreach ($c as $cat) {
                            echo "<div class='col-lg-4'>
                                <div class='properties properties2 mb-30'>
                                    <div class='properties__card'>
                                        <div class='properties__img overlay1'>
                                            <img src='data:image/jpeg;base64," . base64_encode($cat['imgCat']) . "' alt=''>
                                        </div>
                                        <div class='properties__caption'>
                                            <p>Id: {$cat['idCat']}</p>
                                            <p>Breed: {$cat['namerace']}</p>
                                            <h3>Name: {$cat['nameCat']}</h3>
                                            <p>Description: {$cat['desCat']}</p>
                                            <div class='properties__footer d-flex justify-content-between align-items-center'>
                                                <div class='price'>
                                                    <span>Age: {$cat['ageCat']}</span>
                                                </div>
                                            </div>
                                            <a href='adopt.php?idCat=$cat[idCat]' class='border-btn border-btn2'>Adopt</a>
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
        <div id="back-top">
            <a title="Go to Top" href="#"><i class="fas fa-level-up-alt"></i></a>
        </div>

        <!-- JS here -->
        <script src="./assets1/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="./assets1/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets1/js/popper.min.js"></script>
        <script src="./assets1/js/bootstrap.min.js"></script>
        <script src="./assets1/js/jquery.slicknav.min.js"></script>
        <script src="./assets1/js/owl.carousel.min.js"></script>
        <script src="./assets1/js/slick.min.js"></script>
        <script src="./assets1/js/wow.min.js"></script>
        <script src="./assets1/js/animated.headline.js"></script>
        <script src="./assets1/js/jquery.magnific-popup.js"></script>
        <script src="./assets1/js/plugins.js"></script>
        <script src="./assets1/js/main.js"></script>
    </main>
</body>
</html>