<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body>
  <?php 
  session_start();
include('../Component/Navbar.php');
require('../Layout/config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


?>  
               <?php
                      if (isset($_POST["email"])){
                  extract($_POST);
                  $sql = "SELECT * FROM user WHERE Email = '$email' ";
                  $ls = mysqli_query($conn, $sql);


                  $error = mysqli_error($conn);
                  if ($error =="") {
                      $total = mysqli_num_rows($ls);
                  if ($total > 0){
                    while($row= mysqli_fetch_array($ls)){
                    $email = $row['Email'];
                    $subject  = "careHK Reset Your Password";   
                    $message  = "Your new password is ".$row['Password'];
                    $name  = "CareHK";
                    }

                    $mail = new PHPMailer(true);
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'fyp.carehk@gmail.com';
                    $mail->Password = 'jybcqyiwanghaspa';
                    $mail->Port = 465;
                    $mail->SMTPSecure = 'ssl';
                    $mail->isHTML(true);
                    $mail->setFrom($email, $name);
                    $mail->addAddress('fyp.carehk@gmail.com');
                    $mail->Subject = ("$email ($subject)");
                    $mail->Body = $message;
                    
                  //Finally send email
                    if ( $mail->send() ) {
                      header("Location: ../Layout/forgotpassword.php?success=The new password have been successfully sent to your email account. Please check your email!");    
                    }else{
                      
                      header("Location: ../Layout/forgotpassword.php?error=Server error. Please enter again!"); 
                    }
                  //Closing smtp connection
                    $mail->smtpClose();
                  }else{
                   header("Location: ../Layout/forgotpassword.php?error=Email is incorrect. Please enter again!");    
                  }
                  }
                }
                      ?>


<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="signup-form">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="mt-5 border p-4 bg-light shadow">
                    <h4 class="mb-3 text-secondary">Forgotten password</h4>
                    <h6 class="mb-3 text-secondary">Forgot your Password?</h6>
                 <br>      
                    <?php if (isset($_GET['error'])) { ?>  <!-- Error red alert box -->
                          <div class="alert alert-danger" role="alert">
                      <?=$_GET['error']?>
                    </div>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>  <!-- Success green alert box -->
                          <div class="alert alert-success" role="alert">
                      <?=$_GET['success']?>
                    </div>
                    <?php } ?>
                    <br>

                    <div class="row">

                        <div class="mb-3 col-md-12">
                            <label>Enter your email below to reset and receive your new password<span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="Please enter the correct format of the email" required />
                        </div>

                     
                      
  <br>  <br>  <br> <br> <br>


                        <div class="col-md-12">
                           <button type="submit" class="btn btn-primary float-end" id="submit">Submit</button>
                        </div>
                    </div>
                </form>

 

                <p class="text-center mt-3 text-secondary">If you have account, Please <a href="../Layout/signin.php">Login Now</a></p>
            </div>
        </div>
    </div>
</div>









<?php
include('../Component/Footer.php');
?>


    
  </body>
</html>
