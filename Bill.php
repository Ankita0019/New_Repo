<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location:../Main/Login.php");
}
if (!isset($_SESSION['total'])) {
    header("Location:venueform1.php");
}
 else {
$tot=$_SESSION['total'];    
}
if (!isset($_SESSION['totalfood'])) {
    header("Location:venueform1.php");
}
 else {
$totfood=$_SESSION['totalfood'];    
}
if (!isset($_SESSION['decorprice'])) {
    header("Location:venueform1.php");
}
 else {
$dp=$_SESSION['decorprice'];    
}

?>
<html>
    <head>
        <?php
        include 'add/csslink.php';
        include '../class/common.php';
        doDBConnect();
        $totalamt=$tot+$totfood+$dp;
        ?>
    </head>
    <body>
        <form action="#" method="post">
            <!-- ======= Register Section ======= -->
            <section id="register" class="register">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <p><b>Total Bill</b></p>
                    </div>
                    <div class="owl-carousel events-carousel" data-aos="fade-up" data-aos-delay="100">
                    </div>
                    <div class="row event-item">
                        <div class="col-lg-6 pt-4 pt-lg-0 content">
                            <div class="form-row">
                                <div class="col-lg-10">
                                    <input type="text" name="vname" id="name" class="form-control my-2 " value="Venue:<?php echo $tot ?>" required>
                                </div>
                                <div class="col-lg-10">
                                    <input type="text" name="contact" value="Food:<?php echo $totfood ?>" id="pricefood" class="form-control my-2 " required>
                                </div>
                                 <div class="col-lg-10">
                                    <input type="text" name="contact" id="contact" value="Decoration:<?php echo $dp; ?>" class="form-control my-2 " required>
                                </div>
                                 </div>
                            <br>
                        </div>
                        <div class="col-lg-6"><br>
                             <div class="col-lg-10">
                                <input type="text" name="guest" id="price" value="Total:<?php echo $totalamt; ?>" class="form-control my-2 " required>
                            </div>
                            </div>
                     
                        <div class="text-center">
                            <input type="button" name="btnpay" onclick="pay_now()" class="btn btn-success btn-lg" value="Pay Now">
                        </div>
                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
                        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
                        <script>
                                function pay_now() {
                                    // var queryString = new Array();
                                    var name_1 = jQuery('#name_1').val();
                                    var amt = jQuery('#price').val();
                                    console.log(amt);
                                    console.log(name_1);
                                    // var contact = jQuery('#data_4').val();
                                    // var email = jQuery('#data_5').val();
                                    jQuery.ajax({
                                        type: 'post',
                                        url: 'payment.php',
                                        data: "amt=" + amt + "&name=" + name_1,
                                        success: function (result) {
                                            var options = {
                                                "key": "rzp_test_gsbsit91RbsrAN",
                                                "amount": amt * 100,
                                                "currency": "INR",
                                                "name": "Event Management System",
                                                "description": "Best way to book your event!!",
                                                // "image": "", put your system logo as per your choice ok?

                                                "handler": function (response) {
                                                    //console.log(response);
                                                    // if (response.razorpay_payment_id != null) {
                                                    jQuery.ajax({
                                                        type: 'post',
                                                        url: 'payment.php',
                                                        data: "payment_id=" + response.razorpay_payment_id,
                                                        success: function (result) {
                                                            alert('Your payment done successfully!! ');
                                                            window.location.href = "userhome.php";
                                                        }
                                                    });
                                                }
                                                // }
                                            };

                                            var rzp1 = new Razorpay(options);
                                            rzp1.open();
                                        }
                                    });
                                }
                        </script>
                    </div>
                </div>
            </section><!-- End booking Section -->
    <?php include 'add/footer.php'; ?>
    <?php include 'add/js.php'; ?>	
        </form>
    </body>
<?php ?>
</html>