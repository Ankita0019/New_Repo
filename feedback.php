<html>
    <head>
        <?php
        //session_start();
        include ('add/csslink.php');
        include_once '../class/dataclass.php';
        ?>

        <?php
		
	$dc = new DataClass();
        if (isset($_POST['btnsubmit'])) {
            $exp= ($_POST['exp']);
            $comment = ($_POST['comment']);
            $eventtype = ($_POST['eventtype']);
            $date = ($_POST['date']);
            $fname= ($_POST['fname']);
            $emailid= ($_POST['emailid']);
            $query="insert into feedback(exp,comment,eventtype,date,fname,emailid) values('$exp','$comment','$eventtype','$date','$fname','$emailid')";
			$result=$dc->saveRecord($query);
            if ($result) {
                echo "<script>alert('Data Inserted')</script> ";
				header('location:User/userhome.php');
            } else {
                echo "<script>alert('failed try again..')</script>";
            }
        }
        ?>
    </head>
	<style>
	body {
    font-family: "Open Sans", sans-serif;
    background: #f6f6fa;
    color: #0f0f0f;
    }
	</style>
    <body>
        <?php include('add/head.php') ?>
        <!-- ======= Contact Section ======= -->
        <br><br><br><br>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <p><font color="black">Provide your feedback below</font></p>
                </div>
            </div>
            <div class="container" data-aos="fade-up">
                <div class="row mt-5">
                    <div class="col-lg-4">
                    </div>
                </div>
                <div class="col-lg-8 mt-5 mt-lg-0"> 
                    <form role="form" method="post" id="reused_form">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>How was your experience with event look?</label>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="exp" id="radio_experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="exp" id="radio_experience" value="good" >
                                        Good 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="exp" id="radio_experience" value="excellent" >
                                        Excellent
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Any Comments:</label>
                                <input class="form-control" type="text" name="comment" id="comments" placeholder="Your Comments On Service" maxlength="6000" rows="7">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Event Name:</label>
                                <input type="text" class="form-control" id="event" name="eventtype" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Events Date:</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="name"> Full Name:</label>
                                <input type="text" class="form-control" id="name" name="fname" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="emailid" required>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" name="btnsubmit"class="btn btn-lg btn-warning btn-block" >Submit </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
    <?php include('add/footer.php') ?>
    <?php include('add/js.php') ?> 
</body>
</html>