<HTML>
<HEAD>
 <?php 
  session_start(); 
  include("../class/DataClass.php"); 
  include("csslink.php"); 
 ?> 
 
 <?php
   $id="";
   $msg="";
   $dc=new DataClass();
  ?>
  
  <?php   
  ?>
 
</HEAD>

<body>
  <div id="wrapper">
  <?php include("slidbar.php"); ?>
  <?php include("navbar.php"); ?>
    
  </div> 
<?php include("jslink.php"); ?> 
</body>
</HTML>