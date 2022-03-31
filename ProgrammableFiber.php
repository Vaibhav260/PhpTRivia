<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- tinyslider -->
    <link rel="stylesheet" href="css/tiny-slider.css" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
     <!-- colors -->
      <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
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
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"  style="width: -webkit-fill-available;">
      <source src="Videos/fiber.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">   
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">Programmable Fiber</h1>
          <p class="lead mb-0">Digital fibre with sensors</p>
        </div>
      </div>
    </div>
  </header>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67">
    <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="Home.html" class="navbar-brand" style ="color: rgb(194, 194, 194);">
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
                        <a class="nav-link" href="#memory">Memory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ai">AI</a>
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
                    
                        <h1>Programmable Fiber</h1>
                        <p class="text-muted my-4"> In a first, the digital fiber contains memory, temperature sensors, and a trained neural network program for inferring physical activity. </p>
                        <a href="#feature" class="btn btn-primary">Learn more <span class="fs-22 ms-1 lh-1 align-middle icon">⇾</span></a>
                  
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5">
                    <img class="img-fluid rounded" src="images/PFiber1.jpg" alt="" />
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end features -->
    <section class="section bg-light" id="memory">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-6 mt-lg-4 mt-5">
                    <img class="img-fluid rounded" src="images/PFiber2.jpg" alt=""  />
                </div>
                <div class="col-lg-4 col-md-6">
                    
                        <h1>Memory and more.</h1>
                        <p class="text-muted my-4">The new fiber was created by placing hundreds of square silicon microscale digital chips into a preform that was then used to create a polymer fiber. By precisely controlling the polymer flow, the researchers were able to create a fiber with continuous electrical connection between the chips over a length of tens of meters.</p>
                        <p class="text-muted my-4">The fiber itself is thin and flexible and can be passed through a needle, sewn into fabrics, and washed at least 10 times without breaking down. A digital fiber can also store a lot of information in memory. The researchers were able to write, store, and read information on the fiber, including a 767-kilobit full-color short movie file and a 0.48 megabyte music file. The files can be stored for two months without power.</p>             
                  
                </div>

                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

    <section class="section bg" style="background-color: rgb(241, 229, 227)">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">

                <div class="col-lg-10 col-md-6 aos-animate" data-aos="fade-up-left" data-aos-duration = "3000">

                        <h5 class="text-black">This type of fabric could give quantity and quality open-source data for extracting out new body patterns.

                            With this analytic power, the fibers someday could sense and alert people in real-time to health changes like a respiratory decline or an irregular heartbeat, or deliver muscle activation or heart rate data to athletes during training.
                            
                            The fiber is controlled by a small external device, so the next step will be to design a new chip as a microcontroller that can be connected within the fiber itself.</h5>

                </div>


            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section> 

    <section class="section bg-light" id = "ai">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6">
                    
                        <h1>On-body artificial intelligence.</h1>
                        <p class="text-muted my-4">The fiber also takes a few steps forward into artificial intelligence by including, within the fiber memory, a neural network of 1,650 connections. After sewing it around the armpit of a shirt, the researchers used the fiber to collect 270 minutes of surface body temperature data from a person wearing the shirt, and analyze how these data corresponded to different physical activities. Trained on these data, the fiber was able to determine with 96 percent accuracy what activity the person wearing it was engaged in. Adding an AI component to the fiber further increases its possibilities.</p>
                        
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5   ">
                    <img class="img-fluid rounded" src="images/PFiber3.jpg" alt=""  />
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>    
    
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

     <!-- start cta -->
            <!-- start footer -->

    <!-- Remove the container if you want to extend the Footer to full width. -->
 
    
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