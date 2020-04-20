
<?php 
@include("data/marcas.php")
?>

<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Más54. Agencia Digital | Clientes</title>
    <meta name="description" content="Más54. Agencia Digital trabajamos con grandes marcas desde hace más de 10 años resolviendo la comunicación digital y estrategia de social media de cada cliente.">
    <meta name="keywords" content="Sem, Seo, Adwords, Social Media, Redes Sociales, e-mail marketing, desarrollo web, aplicaciones mobile, gaming, video marketing">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- all css here -->
    <!-- bootstrap v3.3.7 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- flaticon.css -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <!-- magnific-popup.css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- metisMenu.min.css -->
    <link rel="stylesheet" href="assets/css/metisMenu.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/styles2.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive2.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <?php @include('includes/googlebar.php') ?>
    
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="preloader-wrap">
        <div class="spinner"></div>
    </div>
   
        <!-- .menu-area start -->
        <div class="menu-area">
            <?php @include('includes/nav-bar.php') ?>
        </div>
        <!-- .menu-area end -->
     <!-- header-area start -->
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-sm-5 order-0 col-12">
                    <div class="header-left">
                      <p><a href="index.php"><img class="light-logo" src="assets/images/logo.png" alt=""></a></p>
                    </div>
                </div>
                <div class="col-lg-4 text-center col-12 order-4 order-lg-0">
                    <div class="logo"> 
                  </div>
                </div>
                <div class="col-lg-3 text-right col-sm-5 order-0 col-8">
                    <?php @include('includes/redes.php') ?>
                </div>
                <div class="col-lg-1 col-sm-2 order-0 col-4">
                    <ul class="menu">
                        <li class="first"></li>
                        <li class="second"></li>
                        <li class="third"></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <!-- header-area end -->
    <!-- service-area start -->
    <div class="project-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 offset-xl-1 col-12 col-lg-11 offset-lg-1">
                    <div class="project-wrap">
                        <div class="row">
                            <div class=" col-12 wow fadeInUp" data-wow-delay=".1s">
                                <div class="section-title">
                                    <h2>Nuestros clientes</h2>
                                    <p>Más de 12 años trabajando para grandes marcas.</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="design">
                                <div class="row">
                                    <?php foreach ($array as $dato => $valor) { ?>
                                        <div class="col-lg-2 col-12 wow fadeInUp" data-wow-delay=".1s">
                                            <div class="project-items sm-mb-30">
                                                <img src=" <?php echo $valor['url'] ?>" alt="<?php echo $valor['logo']?>" title=" <?php echo $valor['title']?> ">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade" id="graphic">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".1s">
                                        <div class="project-items">
                                            <img src="assets/images/project/1.jpg" alt="">
                                            <a class="popup" href="assets/images/project/1.jpg"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-12">
                                        <div class="row">
                                            <div class="col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="project-items mb-30">
                                                    <img src="assets/images/project/2.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/2.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="project-items">
                                                    <img src="assets/images/project/3.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/3.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="project-items mb-0">
                                                    <img src="assets/images/project/4.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/4.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!-- <div class="tab-pane fade" id="development">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".1s">
                                        <div class="project-items">
                                            <img src="assets/images/project/1.jpg" alt="">
                                            <a class="popup" href="assets/images/project/1.jpg"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-12">
                                        <div class="row">
                                            <div class="col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="project-items mb-30">
                                                    <img src="assets/images/project/2.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/2.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="project-items">
                                                    <img src="assets/images/project/3.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/3.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="project-items mb-0">
                                                    <img src="assets/images/project/4.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/4.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="software">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-6 col-12 wow fadeInUp" data-wow-delay=".1s">
                                        <div class="project-items">
                                            <img src="assets/images/project/1.jpg" alt="">
                                            <a class="popup" href="assets/images/project/1.jpg"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-12">
                                        <div class="row">
                                            <div class="col-sm-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                                                <div class="project-items mb-30">
                                                    <img src="assets/images/project/2.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/2.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12 wow fadeInUp" data-wow-delay=".3s">
                                                <div class="project-items">
                                                    <img src="assets/images/project/3.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/3.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12 wow fadeInUp" data-wow-delay=".4s">
                                                <div class="project-items mb-0">
                                                    <img src="assets/images/project/4.jpg" alt="">
                                                    <a class="popup" href="assets/images/project/4.jpg"><i class="fa fa-link"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 d-none d-xl-block">
                    <div class="service-img">
                        <img src="assets/images/project/5.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="info-text">
            <h3>AGENCIA DIGITAL</h3>
        </div>
    </div>
    <!-- service-area end -->
    <!-- footer-area start -->
  
    <footer class="footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-sm-7 col-12">
                    <p>Copyright © 2018 | Más54. Agencia Digital  | Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 col-sm-5 col-12">
                    <ul class="d-flex">
                        <li><a href="contact.php">Contacto</a></li>
                        <li class="oculto"><a class="video-popup" href="#"><span class="flaticon-play-button"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl.carousel.2.0.0-beta.2.4 css -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- mouse_scroll.js -->
    <script src="assets/js/mouse_scroll.js"></script>
    <!-- scrollup.js -->
    <script src="assets/js/scrollup.js"></script>
    <!-- isotope.pkgd.min.js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- imagesloaded.pkgd.min.js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- magnific_popup.js -->
    <script src="assets/js/magnific_popup.js"></script>
    <!-- swiper.min.js -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- wow.min.js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- metisMenu.min.js -->
    <script src="assets/js/metisMenu.min.js"></script>
    <!-- main js -->
    <script src="assets/js/scripts.js"></script>
</body>

</html>