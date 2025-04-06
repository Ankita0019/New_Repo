<?php
include '../class/common.php';
doDBConnect();
$id=$_GET['Vid'];
$status=$_GET['status'];

$q="update venuedetails set status=$status where Vid=$id";
mysqli_query($con, $q);
header('location:venue.php');
?>

