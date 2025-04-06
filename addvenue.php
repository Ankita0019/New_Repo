<!DOCTYPE html>
<html>
<head>
	<?php
        session_start();
      include '../class/dataclass.php';
        ?>
        <?php
        $msg = "";
        $dc = new DataClass();
        if (isset($_POST['btnadd'])) {
            $vname = ($_POST['name']);
            $vadd = ($_POST['add']);
            $photo = ($_POST['photo']);
            $capacity = ($_POST['capacity']);
            $price= ($_POST['price']);
            $phone= ($_POST['phone']);
            $cid = ($_POST['cid']);
            $status=1;
            
            $query = "insert into venuedetails(Vname,Vadd,Photo,Capacity,price_h,phone,CID,status) 
            values('$vname','$vadd','$photo',$capacity,'$price','$phone',$cid,$status)";
            	
            $result=$dc->saveRecord($query);
			if($result)
			{
                            echo 'Added Successfully.'; 
				header("location:dashboard.php");
			}
			else
			{
                            echo 'failed';
			}
        }
        ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTLOOK | Add Venues</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            
            <h3>Add Venue Here!</h3>
                 <form class="m-t" role="form" action="#" method="post">
                <div class="form-group">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Venue Name" required="">
                </div>
                     <div class="form-group">
                    <input type="text" name="add" id="add" class="form-control" placeholder="Venue Address" required="">
                </div>
                     <div class="form-group">
                    <input type="text" name="photo" id="photo" class="form-control" placeholder="Venue Image" required="">
                </div>
                     <div class="form-group">
                    <input type="text" name="capacity" id="capacity" class="form-control" placeholder="Capacity of venue" required="">
                </div>
                     <div class="form-group">
                    <input type="text" name="price" id="price" class="form-control" placeholder="Price per hour" required="">
                </div>
                     <div class="form-group">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Contact Number" required="">
                </div>
                     <div class="form-group">
                    <input type="text" name="cid" id="cid" class="form-control" placeholder="City Id" required="">
                </div>
                <button type="submit"  name="btnadd" class="btn btn-primary block full-width m-b">Add Venue</button>
                 </form>
             </div>
    </div>
    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
