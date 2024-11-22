<?php
    include "config.php";
    include "header.php";
?>

<style>
 #submit_btn{
        border-radius: 4px;
        background-color: #f5ab35 !important;
        border: none;
        font-weight: 600;     
         font-family: 'Poppins', sans-serif;
        color: white;
        text-align: center;
        font-size: 18px;
        padding: 10px;
        width: 200px;
        margin-left: 20% !important;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

 
    #submit_btn span {
              cursor: pointer;
              display: inline-block;
              position: relative;
              transition: 0.5s;
            }
            
            #submit_btn span:after {
              content: '\00bb';
              position: absolute;
              opacity: 0;
              top: 0;
              background: none !important;

              right: -20px;
              transition: 0.5s;
            }
            
            #submit_btn:hover span {
                /* font-size: 18px; */
              padding-right: 25px;
            }
            
            #submit_btn:hover span:after {
              opacity: 6;
              right: 0;
            }
          
            input[type="text"]{
                color: black
            }
            input[type="email"]{
                color: black
            }
            input[type="number"]{
                color: black
            }
        textarea{
            color: black !important;
        }
        </style>
            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> complaint </h2>
                                    <p class="fs-16 no-margin"> Complaint if you have any issue </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="index.php" class="gray-clr">Home</a></li>                                   
                                    <li class="active">contact</li>
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
                                    <form action="https://formsubmit.co/aqsa234@gmail.com" method="post" class="row" id="contact-form">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="name" id="Name" required placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Email: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="email" id="Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Phone: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="phone" id="Phone" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                            <div class="col-sm-9"> <textarea class="form-control" name="message" id="Message" required cols="25" rows="3"></textarea> </div>
                                        </div>                                  
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                            <button name="submit" id="submit_btn" class="btn-1"> <span>Send message</span> </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Us -->

                <!-- Contact Map -->
                <section class="map pt-80">
                    <div class="map-canvas">
                        <div id="map-canvas"></div>
                    </div>
                </section>
                <!-- /.Contact Map -->

            </article>
            <!-- /.Content Wrapper -->


<?php

  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $query = "INSERT INTO `complain`(`name`, `email`, `phone`, `message`) VALUES ('$name','$email','$phone','$message')";
  print($query);
    $result = mysqli_query($conn,$query);

    if($result){
      echo "<script>alert('Thank you contacting us')</script>";
    }
  }

    include "footer.php";
?>