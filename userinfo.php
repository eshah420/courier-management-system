<?php
include "config.php";
include "header.php";
    $res = mysqli_query($conn,"SELECT * FROM branches");
    $res2 = mysqli_query($conn,"SELECT * FROM parcel_information");

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
        width: 352% !important; 
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
                        <h2 class="section-title no-margin"> Courier Details </h2>
                        <p class="fs-16 no-margin"> You have to write complete parcel details </p>
                    </div>
                </div>
                <div class="col-sm-4">                        
                    <ol class="breadcrumb-menubar list-inline">
                        <li><a href="index.php" class="gray-clr">Home</a></li>                                   
                        <li class="active">Courier</li>
                    </ol>
                </div>  
            </div>
        </div>
        </section>
        <!-- /.Breadcrumb -->

    <!-- Calculate Your Cost -->
    <section class="calculate pt-100">
        <div class="theme-container container">  
         <span class="bg-text right wow fadeInUp" > Your Information </span>
         <div class="row">
           <div class="col-md-6 text-center">
               <img src="images/userinfo.png" alt="" class="wow slideInLeft"  />
           </div>
             <div class="col-md-6">   
                 <div class="pad-10"></div>
                 <h2 class="section-title pb-10 wow fadeInUp"> Your Information </h2>
                 <p class="fs-16 wow fadeInUp">Please fill this form to deliver your parcel. </p>
                 <div class="calculate-form">
                     <form enctype="multipart/form-data" method="post" class="row">
                    <div class="form-group wow fadeInUp" >
                            <div class="col-sm-3"> <label class="title-2"> Your Name : </label></div>
                            <div class="col-sm-9"> <input name="name"  type="text" placeholder="" class="form-control" required> </div>
                        </div>
                        <div class="form-group wow fadeInUp" >
                            <div class="col-sm-3"> <label class="title-2"> Your Email: </label></div>
                            <div class="col-sm-9"> <input name="email"  type="text" placeholder="" class="form-control" required> </div>
                        </div>
                        <div class="form-group wow fadeInUp" >
                            <div class="col-sm-3"> <label class="title-2">  Address: </label></div>
                            <div class="col-sm-9"> <input name="address"  type="text" placeholder="" class="form-control" required> </div>
                        </div>
                        <div class="form-group wow fadeInUp" >
                            <div class="col-sm-3"> <label class="title-2">  Contact: </label></div>
                            <div class="col-sm-9"> <input name="contact"  type="text" placeholder="" class="form-control" required> </div>
                        </div>
                        <div class="form-group wow fadeInUp">
                        <div class="col-sm-3"> <label id="sender" class="title-2"> Branch: </label></div>
                <div class="col-sm-3">
                <select  class=" form-control col-sm-9 "  name="b_id" id="select2">
                  <option  value="">Choose</option>
                  <?php  
                      while($row = mysqli_fetch_assoc($res)){
                          echo '  <option value="'.$row["id"].'">'.$row["b_name"].'</option>';
                      }
                  ?>
                

                </select>
              </div>

              <div class="form-group wow fadeInUp">
                        <div class="col-sm-3"> <label id="sender" class="title-2"> Parcel: </label></div>
                <div class="col-sm-3">
                <select  class=" form-control col-sm-9 "  name="p_id" id="select2">
                  <option  value="">Choose</option>
                  <?php  
                      while($row = mysqli_fetch_assoc($res2)){
                          echo '  <option value="'.$row["id"].'">'.$row["name"].'</option>';
                      }
                  ?>
                

                </select>
              </div>

              
            </div>
         
             
              <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                    <div class="col-sm-9 col-xs-12 pull-right"> 
                        <button name="submit" id="submit_btn" class="btn-1"> <span>DONE</span> </button>
                    </div>
              </div>
       
</div> 
        </div>
        </div>
    
  
      

      </form>
  	</div>
  	<!-- <div class="card-footer border-top border-info">
  		<div class="d-flex w-100 justify-content-center align-items-center">
  			<button class="btn btn-flat  bg-gradient-primary mx-2" form="manage-parcel">Save</button>
  			<a class="btn btn-flat bg-gradient-secondary mx-2" href="./index.php?page=parcel_list">Cancel</a>
  		</div>
  	</div> -->
	</div>
</div>
  </div>


       
       
<?php
    if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $add = $_POST["address"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $bid = $_POST["b_id"];
    $pid = $_POST["p_id"];

      $tid = $bid."-".$pid."-".rand(10000,1000000);


    $query = "INSERT INTO parcels (`id`, `tracking_number`, `recipient_name`, `recipient_email`, `recipient_address`, `recipient_contact`, `branch_id`, `parcel_info`)
       VALUES (NULL,'$tid','$name','$email','$add','$contact','$bid','$pid')";

   
    mysqli_query($conn,$query);
    echo '<script>window.location.href="thankyou.php"</script>';
  };


  ?>
  <?php

  include "footer.php";
  ?>