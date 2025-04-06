<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Event Look</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
<?php include 'add/csslink.php'; ?>
</head>
<body>
<?php include 'add/head.php'; ?>
  <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>Welcome to <span>EventLook</span></h1>
                        <span> <h2><?php echo $_SESSION['fname']; ?></h2></span>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->
  <!-- ======= Footer ======= --> 
  <?php include 'add/footer.php'; ?>
  <!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <?php include 'add/js.php'; ?>
</body>
</html>
