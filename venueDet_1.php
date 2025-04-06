<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location:../Main/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <?php
        include 'add/csslink.php';
        include('../class/dataclass.php');
        ?>
    </head>
    <body>
        <main id="main">
            <!-- ======= Booking section ======= -->
            <section id="book" class="why-us">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Venues</h2>
                        <p>Event Venues, Function Halls And Party Places.</p>
                    </div>
                    <?php
                    $dc = new DataClass();
                    $sql = "select * from city";
                    $rs = $dc->saveRecord($sql);

                    echo "<form action='#' method='POST'><select name='city'>";
                    if ($rs) {
                        while ($row = $rs->fetch_array()) {
                            echo "<option value='$row[Cid]'>$row[Cname]</option>";
                        }
                    } echo "</select><input type='submit' value='Search' name='btncity'/></form>";
                    ?>
                    <div class="row">
                        <?php
                        if (isset($_POST['btncity'])) {
                            $city = $_POST['city'];
                            $dc = new DataClass();
                            $sql = "select * from venuedetails where CID=$city ";
                            $rs = $dc->saveRecord($sql);
                            if ($rs) {
                                while ($row = $rs->fetch_array()) {
                                    echo " <div class='col-lg-4'>";
                                    echo "<div class='box' data-aos='zoom-in' data-aos-delay='100'>";
                                    echo "<center> <img src=$row[Photo] class='img-fluid'>";
                                    echo "<h4>$row[Vname]</h4>";
                                    echo "<p><b>Address-</b>$row[Vadd]<br><b>Phone-</b>$row[phone]<br><b>Capacity-</b>$row[Capacity]<br><b>Price per hour-</b>&#8377;$row[price_h]</p><br>";
                                    echo"<p><a href='venueform1.php?venueName=$row[Vname]&venueId=$row[Vid]&price=$row[price_h]'>Book Now...</a></p>";
                                    echo "</center></div></div>";
                                }
                            }
                        } else {
                            $sql = "select * from venuedetails";
                            $rs = $dc->saveRecord($sql);
                            if ($rs) {
                                while ($row = $rs->fetch_array()) {
                                    echo " <div class='col-lg-4'>";
                                    echo "<div class='box' data-aos='zoom-in' data-aos-delay='100'>";
                                    echo "<center> <img src=$row[Photo] class='img-fluid'>";
                                    echo "<h4>$row[Vname]</h4>";
                                    echo "<p><b>Address-</b>$row[Vadd]<br><b>Phone-</b>$row[phone]<br><b>Capacity-</b>$row[Capacity]<br><b>Price per hour-</b>&#8377;$row[price_h]</p><br>";
                                    echo"<p><a href='venueform1.php?venueName=$row[Vname]&venueId=$row[Vid]&price=$row[price_h]'>Book Now...</a></p>";
                                    echo "</center></div></div>";
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </section><!-- End Booking Section -->
        </main><!-- End #main -->
        <!-- ======= Footer ======= -->
<?php include 'add/footer.php'; ?>
        <!-- End Footer -->
        <div id="preloader"></div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php include 'add/js.php'; ?>
    </body>
</html>