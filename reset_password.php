<?php
// echo "Hello";
session_start();
include 'add/csslink.php';
include "../class/common.php";
doDBConnect();
if (isset($_POST['btnUpdate'])) {
    if(isset($_GET['token']))
    {
        $token = $_GET['token'];
        $password = $_POST['txtpassword'];
        $cpassword = $_POST['cpass'];
        
        if($password == $cpassword)
        {
            $update = "UPDATE registration SET pass='$password' WHERE verify_token = '$token'";
            $update_run = mysqli_query($con, $update);

            if($update_run)
            {
                // $_SESSION['message'] = "Your password has been updated";
                echo "<script>alert('Your password has been updated')</script>";
                header('Location: Login.php');
            }
            else{
                $_SESSION['msg'] = "Something went wrong..!!";
                //echo "Something went wrong..!!";
                header('Location: reset_password.php');
            }
        }else{
            $_SESSION['msg'] = "Password is not matching";
            //echo "Password is not matching";
        }
    }else{
        echo "No token found";
    }
}
?>

<body>
    <form action="#" method="post" onsubmit="return validation()">
        <!-- ======= Register Section ======= -->
        <section id="register" class="register">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <p><b>Reset Password</b></p><br>
                    <p><b><?php if(isset($_SESSION['msg']))
                    {
                        echo $_SESSION['msg'];
                     } ?></b></p>
                </div>
                <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="row event-item">
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <div class="form-row">

                            <div class="col-lg-10">
                                <input type="password" name="txtpassword" id="txtpassword" placeholder="New Password" class="form-control my-2 ">
                                <!--<span id="passworderror" class="text-danger" font-weight-bold></span>-->
                            </div>
                            <div class="col-lg-10">
                                <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" class="form-control my-2 ">
                                <!--<span id="passworderror" class="text-danger" font-weight-bold></span>-->
                            </div>
                        </div>
                        <br>
                        <div class="text-center">
                            <button type="submit" name="btnUpdate" id="btnreg" class="btn btn-success btn-lg">Update Password</button>
                        </div><br>
                        <div class="text-center">
                            <p class="login-card-footer-text">Already have an account? <a href="Login.php" class="forgot-password-link">Sign In!</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="../Main/assets/img/1.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section><!-- End Register Section -->
        <?php include 'add/footer.php'; ?>
        <?php include 'add/js.php'; ?>
    </form>
</body>