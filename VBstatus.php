<?php
include '../class/common.php';
doDBConnect();
$id=$_GET['VBid'];
$status=$_GET['status'];

$q="update venuebooking set status=$status where VBid=$id";
mysqli_query($con, $q);
header('location:Vbooking.php');
?>

