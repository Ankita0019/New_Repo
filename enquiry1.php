<html>
    <head> <?php
        include ('add/csslink.php');
        include('../class/dataclass.php');
        ?>
        <?php
        $fname = "";
        $emailid = "";
        $contactno = "";
        $msg = "";
        $dc = new DataClass();
        if (isset($_POST['btnsendmsg'])) {
            $fname = ($_POST['txtfname']);
            $emailid = ($_POST['txtemailid']);
            $contactno = ($_POST['txtcontactno']);
            $msg = ($_POST['txtmsg']);
            $status="pending";
            $query = "insert into enquiry(fname,emailid,contactno,msg,status) values('$fname','$emailid','$contactno','$msg','$status')";
            echo($query);
            $result = $dc->saveRecord($query);
            if ($result) {
                echo 'Thank You For Contact Us';
                header("location:Main.php");
            } else {
                echo 'failed!!! Try Again.';
            }
        }
        ?>
        <!--validation's on the fields-->
        <script type="text/javascript">
            function validation() {
                var name = document.getElementById('txtfname').value;
                var mnumber = document.getElementById('txtcontactno').value;
                var email = document.getElementById('txtemailid').value;
                // var password = document.getElementById('txtpassword').value;

                var namecheck = /^[A-Za-z. ]{3,30}$/;
                var mnumbercheck = /^[0-9]{10}$/;
                var emailcheck = /^[a-zA-Z0-9.!#$%&’+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)$/;
                // var passwordcheck = /^(?=.[0-9])(?=.[!@#$%^&])[a-zA-Z0-9!@#$%^&]{8,10}$/ ;

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
            }
        </script>
    </head>
    <body>
          <?php //include('add/head.php') ?>
        <form action="#" method="post" onsubmit="return validation()">
            <!-- ======= contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                     <p>Enquiry</p>
                </div>
                     <div class="row event-item">
                       <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Vivanta Heights,Surat,India</p>
                            </div>
                            <div class="open-hours">
                                <i class="bi bi-clock"></i>
                                <h4>Open Hours:</h4>
                                <p>
                                    Monday-Saturday:<br>
                                    11:00 AM 09:00 PM
                                </p>
                            </div>
                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>Eventlook@gmail.com</p>
                            </div>
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+91 94088 51212</p>
                            </div>
                        </div>
                    </div>
                        <div class="col-lg-6">
                            <div class="form-row">
                                <div class="col-lg-10">
                                    <input type="text" name="txtfname" id="txtfname" placeholder="Enter Name" class="form-control my-2 ">
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
                                    <textarea class="form-control" name="txtmsg" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message" required=""></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="text-center">
                                <button name="btnsendmsg" id="btnsendmsg" type="submit" class="btn btn-success btn-lg ">Send Message</button>
                            </div>
                         </div>
                    </div>
                </div>
            </section><!-- End Register Section -->
                    <?php include 'add/footer.php'; 
                    include 'add/js.php'; ?>	
        </form>
    </body>
</html>