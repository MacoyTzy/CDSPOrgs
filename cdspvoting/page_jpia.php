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

       <a href="page_jpia_showdatacount.php" style="float: right;" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-print"></span>Print</a>



      

        <?php



        if(isset($_SESSION['prompt'])) {

          showPrompt();

          echo("<meta http-equiv='refresh' content='5'>");

        }



        ?>

      <div class="">
        <div class="column">
          <legend><strong>JPIA</strong></legend><br>
        </div>

      </div>

 <!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

      <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpiapres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpiapres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpiapres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforteatropres ";

      $sql = "SELECT voteforjpiapres FROM jpia_votes WHERE voteforjpiapres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpiapres'])

                      $voteforjpiapres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpiapres_value =  $voteforjpiapres*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpiapres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpiapres_value."%'>

                      <span class='sr-only'>JPIA PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpiapres </h5>

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

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpiavpres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpiavpres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpiavpres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpiavpres FROM jpia_votes WHERE voteforjpiavpres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpiavpres'])

                      $voteforjpiavpres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpiavpres_value =  $voteforjpiavpres*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpiavpres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpiapres_value."%'>

                      <span class='sr-only'>JPIA VICE PRESIDENT</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpiavpres </h5>

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

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpiasec']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpiasec=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpiasec'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpiasec FROM jpia_votes WHERE voteforjpiasec = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpiasec'])

                      $voteforjpiasec++;

                    //echo $row['voteforsscpres'];

                  }

    

                  $voteforjpiasec_value =  $voteforjpiasec*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpiasec_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpiasec_value."%'>

                      <span class='sr-only'>SECRETARY</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpiasec </h5>

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

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpiatres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpiatres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpiatres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpiatres FROM jpia_votes WHERE voteforjpiatres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpiatres'])

                      $voteforjpiatres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpiatres_value =  $voteforjpiatres*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpiatres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpiatres_value."%'>

                      <span class='sr-only'>TREASURER</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpiatres </h5>

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

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpiaaud']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpiaaud=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpiaaud'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpiaaud FROM jpia_votes WHERE voteforjpiaaud = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpiaaud'])

                      $voteforjpiaaud++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpiaaud_value =  $voteforjpiaaud*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpiaaud_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpiaaud_value."%'>

                      <span class='sr-only'>JPIA AUDITOR </span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpiaaud </h5>

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

        <br><strong>ACADEMIC CHAIR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpiaacadch']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpiaacadch=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpiaacadch'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpiaacadch FROM jpia_votes WHERE voteforjpiaacadch = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpiaacadch'])

                      $voteforjpiaacadch++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpiaacadch_value =  $voteforjpiaacadch*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpiaacadch_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpiaacadch_value."%'>

                      <span class='sr-only'>JPIA Acad Chair</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpiaacadch </h5>

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

        <br><strong>NON ACADEMIC CHAIR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpianonacadch']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpianonacadch=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpianonacadch'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpianonacadch FROM jpia_votes WHERE voteforjpianonacadch = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpianonacadch'])

                      $voteforjpianonacadch++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpianonacadch_value =  $voteforjpianonacadch*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpianonacadch_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpianonacadch_value."%'>

                      <span class='sr-only'>JPIA NON ACAD CHAIR</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpianonacadch </h5>

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

        <br><strong>1ST YEAR REP</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpia1st']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpia1st=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpia1st'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpia1st FROM jpia_votes WHERE voteforjpia1st = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpia1st'])

                      $voteforjpia1st++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpia1st_value =  $voteforjpia1st*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpia1st_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpia1st_value."%'>

                      <span class='sr-only'>JPIA 1ST YEAR REP</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpia1st </h5>

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

        <br><strong>2ND YEAR REP</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpia2nd']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpia2nd=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpia2nd'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpia2nd FROM jpia_votes WHERE voteforjpia2nd = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpia2nd'])

                      $voteforjpia2nd++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpia2nd_value =  $voteforjpia2nd*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpia2nd_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpia2nd_value."%'>

                      <span class='sr-only'>JPIA 2ND YEAR REP</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpia2nd </h5>

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

        <br><strong>3RD YEAR REP</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpia3rd']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpia3rd=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpia3rd'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpia3rd FROM jpia_votes WHERE voteforjpia3rd = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpia3rd'])

                      $voteforjpia3rd++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpia3rd_value =  $voteforjpia3rd*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpia3rd_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpia3rd_value."%'>

                      <span class='sr-only'>JPIA 3RD YEAR REP </span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpia3rd </h5>

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

        <br><strong>4TH YEAR REP</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpia4th']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpia4th=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpia4th'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpia4th FROM jpia_votes WHERE voteforjpia4th = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpia4th'])

                      $voteforjpia4th++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpia4th_value =  $voteforjpia4th*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpia4th_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpia4th_value."%'>

                      <span class='sr-only'></span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpia4th </h5>

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

        <br><strong>5TH YEAR REP</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforjpia5th']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforjpia5th=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforjpia5th'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforjpia5th FROM jpia_votes WHERE voteforjpia5th = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforjpia5th'])

                      $voteforjpia5th++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforjpia5th_value =  $voteforjpia5th*10;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforjpia5th_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforjpia5th_value."%'>

                      <span class='sr-only'></span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforjpia5th </h5>

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

                $sql ="SELECT * FROM jpia_votes";

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