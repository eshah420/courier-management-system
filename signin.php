<?php
session_start();
    include "config.php";
    
    
   
    if(isset($_POST["submit"])){
      $email = $_POST["u_email"];
      $password = $_POST["u_password"];
  
  
      $query = "SELECT * FROM `user` WHERE `u_email` = '$email' AND `u_password` = 
      '$password';";
      $data = mysqli_query($conn,$query);
      $row = mysqli_fetch_assoc($data);
      if(mysqli_num_rows($data) > 0){
        $_SESSION['userId'] = $row['id'];
        $_SESSION['username'] = $row['u_name'];

       
        echo '<script>window.location.href="user.php"</script>';
        // echo "login";
   }
    
}
?>

<style>
         @media (max-width: 768px){
           #navbar{
            overflow: hidden !important;
            }
            
            .sign-in{
                margin-left: 15px;
            }
            
        }
    .navbar-logo {
        width: 600px !important;
        /* background: black; */
    }
 
            .button {
              border-radius: 4px;
              background-color: #f5ab35 !important;
              border: none;
              font-weight: 600;              font-family: 'Poppins', sans-serif;
              color: white;
              text-align: center;
              font-size: 15px;
              padding: 10px;
              width: 110px;
              margin-left: 22% !important;
              transition: all 0.5s;
              cursor: pointer;
              margin: 5px;
            }
            
            .button span {
              cursor: pointer;
              display: inline-block;
              position: relative;
              transition: 0.5s;
            }
            
            .button span:after {
              content: '\00bb';
              position: absolute;
              opacity: 0;
              top: 0;
              background: none !important;

              right: -20px;
              transition: 0.5s;
            }
            
            .button:hover span {
                font-size: 15px;
              padding-right: 25px;
            }
            
            .button:hover span:after {
              opacity: 6;
              right: 0;
            }
            .sign-in{
                padding-bottom:1px;
                border-radius:50px;
                height:35px !important;
                width:100px !important;
                font-size:12px;
                background-color: #f1c459;
                padding:7px !important;
                }
            .name{
                transition: all 0.3s ease !important;
                bottom:11px;
                border-radius:50px;
                height:30px !important;
                width:100px !important;
                font-size:15px;
                text-decoration:none !important;
                text-align:center;
                background-color: none;
                padding:6px !important;
            }
            .name:hover{
                color:black !important;
            }
            input[type="email"]{
                color: black;
            }
            input[type="password"]{
                color: black;
            }
            .active{
                color: #f6bc18;
            }
</style>
<!DOCTYPE html>
<html>
    
<!-- Mirrored from jthemes.net/themes/f-html/GO-Courier/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Apr 2022 10:00:11 GMT -->
<head>
        <title>GO Home-1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-3.3.6/css/bootstrap.min.css">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/font-awesome-4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/font-elegant/elegant.css">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="assets/plugins/owl.carousel.2/assets/owl.carousel.css">


        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="assets/css/theme.css">

      
        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body id="home">
        <!-- Preloader -->
        <!-- <div id="preloader">

            <div class="small1">
                <div class="small ball smallball1"></div>
                <div class="small ball smallball2"></div>
                <div class="small ball smallball3"></div>
                <div class="small ball smallball4"></div>
            </div>


            <div class="small2">
                <div class="small ball smallball5"></div>
                <div class="small ball smallball6"></div>
                <div class="small ball smallball7"></div>
                <div class="small ball smallball8"></div>
            </div>

             <div class="bigcon">
                <div class="big ball"></div>
            </div>

        </div>   -->
        <!-- /.Preloader -->    


        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main">

                <!-- Header Topbar -->
                <div class="top-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-6 col-sm-5">
                                <ul class="list-items fs-10">
                                    <li><a href="#">sitemap</a></li>
                                    <li class="active"><a href="#">Privacy</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-7 fs-12">
                                <p class="contact-num">  <i class="fa fa-phone"></i> Call us now: <span class="theme-clr"> +880-1756-390-370 </span> </p>
                            </div>
                        </div>
                    </div>
                    <!-- <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 theme-clr-bg"> sign in </a> -->
                  
                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a style="" class="navbar-logo" href=""> <img src="images/cms.png" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
                                       
                                            <!-- <ul class="dropdown-menu">
                                                <li><a href="index-2.html">Home Page1</a></li>
                                                <li><a href="index-3.html">Home Page2</a></li>
                                                <li><a href="index-4.html">Home Page3</a></li>

                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Submenu Level 1 </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Submenu</a></li>
                                                        <li><a href="#">Submenu</a></li>
                                                        <li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" >Submenu Level 2</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Submenu</a></li>
                                                                <li><a href="#">Submenu</a></li>
                                                                <li><a href="#">Submenu</a></li>                                    
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                      

                                        <?php
                                       if(isset($_SESSION['userId'])){
                                    ?>
                                        <ul class=" theme-menu">
                                        <li class="dropdown active">
                                            <a class="name" href="signin.php" ><?php echo $_SESSION['username']?> </a>

                                            <ul class="dropdown-menu">

                                                <li><a href="logout.php">Logout</a></li>
                                               
                                                <?php
                                                    }
                                                  else{
                                                ?>
                                                <li><a class="sign-in" href="signin.php">Sign in</a></li>
                                                <?php
                                                   }  
                                                 ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                                              
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->

            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> Login Here!</h2>
                                    <p class="fs-16 no-margin"> Visit our website? First you have to login your account! </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="index.php" class="gray-clr">Home</a></li>                                   
                                    <li style="color: #f6bc18;" class="active">Login</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->
<!-- Contact Us -->
<section class="contact-page pad-30">                    
    <div class="theme-container container">               
        <div class="row">
            
            <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                <div class="calculate-form">
                    <form method="post" class="row" id="contact-form">
                        
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                            <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                            <div class="col-sm-9"> <input type="email" name="u_email" id="Email"  placeholder="" class="form-control" required> </div>
                        </div>
                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                            <div class="col-sm-3"> <label class="title-2"> Password: </label></div>
                            <div class="col-sm-9"> <input type="password" name="u_password" id="Email" placeholder="" class="form-control" required> </div>
                        </div>
                        <div class="text-center mt-5"><button type="submit" id="" class=" button" class="
                         rounded" name="submit"> <span>SIGN IN</span></button></div>

                         <p class="mt-3 text-center" style=" font-size: 16px; margin-left: 100px; font-weight: bold" >Don't have an account? <a style="text-decoration: underline;" href="register.php">register now!</a> </p>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.Contact Us -->

            </article>
            <!-- /.Content Wrapper -->


<?php
    include "footer.php";
?>