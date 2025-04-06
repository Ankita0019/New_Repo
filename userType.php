<html>
    <head>
        <?php
        session_start();
        include 'add/csslink.php';
        include '../class/dataclass.php';
        ?>

        <?php
        $userid = "";
        $fname = "";
        $password = "";
    
        $emailid = "";
        $contactno = "";
        $msg = "";
        $dc = new DataClass();
        if (isset($_POST['btnreg'])) {
            $userid = $dc->primary("select max(userid) from registration");
            $fname = ($_POST['txtname']);
            $password = ($_POST['txtpassword']);
           
            $emailid = ($_POST['txtemailid']);
            $contactno = ($_POST['txtcontactno']);

            $query = "insert into registration(userid,fname,password,emailid,contactno) 
			values('$userid','$fname','$password','$emailid',$contactno)";
            //echo($query);		
            $result = $dc->saveRecord($query);
            if ($result) {
                $msg = "Registration Successful..";
                $_SESSION['userid'] = $userid;
                header("location:Login.php");
            } else {
                $msg = "Registration Unsuccessful..";
            }
        }
        ?>
        </head>
    <body>
<?php include 'add/head.php'; ?>
        <form action="#" method="post" onsubmit="return validation()">
            

                               
                                    
                            <!-- ======= Hero Section ======= -->
                            <section id="hero" class="d-flex align-items-center">
                              <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
                                <div class="row">
                                  <div class="col-lg-8">
                                    <h1>Register!</h1>

                                    <div class="btns">
                                        <a href="register.php" class="btn-menu animated fadeInUp scrollto">Register as client</a>
                                        <a href="ownerRegister.php" class="btn-book animated fadeInUp scrollto">Register as owner</a>
                                    </div>

                                  </div>
                          </div>
                              </div>
                            </section><!-- End Hero -->                            

            <?php include 'add/footer.php'; ?>
            <?php include 'add/js.php'; ?>	
        </form>
    </body>

</html>