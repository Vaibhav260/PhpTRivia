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
      
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="custom.css">
     
  
</head>
<header id = "home">

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="Videos/y2mate.com - MercedesBenz VISION AVTR The Vision of Tomorrows Next Big Thing_1080p.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">Vision Avtr</h1>
          <p class="lead mb-0">Mercedes Benz</p>
        </div>
      </div>
    </div>
  </header>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67" style = "background-color: black;">
    <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="Home.html" class="navbar-brand" style ="color: rgb(194, 194, 194);">
                TRivia
            </a>
            <a class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mt-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Cars">Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature1">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#interior">Interior</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature3">Features</a>
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
     
 
         
    </section>
    <!-- end hero -->

    <section class="section bg-light" id="Cars">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6 aos-animate" data-aos="fade-up-right" data-aos-duration = "3000">
                    
                        <h1>VISION AVTR – inspired by AVATAR.</h1>
                        <p class="text-muted my-4">The name of the groundbreaking concept vehicle stands not only for the close collaboration in developing the show car together with the AVATAR team but also for ADVANCED VEHICLE TRANSFORMATION. </p>
                        <a href="#feature" class="btn btn-primary">Learn more <span class="fs-22 ms-1 lh-1 align-middle icon">⇾</span></a>
                  
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5 aos-animate" data-aos="fade-up-left" data-aos-duration = "3000">
                    <img class="img-fluid rounded" src="images/02-mercedes-benz-vehicles-concept-cars-vision-avtr-3400x1440.jpeg" alt=""  />
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end features -->
    <section class="section bg-light" id="feature" >
        <div class="container-fluid"  >
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-6 mt-lg-4 mt-5 aos-animate"  data-aos="fade-up-right" data-aos-duration = "3000">
                    <img class="img-fluid rounded" src="images/03-mercedes-benz-vehicles-concept-cars-vision-avtr-2560x1440.jpeg" alt=""  />
                </div>
                <div class="col-lg-4 col-md-6 aos-animate" data-aos="fade-up-left" data-aos-duration = "3000">
                    
                        <h1>Extremely confident – and completely without emissions.</h1>
                        <p class="text-muted my-4">With its four high-performance and near-wheel-built electric motors, the VISION AVTR embodies a particularly agile implementation of the vision of a dynamic luxury saloon. With a combined engine power of more than 350 kW, the VISION AVTR sets a new benchmark for EQ Power.Thanks to the intelligent and fully variable torque distribution, the power of the four fully individually controllable motors is not only managed in the best possible way in terms of driving dynamics, but above all in a highly efficient manner.</p>
                         
                  
                </div>

                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="section bg-light" id = "feature1">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                    
                        <h1>Organic battery technology.</h1>
                        <p class="text-muted my-4">The VISION AVTR was designed in line with its innovative electric drive. This is based on a particularly powerful and compact high-voltage battery. For the first time, the revolutionary battery technology is based on graphene-based organic cell chemistry and thus completely eliminates rare, toxic and expensive earths such as metals. Electromobility thus becomes independent of fossil resources. </p>
                        
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5"  data-aos="fade-up-left" data-aos-duration = "3000" >
                    <img class="img-fluid rounded" src="images/04-mercedes-benz-vehicles-concept-cars-vision-avtr-2560x1440.jpeg" alt=""  />
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
                   
                <div class = "aos-animate" data-aos="zoom-in-up" >
                    <img class="img-fluid rounded" src="images/05-mercedes-benz-vehicles-concept-cars-vision-avtr-3400x1440.webp" alt=""  />
                </div>

                <section class="section bg-light"  >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                
                                    <h1>Exceptional fast charging capability.</h1>
                                    <p class="text-muted my-4">In addition to an exponentially high energy density – compared to today’s battery systems with up to 1,200 Wh/litre – the technology also impresses with its exceptional fast charging capability via automated, conductive charging technology. This means that the battery will be fully recharging in less than 15 minutes. </p>
                                    
                            </div>
                            
                            <div class="col-lg-6  mt-lg-4 mt-5 "  data-aos="fade-up-left" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src=" images/15-mercedes-benz-vehicles-concept-cars-vision-avtr-3400x1440.webp" alt=""  />
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <section class="section bg-light" >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-6 mt-lg-4 mt-5"  data-aos="fade-up-right" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src="images/06-mercedes-benz-vehicles-concept-cars-vision-avtr-2560x1640.webp" alt=""  />
                            </div>
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-left" data-aos-duration = "3000">
                                
                                    <h1>Masterpiece of efficiency.</h1>
                                    <p class="text-muted my-4">At Mercedes-Benz, the consideration of efficiency goes far beyond the drive concept, because with increasing digitalisation, the performance of the large number of so-called secondary consumers also comes into focus – along with their efficient energy supply, without negatively affecting the drive power of the vehicle itself. Energy consumption per computing operation is already a key target in the development of new computer chips. This trend will continue in the coming years with the growth of sensors and artificial intelligence in the automotive industry. </p>
                                    
                            </div>                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>         
                <section class="section bg-light" id = "interior"  >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                
                                    <h1>Interior and exterior merge.</h1>
                                    <p class="text-muted my-4">For the first time, Mercedes-Benz has worked with a completely new design approach in the design of the VISION AVTR. The holistic concept combines the design disciplines interior, exterior and UX from the first sketch. Man and human perception are the starting point of a design process from the inside out. The design process begins with the experience of the passengers and consciously focuses on the perception and needs of the passengers. </p>
                                    
                            </div>
                            
                            <div class="col-lg-6  mt-lg-4 mt-5"  data-aos="fade-up-left" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src="images/07-mercedes-benz-vehicles-concept-cars-vision-avtr-2560x1540.jpeg" alt=""  />
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <div class = "aos-animate" data-aos="zoom-in-up" data-aos-duration = "1500" style = "background: linear-gradient(rgba(2, 2, 2, 0.5), rgba(0, 0, 0, 0.5)), url() fixed center center;
                background-size: cover;
                padding: 60px 0;">
                    <img class="img-fluid rounded" src="images/08-mercedes-benz-vehicles-concept-cars-vision-avtr-3400x1440.webp" alt=""  />
                </div>
                <section class="section bg-light"    >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                
                                    <h1>Sustainable materials.</h1>
                                   
                            </div>
                            
                            <div class="col-lg-6  mt-lg-4 mt-5"  data-aos="fade-up-left" data-aos-duration = "3000">
                                <p class="text-muted my-4">Large areas such as the back shell of the seat and the sky are decorated with a colour-changing fabric inspired by the colour world of the sea. Depending on the light, the textile changes its colour from dark blue to a subtle light blue. These seats are refined by the vegan DINAMICA® leather. DINAMICA® is the first and only microfibre that guarantees environmental sustainability throughout the entire production cycle.</p>
                                  
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <section class="section bg-light" id = "feature3">
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-6 mt-lg-4 mt-5"  data-aos="fade-up-right" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src="images/09-mercedes-benz-vehicles-concept-cars-vision-avtr-2560x1440.webp" alt=""  />
                            </div>
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-left" data-aos-duration = "3000">
                                
                                    <h1>Intuitive control.</h1>
                                    <p class="text-muted my-4">The VISION AVTR already responds to the approach of the passengers by visualising the energy and information flow of the environment with digital neurons that flow through the grille through the wheels to the rear area. The first interaction in the interior between man and vehicle happens completely intuitively via the control unit: by placing the hand on the centre console, the interior comes to life and the vehicle recognises the driver by his breathing. This is made visible on the instrument panel and on the user’s hand. </p>
                                    
                            </div>                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>     
                <section class="section bg-light"   >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                
                                    <h1>The vehicle as an immersive experience space.</h1>
                                    <p class="text-muted my-4">The visual connection between passengers and the outside world is created by the curved display module, which replaces a conventional dashboard. The outside world around the vehicle and the surrounding area is shown in real-time 3D graphics and at the same time shows what is happening on the road in front of the vehicle. Combined with energy lines, these detailed real-time images bring the interior to life and allow passengers to discover and interact with the environment in a natural way with different views of the outside world.</p>
                                    
                            </div>
                            
                            <div class="col-lg-6  mt-lg-4 mt-5"  data-aos="fade-up-left" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src="images/10-mercedes-benz-vehicles-concept-cars-vision-avtr-2560x1440.webp" alt=""  />
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <section class="section bg-light" >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-6 mt-lg-4 mt-5"  data-aos="fade-up-right" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src="images/09-mercedes-benz-vehicles-concept-cars-vision-avtr-2560x1440.webp" alt=""  />
                            </div>
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-left" data-aos-duration = "3000">
                                
                                    <h1>Bionic formal language.</h1>
                                    <p class="text-muted my-4">When the boundaries between vehicle and living beings are lifted, Mercedes-Benz combines luxury and sustainability and works to make the vehicles as resource-saving as possible. With the VISION AVTR, the brand is now showing how a vehicle can blend harmoniously into its environment and communicate with it. In the ecosystem of the future, the ultimate luxury is the fusion of human and nature with the help of technology. </p>
                                    
                            </div>                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>     
            <!-- brand-logo -->
             
            <!-- end brand logo -->
    
            <!-- start cta -->
            
    
            <footer
          class="text-center text-lg-start text-white"
          style="background-color: #1c2331"
          >
   <br>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
 
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