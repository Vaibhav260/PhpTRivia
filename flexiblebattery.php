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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
   <style>
       h1{
           color :rgb(57, 57, 57);
       }
       h5{
           color :rgb(57, 57, 57);
       }
       h6{
           color : #6f3bfe;
       }
       .navbar .navbar-nav .nav-item .nav-link:hover, .navbar .navbar-nav .nav-item .nav-link:focus, .navbar .navbar-nav .nav-item .nav-link.active {
    color: #6ce563 !important;
}
       .navbar .navbar-nav .nav-item .nav-link {
    font-size: 15px;
    color: rgb(25 25 25 / 70%);
    padding-right: 26px;
}
.nav-sticky {
     
    background-color: #fff;
    
     
}
.navbar {
    padding: 5px;
    border-bottom: initial;
    background-color: initial;
    transition: all 0.3s ease-in-out;
}
 
   </style>  
  
</head>
<header id = "home">

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
 
  
    <!-- The HTML5 video element that will create the background video on the header -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="Videos/istockphoto-1311286131-640_adpp_is.mp4" type="video/mp4">
    </video>
  
    <!-- The header content -->
    <div class="container h-100">
      <div class="d-flex h-100 text-center align-items-center">
        <div class="w-100 text-white">
          <h1 class="display-3">Flexible Battery</h1>
          <h5 class="lead mb-0">Battery made from fiber</h5>
        </div>
      </div>
    </div>
  </header>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67" >
    <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="Home.html" class="navbar-brand" style ="color: rgb(25 25 25 / 70%)">
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
                        <a class="nav-link" href="#Battery">Battery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Info">Info</a>
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
     
 
      
                       
               

    <section class="section bg-light" id="Battery">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-md-evenly">
                <div class="col-lg-4 col-md-6 aos-animate" data-aos="fade-up-right" data-aos-duration = "3000">
                    
                        <h1>World’s longest flexible fiber battery</h1>
                        <p class="text-muted my-4">Researchers have developed a rechargeable lithium-ion battery in the form of an ultra-long fiber that could be woven into fabrics. The battery could enable a wide variety of wearable electronic devices, and might even be used to make 3D-printed batteries in virtually any shape.</p>
                        <a href="#feature" class="btn btn-success">Learn more <span class="fs-22 ms-1 lh-1 align-middle icon">⇾</span></a>
                  
                </div>
                
                <div class="col-lg-5 mt-lg-4 mt-5 aos-animate" data-aos="fade-up-left" data-aos-duration = "3000">
                    <img class="img-fluid rounded" src="images/MIT-Fiber-Battery-01-Press_0.jpeg" alt=""  />
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
                <div class="col-lg-5 mt-lg-4 mt-5"  data-aos="fade-up-right" data-aos-duration = "3000" >
                    <img class="img-fluid rounded" src="images/123020_mt_batteries_feat.jpeg" alt="picture"  />
                </div>
                <div class="col-lg-4 col-md-6 aos-animate" data-aos="fade-up-left" data-aos-duration = "3000">
                    
                        <h1>Self-powered communications</h1>
                        <p class="text-muted my-4">The researchers envision new possibilities for self-powered communications, sensing, and computational devices that could be worn like ordinary clothing, as well as devices whose batteries could also double as structural parts.</p>
                         
                  
                </div>

                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <section class="section bg-light" id = "feature1">
        <div class="container-fluid">
            <div class="row align-items-center d-flex justify-content-center">
                <div class="col-lg-4 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                    
                        <h1>Extends upto 140 meters</h1>
                        
                </div>
                
                <div class="col-lg-6 mt-lg-4 mt-5"  data-aos="fade-up-left" data-aos-duration = "3000" >
                    <p class="text-muted my-4">In a proof of concept, the team behind the new battery technology has produced the world’s longest flexible fiber battery, 140 meters long, to demonstrate that the material can be manufactured to arbitrarily long lengths. The work is described today in the journal Materials Today.</p>
                        
                </div>
                 
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
                   
     
                <section class="section bg-light"  >
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-5"  data-aos="zoom-in-up" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src="Videos/fiber-battery-2.gif" alt=""  />
                                  
                                    <p class="text-muted my-4">The thermally-drawn fiber battery (right) is fire-resistant due to the gel electrodes and gel electrolyte, whereas the control fiber battery with liquid electrolyte (left) instantly catches fire and expands.</p>
                                    
                            </div>
                            
                            <div class="col-lg-5 "  data-aos="zoom-in-up" data-aos-duration = "3000">
                                <img class="img-fluid rounded" src="Videos/fiber-battery-1.gif " alt=""  />
                                <p class = "text-muted my-4">The fiber battery continues to power an LED even after partial cutting indicating that the fiber battery system is free from electrolyte loss and from short-circuiting.</p>
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <section class="section bg-light" id = "feature1">
                    <div class="container-fluid">
                        <div class="row align-items-center d-flex justify-content-center">
                            <div class="col-lg-4 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                
                                    <h1>Novel battery gels</h1>
                                    
                            </div>
                            
                            <div class="col-lg-6 mt-lg-4 mt-5"  data-aos="fade-up-left" data-aos-duration = "3000" >
                                <p class="text-muted my-4">The new fiber battery is manufactured using novel battery gels and a standard fiber-drawing system that starts with a larger cylinder containing all the components and then heats it to just below its melting point. The material is drawn through a narrow opening to compress all the parts to a fraction of their original diameter, while maintaining all the original arrangement of parts.

                                </p>
                                    
                            </div>
                             
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                                     
                <section class="section bg-light" id = "Info"  >
                    <div class="container">
                        <div class="row align-items-center d-flex justify-content-md-evenly">
                            <div class="col-lg-12 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                
                                    <h1>Additional Info</h1>
                                    <p class="text-muted my-4">The fact that they were able to make a 140-meter fiber battery shows that “there’s no obvious upper limit to the length. We could definitely do a kilometer-scale length,” he says. A demonstration device using the new fiber battery incorporated a “Li-Fi” communications system — one in which pulses of light are used to transmit data, and included a microphone, pre-amp, transistor, and diodes to establish an optical data link between two woven fabric devices. </p>
                                    
                            </div>
                            <div class="col-lg-12 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                 
                                <p class="text-muted my-4">“When we embed the active materials inside the fiber, that means sensitive battery components already have a good sealing,” Khudiyev says, “and all the active materials are very well-integrated, so they don’t change their position” during the drawing process. In addition, the resulting fiber battery is much thinner and more flexible yielding an aspect ratio, that is the length-to-width fraction, up to a million, which is way beyond other designs, which makes it practical to use standard weaving equipment to create fabrics that incorporate the batteries as well as electronic systems.</p>
                                 
                           </div>
                           <div class="col-lg-12 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                 
                            <p class="text-muted my-4">The 140-meter fiber produced so far has an energy storage capacity of 123 milliamp-hours, which can charge smartwatches or phones, he says. The fiber device is only a few hundred microns in thickness, thinner than any previous attempts to produce batteries in fiber form.</p>
                             
                       </div>
                       <div class="col-lg-12 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                 
                        <p class="text-muted my-4"> “The beauty of our approach is that we can embed multiple devices in an individual fiber, Lee says, “unlike other approaches which need integration of multiple fiber devices.” They demonstrated integration of LED and Li-ion battery in a single fiber and he believes more than three or four devices can be combinded in such a small space in the future. “When we integrate these fibers containing multi-devices, the aggragate will advance the realization of a compact fabric computer.” </p>
                         
                   </div>
                   <div class="col-lg-12 col-md-6"  data-aos="fade-up-right" data-aos-duration = "3000">
                                 
                    <p class="text-muted my-4"> “This is the first 3D printing of a fiber battery device,” Khudiyev says. “If you want to make complex objects” through 3D printing that incorporate a battery device, he says, this is the first system that can achieve that. “After printing, you do not need to add anything else, because everything is already inside the fiber, all the metals, all the active materials. It’s just a one-step printing. That’s a first.”

                        That means that now, he says, “Computational units can be put inside everyday objects, including Li-Fi.”</p>
                     
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
                  <p><i class="bi bi-house" style="color: #fff;"></i> Mumbai-401107, IND</p>
                  <p><i class="bi bi-envelope" style="color: #fff;"></i> info@TRivia.com</p>
                  <p><i class="bi bi-telephone" style="color: #fff;"></i> 1800 100 100</p>
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
      
           
            
    
            <!-- start footer -->
             
    
            

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