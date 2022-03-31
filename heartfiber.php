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
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
     <!-- colors -->
      <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
     
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     
    <link rel="stylesheet" type="text/css" href="custom.css">
    
  
</head>
<header id = "home">

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="Videos/roboticfibres.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3" style="color: coral;">A fabric that “hears” your heart's sounds</h1>
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
                        <a class="nav-link" href="#Cars">Fabric</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature1">Sound Layering</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#interior">Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature3">Lightweight listening</a>
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
                <div class="col-lg-4 col-md-6">
                    
                        <h1 style="color: coral;">A fabric that “hears” your heart's sounds</h1>
                        <p class="text-muted my-4">Having trouble hearing? Just turn up your shirt. That’s the idea behind a new “acoustic fabric” developed by engineers at MIT and collaborators at Rhode Island School of Design. Inspired by the human ear, a new acoustic fabric converts audible sounds into electrical signals.</p>
                        <a href="#feature" class="btn btn-danger">Learn more <span class="fs-22 ms-1 lh-1 align-middle icon">⇾</span></a>
                  
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5   ">
                    <img class="img-fluid rounded" src="images/fibre.jpg" alt=""/>
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end features -->
    <section class="section bg-light" id="feature3">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-6 mt-lg-4 mt-5">
                    <img class="img-fluid rounded" src="images/fibre3.jpeg" alt=""  />
                </div>
                <div class="col-lg-4 col-md-6">
                    
                           <p class="text-muted my-4">The team has designed a fabric that works like a microphone, converting sound first into mechanical vibrations, then into electrical signals, similarly to how our ears hear.

                            <br><br>All fabrics vibrate in response to audible sounds, though these vibrations are on the scale of nanometers — far too small to ordinarily be sensed. To capture these imperceptible signals, the researchers created a flexible fiber that, when woven into a fabric, bends with the fabric like seaweed on the ocean’s surface.
                           
                            <br><br>The fabric can capture sounds ranging in decibel from a quiet library to heavy road traffic, and determine the precise direction of sudden sounds like handclaps. When woven into a shirt’s lining, the fabric can detect a wearer’s subtle heartbeat features. The fibers can also be made to generate sound, such as a recording of spoken words, that another fabric can detect.   </p>
                         
                  
                </div>

                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="section bg-light" id = "feature3">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6">
                    
                        <h1 style="color: coral;">Sound Layering</h1>
                        <p class="text-muted my-4">Fabrics are traditionally used to dampen or reduce sound; examples include soundproofing in concert halls and carpeting in our living spaces. But Fink and his team have worked for years to refashion fabric’s conventional roles. They focus on extending properties in materials to make fabrics more functional. In looking for ways to make sound-sensing fabrics, the team took inspiration from the human ear.

                            
                           
                            <br><br>With these guidelines in mind, the team developed a layered block of materials called a preform, made from a piezoelectric layer as well as ingredients to enhance the material’s vibrations in response to sound waves. The resulting preform, about the size of a thick marker, was then heated and pulled like taffy into thin, 40-meter-long fibers.</p>
                </div>
                
                <div class="col-lg-6  mt-lg-4 mt-5   ">
                    <img class="img-fluid rounded" src="images/fibre6.jpeg" alt=""  />
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
                
                <section class="section bg-dark" id="interior" >
                    <div class="container-fluid"  >
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            
                            <div class="col-lg-11 aos-animate" data-aos="fade-up-left" data-aos-duration = "3000">
                                
                                    <h3 style="color: grey;">                                        
                                        “It can be integrated with spacecraft skin to listen to (accumulating) space dust, or embedded into buildings to detect cracks or strains,” Yan proposes. “It can even be woven into a smart net to monitor fish in the ocean. The fiber is opening widespread opportunities.”
                                        
                                        “The learnings of this research offers quite literally a new way for fabrics to listen to our body and to the surrounding environment,” Fink says. “The dedication of our students, postdocs and staff to advancing research which has always marveled me is especially relevant to this work, which was carried out during the pandemic.”
                                        </h3>
                                   
                            </div>
            
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>

                <section class="section bg-light"  >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-4 col-md-6">
                                
                                    <h1 style="color: coral;">Lightweight listening</h1>
                                    <p class="text-muted my-4">The researchers tested the fiber’s sensitivity to sound by attaching it to a suspended sheet of mylar. They used a laser to measure the vibration of the sheet — and by extension, the fiber — in response to sound played through a nearby speaker. The sound varied in decibel between a quiet library and heavy road traffic. In response, the fiber vibrated and generated an electric current proportional to the sound played.

                                        <br><br>“This shows that the performance of the fiber on the membrane is comparable to a handheld microphone,” Noel says.
                                       
                                        <br><br>“The fabric was able to detect the angle of the sound to within 1 degree at a distance of 3 meters away,” Noel notes.</p>         
                            </div>
                            
                            <div class="col-lg-6  mt-lg-4 mt-5   ">
                                <img class="img-fluid rounded" src="images/fibre5.jpeg" alt=""  />
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>

               
                <section class="section bg-light" >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-6 mt-lg-4 mt-5">
                                <img class="img-fluid rounded" src="images/fibre7.jpeg" alt=""  />
                            </div>
                            <div class="col-lg-4 col-md-6">
                                
                                    
                                    <p class="text-muted my-4">The researchers envision that a directional sound-sensing fabric could help those with hearing loss to tune in to a speaker amid noisy surroundings.

                                        <br><br>The team also stitched a single fiber to a shirt’s inner lining, just over the chest region, and found it accurately detected the heartbeat of a healthy volunteer, along with subtle variations in the heart’s S1 and S2, or “lub-dub” features. In addition to monitoring one’s own heartbeat, Fink sees possibilities for incorporating the acoustic fabric into maternity wear to help monitor a baby’s fetal heartbeat.
                                        
                                        
                                       
                                        <br><br> This research was supported in part by the US Army Research Office through the Institute for Soldier Nanotechnologies, National Science Foundation, Sea Grant NOAA.</p>
                            </div>                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>         
            
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
        <!-- Home Section -->
        
    
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