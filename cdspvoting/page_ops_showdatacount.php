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

        <legend><strong>OPS</strong></legend><br>

    </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_pres']; ?></td>
            <td>
               <?php 



      $ops_pres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_pres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforteatropres ";

      $sql = "SELECT ops_pres FROM ops_votes WHERE ops_pres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_pres'])

                      $ops_pres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_pres_value =  $ops_pres*10;


                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_pres </h5>

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

        <br><strong>VICE PRESIDENT INTERNAL</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_vpres_internal']; ?></td>
            <td>
               <?php 



      $ops_vpres_internal=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_vpres_internal'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_vpres_internal FROM ops_votes WHERE ops_vpres_internal = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_vpres_internal'])

                      $ops_vpres_internal++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_vpres_internal_value =  $ops_vpres_internal*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_vpres_internal </h5>

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

        <br><strong>VICE PRESIDENT EXTERNAL</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_vpres_external']; ?></td>
            <td>
               <?php 



      $ops_vpres_external=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_vpres_external'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_vpres_external FROM ops_votes WHERE ops_vpres_external = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_vpres_external'])

                      $ops_vpres_external++;

                    //echo $row['voteforsscpres'];

                  }

    

                  $ops_vpres_external_value =  $ops_vpres_external*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_vpres_external </h5>

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

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_secretary']; ?></td>
            <td>
                <?php 



      $ops_secretary=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_secretary'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_secretary FROM ops_votes WHERE ops_secretary = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_secretary'])

                      $ops_secretary++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_secretary_value =  $ops_secretary*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_secretary </h5>

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

         <br><strong>ASST SECRETARY</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_asst_secretary']; ?></td>
            <td>
                <?php 



      $ops_asst_secretary=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_asst_secretary'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_asst_secretary FROM ops_votes WHERE ops_asst_secretary = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_asst_secretary'])

                      $ops_asst_secretary++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_asst_secretary_value =  $ops_asst_secretary*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_asst_secretary </h5>

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

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_treasurer']; ?></td>
            <td>
                <?php 



      $ops_treasurer=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_treasurer'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_treasurer FROM ops_votes WHERE ops_treasurer = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_treasurer'])

                      $ops_treasurer++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_treasurer_value =  $ops_treasurer*10;

                

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_treasurer </h5>

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

         <br><strong>ASST TREASURER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_asst_treasurer']; ?></td>
            <td>
               <?php 



      $ops_asst_treasurer=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_asst_treasurer'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_asst_treasurer FROM ops_votes WHERE ops_asst_treasurer = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_asst_treasurer'])

                      $ops_asst_treasurer++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_asst_treasurer_value =  $ops_asst_treasurer*10;

                 

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_asst_treasurer </h5>

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

        <br><strong>AUDITOR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_auditor']; ?></td>
            <td>
               <?php 



      $ops_auditor=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_auditor'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_auditor FROM ops_votes WHERE ops_auditor = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_auditor'])

                      $ops_auditor++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_auditor_value =  $ops_auditor*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_auditor </h5>

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

         <br><strong>BUSINESS MANAGER</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_business_mngr']; ?></td>
            <td>
               <?php 



      $ops_business_mngr=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_business_mngr'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_business_mngr FROM ops_votes WHERE ops_business_mngr = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_business_mngr'])

                      $ops_business_mngr++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_business_mngr_value =  $ops_business_mngr*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_business_mngr </h5>

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

        <br><strong>PRO</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_pro']; ?></td>
            <td>
               <?php 



      $ops_pro=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_pro'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_pro FROM ops_votes WHERE ops_pro = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_pro'])

                      $ops_pro++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_pro_value =  $ops_pro*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_pro </h5>

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

        <br><strong>SGT AT ARMS</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_sgtarms']; ?></td>
            <td>
               <?php 



      $ops_sgtarms=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_sgtarms'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_sgtarms FROM ops_votes WHERE ops_sgtarms = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_sgtarms'])

                      $ops_sgtarms++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_sgtarms_value =  $ops_sgtarms*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_sgtarms </h5>

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

<br><strong>PROJECT DIRECTOR</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_project_dir']; ?></td>
    <td>
       <?php 



$ops_project_dir=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_project_dir'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_project_dir FROM ops_votes WHERE ops_project_dir = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_project_dir'])

              $ops_project_dir++;

            //echo $row['voteforsscpres'];

          }



          $ops_project_dir =  $ops_project_dir*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_project_dir </h5>

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

<br><strong>1st Year Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_1st_rep']; ?></td>
    <td>
       <?php 



