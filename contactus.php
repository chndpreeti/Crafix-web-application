<?php include("connection.php");?>
<?php

if (isset($_POST["btnsub"])) {
    require("connection.php");
    date_default_timezone_set("Asia/Kolkata");
    // Define $username and $password 
    $fname = $_POST['fname'];  // Get mobile no
     $lname = $_POST['lname']; // Get Password
     $mail= $_POST['mail'];//get name
     $subject = $_POST['subject'];  // Get emailid
     $feed = $_POST['feed']; // Get Feed
     $addeddate = date("d-m-Y H:i:s");//addeddate
     $search = date("Y-m-d");// search date 


    $sql= "insert into contactus (fname,lname,mail,subject,feed,addeddate,searchdate) VALUES ('$fname','$lname','$mail','$subject','$feed','$addeddate','$search')";
    $SqlQueryVerify = mysqli_query($conn,$sql);
    
    if ($SqlQueryVerify) {
     echo "<script type='text/javascript'>alert('Request Sent Successfully!!!')</script>";
    } 
    else{
      echo "<script type='text/javascript'>alert('Sorry Something Went Wrong!!!')</script>";
    }
}


?>







<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://kit.fontawesome.com/1c038f62b3.js" crossorigin="anonymous"></script>
  
</head> 

<style>

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

footer
  {
    width: 100%;
    background-color: #222;
    padding: 50px 0px 0px 0px;
  }



.map-container {
          height:400px;
          position: relative;
        }

.map-container iframe
 {
          left: 0;
          top:10;
          height: 100%;
          width: 100%;
          position: absolute;
        }

</style>

<body>
 

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
        <a class="nav-link" href="index.php" style="color: black;"><img src="images/blog.png" height="30px" width="30px"/>&nbsp;
        <b class="blk" style="font-size:14px">BLOGS</b></a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>

<div class="container-fluid my-2 py-1 z-depth-1 ">
  <!--Section: Content-->
   <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

     

      <!--Google map-->
      <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.8089298152977!2d72.96930986437866!3d19.203546002942424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b93e739b8129%3A0x5bf7670bc540616f!2sKhopat%20Rd%20%26%20Gokuldas%20Wadi%20Rd%2C%20Gokuldas%20Wadi%2C%20Hans%20Nagar%2C%20Thane%20West%2C%20Thane%2C%20Maharashtra%20400601!5e0!3m2!1sen!2sin!4v1570378622484!5m2!1sen!2sin" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <!--Google Maps-->

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-lg-5 col-md-12 mb-0 mb-md-0">
          <h3 class="font-weight-bold">Contact Us</h3>
           <p class="text-muted">  CraFix is an online Home Improvement aggregator, connecting homeowners 
                with the best home repair professionals in their neighbourhood.</p>

          <p><span class="font-weight-bold mr-2"><i class="fas fa-envelope pr-2"></i></i>Email:</span>crafix@gmail.com</p>
          <p><span class="font-weight-bold mr-2"><i class="fas fa-phone pr-2"></i>Phone:</span><a href="">+48 123 456 789</a></p>
          <p><span class="font-weight-bold mr-2"><i class="fas fa-map-marker-alt pr-2"></i>Address:</span>L-325,Dreams Mall ,LBS Marg,Near Bhandup Station,
          Bhandup West,Mumbai,400078</p>
         </div>
         
        <!--Grid column-->

        <!--Grid column-->
        <form method="post" action="">
        <div class="col-lg-7 col-md-12 mb-4 mb-md-0">

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-6">

              <!-- Material outline input -->
              <div class="md-form md-outline mb-0">
                <input type="text" id="form-first-name"  name="fname" class="form-control">
                <label for="form-first-name">First name</label>
              </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">

              <!-- Material outline input -->
              <div class="md-form md-outline mb-0">
                <input type="text" id="form-last-name" name="lname" class="form-control">
                <label for="form-last-name">Last name</label>
              </div>

            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!-- Material outline input -->
          <div class="md-form md-outline mt-3">
            <input type="email" id="form-email" name="mail" class="form-control">
            <label for="form-email">E-mail</label>
          </div>

          <!-- Material outline input -->
          <div class="md-form md-outline">
            <input type="text" id="form-subject" name="subject" class="form-control">
            <label for="form-subject">Subject</label>
          </div>

          <!--Material textarea-->
          <div class="md-form md-outline mb-3">
            <textarea id="form-message" class="md-textarea form-control" name="feed" rows="3"></textarea>
            <label for="form-message">How we can help?</label>
          </div>
          <button type="submit" name="btnsub" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>

        </div>
      </form>
        <!--Grid column-->

      </div>
      <!--Grid row-->

  </section>
</div>
<
   
    <!--Section: Content-->


  </div>


  <!-- MDB Free download -->
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
  
   
    <!-- Copyright -->
  </footer>
</body>
</html>