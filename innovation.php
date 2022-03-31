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
     
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="custom.css">
   
    <style>nav#navbar {
  background-color: initial;
}
</style>
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67" >
<?php
    require('dbconnection.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        // removes backslashes
        $inname = stripslashes($_REQUEST['inname']);
        //escapes special characters in a string
        $inname = mysqli_real_escape_string($con,$inname);
        $link   = stripslashes($_REQUEST['link']);
        $link   = mysqli_real_escape_string($con, $link);
        $details   = stripslashes($_REQUEST['details']);
        $details    = mysqli_real_escape_string($con, $details);
        $type = stripslashes($_REQUEST['type']);
        $type = mysqli_real_escape_string($con,$type);
        $user =   $_SESSION['username'];
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `Innovation` (`id`, `user_name`, `inname`, `link`, `type`, `details`)
                     VALUES (NULL,'$user', '$inname', '$link', '$type','$details')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header("Location:Home.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='innovation.php'>refill</a> again.</p>
                  </div>";
        }
    } else {
?>
    
  </script>
  <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="layout-one-1.html" class="navbar-brand" style ="color: rgb(10, 34, 252);">
                TRivia
            </a>
            <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav mt-lg-0 mt-2">
                   
                 
                    <li class="nav-item">
                    <div class="nav-item dropdown">
				<a href="#"   class="nav-link dropdown-toggle " aria-expanded="false" role="button" data-bs-toggle="dropdown" style = "color:black;">
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
     
      
       
 <br>
        <div class="container">
        
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-8">
                    <div class="card bg-white border-0 shadow form-card">
                        <div class="card-body ">
                            <h6 class="text-dark text-center mb-4">DETAILS</h6>

                            <!-- start form -->
                            <form class="form" action=" " method="post">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="text-center">
                                            <p>Innvotion that innovates more..</p><br>
                                        </div>
                                      
                                        <div class="position-relative mb-4" style="padding:5px;">
                                            <label class="form-label" >Innovation name</label>
                                            <input type="text" class="form-control" id="Inname" name="inname" required />
                                        </div>
                                       
                                        <div class="position-relative mb-4" style="padding:5px;" >
                                            <label class="form-label" >Link</label>
                                            <input type="text" class="form-control"  name="link" required />
                                        </div>
                                        <div class="position-relative mb-4" style="padding:5px;" >
                                            <label class="form-label" >Type</label>
                                            <input type="text" class="form-control"  name="type" required />
                                        </div>
                                        <div class="position-relative mb-4" style="padding:5px;">
                                            <label class="form-label"  >Details</label>
                                            <textarea rows="5" class = "form-control"  name="details"  >Enter text here...</textarea>
                                        </div>
                                         
                                        <div class="text-center mt-2"  >
                                            <input type = "submit" name="submit" value="Submit" class="btn btn-primary"/><br><br>
</div>
                                        
                                    </div>
                                </div>
                                <!-- end row -->
                            </form>
                            <?php
                             }
                            ?>
                            <!-- end form -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
  
    <!-- end hero -->
        
    
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