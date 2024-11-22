<?php
    include "header.php";
    include "config.php";
    $res = mysqli_query($conn,"SELECT * FROM user");
    $re2 = mysqli_query($conn,"SELECT * FROM branches");
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
                        <span class="bg-text right wow fadeInUp" > calculate </span>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="assets/img/block/Courier-Man.png" alt="" class="wow slideInLeft"  />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 class="section-title pb-10 wow fadeInUp"> calculate your cost </h2>
                                <p class="fs-16 wow fadeInUp">This is calculated by multiplying
                                the weight, height of the package and a standard divisor is then used for dividing the figure above.</p>
                                <div class="calculate-form">
                                    <form enctype="multipart/form-data" method="post" class="row">
                                    <div class="form-group wow fadeInUp" >
                                            <div class="col-sm-3"> <label class="title-2"> Parcel Name : </label></div>
                                            <div class="col-sm-9"> <input name="name"  type="text" placeholder="" class="form-control" required> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" >
                                            <div class="col-sm-3"> <label class="title-2"> height (cm): </label></div>
                                            <div class="col-sm-9"> <input name="height"  type="text" placeholder="" class="form-control" required> </div>
                                        </div>
                                       
                                       
                                        <div class="form-group wow fadeInUp" >
                                            <div class="col-sm-3"> <label class="title-2"> weight (kg): </label></div>
                                            <div class="col-sm-9"> <input name="weight"  type="text" placeholder="" class="form-control" required> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Image : </label></div>
                                            <div class="col-sm-9"> <input name="Image" type="file" placeholder="" class="form-control" required> </div>
                                            <div class="form-group wow fadeInUp">
                                        <div class="col-sm-3"> <label id="sender" class="title-2"> Sender: </label></div>
                <div class="col-sm-3">
                <select  class=" form-control col-sm-9 "  name="u_id" id="select2">
                  <option  value="">Choose</option>
                  <?php  
                      while($row = mysqli_fetch_assoc($res)){
                          echo '  <option value="'.$row["id"].'">'.$row["u_name"].'</option>';
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
                                       
                                        <!-- <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Image : </label></div>
                                            <div class="col-sm-9"> <input name="Image" type="text" placeholder="" class="form-control"> </div>
                                        </div> -->
                                       
                                        </div>
                                        
              </div>
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
    $w = $_POST["weight"];
    $h = $_POST["height"];
   $uid = $_POST["u_id"];
    
    $iname = $_FILES["Image"]["name"];
    $itmp = $_FILES["Image"]["tmp_name"];


    $r = rand(10000,100000);
    $t = time();

    $i = "pro_img/".$r.$t.$iname;

      move_uploaded_file($itmp,$i);

      $weight_p = 10;
      $height_p = 5;
      $price = $weight_p * $w + $height_p * $h;




    $query = "INSERT INTO parcel_information (`id`,`name`, `weight`, `height`, `price`,`path`,`user_id`) VALUES (NULL,'$name','$w','$h','$price','$i','$uid')";

   
    mysqli_query($conn,$query);
    echo '<script>window.location.href="feedback.php"</script>';
   
       }
 


  ?>
 <?php
    include "footer.php";
  ?>
