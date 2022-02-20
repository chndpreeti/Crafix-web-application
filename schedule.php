<?php include("connection.php");?>
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

  <?php

      if (isset($_POST["add"])) {
      require("connection.php");
      date_default_timezone_set("Asia/Kolkata");
      // Define $username and $password 
      $invoiceno = mt_rand(1000,9999);
      $categoryid = $_GET["categoryid"];
      $subcategoryid = $_GET["subcategoryid"];
       $orderpersonname = $_POST['orderpersonname'];  // Get mobile no
       $ordercontactno = $_POST['ordercontactno']; // Get Password
       $orderemailid= $_POST['orderemailid'];//get name
       $orderaddress = $_POST['orderaddress'];  // Get emailid
       $ordercity = $_POST['ordercity']; // Get Feed
       $orderlocation =$_POST['orderlocation'];
       $orderpincode = $_POST["orderpincode"];//addeddate
      $orderstate= $_POST["orderstate"];// search date 
      $orderapptdatefinal = $_POST["orderapptdatefinal"];
      $orderapptslotfinal = $_POST["orderapptslotfinal"];
      $pieces = explode(" ", $orderapptslotfinal);
      $apptslot = $pieces[0]; // piece1
      $appttime = $pieces[1]; // piece2
      $subcategoryprice = $_POST["subcategoryprice"];
      $servicetype = $_POST["servicetype"];
      $orderplaceddate = date("d-m-Y H:i:s");
      $ordersearchdate = date("Y-m-d");



     $sql= "insert into order_details (orderinvoiceno,ordercategoryid,ordersubcateogryid,orderpersonname,ordercontactno,orderemailid,orderaddress,orderpincode,orderlocation,ordercity,orderstate,orderapptdate,orderslot,orderappttime,orderprice,orderservicetype,orderplaceddate,ordersearchdate,orderstatus) VALUES ('$invoiceno','$categoryid','$subcategoryid','$orderpersonname','$ordercontactno','$orderemailid','$orderaddress','$orderpincode','$orderlocation','$ordercity','$orderstate','$orderapptdatefinal','$apptslot','$appttime','$subcategoryprice','$servicetype','$orderplaceddate','$ordersearchdate','0')";
      $SqlQueryVerify = mysqli_query($conn,$sql);
    
     if ($SqlQueryVerify) {

     echo "<script type='text/javascript'>alert('Request Sent Successfully!!!');
     window.location = 'thankyou.php?invoiceno=".$invoiceno."'</script>";
     } 
     else{
       echo "<script type='text/javascript'>alert('Sorry Something Went Wrong!!!')</script>";
      }
   }


?>
<!DOCTYPE html>
<html>
<head>
<title>Schedule Page</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/1c038f62b3.js" crossorigin="anonymous"></script>
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
   <a class="navbar-brand" href="index.php"><img src="logos/editlogo.png" style="width:200px; height:38px;"></a>
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
        <b class="blk" style="font-size:14px">Blogs</b></a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
 
    <!--Section: Content-->
 <form method="post" action="">
<div class="row" style="margin-top:20px">
<div class="col-lg-8 col-md-8">
<!-- Form with header --><div class="card mb-8">
 <div class="card-body">
              <!-- Header -->
