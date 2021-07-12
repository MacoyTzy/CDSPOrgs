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
  <link rel="icon" href="images/cdsp.png">
  <link href="assets/css/main.css" rel="stylesheet">



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



      th, td{

        text-align: left;

        border-top: 1px solid black;

        padding: 8px;



      }

      tr:nth-child(odd){

        background-color: #f2f2f2

      }
      img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}


  /*  ------------OVERLAY STYLE---------

*/

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}





    </style>

    

</head>

<body>





  <?php include 'header.php'; ?>

  

     <section class="center-text">

    <!-- <h1>Database access List</h1> -->

    <div style="margin: auto; width: 100%; border: 3px solid maroon; padding: 10px;">

      <?php include 'scale_header.php'; ?>
      
      <a href="page_ssc_showdatacount.php" style="float: right;" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-print"></span>Print</a>

    



      

        <?php



        if(isset($_SESSION['prompt'])) {

          showPrompt();

          echo("<meta http-equiv='refresh' content='5'>");

        }



        ?>

      <div class="">

        <legend><strong>Supreme Student Council</strong></legend><br>

      </div>

      <div>
       
      </div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

      <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscpres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscpres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscpres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscpres FROM ssc_votes WHERE voteforsscpres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscpres'])

                      $voteforsscpres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscpres_value =  $voteforsscpres*1;

                  echo "<div class='progress'>
                  

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscpres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscpres_value."%'>
                  
                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscpres </h5>

                  </div>

                  ";





                } else {

                   echo "

                  <div class='text-primary'>

                    <h5 >VOTES : 0 </h5>

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

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscvpres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscvpres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscvpres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscvpres FROM ssc_votes WHERE voteforsscvpres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscvpres'])

                      $voteforsscvpres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscvpres_value =  $voteforsscvpres*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscpres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscvpres_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscvpres </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>SECRETARY</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscsec']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscsec=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscsec'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscsec FROM ssc_votes WHERE voteforsscsec = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscsec'])

                      $voteforsscsec++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscsec_value =  $voteforsscsec*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscsec_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscsec_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscsec </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>TREASURER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforssctres']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforssctres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforssctres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforssctres FROM ssc_votes WHERE voteforssctres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforssctres'])

                      $voteforssctres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforssctres_value =  $voteforssctres*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforssctres_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforssctres_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforssctres </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>PUBLIC RELATION OFFICER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscpro']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscpro=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscpro'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscpro FROM ssc_votes WHERE voteforsscpro = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscpro'])

                      $voteforsscpro++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscpro_value =  $voteforsscpro*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscpro_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscpro_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscpro </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>Sgt. at Arms</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscsgtarms']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscsgtarms=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscsgtarms'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscsgtarms FROM ssc_votes WHERE voteforsscsgtarms = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscsgtarms'])

                      $voteforsscsgtarms++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscsgtarms_value =  $voteforsscsgtarms*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscsgtarms_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscsgtarms_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscsgtarms </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>BSOA Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscbsoarep']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscbsoarep=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscbsoarep'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscbsoarep FROM ssc_votes WHERE voteforsscbsoarep = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscbsoarep'])

                      $voteforsscbsoarep++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscbsoarep_value =  $voteforsscbsoarep*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscbsoarep_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscbsoarep_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscbsoarep </h5>

                  </div>

                  ";





                } 

            ?>



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>



<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>BSA Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscbsarep']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscbsarep=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscbsarep'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscbsarep FROM ssc_votes WHERE voteforsscbsarep = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscbsarep'])

                      $voteforsscbsarep++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscbsarep_value =  $voteforsscbsarep*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscbsarep_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscbsarep_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscbsarep </h5>

                  </div>

                  ";





                } 

            ?> 



            <?php }while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="">

        <br><strong>BSIT Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php do{ ?>

        <table>

          <thead>

            <!-- <th>Name</th> -->

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscbsitrep']; ?></td>

          </tbody>

        </table>

      <?php 



      $voteforsscbsitrep=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforsscbsitrep'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforsscbsitrep FROM ssc_votes WHERE voteforsscbsitrep = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscbsitrep'])

                      $voteforsscbsitrep++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforsscbsitrep_value =  $voteforsscbsitrep*1;

                  echo "<div class='progress'>

                        <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"$voteforsscbsitrep_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$voteforsscbsarep_value."%'>

                      <span class='sr-only'>SSC PRES</span>

                    </div>

                  </div>

                  ";

                  echo "

                  <div class='text-primary'>

                    <h5 >VOTES : $voteforsscbsitrep </h5>

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

                $sql ="SELECT * FROM ssc_votes";

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