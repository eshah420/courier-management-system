<?php
  include "header.php";
  include "config.php";
?>



  
  <style>
    @media (max-width: 768px){
        #select2{
            margin-top: 0% !important;
            width: 100% !important;
        }
        #sender{
            margin-top: 10% !important;
        }
    }
    #select2{
        color: black;
        width: 352%; 
        right: 1%;
        margin-top: 12%;
    }
    #sender{
        margin-top: 20%;
    }
    #col1{
        width: 78.9%;
        left: 24%;
    }
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
        width: 110px;
        margin-left: 35% !important;
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
            input[type="file"]{
                color: black
            }
            input[type="text"]{
                color: black
            }
        
  </style>
   <!-- Breadcrumb -->
   <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> feedback form </h2>
                                    <p class="fs-16 no-margin"> Your feeback is important for us </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="index.php" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Feedback</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->
     
     <!-- Calculate Your Cost -->
     <section class="calculate pt-100">
                    <div class="theme-container container">  
                        <span class="bg-text right wow fadeInUp" > Feedback </span>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img  src="images/deliveryman.jpg" alt="" class="wow slideInLeft"  />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 style="font-size: 40px;" class="section-title pb-10 wow fadeInUp"> Feedback form </h2>
                                <p class="fs-16 wow fadeInUp">Your feedback is important for business, please give your feedback thank you.</p>
                                <div class="calculate-form">
                                <form   method="post" class="row" id="contact-form">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Name: </label></div>
                                            <div class="col-sm-9"> <input type="text" name="name" id="Name" required placeholder="" class="form-control"> </div>
                                        </div>
                                       
                                      
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2">Feedback: </label></div>
                                            <div class="col-sm-9"> <textarea style="color: black;" class="form-control" name="review" id="Message" required cols="25" rows="3" required></textarea> </div>
                                        </div>                                  
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <button name="submit" id="submit_btn" class=" btn-1"><span>SEND</span> </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="pt-80 hidden-lg"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Calculate Your Cost -->

                <?php
    if(isset($_POST["submit"])){
      $name = $_POST["name"];
      $review = $_POST["review"];

    $query = "INSERT INTO `feedback`( `name`, `review`) VALUES ('$name','$review')";

   
   $result = mysqli_query($conn,$query);
    if($result){
        echo "<script>alert('Thank you for your order and feedback')</script>";
      }
    }


  ?>
 <?php
    include "footer.php";
  ?>

