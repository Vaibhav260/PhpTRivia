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
<style>
    .navbar .navbar-nav .nav-item .nav-link:hover, .navbar .navbar-nav .nav-item .nav-link:focus, .navbar .navbar-nav .nav-item .nav-link.active {
    color: #fd6262 !important;
}

 
</style>  
  
</head>
<header id = "home">

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="Videos/energystoringbrick (1).mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3" style="color: rgb(224, 219, 219);">The Future Of Energy Storing Devices Is Here</h1>
          <p class="lead mb-0">Red Bricks</p>
        </div>
      </div>
    </div>
  </header>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67" >
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
     
 
       
 
    <!-- end hero -->

    <section class="section bg-light" id="Cars">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6 aos-animate" data-aos="fade-up-right" data-aos-duration = "3000">
                    
                        <h1 style="color: brown;">RED BRICKS</h1>
                        <p class="text-muted my-4">Energy can be stored in various mediums like hydroelectric dams, rechargeable batteries, thermal storage including molten salts which can efficiently store and release very large quantities of heat energy, and compressed air energy storage, flywheels, cryogenic systems. But with the rapid growth of technology energy can now be stored in bricks as well. Let’s see how.</p>
                        <a href="#feature" class="btn btn-danger">Learn more <span class="fs-22 ms-1 lh-1 align-middle icon">⇾</span></a>
                  
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5   ">
                    <img class="img-fluid rounded" src="images/brick.png" alt=""  />
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end features -->
    <section class="section bg-light" id="feature">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-5 aos-animate" data-aos="fade-up-right" data-aos-duration = "3000">
                    <img class="img-fluid rounded" src="images/brick2.jpg" alt=""  />
                </div>
                <div class="col-lg-4 col-md-6">
                    
                        <h1 style="color: brown;">Red Bricks as Energy Storing Units</h1>
                        <p class="text-muted my-4">Red bricks, some of the world's cheapest and most familiar building materials can be converted into energy storage units. This implementation of future technology is an efficient way to store energy as per a paper in Nature Communications. These ‘smart bricks’ are charged to store electricity, sort of a battery, till needed for powering devices.

                          <br><br>Fired brick has been used as an artefact for thousands of years, however, has seldom found the other use. Walls and buildings created out of bricks already occupy giant amounts of area that can be higher used if given a dual-purpose.</p>
                </div>

                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="section bg-light" id = "feature1">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6 aos-animate" data-aos="fade-up-right" data-aos-duration = "3000">
                    
                        <h1 style="color: brown;">The Emergence of This Efficient Storage Device</h1>
                        <p class="text-muted my-4">In an artificial research lab, researchers have found out the way to convert the red pigment in common bricks into a plastic that conducts electricity. These brick supercapacitors can be connected to star panels to store reversible energy. Supercapacitors store charge, in distinction to batteries, that store energy.</p>
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5   ">
                    <img class="img-fluid rounded" style="background-size: 2000px 2050px;" src="images/brick3.jpg" alt=""  />
                </div>
                 
            </div> 
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
                   
                
                <section class="section bg-light"  id="interior">
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-4 col-md-6 aos-animate" data-aos="fade-up-right" data-aos-duration = "3000">
                                
                                    <h1 style="color: brown;">Why Brick was Chosen to Store Energy</h1>
                                    <p class="text-muted my-4">Brick’s porous structure is good for storing energy since pores provide greater brick area than solid materials have, and therefore the bigger the area the additional electricity a supercapacitor material will hold. 

                                      <br><br>Bricks are red as a result of the clay they’re made of which contains an iron chemical compound, higher called rust, that is additionally necessary for storing energy.</p>
                            </div>
                            
                            <div class="col-lg-6  mt-lg-4 mt-5   ">
                                <center><img class="img-fluid rounded" src="images/brick5.jpg" alt=""  /></center>
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <section class="section bg-light" id="feature3">
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-6 mt-lg-4 mt-5 aos-animate" data-aos="fade-up-right" data-aos-duration = "3000">
                                <img class="img-fluid rounded" style="background-size: 1500px 2500px;" src="images/brick4.jpg" alt=""  />
                            </div>
                            <div class="col-lg-4 col-md-6">
                                
                                    <h1 style="color: brown;">How Bricks Store Energy</h1>
                                    <p class="text-muted my-4">The pores in bricks are filled with acid vapour that dissolves the iron chemical compound and converts it to a reactive kind of iron that creates a chemical synthesis. Further distinct gas is allowed to flow through the cavities to fill them with a sulfur-based material that reacts with iron. This chemical process leaves the pores coated with an electrically conductive plastic, also known as PEDOT.</p>
                            </div>                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>         
                
            <!-- brand-logo -->
             
            <!-- end brand logo -->
           
        

            <!-- Remove the container if you want to extend the Footer to full width. -->
 

    <!-- Footer -->
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