<div class="accordion" id="accordionExample275">
  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingOne2">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2"
               aria-expanded="true" aria-controls="collapseOne2">
                 <span class="fa-stack fa-1x">
                 <i class="fa fa-circle-o fa-stack-2x"></i>
                  <strong class="fa-stack-1x">1</strong>
                  </span>
                   Address Details
                </button>
        </h5>
              </div>
               <div id="collapseOne2" class="collapse" aria-labelledby="headingOne2"
               data-parent="#accordionExample275">
              <div class="card-body">
           <!----   <p class="font-weight-light" style="font-size: 15px;text-align: center;">No Address selected in yout city.Please select a new Address</p>-->
             
              
               
            <!----   <button type="button" class="btn btn-success" style="font-size: 12px;">+ Add New Address</button>----->








    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Name</label>
      <input type="text" class="form-control" name="orderpersonname" id="inputEmail4" placeholder="FullName">
    </div>
    <div class="form-group col-md-6">
      <label for="input">Contact No</label>
      <input type="text" class="form-control" name="ordercontactno" id="inputPassword4" placeholder="Contact No">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email Id</label>
    <input type="text" class="form-control" name="orderemailid" id="inputAddress" placeholder="Email Address">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="orderaddress" id="inputAddress2" placeholder="Full Address">
  </div>
 <div class="form-group col-md-6">
    <label for="inputAddress">Location</label>
    <input type="text" class="form-control" name="orderlocation" id="inputAddress2" placeholder="Location">
  </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="ordercity" id="inputCity" placeholder="City Name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" name="orderstate" id="orderstate" placeholder="State Name" class="form-control" />
      
    </div>
    <div class="form-group col-md-2">
      <label for="input">Pincode</label>
      <input type="text" class="form-control" name="orderpincode" id="inputZip" placeholder="Pincode here">
    </div>
  </div>
  <!--<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox"  id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" name="add" class="btn btn-primary">Add Address</button>-->
  <hr>
              <!-- Default unchecked
              <div class="row">
              <div class="col-md-9 col-lg-9">
              &nbsp;<div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
              <label class="custom-control-label" for="defaultChecked" style="font-size: 16px;">Home<br>
               <p class="font-weight-light" style="font-size: 15px;  line-height: 1.8"> 
               <?php echo $orderpersonname ?> <?php echo $orderaddress ?>
                <hr> 
                the whole addresss</p><br></label>
               </div>

              <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
             <label class="custom-control-label" for="defaultUnchecked">Default unchecked</label>
            </div>
            </div>

            <div class="col-md-3">
              <br>
              <span style="align-items: right;">
              <i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-trash" aria-hidden="true"></i>
            </span>
          </div>
      </div> --><!-------------------Adresss row------>
              
<!-- Default checked -->




              </div>
              </div>
              </div>
    <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingTwo2">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
          <span class="fa-stack fa-1x">
          <i class="fa fa-circle-o fa-stack-2x"></i>
          <strong class="fa-stack-1x">2</strong>
          </span>
          Appointment
        </button>
      </h5>
    </div>
    <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2"
      data-parent="#accordionExample275">
      <div class="card-body">
       <!-----------Button with calender schedule-------->
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
    <div class="btn-group-lg" role="group" aria-label="First group">
    <h5 class="text-muted" style="font-size:15px;">Select Date</h5>  
  <br>

    &nbsp;&nbsp;<button type="button" class="btn btn-secondary orderapptdate" value="01-Oct-2019">OCT<br>
      01<br>
      2019</button>
 
    <button type="button" class="btn btn-secondary orderapptdate" value="02-Oct-2019">OCT<br>
      02<br>
      2019</button>
    <button type="button" class="btn btn-secondary orderapptdate" value="03-Oct-2019">OCT<br>
      03<br>
      2019</button>
    <button type="button" class="btn btn-secondary orderapptdate" value="04-Oct-2019">OCT<br>
      04<br>
      2019</button>
 
    <button type="button" class="btn btn-secondary orderapptdate" value="05-Oct-2019">OCT<br>
      05<br>
      2019</button>
 
    <button type="button" class="btn btn-secondary orderapptdate"  value="06-Oct-2019">OCT<br>
      06<br>
      2019</button>
 
    <button type="button" class="btn btn-secondary orderapptdate" value="07-Oct-2019">OCT<br>
      07<br>
      2019</button>
 
    <button type="button" class="btn btn-secondary orderapptdate" value="08-Oct-2019">OCT<br>
      08<br>
      2019</button>
 <hr>
 
     <h5 class="text-muted" style="font-size:15px;">Select Time Slot</h5>  
      <button type="button" value="Morning 9AM-11AM" style="font-size:15px;" class="waves-effect btn z-depth-0 white grey-text text-darken-1 btnWire disabled btn-selected btnCurve orderslotbooking">Morning<br>
      9AM-11AM</button>
 
     <button type="button" value="Afternoon 12PM-3PM"  style="font-size:15px;" class="waves-effect btn z-depth-0 white grey-text text-darken-1 btnWire disabled btn-selected btnCurve orderslotbooking">Afternoon <br>
     12PM-3PM</button>
 
    <button type="button" value="Evening 4PM-6PM" style="font-size:15px;" class="waves-effect btn z-depth-0 white grey-text text-darken-1 btnWire disabled btn-selected btnCurve orderslotbooking">Evening<br>
    4PM-6PM</button>
 
    <button type="button" value="Night 7PM-9PM" style="font-size:15px;" class="waves-effect btn z-depth-0 white grey-text text-darken-1 btnWire disabled btn-selected btnCurve orderslotbooking">  NIGHT<br>
    7PM-9PM</button>

    <hr>

    <button type="button" class="btn btn-danger btn-sm float-right btnShowOrderSummary"
                    id="right" style="color:white; border-radius:30px; width:30%;font-size: 15px;"> 
                Continue
            </button> 


  </div>
