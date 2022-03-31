<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- tinyslider -->
     

    <!-- css -->
     
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
     <!-- colors -->
      <link href="css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />
      
    <link rel="stylesheet" type="text/css" href="custom.css">
    
  
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="67"  >
<?php
    require('dbconnection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location:Home.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="#" class="navbar-brand" style ="color:  black;">
                TRivia
            </a>
            <a href="javascript:void(0)" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"><i data-feather="menu"></i></span>
            </a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mt-lg-0 mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" style = "color:black;">Sign in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registration.php" style = "color:black;">Sign up</a>
                    </li>
                     
                </ul>
                
            </div>
        </div>
        <!-- end container -->
    </nav>
     
    <section class="hero-one-1 position-relative"  id="home"  >
        
    
       
    
         
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="card bg-white border-0 shadow form-card">
                        <div class="card-body">
                            <h4 class="text-dark text-center mb-5" style="padding: 5px;">Sign In</h4>

                            <!-- start form -->
                            <form class="form" method="post" name="login">
                                <div class="row justify-content-center">
                                    <div class="col-11">

                                        <div class="position-relative mb-4" style="padding: 3px;">
                                            <label class="form-label" for="contactNo"> Username</label>
                                            <input type="text" class="form-control" id="Username" name="username" required />
                                        </div>

                                        <div class="position-relative mb-4" style="padding: 3px;">
                                            <label class="form-label" for="youremail" > Password</label>
                                            <input type="password" class="form-control" id="pass" name="password" required />
                                        </div>

                                        <div class="text-center mt-4" style="padding: 5px;">
                                           
                                            <input type="submit" value="Login" name="submit" class="btn btn-primary"  />
                                        </div>
                                        <div class="text-right mt-3">
                                            
                                            <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
                                          
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
    </section>
    <!-- end hero -->

    
        
    
     <script src="js/bootstrap.bundle.min.js"></script>

     <!-- feather icon -->
     <script src="js/feather.js"></script>

     <!-- client-slider -->
     <script src="js/tiny-slider.js"></script>
     <script src="js/tiny.init.js"></script>

     <script src="js/app.js"></script>
      
    </body>
    </html>