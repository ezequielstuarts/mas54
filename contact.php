<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Más54. Agencia Digital | Contacto</title>
    <meta name="description" content="Comunicate con nuestra agencia digital, contanos tus necesidades y objetivos y planificamos tu estrategia en redes sociales y medios digitales.">
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
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?php @include('includes/googleAnalytics.php') ?>
    
</head>

<body>

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
    <div class="contact-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 offset-xl-1 col-12 col-lg-11 offset-lg-1">
                    <div class="contact-wrappper">
                        <div class="row">
                            <div class=" col-12">
                                <div class="section-title">
                                    <h2>Estamos en contacto</h2>
                                    <p>Tenés todos estos medios para contactarte con nosotros.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-12 ">
                                <div class="contact-info hover cursorpoint">
                                    <i class="fa fa-facebook"></i>
                                    <p><a href="https://www.facebook.com/Mas54AgenciaDigital" target="_blank">/Mas54AgenciaDigital</p></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12 ">
                                <div class="contact-info hover cursorpoint">
                                    <i class="fa fa-linkedin"></i>
                                    <a href="https://www.linkedin.com/company/mas54agenciadigital" target="_blank">
                                    <p>/mas54agenciadigital</p>
                                </a>
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-12">
                                <div class="contact-info hover cursorpoint">
                                    <i class="fa fa-instagram"></i>
                                    <a href="https://www.instagram.com/mas54agenciadigital" target="_blank">
                                    <p>/mas54agenciadigital</p>
                                </a>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-sm-6 col-12 ">
                                <div class="contact-info apagadas">
                                    <i class="fa fa-youtube"></i>
                                    <p>/Youtube </p>
                                </div>
                            </div> -->
                        </div>
                        <div class="contact-form form-style">
                        
                            <div class="cf-msg"></div>
                            <div class="hide" id="success" style=" padding: 50px;background-color: #000000;text-align: center;">
                            <p>Hemos enviado su mensaje, en breve nos contactaremos.</p>
                            </div>
                            
                            <form id="formulario-contacto" action="mail.php" method="post">
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" placeholder="Nombre" id="fname" name="fname" >
                                    </div>
                                    <div class="col-12  col-sm-6">
                                        <input type="text" placeholder="Email" id="email" name="email" >
                                    </div>
                                    <div class="col-12">
                                        <input type="text" placeholder="Asunto" id="subject" name="subject" >
                                    </div>
                                    <div class="col-12">
                                        <textarea class="contact-textarea" placeholder="Mensaje" id="msg" name="msg" ></textarea>
                                    </div>
                                    
                                    <div id="alerta" class="hide col-12" role="alert" style="padding: 10px;background-color: red;text-align: center;">
                                        <p>
                                            <b class="respuesta"></b><span class="mensaje-alerta"></span> 
                                        </p>
                                    </div>
                                    <div class="col-12" style="padding-bottom:30px;">
                                        <div class="g-recaptcha" data-sitekey="6LcXQ2UUAAAAAAWUqpC7SpVLdJ7WtWY5nd4cDq-Q"></div>  
                                    </div>
                                    <div class="col-12">
                                        <button id="submit" type="submit" name="submit">ENVIAR MENSAJE</button>
                                        <button id="enviando" class="hide" name="submit">ENVIANDO ...</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-12">
                    <div class="googlemap-wrap">
                        <div id="googleMap"></div>
                    </div>
                    
                    <!-- <div class="google-maps">
                    <iframe src="https://www.google.com/maps/d/u/1/embed?mid=16SI2CMJoWr95me8ul-qp-x3ovbY6GsSx" width="500" height="700" frameborder="0" style="border:0"></iframe>
                    </div> -->
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
                        <li class="oculto"><a href="contact.html">Contacto</a></li>
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
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbeBYsZSDkbIyfUkoIw1Rt38eRQOQQU0o"></script>
    <script>
    function initialize() {
        var e = { zoom: 15, scrollwheel: !1, center: new google.maps.LatLng(-34.572591,-58.433429), styles: [{ elementType: "geometry", stylers: [{ color: "#f5f5f5" }] }, { elementType: "labels.icon", stylers: [{ visibility: "off" }] }, { elementType: "labels.text.fill", stylers: [{ color: "#616161" }] }, { elementType: "labels.text.stroke", stylers: [{ color: "#f5f5f5" }] }, { featureType: "administrative.land_parcel", elementType: "labels.text.fill", stylers: [{ color: "#bdbdbd" }] }, { featureType: "poi", elementType: "geometry", stylers: [{ color: "#eeeeee" }] }, { featureType: "poi", elementType: "labels.text.fill", stylers: [{ color: "#757575" }] }, { featureType: "poi.park", elementType: "geometry", stylers: [{ color: "#e5e5e5" }] }, { featureType: "poi.park", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] }, { featureType: "road", elementType: "geometry", stylers: [{ color: "#ffffff" }] }, { featureType: "road.arterial", elementType: "labels.text.fill", stylers: [{ color: "#757575" }] }, { featureType: "road.highway", elementType: "geometry", stylers: [{ color: "#dadada" }] }, { featureType: "road.highway", elementType: "labels.text.fill", stylers: [{ color: "#616161" }] }, { featureType: "road.local", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] }, { featureType: "transit.line", elementType: "geometry", stylers: [{ color: "#e5e5e5" }] }, { featureType: "transit.station", elementType: "geometry", stylers: [{ color: "#eeeeee" }] }, { featureType: "water", elementType: "geometry", stylers: [{ color: "#c9c9c9" }] }, { featureType: "water", elementType: "labels.text.fill", stylers: [{ color: "#9e9e9e" }] }] },

            l = new google.maps.Map(document.getElementById("googleMap"), e);
        new google.maps.Marker({ position: l.getCenter(), animation: google.maps.Animation.BOUNCE, map: l })
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- main js -->
    <script src="assets/js/scripts.js"></script>

    <script src="assets/js/enviar.js"></script>
</body>
</html>

