<!DOCTYPE html>
<html lang="en">
  <head>
    <title>E-bud - Cultural Event Finder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php"><span style="color:#42B883;">E</span> - bud</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span>
        </button>

        <div class="search-input100">
						<input class="input100 search" type="text" placeholder="Find events">
						<span class="focus-input100"></span>
				</div>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.html" class="nav-link">Create Events</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">Order Tickets</a></li>
            <?php
          session_start();
          if (isset($_SESSION['user_system_name'])) {
            $nama = $_SESSION['user_system_name'];
            echo "<div class=\"nav-item\"><a class=\"nav-link\" style=\"font-weight: bold;\">$nama</a></div>";
            echo "<div class=\"nav-item\"style=\"background: #FF7E67 ;border-radius: 5px\"><a href=\"logout.php\" class=\"nav-link\" style=\"color:#ffffff;\">Logout</a></div>";
          } else {
            echo "<li class=\"nav-item signin\"><a href=\"register.php\" class=\"nav-link\" style=\"font-weight: bold;\">Register</a></li>";
            echo "<li class=\"nav-item signin\"><a href=\"login.php\" class=\"nav-link\" style=\"font-weight: bold; color: #FF7E67;\">Sign In</a></li>";
          }
          ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/culture-4.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center justify-content-left text-left">
            <div class="col-md-10 col-sm-12 ftco-animate">
              <h1 class="mb-3">Visit Nearby<br>Cultural Events</h1>
              <p><a href="reservation.html" class="btn btn-primary px-5 py-3">Surf Now</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

   		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form col-md-12 reservation pt-2 px-3">
						<form>
							<div class="row no-margin">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Event place</span>
										<input class="form-control" type="text" placeholder="Malang, Jawa Timur...">
									</div>
								</div>
								<div class="col-md-6">
									<div class="row no-margin">
										<div class="col-md-6">
											<div class="form-group">
												<span class="form-label">Event date</span>
												<input class="form-control" type="date" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<span class="form-label">Event Category</span>
												<select class="form-control">
													<option>Cultural</option>
													<option>Traditional Dance</option>
													<option>Folk Song</option>
													<option>Poem</option><option>Exhibition</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Search Events</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

    <section class="ftco-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-7 heading-section ftco-animate">
            <h2>Newest Events</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel1 owl-carousel ftco-owl">
            <div class="item">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-1.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">International Bali Show Pendet Dance Revolution 4.0</a></h3>
                  <p class="clearfix">
                  Graha Cakrawala, UM, Malang
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="100">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-2.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">International Bali Show Kecak Dance 4.0</a></h3>
                  <p class="clearfix">
                  Lapangan Rektorat, UB, Malang
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-4.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">"Reog Bonorogo In 
Action" Diesnat UB</a></h3>
                  <p class="clearfix">
                  Harris Hotel, Sekarpuro, Malang
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-3.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">HAKTEKNAS Culture (Hari Kebangkitan Teknologi Nasional) 2019</a></h3>
                  <p class="clearfix">
                  Graha Cakrawala, UM, Malang
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-2.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">International Bali Show Kecak Dance 4.0</a></h3>
                  <p class="clearfix">
                  Harris Hotel, Sekarpuro, Malang
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   <section class="ftco-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-7 heading-section ftco-animate">
            <h2>Weekly Events</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="carousel1 owl-carousel ftco-owl">
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-2.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">International Bali Show Kecak Dance 4.0</a></h3>
                  <p class="clearfix">
                  Harris Hotel, Sekarpuro, Malang
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-4.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">"Reog Bonorogo In 
Action" Diesnat UB</a></h3>
                  <p class="clearfix">
                  Harris Hotel, Sekarpuro, Malang
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-1.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">International Bali Show Pendet Dance Revolution 4.0</a></h3>
                  <p class="clearfix">
                  Graha Cakrawala, UM, Malang
                  </p>
                </div>
              </div>
            </div>
        <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-4.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">"Reog Bonorogo In 
Action" Diesnat UB</a></h3>
                  <p class="clearfix">
                  Harris Hotel, Sekarpuro, Malang
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="blog-entry" data-aos-delay="200">
                <a href="blog-single.html" class="block-20" style="background-image: url('images/culture-4.jpg');">
                </a>
                <div class="text p-4">
                <div style="color: #FF7E67; font-weight: bold">July 7, 2018</div>
                  <h3 class="heading"><a href="#">"Reog Bonorogo In 
Action" Diesnat UB</a></h3>
                  <p class="clearfix">
                  Harris Hotel, Sekarpuro, Malang
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">E-bud</h2>
              <p>E-bud dibangun dalam rangka memenuhi tugas proyek akhir Rekayasa Perangkat Lunak Fakultas Ilmu Komputer Universitas Brawijaya atas bimbingan Asisten Praktikum Nurdifa Febrianti dan Puteri Aulia Indrasti.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <!--kosongan-->
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Event Categories</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cultural</a></li>
                <li><a href="#" class="py-2 d-block">Traditional Dance</a></li>
                <li><a href="#" class="py-2 d-block">Folk Song</a></li>
                <li><a href="#" class="py-2 d-block">Poem</a></li>
                <li><a href="#" class="py-2 d-block">Exhibition</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <span class="icon icon-paper-plane"></span>
                  <input type="text" class="form-control" placeholder="Subscribe">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>Copyright e-bud &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>