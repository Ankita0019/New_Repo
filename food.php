<html>
    <head>
        <?php
        session_start();
        include('../class/dataclass.php');
        include ('add/csslink.php');
        ?>
    </head>
    <!-- ======= package Section ======= -->
    <body>
        <section id="specials" class="specials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Packages</h2>
                    <p>Check Food Thali's</p>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <?php
//                            //$dc = new DataClass();
//                            $sql = "select * from foodmaster";
//                            $rs = $dc->saveRecord($sql);
//                            if ($rs) {
//                                while ($row = $rs->fetch_array()) {
//                                    echo "<li class='nav-item'>
//                                <a class='nav-link' data-bs-toggle='tab' href='#tab-$row[tab]'>$row[Tname]</a>
//                            </li>";
//                                }
//                            }
//                            ?>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" href="#tab-1">Rajasthani Thali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Kannadiga Oota (Karnataka Thali)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Kerala Thali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" href="#tab-4">Maharashrian Thali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Kathiawadi Thali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Bengali Thali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " data-bs-toggle="tab" href="#tab-7">Assamese Thali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Punjabi Thali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Kashmiri Thali</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 mt-4 mt-lg-0">
                        <div class="tab-content">
                            <?php
                            $dc = new DataClass();
                            $sql = "select * from foodmaster";
                            $rs = $dc->saveRecord($sql);
                            if ($rs) {
                                while ($row = $rs->fetch_array()) {
                                    echo "<div class='tab-pane active show' id='tab-$row[tab]'>";
                                    echo "<div class='row'>";
                                    echo "<div class='col-lg-6 details order-2 order-lg-1'>";
                                    echo "<h3>$row[Tname]</h3>
                                        <h6>&#8377;$row[price](per plate)</h6>";
                                    echo "<p>$row[description]</p>";
                                    echo"<div class='text-center'>";
                                    echo "<p><a href='venueform1.php'><input type='submit'  name='btnfood' value='Buy Now'></a></p>";
                                    echo "</div>
                                    </div>
                                    <div class='col-lg-6 text-center order-1 order-lg-2'>";
                                    echo "<img src='$row[img]' alt='' class='img-fluid rounded-circle shadow-lg p-3 mb-5 bg-white rounded' alt='100x100'>
                                    </div></div>
                            </div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End package Section -->
        <?php include 'add/js.php'; ?>
        <?php include 'add/footer.php'; ?>
    </body></html>