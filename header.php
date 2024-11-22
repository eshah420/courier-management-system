<?php
session_start();
?>

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

        <style>
          
   
    .navbar-logo {
        width: 600px !important;
        /* background: black; */
    }
  
        @media (max-width: 768px){
           #navbar{
            overflow: hidden !important;
            }
            
            .sign-in{
                margin-left: 15px;
            }
            
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
            .active{
               color: #f6bc18;
            }
        </style>
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
                                <a style="" class="navbar-logo" href="index.php"> <img src="images/cms.png" alt="logo" /> </a>
                            </div>
                            <div id="responsive" class="col-md-10 col-sm-10 fs-12">
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">
                                        <li class="dropdown">
                                            <a href="index.php"  >Home </a>
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
                                        <li> <a href="aboutus.php">about</a> </li>
                                        <li> <a href="tracking.php"> tracking </a> </li>
                                        <li> <a href="pricing.php"> pricing </a> </li>
                                        <li> <a href="complain.php"> Complaint </a> </li>

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