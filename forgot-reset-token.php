<?php
include "../class/common.php";
doDBConnect();
session_start();
if (isset($_POST['password-reset-token'])) {
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $token = md5(rand());

  $check_email = "SELECT * from registration where emailid = '$email' LIMIT 1";
  $check_email_run = mysqli_query($con, $check_email);
  $emailcount = mysqli_num_rows($check_email_run);
  if ($emailcount) {
    $userdata = mysqli_fetch_array($check_email_run);
    $name = $userdata['fname'];
    $subject = "Password Reset";
    $body = "Hello $name, click here to reset your password ";
    $sender_email = "From: travels992@gmail.com";

    if (mail($email, $subject, $body, $sender_email)) {
      echo "<script>alert('Check your mail tp reset your password')</script>";
      header('Location: Login.php');
      exit(0);
    } else {
      echo "<script>alert('Email sending failed')</script>";
    }
  }
}
?>