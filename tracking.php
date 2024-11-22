<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<?php
    include "header.php";
    include "config.php";
    //shows individual products by foreach
    $productList = mysqli_query($conn,"SELECT * FROM parcel_information"); 
    //shows individual orders by foreach
    $orderList = mysqli_query($conn,"SELECT * FROM parcels" );
    //
    $statusList = mysqli_query($conn,"SELECT * FROM parcel_status");
    //single (pretty useless imo)
    $row = mysqli_fetch_assoc($productList);
    $row2 = mysqli_fetch_assoc($orderList);
    $input = "";
    $reqID = '';
    $reqStatus = '';
?>

<script>
    let IDcheck = '';
    let reqID = '';
    let reqStatus = '';
</script>
<!-- <pre>
    <?php 
        foreach($orderList as $order){
            // var_dump($order);
        }
        foreach($productList as $product){
            // var_dump($product);
        }
        foreach($statusList as $status){
            // var_dump($status);
        }
    ?>
</pre> -->

    <!-- Content Wrapper -->
    <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> product tracking </h2>
                                    <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Track</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Tracking -->
                <section class="pt-50 pb-120 tracking-wrap">    
                    <div class="theme-container container ">  
                        <div class="row pad-10">
                            <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your product ID" required="" name="input_tracker" id="input_tracker" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <div id="track_button" class="btn-1">track your product</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>    
                        </div>
                        <script>
                            $(".btn-1").click(function(){
                                <?php 
                                    foreach($orderList as $order){
                                        ?>
                                        IDcheck = "<?php echo $order["tracking_number"] ;?>" ;
                                        if($("#input_tracker").val() == IDcheck){
                                            <?php $reqID = $order["parcel_info"]; ?>
                                            <?php $reqStatus = $order["p_status"]; ?>
                                            <?php foreach($productList as $product){
                                                if ($product['id'] == $reqID){ ?>
                                                    $("#name_echo").html('<?php echo $product["name"] ;?>');
                                                    $("#id_echo").html('<?php echo $product["id"] ;?>');
                                                    $("#weight_echo").html('<?php echo $product["weight"] ;?>');
                                                    $("#height_echo").html('<?php echo $product["height"] ;?>');
                                                    <?php }  
                                            } ?>
                                            <?php foreach($statusList as $status){
                                                if ($status['s_id'] == $reqStatus){ ?>
                                                    $("#status_echo").html('<?php echo $status["status"] ;?>');
                                                    <?php }  
                                            } ?>
                                            $("#date_echo").html('<?php echo $order["date_created"] ;?>');
                                        }
                                        <?php
                                    }
                                ?>
                            })
                        </script>
                        <div class="row">
                            <div class="col-md-7 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s"> 
                                <img alt="" src="assets/img/block/product-1.jpg" />
                            </div>
                            <div class="col-md-5 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                <div class="prod-info white-clr">
                                    <ul>
                                        <li> <span class="title-2">Product Name:</span>
                                        <span class="fs-16" id="name_echo">
                                        </span> </li>
                                        <li> <span class="title-2">Product id:</span>
                                        <span class="fs-16" id="id_echo">
                                        </span> </li>
                                        <li> <span class="title-2">order date:</span>
                                        <span class="fs-16" id="date_echo">
                                        </span> </li>
                                        <li> <span class="title-2">order status:</span>
                                        <span class="fs-16 theme-clr" id="status_echo">
                                        </span> </li>
                                        <li> <span class="title-2">weight (kg):</span>
                                        <span class="fs-16" id="weight_echo">
                                        </span> </li>
                                        <li> <span class="title-2">Height (cm):</span>
                                        <span class="fs-16" id="height_echo">
                                        </span> </li>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div>
                      
                           
                        </div>
                    </div>
                </section>
                <!-- /.Tracking -->

            </article>
            <!-- /.Content Wrapper -->
           
<?php
    include "footer.php";
?>