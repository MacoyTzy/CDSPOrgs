<?php 



  session_start();



  if (isset($_SESSION['Access']) && $_SESSION['Access'] == "admin") {

    echo "Welcome".$_SESSION['username'];

  } else{

      echo header("location:profile.php");

  }



  require 'connect.php';

  require 'functions.php';



  if(isset($_SESSION['username'], $_SESSION['password'])) {



      // $sql = "SELECT * from ssc_votes";

      // $students = $con->query($sql) or die ($con->error);

      // $row = $students->fetch_assoc();





?>



<!DOCTYPE html>

<html>

<head>



  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">



  <title>Admin Panel</title>



  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

  <link rel="icon" href="images/cdsp.png">



  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <style>

      

      table{

        border-collapse: collapse;

        width: 100%;



      }
      img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}


      th, td{

        text-align: left;

        border-top: 1px solid black;

        padding: 8px;



      }

      tr:nth-child(odd){

        background-color: #f2f2f2

      }



  /*  ------------OVERLAY STYLE---------

*/







    </style>

    

</head>

<body>





  <?php include 'header.php'; ?>

  

     <section class="center-text">

    <!-- <h1>Database access List</h1> -->

    <div style="margin: auto; width: 100%; border: 3px solid green; padding: 10px;">

      <?php include 'scale_header.php'; ?>

       <a href="page_shs_showdatacount.php" style="float: right;" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-print"></span>Print</a>



      

        <?php



        if(isset($_SESSION['prompt'])) {

          showPrompt();

          echo("<meta http-equiv='refresh' content='5'>");

        }



        ?>

      <div class="">
        <div class="column">
          <legend><strong>SHS</strong></legend><br>
        </div>

      </div>

 <!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

      <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshspres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshspres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshspres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforteatropres ";

      $sql = "SELECT voteforshspres FROM shs_votes WHERE voteforshspres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshspres'])

                      $voteforshspres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshspres_value =  $voteforshspres*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshspres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshspres_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshspres </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>VICE PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshsvpres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshsvpres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsvpres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshsvpres FROM shs_votes WHERE voteforshsvpres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshsvpres'])

                      $voteforshsvpres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshsvpres_value =  $voteforshsvpres*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshsvpres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshsvpres_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshsvpres </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>SECRETARY</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshssec']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshssec=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshssec'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshssec FROM shs_votes WHERE voteforshssec = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshssec'])

                      $voteforshssec++;

                    //echo $row['voteforsscpres'];

                  }

    

                  $voteforshssec_value =  $voteforshssec*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshssec_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshssec_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshssec </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>TRESURER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshstres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshstres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshstres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshstres FROM shs_votes WHERE voteforshstres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshstres'])

                      $voteforshstres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshstres_value =  $voteforshstres*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshstres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshstres_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshstres </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>PRO</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshspro']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshspro=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshspro'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshspro FROM shs_votes WHERE voteforshspro = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshspro'])

                      $voteforshspro++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshspro_value =  $voteforshspro*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshspro_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshspro_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshspro </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>SGT AT ARMS</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshssgtarms']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshssgtarms=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshssgtarms'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshssgtarms FROM shs_votes WHERE voteforshssgtarms = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshssgtarms'])

                      $voteforshssgtarms++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshssgtarms_value =  $voteforshssgtarms*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshssgtarms_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshssgtarms_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshssgtarms </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>
        

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>STEM REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshsstem']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshsstem=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsstem'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshsstem FROM shs_votes WHERE voteforshsstem = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshsstem'])

                      $voteforshsstem++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshsstem_value =  $voteforshsstem*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshsstem_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshsstem_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshsstem </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>ABM REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshsabm']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshsabm=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsabm'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshsabm FROM shs_votes WHERE voteforshsabm = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshsabm'])

                      $voteforshsabm++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshsabm_value =  $voteforshsabm*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshsabm_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshsabm_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshsabm </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>GAS REPRESENTATIVE </strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshsgas']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshsgas=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsgas'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshsgas FROM shs_votes WHERE voteforshsgas = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshsgas'])

                      $voteforshsgas++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshsgas_value =  $voteforshsgas*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshsgas_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshsgas_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshsgas </h5>

                  </div>

                  ";





                } 

            ?>



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>HUMSS REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshshumss']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshshumss=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshshumss'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshshumss FROM shs_votes WHERE voteforshshumss	= '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshshumss'])

                      $voteforshshumss++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshshumss_value =  $voteforshshumss*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshshumss_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshshumss_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshshumss </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>ICT REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshsict']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshsict=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsict'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshsict FROM shs_votes WHERE voteforshsict = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshsict'])

                      $voteforshsict++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshsict_value =  $voteforshsict*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshsict_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshsict_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshsict </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>HE REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforshshe']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforshshe=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshshe'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforshshe FROM shs_votes WHERE voteforshshe = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshshe'])

                      $voteforshshe++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforshshe_value =  $voteforshshe*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforshshe_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforshshe_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforshshe </h5>

                  </div>

                  ";




 
                } 

            ?>



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<br>

<br>





      <?php

                // Total

                $total=0;

                $sql ="SELECT * FROM shs_votes";

                $result= mysqli_query($con, $sql);



                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['studentno'])

                      $total++;

                  }





                  $tptal= $total*10;



                  echo "<strong>Total Number of Votes</strong><br>";

                  echo "

                  <div class='text-primary'>

                    <h3 class='normalFont'>VOTES : $total </h3>

                  </div>

                  ";



                }

      ?>  



 









      

      





    </div>



  </section>

          <!-- <script language="javascript">

            functions deleteme(delid)



            {

              if(confirm("SURE TO DELETE?"))

                window.location.href='delete.php?ID=' +delid+'';

              return true;

            }

          </script> -->





         



  <script src="assets/js/jquery-3.1.1.min.js"></script>

  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>



<!-- <?php 



  //unset($_SESSION['errprompt']);

  //mysqli_close($con);

            //Revised by Marisol

?> -->

<?php 



  } else {

    header("location:adminpanel.php");

  }

  unset($_SESSION['prompt']);

  mysqli_close($con);



?>
