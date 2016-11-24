<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Urbun Street</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">


    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="ext/css">
  <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/4.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>UrbanStreet</span></h1>
            <p class="animated fadeInRightBig">สเต็กถาดปราบเซียน..สเต็กสายโหดของคนรุ่นใหม่</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#about-us">เยี่ยมชม</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/4-1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Steaks & Burgers</span></h1>
            <p class="animated fadeInRightBig">อิ่มอร่อยไปกับเมนู สเต็กและเบอร์เกอร์ และเมนูอื่นอื่นๆ ไม่ว่าจะเป็น พาสต้า และอาหารซีฟู้ด</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#portfolio">เข้าไปดูเมนู</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/6-1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">ราคาสุดคุ้มที่ <span>UrbanStreet</span></h1>
            <p class="animated fadeInRightBig">เข้าไปเยี่ยมชมหน้าเพจของ UrbanStreet</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#contact-us">ไปที่ติดต่อเรา</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#about-us"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="#">
            <img class="img-responsive" src="images/logo2.png" alt="logo">
          </a>

        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#about-us">About Us</a></li>
            <li class="scroll"><a href="#portfolio">Menu</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">

      <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="images/iconpro.jpg" class="img-responsive">
          </div>
        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>รู้จัก UrbanStreet</h2>
            <p>UrbanStreet อัลเบอร์สตีท  </p>
            <p>ใครคิดว่าแน่ ขอเชิญมาปราบเซียนได้นะครับ"


ร้านนี้ไม่ได้มีดีแค่สเต็กเมนูอื่นท้าลอง ก็มีอีกดังนี้ สเต็ก / เบอเกอร์ / พาสต้า / ซีฟู้ด


เชิญมาชวนชิมชวนชมกันได้นะครับ @ลาดพร้าว 101</p>
          </div>
        </div>

      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h1 style="text-color:#ffffff">เมนูของเรา</h1>
          <p>สเต็ก / เบอเกอร์ / พาสต้า / ซีฟู้ด</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">



        <?php
            include 'menu.php';
        ?>


      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div>
  </section>


  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h1>เข้ามาร่วมอิ่มอร่อยได้ที่</h1>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
          <div class="row">

            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <p>รายละเอียด</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> 1115 Thailand, 1115 Lat Phrao 101 Rd Bangkok, Thailand </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> 092 696 0007  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email Developer:</span><a href="#"> fythatthepce@gmail.com</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<div id="map"></div>

  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="#"><img class="img-responsive" src="images/logo2.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>

            <li><a class="facebook" href="https://www.facebook.com/urbanstreet101/"><i class="fa fa-facebook"></i></a></li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">

            <p>&copy; Urban Street</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.ce.kmitl.ac.th/">CE 3D KMITL</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

  <script>
  function initMap() {
    var uluru = {lat:13.791665, lng: 100.628377};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 20,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHysYyg9QnhKI_lAEp3JCzGtjveEcnqQw&callback=initMap">
</script>


</body>
</html>