</div>



      </div>
    </div>
  </div>







  <div class="card z-depth-0 bordered">
    <div class="card-header" id="headingThree2">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
          data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
          <span class="fa-stack fa-1x">
          <i class="fa fa-circle-o fa-stack-2x"></i>
          <strong class="fa-stack-1x">3</strong>
          </span>
          Order Summary
        </button>
      </h5>
    </div>
    <div id="collapseThree2" class="collapse " aria-labelledby="headingThree2"
      data-parent="#accordionExample275">
      <div class="card-body">
       <h4 style="font-size:25px;" class="mt-2"><?php echo $prodtitle?></h4>
       <h5 class="text-muted" style="font-size:15px;"><?php echo $_REQUEST['servicetype'] ?></h5>
       <button class="btn btn-sm float-left" type="submit"
                    id="left" style="color:red; width:10%; font-size:12px;"> 
                REMOVE
            </button> 
       <p style="text-align:right; font-size: 17px;" ><b><?php echo $subcategoryprice ?></b></p>
        
       <hr>
        <h5 class="text-muted" style="font-size:15px;">Total Amount</h5>
          <p style="text-align:right; font-size: 15px;" ><?php echo $subcategoryprice ?></p>
        
        <hr>

        <div class="custom-control custom-checkbox">
           <input type="checkbox" class="custom-control-input" id="defaultChecked2" checked>
           <label class="custom-control-label" for="defaultChecked2" style="font-size:12px;">I agree to pay after the service and to the terms and conditions.</h5></label>
</div>

<input type="hidden" name="orderapptdatefinal" id="orderapptdatefinal" class="orderapptdatefinal">
<input type="hidden" name="orderapptslotfinal" id="orderapptslotfinal" class="orderapptslotfinal">
<input type="hidden" name="subcategoryprice" id="subcategoryprice" value="<?php echo $subcategoryprice?>">

<input type="hidden" name="servicetype" id="servicetype" value="<?php echo $_REQUEST['servicetype'] ?>">

<button class="btn btn-danger btn-sm float-right"
                    id="right" style="color:white; border-radius:40px; width:15%;font-size:15px;" type="submit" name="add"> 
                Book Now
            </button> 
<br>


      </div>
    </div>
  </div>
</div>
</form>




            </div><!----------card body------>
          </div><!--------------card mb------------->
          <!-- Form with header -->

        </div><!-------col 8 main------>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
          <div class="card">
            <div class="card-body">
              <!-- Header -->
             	 
              <div class="form-header blue accent-1">
                <h5 class="text-muted" style="font-size:25px;">Total Amount</h5>
          <p style="text-align:right; font-size:20px;" ><?php echo $subcategoryprice ?></p>
              
              <hr>
            
              	  

              
            </div>
          </div>
          
          </div>

         <!----<div class="col-md-10 col-lg-10">
           <img src="logos/satisfaction.png" style="width:auto;
           height:120px; padding:9px 35px 0px 45px;" >
           <p></p>

        </div> */  ------->

        <!-- Grid colGrid row -->
</div>





    </section>
    <!--Section: Content-->
</div>
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
  
  <script type="text/javascript">
    $(document).ready(function(){
      $(".orderapptdate").click(function(){
        var apptdate = $(this).val();
        $(".orderapptdatefinal").val(apptdate);
      });

      $(".orderslotbooking").click(function(){
        var orderslotbooking = $(this).val();
        $(".orderapptslotfinal").val(orderslotbooking);
      });

        $(".btnShowOrderSummary").click(function(){
             $("#collapseThree2").addClass("show");
            $("#collapseTwo2").removeClass("show");
        });

    })
  </script>

</body>
</html>
