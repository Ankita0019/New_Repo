<HTML>
    <HEAD>
        <?php
        session_start();
        include("../class/dataclass.php");
        include("csslink.php");
        ?> 
        <?php
        $Vid = "";
        $name = "";
        $address = "";
        $photo = "";
        $capacity = "";
        $price = "";
        $phone = "";
        $cid="";
        $status="";
        $dc = new DataClass();
        if (isset($_SESSION['Vid'])) {
            $Vid = $_SESSION['Vid'];
            $query = "select * from venuedetails where Vid='$Vid'";
            $rw = $dc->getrow($query);
          if ($rw) {
                $Vid = $rw['Vid'];
                $name = $raw['Vname'];
                $address = $raw['Vadd'];
                $photo = $raw['Photo'];
                $capacity = $raw['Capacity'];
                $price = $raw['price_h'];
                $phone = $raw['phone'];
                $cid=$raw['CID'];
                $status="";
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
                                        <h5>Venue Details</h5><br>
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
                                                        <th>VENUE ID</th>
                                                        <th>VENUE NAME</th>
                                                        <th>ADDRESS</th>
                                                        <th>PHOTO</th>
                                                        <th>CAPACITY OF VENUE</th>
                                                        <th>PRICE PER HOUR</th>
                                                        <th>CONTACT NUMBER</th>
                                                        <th>CITY ID</th>
                                                        <th>STATUS</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = "select Vid,Vname,Vadd,Photo,Capacity,price_h,phone,CID,status from venuedetails";
                                                    $tb = $dc->gettable($query);
                                                    while ($rw = mysqli_fetch_array($tb)) {
                                                        echo"<tr>";
                                                        echo"<td>" . $rw['Vid'] . "</td > ";
                                                        echo("<td>" . $rw['Vname'] . "</td> ");
                                                         echo("<td>" . $rw['Vadd'] . "</td >");
                                                          echo("<td>" . $rw['Photo'] . "</td> ");
                                                           echo("<td>" . $rw['Capacity'] . "</td >");
                                                            echo("<td>" . $rw['price_h'] . " </td>");
                                                             echo("<td>" . $rw['phone'] . "</td>");
                                                             echo("<td>" . $rw['CID'] . "</td>");
                                                            if ($rw['status'] == 1) {
                                                            echo '<td><p><a href="Vstatus.php?Vid=' . $rw['Vid'] . '&status=0" class="label label-success">Available</a></p></td>';
                                                        } else {
                                                            echo '<td><p><a href="Vstatus.php?Vid=' . $rw['Vid'] . '&status=1" class="label label-danger">Not Available</a></p></td>';
                                                        }
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