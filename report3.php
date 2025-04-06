<HTML>
    <HEAD>
        <?php
        session_start();
        include("../class/dataclass.php");
        include("csslink.php");
        ?> 
        <?php
        $VBid = "";
        $Vid = "";
        $Eventid = "";
        $Edate = "";
        $Estime = "";
        $dc = new DataClass();
        if (isset($_SESSION['VBid'])) {
            $Vid = $_SESSION['VBid'];
            $query = "select * from venuebooking where VBid='$VBid'";
            $rw = $dc->getrow($query);
            if ($rw) {
                $VBid = $rw['VBid'];
                $Vid = $raw['Vid'];
                $Eventid = $raw['Eventid'];
                $Estime = $raw['Estime'];
            }
        }
        ?>
    </HEAD>
    <body>
        <form name="venue" action="#" method="post">
            <div id="wrapper"> 
                <?php include("slidbar.php"); ?>
                <?php include("navbar.php"); ?>
                <div id="wrapper">
                    <div class="wrapper wrapper-content animated fadeInRight">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Venue Booking Details</h5><br>
                                        <div class="ibox-tools">
                                            <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                            <a class="close-link">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                <thead>
                                                    <tr>
                                                        <th>VENUE BOOKING ID</th>
                                                        <th>VENUE ID</th>
                                                        <th>EVENT DATE</th>
                                                        <th>EVENT STARTING TIME</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = "select VBid, Vid, Edate, Estime from venuebooking";
                                                    $tb = $dc->gettable($query);
                                                    while ($rw = mysqli_fetch_array($tb)) {
                                                        echo"<tr>";
                                                        echo"<td>" . $rw['VBid'] . "</td > ";
                                                        echo "<td>" . $rw['Vid'] . "</td> ";
                                                       echo "<td>" . $rw['Edate'] . "</td >";
                                                        echo "<td>" . $rw['Estime'] . "  </td>";
                                                        echo"</tr>";
                                                    }
                                                    ?>			  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("jslink.php"); ?> 
        </form>
    </body>
</HTML>