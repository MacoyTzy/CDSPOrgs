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

        <legend><strong>JPIA</strong></legend><br>

    </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpiapres']; ?></td>
            <td>
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


                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpiapres </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpiavpres']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpiavpres </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpiasec']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpiasec </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpiatres']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpiatres </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpiaaud']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpiaaud </h5>

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

        <br><strong>ACADEMIC CHAIR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpiaacadch']; ?></td>
            <td>
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

                

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpiaacadch </h5>

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

         <br><strong>NON ACADEMIC CHAIR</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpianonacadch']; ?></td>
            <td>
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

                 

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpianonacadch </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpia1st']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpia1st </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpia2nd']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpia2nd </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpia3rd']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpia3rd </h5>

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

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpia4th']; ?></td>
            <td>
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

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpia4th </h5>

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

        <br><strong>5th Year Representative</strong><br>

        <div>

          <?php

          $sql = "SELECT * from jpia_votes";

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

            <td><?php echo $row['voteforjpia5th']; ?></td>
            <td>
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

                 

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforjpia5th </h5>

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