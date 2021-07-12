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

        <legend><strong>SHS - SSG</strong></legend><br>

    </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshspres']; ?></td>
            <td>
               <?php 

      $voteforshspres=0;

      

      $candid_no = $row['voteforshspres'];

      

      $sql = "SELECT voteforshspres FROM shs_votes WHERE voteforshspres = '$candid_no'";

      $result= mysqli_query($con, $sql);


                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforshspres'])

                      $voteforshspres++;

                  }

                  $voteforshspres_value =  $voteforshspres*1;

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforshspres </h5>

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

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshsvpres']; ?></td>
            <td>
               <?php 



      $voteforshsvpres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsvpres'];

      //$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

     

                  $voteforshsvpres_value =  $voteforshsvpres*1;

                

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforshsvpres </h5>

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

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshssec']; ?></td>
            <td>
                <?php 



      $voteforshssec=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshssec'];

      //$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

                  $voteforshssec_value =  $voteforshssec*1;

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforshssec </h5>

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

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshstres']; ?></td>
            <td>
                <?php 



      $voteforshstres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshstres'];

      //$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

     

                  $voteforshstres_value =  $voteforshstres*1;

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforshstres </h5>

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

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshspro']; ?></td>
            <td>
                <?php 



      $voteforshspro=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshspro'];

      //$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

     

                  $voteforshspro_value =  $voteforshspro*1;

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforshspro </h5>

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

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshssgtarms']; ?></td>
            <td>
                <?php 



      $voteforshssgtarms=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshssgtarms'];

      //$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

                  $voteforshssgtarms_value =  $voteforshssgtarms*1;

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforshssgtarms </h5>

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

        <br><strong>STEM Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshsstem']; ?></td>
            <td>
                <?php 


      $voteforshsstem=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsstem'];

      //$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

                  $voteforshsstem_value =  $voteforshsstem*1;

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforshsstem </h5>

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

<br><strong>ABM Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from shs_votes";

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

    <td><?php echo $row['voteforshsabm']; ?></td>
    <td>
        <?php 



$voteforshsabm=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['voteforshsabm'];

//$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

          $voteforshsabm_value =  $voteforshsabm*1;

          echo "

          <div class='text-primary'>

            <h5> : $voteforshsabm </h5>

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

        <br><strong>GAS Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from shs_votes";

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

            <td><?php echo $row['voteforshsgas']; ?></td>
            <td>
                <?php 



      $voteforshsgas=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforshsgas'];

      //$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

                  $voteforshsgas_value =  $voteforshsgas*1;

                  echo "

                  <div class='text-primary'>

                    <h5> : $voteforshsgas </h5>

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

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="">

<br><strong>HUMMS Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from shs_votes";

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

    <td><?php echo $row['voteforshshumss']; ?></td>
    <td>
        <?php 



$voteforshshumss=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['voteforshshumss'];

//$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

$sql = "SELECT voteforshshumss FROM shs_votes WHERE voteforshshumss = '$candid_no'";

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

          $voteforshshumss_value =  $voteforshshumss*1;

          echo "

          <div class='text-primary'>

            <h5> : $voteforshshumss </h5>

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

<br><strong>ICT Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from shs_votes";

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

    <td><?php echo $row['voteforshsict']; ?></td>
    <td>
        <?php 



$voteforshsict=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['voteforshsict'];

//$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

          $voteforshsict_value =  $voteforshsict*1;

          echo "

          <div class='text-primary'>

            <h5> : $voteforshsict </h5>

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

<br><strong>HE Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from shs_votes";

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

    <td><?php echo $row['voteforshshe']; ?></td>
    <td>
        <?php 



$voteforshshe=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['voteforshshe'];

//$sql = "SELECT * FROM shs_votes WHERE voteforsscpres ";

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

          $voteforshshe_value =  $voteforshshe*1;

          echo "

          <div class='text-primary'>

            <h5> : $voteforshshe </h5>

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

    </td>

  </tbody>

</table>

    <?php //}while($row = $students->fetch_assoc()) ?>

</div>

</div>



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