<?php include("connection.php");?>
<!DOCTYPE html>
<html>
<head>
<title>Order Confirmation</title>
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
      
      
      $invoiceno =$_GET["invoiceno"];
      
      $GetDesc = mysqli_query($conn,"select * from order_details where orderinvoiceno ='$invoiceno' ");
      $GetDescRows = mysqli_fetch_assoc($GetDesc);
    
      $orderpersonname = $GetDescRows["orderpersonname"];
      $orderaddress = $GetDescRows["orderaddress"];
      $ordercity =$GetDescRows["ordercity"];
      $orderlocation =$GetDescRows["orderlocation"];
      $orderstate= $GetDescRows["orderstate"];// search date 
      $orderpincode =$GetDescRows["orderpincode"];
      $orderapptdate= $GetDescRows["orderapptdate"];
      $orderslot =  $GetDescRows["orderslot"];
      $orderappttime = $GetDescRows["orderappttime"];
      $orderservicetype = $GetDescRows["orderservicetype"];

     $ordercategoryid =$GetDescRows["ordercategoryid"];
       $ordersubcateogryid =$GetDescRows["ordersubcateogryid"];
     
?>

 <?php
      
      
      $Getid = mysqli_query($conn,"select * from productdescription where refcatorgoryid='$ordercategoryid' and refsubcatid='$ordersubcateogryid'");
      $GetidRows = mysqli_fetch_assoc($Getid);
      $prodtitle = $GetidRows["prodtitle"];
      $prodslogan = $GetidRows["prodslogan"];
      $propdescription =$GetidRows["propdescription"];
      $refsubcatid =$GetidRows["refsubcatid"];

       $GetPrice = mysqli_query($conn,"select * from managesubcategory where subcatid ='$ordersubcateogryid' ");
       $GetPriceRows = mysqli_fetch_assoc($GetPrice);
       $subcategoryprice = $GetPriceRows["subcategoryprice"];

    ?>
 

<div class="row" style="margin-top:20px">

        <!-- Grid column -->
        <div class="col-md-12">

          <!-- Form with header -->
          <div class="card mb-8">
            <div class="card-body">
              <!-- Header -->
              <div class="form-header blue accent-1">
              


                <div class="card text-center font-weight-normal">
                    <div class="card-header "><b>
                      Appointment Confirmation</b>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Hello <?php echo $orderpersonname ?>, Your Request has been Received </h5>
                      <p class="card-text"><i>Appointment Confirmed for <b><?php echo $prodtitle?> (<?php echo $orderservicetype ?>)</b> on <?php echo date('l, F jS, Y', strtotime($orderapptdate)); ?>  between  <?php echo $orderappttime ?> in <?php echo $orderslot ?>.</i><br>
                       <i>Please find the details below</i></p>

      
                        <center><div class="card text-white center bg-info mb-3" style="max-width: 25rem; align-content: center;">
                          <div class="card-header"> <b>Received Slot:</b> <br> <?php echo date('l, F jS, Y', strtotime($orderapptdate)); ?> in <?php echo $orderslot ?> <br> between
                            <?php echo $orderappttime ?>
                          </div>
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $orderpersonname ?></h5>
                            <p class="card-text text-white"><?php echo $orderaddress ?>
                               <?php echo $orderlocation ?>
                              <?php echo $ordercity ?>
                              <?php echo $orderpincode ?></p>
                          </div>
                        </div>
                        </center>


                      <p class="card-text">Appointment ID: <b><?php echo $invoiceno ?></b></p>
                      <a href="index.php" class="btn btn-primary" >Continue Exploring</a>
                    </div>
                    <div class="card-footer text-muted">
                      Thankyou For Choosing Us !!</div>
                  </div>
            </div>
          </div>
          <!-- Form with header -->

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        

        </div>
        <!-- Grid colGrid row -->
</div>

    </section>

<br>

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
