<html>
    <head>
        <?php
        session_start();
        include ('add/csslink.php');
        include '../class/dataclass.php';
        ?>
<?php
		$emailid="";
		$password="";
		$dc = new DataClass();
		if(isset($_POST['btnlogin']))
		{
			$emailid=($_POST['txtemailid']);
			$password=($_POST['txtpassword']);
			$query="select userid,fname,emailid,password from registration where emailid='$emailid'";
                        $rw=$dc->getrow($query);
			if($rw)
			{
			  if($password==$rw['password'])
			  {
				 $_SESSION['userid']=$rw['userid'];
				 $_SESSION['fname']=$rw['fname'];
				 header("location:../User/userhome.php");
			  } 
			} 
			  else
			  {
                            echo 'invali password';
			  } 
		}
		else
		{
                   // echo 'invalid username';	
		}
	?>
    </head>
        <body>
        <form action="#" method="post">
            <!-- ======= login Section ======= -->
            <section id="register" class="register">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <p><b>Sign In</b></p>
                    </div>
                    <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
                    </div>
                    <div class="row event-item">
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <div class="form-row">
                               <div class="col-lg-10">
                                        <input type="text" name="txtemailid" id="txtemailid" placeholder="Enter Email Address" class="form-control my-2 " required>
                                    </div>
                                
                                <div class="col-lg-10">
                                    <input type="password" name="txtpassword" id="txtpassword" placeholder="Enter Password" class="form-control my-2 " required>
                                    </div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" name="btnlogin" id="btnlogin" class="btn btn-success btn-lg">Login</button>
                            </div>
                            <div class="text-center">
                                <a href="forgot.php" class="forgot-password-link">Forgot password?</a>
                                <p class="login-card-footer-text">Don't have an account? <a href="register.php" class="forgot-password-link">Sign Up!</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <img src="../Main/assets/img/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section><!-- End login Section -->
            <?php include 'add/footer.php'; ?>
            <?php include 'add/js.php'; ?>	
        </form>
    </body>
</html>