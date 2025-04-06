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
                                        <h5>Capacity Wise Venue Details</h5><br>
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
                                                        <th>CAPACITY OF VENUE</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $query = "select Vid,Vname,Vadd,Capacity from venuedetails";
                                                    $tb = $dc->gettable($query);
                                                    while ($rw = mysqli_fetch_array($tb)) {
                                                        echo"<tr>";
                                                        echo"<td>" . $rw['Vid'] . "</td > ";
                                                        echo("<td>" . $rw['Vname'] . "</td> ");
                                                         echo("<td>" . $rw['Vadd'] . "</td >");
                                                           echo("<td>" . $rw['Capacity'] . "</td >");
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