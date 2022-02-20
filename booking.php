<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Booking Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 
</head>
<style>
  *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .carousel-inner img {
    width: 100%;
    height: 50vh;
  }

  footer{
    width: 100%;
    background-color: #222;
    padding: 50px 0px 0px 0px;
  }

</style>
<body>
<div class="container-fluid" style="background-color: #f5f5f5;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
   <a class="navbar-brand" href="indexnew.htm"><img src="logos/editlogo.png" style="width:200px; height:38px;"></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
   </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><img src="images/home.png" height="30px" width="30px"/>&nbsp; &nbsp;
        <b class="blk" style="font-size:14px">HOME</b><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="finalservice.php" style="color: black;"><img src="images/service.png" height="30px" width="30px"/>&nbsp; &nbsp;
        <b class="blk" style="font-size:14px">SERVICES</b></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: black;"><img src="images/office.ico" height="30px" width="30px"/>&nbsp; &nbsp;
        <b class="blk" style="font-size:14px">HOT DEALS</b></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: black;"><img src="images/onedrive.png" height="30px" width="30px"/>&nbsp; &nbsp;<b class="blk" style="font-size:14px">CAREERS</b></a></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php" style="color: black;"><img src="images/blog.png" height="30px" width="30px"/>&nbsp; &nbsp;
        <b class="blk" style="font-size:14px">BLOGS</b></a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 
    <!--Section: Content-->
 
    <?php
      $categoryid = $_GET["categoryid"];
      $subcategoryid = $_GET["subcategoryid"];
      
      $GetDesc = mysqli_query($conn,"select * from productdescription where refcatorgoryid='$categoryid' and refsubcatid='$subcategoryid'");
      $GetDescRows = mysqli_fetch_assoc($GetDesc);
      $prodtitle = $GetDescRows["prodtitle"];
      $prodslogan = $GetDescRows["prodslogan"];
      $propdescription =$GetDescRows["propdescription"];
      $refsubcatid =$GetDescRows["refsubcatid"];

       $GetPrice = mysqli_query($conn,"select * from managesubcategory where subcatid ='$subcategoryid' ");
       $GetPriceRows = mysqli_fetch_assoc($GetPrice);
       $subcategoryprice = $GetPriceRows["subcategoryprice"];

    ?>

<div class="row" style="margin-top:20px">

        <!-- Grid column -->
        <div class="col-lg-8 col-md-8">

          <!-- Form with header -->
          <div class="card mb-8">
            <div class="card-body">
              <!-- Header -->
              <div class="form-header blue accent-1">
                <h4 class="mt-2"><?php echo $prodtitle?></h4>
                <h5 class="text-muted"> <?php echo $prodslogan ?></h5>
              </div>
              <hr style="color: grey;">
              <br>
              <p class="font-weight-bold" style="font-size:16px;">Inclusions and Exclusion</p>
              <p class="font-weight-normal" style="font-size: 14px; line-height: 1.8"> 
                <?php echo $propdescription ?><br>

              </p>
              <hr>
              <p class="font-weight-italic text-left" style="font-size:13px">Rate includes labour charges only. Any material that is required would be charged extra and based on actuals.</p>
              
            </div>
          </div>
          <!-- Form with header -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
          <div class="card">
            <div class="card-body">
              <!-- Header -->
             	 <!------<div class="btn-group btn-group-justified" role="group" aria-label="Basic example">
 				 <button type="button" class="btn btn-primary float-left" id="left" style="border-radius: 10px; width: 30%;">Left</button>&nbsp;
 					 <button type="button" class="btn btn-primary float-center" id="center" style="border-radius: 10px; width: 30%">Middle</button>&nbsp;
 					 <button type="button" class="btn btn-primary float-right" id="right" style="border-radius: 10px; width: 30%">Right</button>&nbsp;
				</div> -->

				<!-------------<button class="btn btn-primary btn-sm float-left"
                        id="left" style="color:white border-radius: 30px; "> &nbsp;
                Left Button 
            </button>&nbsp;
              
            <button class="btn btn-primary  btn-sm"
                    id="center" style="color:white border-radius: 30px; ">&nbsp; 
                Center Button 
            </button>&nbsp; 
              
            <button class="btn btn-primary btn-sm float-right"
                    id="right" style="color:white border-radius: 30px; ">&nbsp; 
                Right Button 
            </button> -

        </div>-------->


                

               <form method="GET" action="schedule.php">
              <div class="form-header blue accent-1">
                <h4 class="mt-2"><?php echo $prodtitle?></h4>
                <h5 class="text-muted"><?php echo $prodslogan ?></h5>
               
                <p>
                 <!---- <button type="button" class="waves-effect btn z-depth-0 white grey-text text-darken-1 btnWire disabled btn-selected btnCurve">Small button</button>
                  <button type="button" class="btn btn-primary btn-sm">Small button</button>------>
                
                 <select class="browser-default custom-select" id="servicetype" name="servicetype" onchange="findmyvalue()">
                   <option value="Fitting/Installation" selected="selected" >Fitting/Installation</option>
                   <option value="Repair" >Repair</option>
                   
                  </select>

                  <input type="hidden" name="categoryid" value="<?php echo $_REQUEST["categoryid"]?>"/>
                  <input type="hidden" name="subcategoryid" value="<?php echo $_REQUEST["subcategoryid"]?>"/>




                
                
                
                  

                  <?php 
                if (isset($_POST["btncontinue"])) {
                 require("connection.php");
                 $servicetype = $_POST['servicetype'];  // Get service type
                 echo "You have selected :" .$servicetype;  // Displaying Selected Value
                 }
                 ?>



                </p>

              </div>
              <hr>
              
              <p style="font-size: 15px;"><?php echo $prodtitle?></p>
              
               <hr>
               <p style="font-size: 15px;">SUB TOTAL  <?php echo $subcategoryprice ?></p> 
              
              <hr>
            
              	   <div class="btn-group btn-group-justified">
 					
				           </div>   

				   <!----------<button class="btn btn-primary btn-sm float-left"
                        id="left" style="color:white; border-radius: 30px; width: 45%;" > 
                Add To Cart
            </button> &nbsp;---------->
              
                            

               <button type="submit" class="btn btn-danger btn-sm float-right" name="btncontinue"
                    id="right" style="color:white; border-radius: 30px; width: 45%"> 
                  Continue
               </button> 

               </form>
            </div>
          </div>
          
          </div>

        </div>
        <!-- Grid colGrid row -->


    </section>
    <!--Section: Content-->

<br>
<!-------<div class="row">
<div class="col-md-12 col-lg-12">
          <div class="card">
            <div class="card-body">
              
             
              <div class="form-header blue accent-1">
                <h4 class="mt-2">Book online Fans Electrical services</h4>
                <h5 class="text-muted">Your Home, Your Service</h5>
              </div>
              <hr>
              <br>
            
            </div>
          </div>
          
          </div>

</div>------------>
<br>
<div class="row">
  <div class="col-lg-12 col-md-12">
  <!-- MDB Pro download -->
  <footer>
   
   <div class="wrapper">
   <p class="text-white text-center">
    <img src="logos/greylogo.png" style="width:245px;height:55px;"><br>
    CraFix
    Copyright ©CRAFIX 2019 All Rights Reserved | Designed and Developed</p>
   </div>
   <!-- Copyright -->
  <br>
  <br>
  
  <div class="footer-copyright text-center py-3" style=" background-color:#333333;  color: white;">© 2018 Copyright:
   <a href="https://mdbootstrap.com/education/bootstrap/">crafix.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</div>
  
</div>

</body>
</html>
