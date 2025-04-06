<!DOCTYPE html>
<html lang="en">
    <head>
         <!-- Required meta tags  -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <!-- Bootstrap CSS   -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Forgot Password</title>
        <link href="assets/css/venueform.css" rel="stylesheet"> 
     
    </head>
    <body>
        <section class="form my-4 mx-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h4 class="font-weight-bold py-5">Reset Your Password Here!</h4>
                        <!-- SIgn-in form -->
                        <form action="#" method="POST">
                           <div class="form-row">
                                <div class="col-lg-10">
                                    <!-- email -->
                                    <input type="text" name="email" id="email" placeholder="Enter email address" class="form-control my-2 " required>
                                </div>
                              <div class="col-lg-10">
                                    <button type="submit" name="password-reset-token" class="btn1 mt-3 mb-5">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
<!--  -->
<?php
include "../class/common.php";
doDBConnect();
session_start();
if (isset($_POST['password-reset-token'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
 
  $check_email = "SELECT * from registration where emailid = '$email' LIMIT 1";
  $check_email_run = mysqli_query($con, $check_email);
  $emailcount = mysqli_num_rows($check_email_run);
  if ($emailcount) {
    $userdata = mysqli_fetch_array($check_email_run);
    $name = $userdata['fname'];
    $token = $userdata['verify_token'];
    $subject = "Password Reset";
    $body = "Hello $name, click here to reset your password http://localhost/NewEvent/Event/Main/reset_password.php?token=$token";
    $sender_email = "From: eventlook09@gmail.com";

    if (mail($email, $subject, $body, $sender_email)) {
      echo "<script>alert('Check your mail to reset your password')</script>";
    //   header('Location: Login.php');
      exit(0);
    } else {
      echo "<script>alert('Email sending failed')</script>";
    }
  }
}
?>