<?php include("connection.php");?>
<?php




  if (isset($_POST["BtnLogin"])) {
    require("connection.php");

    // Define $username and $password 
    $username = $_POST['username'];  // Get mobile no
    $password = $_POST['loginPassword']; // Get Password
    

    $query = "select * from logintbl where userpassword='".$password."' and usermobileno='".$username."'";
    $rows = mysqli_num_rows(mysqli_query($conn,$query));
    $rowval = mysqli_fetch_array(mysqli_query($conn,$query));      
    if ($rows == 1) {
      session_start();// Starting Session
      $_SESSION['login'] = $rowval["logid"];//Initializing Session
       if ($rowval["usertype"] == "MasterAdmin") {
        echo '<script type="text/javascript">window.location = "MasterAdmin/index.php?current=dashboard"</script>';
      }

      if ($rowval["usertype"] == "Vendor") {
        echo '<script type="text/javascript">window.location = "Vendor/index.php"</script>';
      }

    }
    else{
      echo "<script type='text/javascript'>alert('No User Found!!!')</script>";
    }
}

if (isset($_POST["BtnSign"])) {
    require("connection.php");
    date_default_timezone_set("Asia/Kolkata");
    // Define $username and $password 
     $username = $_POST['phoneno'];  // Get mobile no
     $password = $_POST['passwordCon']; // Get Password
     $name     = $_POST['name'];//get name
     $emailid =  $_POST['emailAdress'];  // Get emailid
     $password = $_POST['passwordCon']; // Get Password
     $addeddate = date("d-m-Y H:i:s");//addeddate
     $search = date("Y-m-d");// search date 


   $sql= "insert into  logintbl (username,usermobileno,useremailid,userpassword,usertype,userstatus,useraddeddate,usersearchadd) VALUES ('$name', '$username','$emailid','$password','Vendor','0','$addeddate','$search')";
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
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  

      <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color:#353434;">

  <div class="container">
   <section id="formHolder">

      <div class="row">
         <!-- Brand Box -->
         <div class="col-sm-6 brand" style="background-color: white;">
             <div class="success-msg">
               <p></p>
               <a href="" class="profile"></a>
            </div>
         </div>
         <!-- Form Box -->
         <div class="col-sm-6 form">
            <!-- Login Form -->
            <div class="login form-peice " style="background-color:black;">
               <form class="login-form" action="#" method="post">
                  <div class="form-heading">
                    <h2>Sign In</h2>
                  </div>
                  <div class="form-group">
                     <label for="loginemail">Registered Mobile No</label>
                     <input type="text" name="username" id="username" required autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label for="loginPassword">Password</label>
                     <input type="password" name="loginPassword" id="loginPassword" required>
                  </div>
                  <div class="CTA">
                     <input type="submit" value="Sign In" name="BtnLogin" id="BtnLogin">
                     <a href="#" class="switch">I'm New User</a>
                  </div>
               </form>
            </div><!-- End Login Form -->
            <!-- Signup Form -->
            <div class="signup form-peice switched" style="background-color:black;">
               <form class="" action="#" method="post">
                  <div class="form-heading">
                   <h2>Create Account</h2>
                  </div>

                  <div class="form-group">
                     <label for="name">Full Name</label>
                     <input type="text" name="name" id="name" class="name">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="email">Email Adderss</label>
                     <input type="email" name="emailAdress" id="email" class="email">
                     <span class="error"></span>
                  </div>

            <div class="form-group">
                     <label for="phone">Phone Number <small></small></label>
                     <input type="text" name="phoneno" id="phone">
                  </div>

                  <div class="form-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" id="password" class="pass">
                     <span class="error"></span>
                  </div>

                  <div class="form-group">
                     <label for="passwordCon">Confirm Password</label>
                     <input type="password" name="passwordCon" id="passwordCon" class="passConfirm">
                     <span class="error"></span>
                  </div>

                  <div class="CTA">
                     <input type="submit" value="Signup Now" id="submit" name="BtnSign">
                     <a href="#" class="switch">I have an account</a>
                  </div>
               </form>
            </div><!-- End Signup Form -->
         </div>
      </div>
   </section>

 <footer>
      <p>
        <b>
      </b></p>
   </footer> 

</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
 <script  src="js/index.js"></script>




</body>

</html>
