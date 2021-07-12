<?php 

  session_start();

  if (isset($_SESSION['Access']) && $_SESSION['Access'] == "admin") {
    //echo "Welcome".$_SESSION['username'];
    echo "";
  } else{
    echo header("location:profile.php");
  }

  require 'connect.php';
  require 'functions.php';


   

  if(isset($_SESSION['username'], $_SESSION['password'])) {


 
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
  <link rel="stylesheet" type="text/css" href="print.css" media="print">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
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
.row-print{
  padding: 10px 10px 10px 10px;
}
      /*
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
      }*/

  /*  ------------OVERLAY STYLE---------
*/
    .center {
border: 5px solid #800000;
text-align: left;
}

    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}

    </style>
    
</head>
<body>
  <?php include 'header.php'; ?>
  <div style="margin: auto; width: 100%; border: 3px solid maroon; padding: 10px;">
    <div class="row-print">

      <button onclick="window.print()" class="btn btn-info btn-lg" id="print-btn"><span class="glyphicon glyphicon-print"></span>Print</button>
    
    </div>

    <div class="">

        <legend><strong>Supreme Student Council</strong></legend><br>

    </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscpres']; ?></td>
            <td>
               <?php 

      $voteforsscpres=0;

      

      $candid_no = $row['voteforsscpres'];

      

      $sql = "SELECT voteforsscpres FROM ssc_votes WHERE voteforsscpres = '$candid_no'";

      $result= mysqli_query($con, $sql);


                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforsscpres'])

                      $voteforsscpres++;

                  }

                  $voteforsscpres_value =  $voteforsscpres*1;

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforsscpres </h5>

                  </div>

                  ";

                } else {

                   echo "

                  <div class='text-primary'>

                    <h5 > 0 </h5>

                  </div>

                  ";

                }

            ?> 
            </td>

          </tbody>

        </table>

     

            <?php //}while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="">

        <br><strong>VICE PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscvpres']; ?></td>
            <td>
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

                

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforsscvpres </h5>

                  </div>

                  ";





                } 

            ?> 
            </td>

          </tbody>

        </table>

     

            <?php //}while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="">

        <br><strong>SECRETARY</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscsec']; ?></td>
            <td>
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

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforsscsec </h5>

                  </div>

                  ";





                } 

            ?> 
            </td>

          </tbody>

        </table>

     

            <?php //}while($row = $students->fetch_assoc()) ?>

  </div>

</div>
 
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="">

        <br><strong>TREASURER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforssctres']; ?></td>
            <td>
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

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforssctres </h5>

                  </div>

                  ";





                } 

            ?> 
            </td>

          </tbody>

        </table>

     

            <?php //}while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="">

         <br><strong>PUBLIC RELATION OFFICER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscpro']; ?></td>
            <td>
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

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforsscpro </h5>

                  </div>

                  ";

                }

            ?> 
            </td>

          </tbody>

        </table>

     

            <?php //}while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="">

        <br><strong>Sgt. at Arms</strong>
        <br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscsgtarms']; ?></td>
            <td>
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

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforsscsgtarms </h5>

                  </div>

                  ";

                } 

            ?>
            </td>

          </tbody>

        </table>

            <?php //}while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="">

        <br><strong>BSOA Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscbsoarep']; ?></td>
            <td>
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

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforsscbsoarep </h5>

                  </div>

                  ";

                } 

            ?> 
            </td>

          </tbody>

        </table>

            <?php //}while($row = $students->fetch_assoc()) ?>

  </div>

</div>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="">

<br><strong>BSIT Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from ssc_votes";

  $students = $con->query($sql) or die ($con->error);

  $row = $students->fetch_assoc();

  ?>

        <?php //do{ ?>

<table>

  <thead>

    <th>Name</th>
     <th>Votes Count</th>

  </thead>

  <tbody>

    <td><?php echo $row['voteforsscbsitrep']; ?></td>
    <td>
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

          echo "

          <div class='text-primary'>

            <h5> : $voteforsscbsitrep </h5>

          </div>

          ";

        } 

    ?>

    </td>

  </tbody>

</table>

    <?php //}while($row = $students->fetch_assoc()) ?>

</div>

</div>


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
 <div class="">

        <br><strong>BSA Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ssc_votes";

          $students = $con->query($sql) or die ($con->error);

          $row = $students->fetch_assoc();

          ?>

                <?php //do{ ?>

        <table>

          <thead>

            <th>Name</th>
             <th>Votes Count</th>

          </thead>

          <tbody>

            <td><?php echo $row['voteforsscbsarep']; ?></td>
            <td>
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

                  echo "

                  <div class='text-primary'>

                    <h5> : $voteforsscbsarep </h5>

                  </div>

                  ";

                } 

            ?>

            </td>

          </tbody>

        </table>

            <?php //}while($row = $students->fetch_assoc()) ?>

    </div>

  </div>

</div>


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
    header("location:index.php");
    exit;
  } 

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);
  mysqli_close($con);

?>