<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location:../Main/Login.php");
}
?>
<html>
    <head>
        <?php
//        //  session_start();
        include 'add/csslink.php';
        include '../class/common.php';
        doDBConnect();
        if (isset($_POST['btnNext'])) {
            $price = ($_POST['price']);
            $vname = ($_POST['vname']);
            $userid = ($_POST['contact']);
            $event = ($_POST['event']);
            $edt = ($_POST['edt']);
            $etms = ($_POST['etms']);
            $etme = ($_POST['etme']);
            $guestno = ($_POST['guest']);
            $status = 1;
            $de=($_POST['decor']);
            $tot = $price * $etme;
            

//            $decor = ($_POST['decor']);
//           $food = ($_POST['food']);
//            $decorprice = ($_POST['event']);
          $foodid = ($_POST['food']);
          $fetch = $con->query("select price from foodmaster where Fid='$foodid'");
          $foodp = $fetch->fetch_assoc();
          $foodprice = $foodp['price'];
$totfood=$foodprice*$guestno;
            $fetch = $con->query("select * from venuedetails where Vname='$vname'");
//            echo"<script>pay_now()</script>";
            if ($fetch) { 
                while ($row = $fetch->fetch_assoc()) {
                   
                    $vid = $row['Vid'];
                    $fetch2 = $con->query("select * from registration where contactno='$userid'");
                    if ($fetch2) {
                        while ($row2 = $fetch2->fetch_assoc()) {
                           
                            $uid = $row2['userid'];
                            $qry = $con->query("insert into venuebooking (Vid,userid,Eventid,Edate,Estime,Eetime,Totalguest,status,total,foodprice,decorprice )
                    values('$vid','$uid','$event','$edt','$etms',$etme,'$guestno',$status,$tot,$totfood,$de)");
                            if ($qry == true) {
                                 
                                echo "<script>alert('Thank you')</script>";
                                $_SESSION['total']=$tot;
                                 $_SESSION['totalfood']=$totfood;
                                 if($de="1"){
                                      $_SESSION['decorprice']=3000;
                                 } else {
     $_SESSION['decorprice']="0";
}
                                header("location:Bill.php");
                            } else {
                                echo "<script>alert('failed...try again')</script>";
                            }
                        }
                    }
                }
            }
        }
        ?>
    </head>
    <body>
        <form action="#" method="post">
            <!-- ======= Register Section ======= -->
            <section id="register" class="register">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <p><b>Venue Booking Form</b></p>
                    </div>
                    <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
                    </div>
                    <div class="row event-item">
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <div class="form-row">
                                <label>Select Event:</label>
                                <select name="event" id="event" required="">
                                    <option> --SELECT EVENT--</option>
                                    <option value="1">Casual Party</option>
                                    <option value="2">Birthday Party</option>
                                    <option value="3">Anniversary Party</option>
                                </select>
                                <div class="col-lg-10">
                                    <input type="text" name="vname" id="vname" placeholder="Enter venue name" class="form-control my-2 " value="<?php echo $_GET['venueName']; ?>" required>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" name="contact" id="contact" placeholder="Enter contact number" class="form-control my-2 " required>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" name="edt" onfocus="(this.type = 'date')" id="edt" placeholder="Select event date" class="form-control my-2 " required>
                                </div>
                                <div class="col-lg-10">
                                        <?php
                    $sql = "select * from foodmaster";
                    $rs=$con->query($sql);
                    echo "<form action='#' method='POST'><select name='food'>";
                     echo "<option value=''>Select food</option>";
                    if ($rs) {
                        while ($row = $rs->fetch_array()) {
                            echo "<option value='$row[Fid]'>$row[Tname]</option>";
                        }
                    } echo "</select></form>";
                    ?>
                                </div>
                                <a href="food.php">Click here to learn more.</a>
                            </div>
                            <br>
                        </div>
                        <div class="col-lg-6"><br>
                            <div class="col-lg-10">
                                <input type="text" name="etms" onfocus="(this.type = 'time')" id="etms" placeholder="Select event start time" class="form-control my-2 " required>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="etme"  id="etme" placeholder="Total hours" class="form-control my-2 " required>
                            </div>
                            <div class="col-lg-10">
                                <input type="number" name="guest" id="guest" placeholder="No. of guest" class="form-control my-2 " required>
                            </div>
                            <div class="col-lg-10">
                                 <input type="radio" name="decor" id="decor" value="1">&nbsp;With Decoration!&nbsp;
                                 <input type="radio" name="decor" id="decor" value="0">&nbsp;Without Decoration!&nbsp;<br><a href="decoration.php">Click here to learn more..</a>
                            </div>
                        </div>
                        <input type="hidden" name="price" id="price" value="<?php echo $_GET['price'] ?>">
                        <input type="hidden" name="name_1" id="name_1" value="<?php echo ($_SESSION['fname']); ?>">
                        <div class="text-center">
                            <button type="Submit" name="btnNext" id="btnNext"   class="btn btn-success btn-lg">Save Details</button>
                        </div>
                         </div>
                </div>
            </section><!-- End booking Section -->
            <?php include 'add/footer.php'; ?>
            <?php include 'add/js.php'; ?>	
        </form>
    </body>
    <?php ?>
</html>
<?php



?>