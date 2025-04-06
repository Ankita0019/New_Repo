<html>
    <head>
        <?php
        session_start();
        include 'add/csslink.php';
        include '../class/dataclass.php';
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
                            <h1>Login!</h1>
                            <div class="btns">
                                <a href="Login.php" class="btn-menu animated fadeInUp scrollto">Login as client</a>
                                <a href="Ownerlogin.php" class="btn-book animated fadeInUp scrollto">Login as owner</a>
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