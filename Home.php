<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
 
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
     <!-- colors -->
    <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="home.js"></script>
    <style>
    
 
.navbar .navbar-nav .nav-item .nav-link:hover, .navbar .navbar-nav .nav-item .nav-link:focus, .navbar .navbar-nav .nav-item .nav-link.active {
    color:  #fd6262  !important;
}
       .navbar .navbar-nav .nav-item .nav-link {
    font-size: 15px;
    color:  #d1d1d1;
    padding-right: 26px;
}
 
</style>
  
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">
    <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="layout-one-1.html" class="navbar-brand" style ="color: #d1d1d1">
                TRivia
            </a>
            <a  class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mt-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#home" >Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="innovation.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <div class="nav-item dropdown">
				<a href="#"   class="nav-link dropdown-toggle " aria-expanded="false" role="button" data-bs-toggle="dropdown" >
                    <img src="images/[Downloader.la]-623821f3f2bf1.jpg"  style = " border-radius: 50%;
      width: 36px;
     height: 36px;
     margin: -5px 0;
     float: left;
     margin-right: 13px; " > <?php echo $_SESSION['username']; ?><i class="caret"></i></a>
				<div class="dropdown-menu">
					<a href="logout.php" class="dropdown-item text-center"><i class="bi bi-box-arrow-in-right"></i>Logout</a>
				</div>
			</div>
                       
                    </li> 
                </ul>
                
            </div>
        </div>
        <!-- end container -->
    </nav>
     
    <section class="hero-one-1 position-relative" style="background-image: url(images/mainhome.jpg);" id="home">
        <div class="  position-absolute top-0 end-0 bottom-0 start-0"   >    </div>
        <div class="  position-absolute top-0 end-0 bottom-0 start-0"></div>
       
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="content-wrapper">                           
                        <h1  style =  
                            " padding: 20px 0;
                            font-size: 80px;
                            line-height: 120%;
                            margin-bottom: 40px;
                        color: rgb(202, 240, 255);"
                        
                        >
                            TRivia
                        </h1>
    
                        
                    </div> 
                    <br>            
                </div>
            </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-white border-0 shadow form-card">
                        <div class="card-body">
 
                            <h1 class="text-dark text-center mb-5">Innovations</h1>

                            <!-- start form -->
                            <h5><center>We’ve picked out the 6 most interesting innovations and listed them below.</center></h5>
 
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end hero -->

    <br><br><br><br><br><br>
    </section>
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">
  
 
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/VisionAVTRHome.webp" class="img-fluid" style="width:375px; height:200px" alt="">
 
                <div class="portfolio-info">
                  <h4>Vision AVTR</h4>
                  <br>
                  <div class="portfolio-links">
                    <a href="Visionavtrdark.php" target="_blank"><h6>Learn more</h6></a>
                  </div>
                </div>
              </div>
            </div>
  
 
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/BrickHome.webp" class="img-fluid" style="width:370px; height:200px" alt="">
 
                <div class="portfolio-info">
                  <h4>Energy Storing Bricks</h4>
                  <br>
                  <div class="portfolio-links">
                    <a href="bricks.php" target="_blank"><h6>Learn more</h6></a>
                  </div>
 
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/LGTiiunHome.jpg" class="img-fluid" style="width:375px; height:200px" alt="">
                <div class="portfolio-info">
                  <h4>LG Tiiun</h4>
                  <br>
                  <div class="portfolio-links">
                    <a href="LGTiiun.php" target="_blank"><h6>Learn more</h6></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/PFiber1.jpg" class="img-fluid" style="width:375px; height:200px" alt="">
                <div class="portfolio-info">
                  <h4>Programmable Fiber</h4>
                  <br>
                  <div class="portfolio-links">
                    <a href="ProgrammableFiber.php" target="_blank"><h6>Learn more</h6></a>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/123020_mt_batteries_feat.jpeg" class="img-fluid" style="width:375px; height:200px" alt="">
                <div class="portfolio-info">
                  <h4>Flexible Battery</h4>
                  <br>
                  <div class="portfolio-links">
                    <a href="flexiblebattery.php" target="_blank"><h6>Learn more</h6></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/HeartFibreHome.jpg" class="img-fluid" style="width:375px; height:200px" alt="">
                <div class="portfolio-info">
                  <h4>Heart rate Sensing Fibre </h4> 
                  <br>
                  <div class="portfolio-links">
                    <a href="heartfiber.php" target="_blank"><h6>Learn more</h6></a>
                  </div>
    
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
 
      </section><!-- End Portfolio Section -->

    <!-- end services -->
    <!-- start footer -->

    <br>  <!-- Remove the container if you want to extend the Footer to full width. -->
 

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
   <br>
      <!-- Right -->
 
    <!-- Section: Links  -->
    <section class="container-fluid">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3 ">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="fw-bold">TRivia</h6>
            <hr
                class="mb-2 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p>
             We give information about anything and everything which is innovative and incredible.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold">Contact</h6>
            <hr
                class="mb-2 mt-0 d-inline-block mx-auto"
                style="width: 60px; background-color: #7c4dff; height: 2px"
                />
            <p><i class="bi bi-house"></i> Mumbai-401107, IND</p>
            <p><i class="bi bi-envelope"></i> info@TRivia.com</p>
            <p><i class="bi bi-telephone"></i> 1800 100 100</p>
          </div>
          <!-- Grid column -->
        </div>
        <br>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      ©️ 2022 Copyright:
      <a class="text-white" href="Home.html"
         >TRivia.com</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

 
<!-- End of .container -->
<!-- End of footer -->

    
 
           
    <div id="content" class="site-content center-relative">        

        <!-- Home Section -->
        
        
     <script src="js/bootstrap.bundle.min.js"></script>

     <!-- feather icon -->
     <script src="js/feather.js"></script>

   
     <script src="js/app.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init();
     </script>
      
    </body>
    </html>