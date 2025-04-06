<html>
    <head>
        <?php
        session_start();
        include 'add/csslink.php';
        include '../class/dataclass.php';
        ?>

        <?php
        $msg = "";
        $dc = new DataClass();
        
        if (isset($_POST['btnreg'])) {
            $userid = $dc->primary("select max(id) from owner");
            $fname = ($_POST['txtname']);
            $password = md5($_POST['txtpassword']);
            $emailid = ($_POST['txtemailid']);
            $contactno = ($_POST['txtcontactno']);
            $rdt = date('d-m-y');

            $query = "insert into owner(id,name,phone,email,password,Rdt) 
			values('$userid','$fname','$contactno','$emailid','$password','$rdt')";
            //echo($query);		
            $result = $dc->saveRecord($query);
            if ($result) {
                $msg = "Registration Successful..";
                $_SESSION['id'] = $userid;
                header("location:Login.php");
            } else {
                $msg = "Registration Unsuccessful..";
            }
        }
        ?>
        <!--validation's on the fields-->
        <script type="text/javascript">
            function validation() {
                var name = document.getElementById('txtname').value;
                var mnumber = document.getElementById('txtcontactno').value;
                var email = document.getElementById('txtemailid').value;
                //var password = document.getElementById('txtpassword').value;

                var namecheck = /^[A-Za-z. ]{3,30}$/;
                var mnumbercheck = /^[0-9]{10}$/;
                var emailcheck = /^[a-zA-Z0-9.!#$%&’+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
                //var passwordcheck = /^(?=.[0-9])(?=.[!@#$%^&])[a-zA-Z0-9!@#$%^&]{8,10}$/ ;

                if (namecheck.test(name)) {
                    document.getElementById('usernameerror').innerHTML = " ";
                } else {
                    document.getElementById('usernameerror').innerHTML = "*Enter valid name";
                    return false;
                }
                if (mnumbercheck.test(mnumber)) {
                    document.getElementById('mnumbererror').innerHTML = " ";
                } else {
                    document.getElementById('mnumbererror').innerHTML = "*Enter valid Mobile Number";
                    return false;
                }
                if (emailcheck.test(email)) {
                    document.getElementById('emailerror').innerHTML = " ";
                } else {
                    document.getElementById('emailerror').innerHTML = "*Enter valid Email";
                    return false;
                }
                //              if(passwordcheck.test(password)){
                //                  document.getElementById('passworderror').innerHTML = " ";
                //              }else{
                //                  document.getElementById('passworderror').innerHTML = "*Enter valid Password";
                //                  return false;
                //              }
            }
        </script>
    </head>
    <body>

        <form action="#" method="post" onsubmit="return validation()">


            <!-- ======= Register Section ======= -->
            <section id="register" class="register">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <p><b>Sign Up</b></p>
                    </div>
                    <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
                    </div>
                    <div class="row event-item">
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <div class="form-row">

                                <div class="col-lg-10">
                                    <input type="text" name="txtname" id="txtname" placeholder="Enter Name" class="form-control my-2 ">
                                    <span id="usernameerror" class="text-danger" font-weight-bold></span>
                                </div>

                                <div class="col-lg-10">
                                    <input type="text" name="txtcontactno" id="txtcontactno" placeholder="Enter Contact Number" class="form-control my-2 " >
                                    <span id="mnumbererror" class="text-danger" font-weight-bold></span>
                                </div>

                                <div class="col-lg-10">
                                    <input type="text" name="txtemailid" id="txtemailid" placeholder="Enter Email Address" class="form-control my-2 " >
                                    <span id="emailerror" class="text-danger" font-weight-bold></span>
                                </div>

                                <div class="col-lg-10">
                                    <input type="password" name="txtpassword" id="txtpassword" placeholder="Enter Password" class="form-control my-2 " >
                                    <span id="passworderror" class="text-danger" font-weight-bold></span>
                                </div>

                                <div class="col-lg-10">
                                    <input type="password" name="cpass" id="cpass" placeholder="Confirm Password" class="form-control my-2 " >
                                </div>
                            </div>


                            <br>
                            <div class="text-center">
                                <button type="submit" name="btnreg" id="btnreg"  class="btn btn-success btn-lg">Register</button>
                            </div>
                            
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

</html>