$ops_1st_rep=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_1st_rep'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_1st_rep FROM ops_votes WHERE ops_1st_rep = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_1st_rep'])

              $ops_1st_rep++;

            //echo $row['voteforsscpres'];

          }



          $ops_1st_rep =  $ops_1st_rep*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_1st_rep </h5>

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

<br><strong>2nd Year Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_2nd_rep']; ?></td>
    <td>
       <?php 



$ops_2nd_rep=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_2nd_rep'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_2nd_rep FROM ops_votes WHERE ops_2nd_rep = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_2nd_rep'])

              $ops_2nd_rep++;

            //echo $row['voteforsscpres'];

          }



          $ops_2nd_rep =  $ops_2nd_rep*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_2nd_rep </h5>

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

<br><strong>3rd Year Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_3rd_rep']; ?></td>
    <td>
       <?php 



$ops_3rd_rep=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_3rd_rep'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_3rd_rep FROM ops_votes WHERE ops_3rd_rep = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_3rd_rep'])

              $ops_3rd_rep++;

            //echo $row['voteforsscpres'];

          }



          $ops_3rd_rep =  $ops_3rd_rep*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_3rd_rep </h5>

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

<br><strong>4th Year Representative</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_4th_rep']; ?></td>
    <td>
       <?php 



$ops_4th_rep=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_4th_rep'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_4th_rep FROM ops_votes WHERE ops_4th_rep = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_4th_rep'])

              $ops_4th_rep++;

            //echo $row['voteforsscpres'];

          }



          $ops_4th_rep =  $ops_4th_rep*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_4th_rep </h5>

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

<br><strong>SC @ Quality Membership</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_quality_mem1']; ?></td>
    <td>
       <?php 



$ops_quality_mem1=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_quality_mem1'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_quality_mem1 FROM ops_votes WHERE ops_quality_mem1 = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_quality_mem1'])

              $ops_quality_mem1++;

            //echo $row['voteforsscpres'];

          }



          $ops_quality_mem1 =  $ops_quality_mem1*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_quality_mem1 </h5>

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

<br><strong>SC @ Quality Membership</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_quality_mem2']; ?></td>
    <td>
       <?php 



$ops_quality_mem2=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_quality_mem2'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_quality_mem2 FROM ops_votes WHERE ops_quality_mem2 = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_quality_mem2'])

              $ops_quality_mem2++;

            //echo $row['voteforsscpres'];

          }



          $ops_quality_mem2 =  $ops_quality_mem2*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_quality_mem2 </h5>

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

<br><strong>SC @ Partnership and External</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_partnership_ex']; ?></td>
    <td>
       <?php 



$ops_partnership_ex=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_partnership_ex'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_partnership_ex FROM ops_votes WHERE ops_partnership_ex = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_partnership_ex'])

              $ops_partnership_ex++;

            //echo $row['voteforsscpres'];

          }



          $ops_partnership_ex =  $ops_partnership_ex*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_partnership_ex </h5>

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

<br><strong>SC @ Waste and Means</strong><br>

<div>

  <?php

  $sql = "SELECT * from ops_votes";

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

    <td><?php echo $row['ops_waste_means']; ?></td>
    <td>
       <?php 



$ops_waste_means=0;

//$candid_no = array("15-4010-405"); 

$candid_no = $row['ops_waste_means'];

//$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

$sql = "SELECT ops_waste_means FROM ops_votes WHERE ops_waste_means = '$candid_no'";

$result= mysqli_query($con, $sql);



// $students = $con->query($sql) or die ($con->error);

// $rows = $result->fetch_assoc();



//echo $row['voteforsscpres'];

//do {

        if(mysqli_num_rows($result)>0)

        {

          while($row= mysqli_fetch_assoc($result))

          {

            if($row['ops_waste_means'])

              $ops_waste_means++;

            //echo $row['voteforsscpres'];

          }



          $ops_waste_means =  $ops_waste_means*10;

          

          echo "

          <div class='text-primary'>

            <h5 > : $ops_waste_means </h5>

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

        <br><strong>OUTREACH DIRECTOR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from ops_votes";

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

            <td><?php echo $row['ops_outreach_dir']; ?></td>
            <td>
               <?php 



      $ops_outreach_dir=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['ops_outreach_dir'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT ops_outreach_dir FROM ops_votes WHERE ops_outreach_dir = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['ops_outreach_dir'])

                      $ops_outreach_dir++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $ops_outreach_dir_value =  $ops_outreach_dir*10;

                 

                  echo "

                  <div class='text-primary'>

                    <h5 > : $ops_outreach_dir </h5>

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



  <!-- END DIV -->

</div>


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