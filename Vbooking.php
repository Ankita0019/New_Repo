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
        $userid = "";
        $Eventid = "";
        $Edate = "";
        $Estime = "";
        $Eetime = "";
        $Totalguest = "";
        $status = "";
        $decorprice = "";
        $foodprice = "";
        $total = "";
        $dc = new DataClass();
        if (isset($_SESSION['VBid'])) {
            $Vid = $_SESSION['VBid'];
            $query = "select * from venuebooking where VBid='$VBid'";
            $rw = $dc->getrow($query);
            if ($rw) {
                $VBid = $rw['VBid'];
                $Vid = $raw['Vid'];
                $userid = $raw['userid'];
                $Eventid = $raw['Eventid'];
                $Estime = $raw['Estime'];
                $Eetime = $raw['Eetime'];
                $Totalguest = $raw['Totalguest'];
                $status = $raw['status'];
                $decorprice = $raw['decorprice'];
                $foodprice = $raw['foodprice'];
                $total = $raw['total'];
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
                                                        <th>USER ID</th>
                                                        <th>EVENT ID</th>
                                                        <th>EVENT DATE</th>
                                                        <th>EVENT STARTING TIME</th>
                                                        <th>EVENT TOTAL HOURS</th>
                                                        <th>TOTAL GUEST</th>
                                                        <th>STATUS</th>
                                                        <th>DECORATION STATUS</th>
                                                        <th>FOOD PRICE</th>
                                                        <th>TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = "select * from venuebooking";
                                                    $tb = $dc->gettable($query);
                                                    while ($rw = mysqli_fetch_array($tb)) {
                                                        echo"<tr>";
                                                        echo"<td>" . $rw['VBid'] . "</td > ";
                                                        echo "<td>" . $rw['Vid'] . "</td> ";
                                                        echo "<td>" . $rw['userid'] . "</td >";
                                                        echo "<td>" . $rw['Eventid'] . "</td> ";
                                                        echo "<td>" . $rw['Edate'] . "</td >";
                                                        echo "<td>" . $rw['Estime'] . "  </td>";
                                                        echo "<td>" . $rw['Eetime'] . "  </td>";
                                                        echo "<td>" . $rw['Totalguest'] . " </td>";
                                                        echo "<td>" . $rw['status'] . "   </td>";
                                                        echo "<td>" . $rw['decorprice'] .  " </td>";
                                                        echo "<td>" . $rw['foodprice'] . "</td>";
                                                        echo "<td>" . $rw['total'] . "</td>";
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