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
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $name    = stripslashes($_REQUEST['name']);
        $name   = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (name, username, password, email, create_datetime)
                     VALUES ('$name', '$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            header("Location:login.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    
  </script>
    <nav class="navbar navbar-expand-lg fixed-top sticky " id="navbar"> 
        <div class="container">
            <a href="#" class="navbar-brand" style ="color: rgb(10, 34, 252);">
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

  
      
       
 <br>
        <div class="container">
        
            <div class="row justify-content-center mt-5">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-white border-0 shadow form-card">
                        <div class="card-body ">
                            <h6 class="text-dark text-center mb-4">CREATE YOUR ACCOUNT</h6>

                            <!-- start form -->
                            <form class="form" action=" " method="post">
                                <div class="row">
                                    <div class="col-20">

                                        <div class="text-center">
                                            <p>Create your account. It's absolutely free and only takes a minute!</p><br>
                                        </div>
                                        <div class="position-relative mb-4" style="padding: 5px;">
                                            <label class="form-label" for="yourname"> Name</label>
                                            <input type="text" class="form-control" id="yourname" name="name" required />
                                        </div>
                                        <div class="position-relative mb-4" style="padding:5px;">
                                            <label class="form-label" for="contactNo"> Username</label>
                                            <input type="text" class="form-control" id="Username" name="username" required />
                                        </div>
                                       
                                        <div class="position-relative mb-4" style="padding:5px;" >
                                            <label class="form-label" for="youremail"> Password</label>
                                            <input type="password" class="form-control" id="pass" name="password" required />
                                        </div>
                                        <div class="position-relative mb-4" style="padding:5px;">
                                            <label class="form-label" for="youremail"> Email</label>
                                            <input type="email" class="form-control" id="youremail" name="email" required />
                                        </div>
                                        <div class="position-relative" style="padding: 5px;" >
                                            <label class="form-check-label">
                                                <input type="checkbox" required="required"> 
                                                I accept the 
                                                <a href="#">Terms of Use</a>
                                                &
                                                <a href="#">Privacy Policy</a>
                                            </label>
                                        </div>
                                        <div class="text-center mt-2" style="padding: 5px;">
                                            <input type = "submit" name="submit" value="Register" class="btn btn-primary"/><br><br>
</div>
                                        <div class="text-right mb-1"  >
                                            Already have an account? <a href="#">Sign-In</a>      
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
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
       AOS.init();
     </script>
      
     <script src="js/app.js"></script>
      
    </body>
    </html>