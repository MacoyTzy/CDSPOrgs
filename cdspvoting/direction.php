<?php
	
  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

   if (isset($_SESSION['Access']) && $_SESSION['Access'] == "BSIT") {
    echo header("location:chooseorgbsit.php");
  } elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "BSA") {
    echo header("location:chooseorgbsa.php");
  } elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "BSOA") {
    echo header("location:chooseorgbsoa.php");
  } 
    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "BSEN") {
    echo header("location:");
  } 
    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "SHS-HUMSS") {
    echo header("location:shs_humss.php");
  }
    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "SHS-ABM") {
    echo header("location:shs_abm.php");
  } 

    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "SHS-ICT") {
    echo header("location:shs_ict.php");
  } 
    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "SHS-GAS") {
    echo header("location:shs_gas.php");

  } 
    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "SHS-STEM") {
    echo header("location:shs_stem.php");

  } 

  elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "SHS-HE") {
    echo header("location:shs_he.php");

  } 
    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "JHS") {
    echo header("location:jhs.php");

  }
    elseif (isset($_SESSION['Access']) && $_SESSION['Access'] == "ELEM") {
    echo header("location:spg.php");

  }  

  



?>
<?php 

  } else {
    	header("location:index.php");
  }

  mysqli_close($con);

?> 