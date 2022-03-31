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
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="custom.css">
    
   <style> 
    h1{
  color: rgb(123 123 123 / 70%);
}
</style>
  
</head>
<header id = "home">

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="Videos/Y2Mate.is - Keeping home full of green 365 days-zqDOQkLICno-1080p-1648493164800.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">   
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">LG Tiiun</h1>
          <p class="lead mb-0">Indoor Garden</p>
        </div>
      </div>
    </div>
  </header>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">
    <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="Home.html" class="navbar-brand" style ="color:  white">
                TRivia
            </a>
            <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mt-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#device">Device</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#unit">Unit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#efficiency">Efficiency</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#system">System</a>
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

    <section class="section bg-light" id="device">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6">
                    
                        <h1>LG TIIUN - The Indoor Garden</h1>
                        <p class="text-muted my-4"> The LG has launched a genius new indoor gardening appliance, the tiiun, that enables gardeners to grow vegetables and flowers inside their home, all year round.</p>
                        <a href="#feature" class="btn btn-primary">Learn more <span class="fs-22 ms-1 lh-1 align-middle icon">⇾</span></a>
                  
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5">
                    <img class="img-fluid rounded" src="images/LGTiiun1.jpg" alt=""/>
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end features -->
    <section class="section bg-light" id="unit">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-6 mt-lg-4 mt-5">
                    <img class="img-fluid rounded" src="images/LGTiiun2.jpg" alt=""  />
                </div>
                <div class="col-lg-4 col-md-6">
                    
                        <h1>Transparent door, automated temperature and water control.</h1>
                        <p class="text-muted my-4">The device, which has a transparent door at the front, comes with automated temperature, water controls and can help ensure that your greens flourish, even if you are not an expert at this.</p>
                         
                  
                </div>

                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="section bg-light" id = "efficiency">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6">
                    
                        <h1>Self-contained unit.</h1>
                        <p class="text-muted my-4">The LG tiiun is designed as a self-contained unit and features two shelves that can each hold up to six all-in-one seed packages along with three different kinds of seed kits, according to the company. Each seed package contains 10 holes for seed germination, allowing users to grow a variety of greens simultaneously in around four to eight weeks.</p>
                        
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5   ">
                    <img class="img-fluid rounded" src="images/LGTiiun3.jpg" alt=""  />
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
                   
                <div class="container">
                    <img class="img-fluid rounded" src="images/LGTiiun4.webp" alt=""  />
                </div>  

                <section class="section bg-light"  >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-4 col-md-6">
                                
                                    <h1>Efficiently regulates temperature.</h1>
                                    <p class="text-muted my-4">The device uses LG’s inverter compressor and has a flexible weather control system that precisely adjusts the tiiun’s internal temperature to create the optimal conditions for organic growth. The device can automatically regulate temperature and light to mimic the natural cycle of the day as well, according to the company. </p>
                                    
                            </div>
                            
                            <div class="col-lg-6  mt-lg-4 mt-5   ">
                                <img class="img-fluid rounded" src="images/LGTiiun5.jpeg" alt=""  />
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <section class="section bg-light" id="system">
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-6 mt-lg-4 mt-5">
                                <img class="img-fluid rounded" src="images/LGTiiun6.jpeg" alt=""  />
                            </div>
                            <div class="col-lg-4 col-md-6">
                                
                                    <h1>Auto Ebb & Watering System.</h1>
                                    <p class="text-muted my-4">It delivers water eight times every 24 hours, so you do not have to worry about doing this part either given this is where most home gardening efforts usually tend to fail. The device has an “Auto Ebb & Watering System” which circulates the ideal amount of moisture for the plants, flowers.</p>
                                    
                            </div>                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>         
                
            <!-- brand-logo -->
             
            <!-- end brand logo -->
    
            <!-- start cta -->
            
            <!-- start footer -->

    <!-- Remove the container if you want to extend the Footer to full width. -->
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

     <!-- client-slider -->
     <script src="js/tiny-slider.js"></script>
     <script src="js/tiny.init.js"></script>

     <script src="js/app.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init();
     </script>
      
    </body>
    </html>