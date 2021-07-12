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

       <a href="page_itso_showdatacount.php" style="float: right;" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-print"></span>Print</a>



      

        <?php



        if(isset($_SESSION['prompt'])) {

          showPrompt();

          echo("<meta http-equiv='refresh' content='5'>");

        }



        ?>

      <div class="">
        <div class="column">
          <legend><strong>Information Technology Society</strong></legend><br>
        </div>

      </div>

 <!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

      <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsopres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsopres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsopres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforteatropres ";

      $sql = "SELECT voteforitsopres FROM itso_votes WHERE voteforitsopres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsopres'])

                      $voteforitsopres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsopres_value =  $voteforitsopres*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsopres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsopres_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsopres </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>VICE PRESIDENT CREATIVES</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsovprescreatives']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsovprescreatives=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsovprescreatives'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsovprescreatives FROM itso_votes WHERE voteforitsovprescreatives = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsovprescreatives'])

                      $voteforitsovprescreatives++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsovprescreatives_value =  $voteforitsovprescreatives*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsovprescreatives_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsovprescreatives_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsovprescreatives </h5>

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

        <br><strong>VICE PRESIDENT ACADEMICS</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsovpresacademic']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsovpresacademic=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsovpresacademic'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsovpresacademic FROM itso_votes WHERE voteforitsovpresacademic = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsovpresacademic'])

                      $voteforitsovpresacademic++;

                    //echo $row['voteforsscpres'];

                  }

    

                  $voteforitsovpresacademic_value =  $voteforitsovpresacademic*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsovpresacademic_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsovpresacademic_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsovpresacademic </h5>

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

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsosec']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsosec=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsosec'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsosec FROM itso_votes WHERE voteforitsosec = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsosec'])

                      $voteforitsosec++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsosec_value =  $voteforitsosec*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsosec_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsosec_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsosec </h5>

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

        <br><strong>FINANCE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsofinance']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsofinance=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsofinance'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsofinance FROM itso_votes WHERE voteforitsofinance = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsofinance'])

                      $voteforitsofinance++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsofinance_value =  $voteforitsofinance*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsofinance_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsofinance_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsofinance </h5>

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

        <br><strong>AUDITOR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsoauditor']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsoauditor=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsoauditor'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsoauditor FROM itso_votes WHERE voteforitsoauditor = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsoauditor'])

                      $voteforitsoauditor++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsoauditor_value =  $voteforitsoauditor*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsoauditor_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsoauditor_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsoauditor </h5>

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

        <br><strong>PUBLIC RELATION OFFICER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsopro']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsopro=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsopro'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsopro FROM itso_votes WHERE voteforitsopro = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsopro'])

                      $voteforitsopro++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsopro_value =  $voteforitsopro*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsopro_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsopro_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsopro </h5>

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

        <br><strong>1ST YEAR REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitso1rep']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitso1rep=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitso1rep'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitso1rep FROM itso_votes WHERE voteforitso1rep = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitso1rep'])

                      $voteforitso1rep++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitso1rep_value =  $voteforitso1rep*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitso1rep_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitso1rep_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitso1rep </h5>

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

        <br><strong>2ND YEAR REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitso2rep']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitso2rep=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitso2rep'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitso2rep FROM itso_votes WHERE voteforitso2rep = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitso2rep'])

                      $voteforitso2rep++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitso2rep_value =  $voteforitso2rep*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitso2rep_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitso2rep_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitso2rep </h5>

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

        <br><strong>3RD YEAR REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitso3rep']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitso3rep=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitso3rep'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitso3rep FROM itso_votes WHERE voteforitso3rep = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitso3rep'])

                      $voteforitso3rep++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitso3rep_value =  $voteforitso3rep*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitso3rep_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitso3rep_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitso3rep </h5>

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

        <br><strong>4TH YEAR REPRESENTATIVE</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitso4rep']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitso4rep=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitso4rep'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitso4rep FROM itso_votes WHERE voteforitso4rep = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitso4rep'])

                      $voteforitso4rep++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitso4rep_value =  $voteforitso4rep*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitso4rep_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitso4rep_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitso4rep </h5>

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

        <br><strong>GRAPHIC DESIGNER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsogd']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsogd=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsogd'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsogd FROM itso_votes WHERE voteforitsogd = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsogd'])

                      $voteforitsogd++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsogd_value =  $voteforitsogd*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsogd_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsogd_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsogd </h5>

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

        <br><strong>EVENT'S VIDEOGRAPHER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsoev']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsoev=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsoev'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsoev FROM itso_votes WHERE voteforitsoev = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsoev'])

                      $voteforitsoev++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsoev_value =  $voteforitsoev*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsoev_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsoev_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsoev </h5>

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

        <br><strong>DIRECTOR FOR PHOTOGRAPHY</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsodirp']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsodirp=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsodirp'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsodirp FROM itso_votes WHERE voteforitsodirp = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsodirp'])

                      $voteforitsodirp++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsodirp_value =  $voteforitsodirp*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsodirp_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsodirp_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsodirp </h5>

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

        <br><strong>VIDEO EDITOR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsove']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsove=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsove'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsove FROM itso_votes WHERE voteforitsove = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsove'])

                      $voteforitsove++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsove_value =  $voteforitsove*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsove_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsove_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsove </h5>

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

        <br><strong>DIRECTOR FOR ACADEMICS</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsodiracads']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsodiracads=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsodiracads'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsodiracads FROM itso_votes WHERE voteforitsodiracads = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsodiracads'])

                      $voteforitsodiracads++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsodiracads_value =  $voteforitsodiracads*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsodiracads_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsodiracads_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsodiracads </h5>

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

        <br><strong>ASST. DIRECTOR FOR ACADEMICS</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsoassdiracads']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsoassdiracads=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsoassdiracads'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsoassdiracads FROM itso_votes WHERE voteforitsoassdiracads = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsoassdiracads'])

                      $voteforitsoassdiracads++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsoassdiracads_value =  $voteforitsoassdiracads*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsoassdiracads_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsoassdiracads_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsoassdiracads </h5>

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

        <br><strong>SYSTEM ANALYST</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsosysanal']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsosysanal=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsosysanal'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsosysanal FROM itso_votes WHERE voteforitsosysanal = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsosysanal'])

                      $voteforitsosysanal++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsosysanal_value =  $voteforitsosysanal*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsosysanal_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsosysanal_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsosysanal </h5>

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

        <br><strong>PROJECT MANAGER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from itso_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforitsoprjtmngr']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforitsoprjtmngr=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforitsoprjtmngr'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforitsoprjtmngr FROM itso_votes WHERE voteforitsoprjtmngr = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforitsoprjtmngr'])

                      $voteforitsoprjtmngr++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforitsoprjtmngr_value =  $voteforitsoprjtmngr*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforitsoprjtmngr_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforitsoprjtmngr_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforitsoprjtmngr </h5>

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

                $sql ="SELECT * FROM teatro_votes";

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



?> -->

<?php 



  } else {

    header("location:adminpanel.php");

  }

  unset($_SESSION['prompt']);

  mysqli_close($con);



?>