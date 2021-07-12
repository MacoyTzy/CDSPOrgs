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

        <legend><strong>Teatro Batingaw</strong></legend><br>

    </div>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <div class="">

        <br><strong>PRESIDENT</strong><br>

        <div>

          <?php

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatropres']; ?></td>
            <td>
               <?php 



      $voteforteatropres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatropres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforteatropres ";

      $sql = "SELECT voteforteatropres FROM teatro_votes WHERE voteforteatropres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatropres'])

                      $voteforteatropres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatropres_value =  $voteforteatropres*10;


                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatropres </h5>

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

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrovpres']; ?></td>
            <td>
               <?php 



      $voteforteatrovpres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrovpres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrovpres FROM teatro_votes WHERE voteforteatrovpres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrovpres'])

                      $voteforteatrovpres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatrovpres_value =  $voteforteatrovpres*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrovpres </h5>

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

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrosec']; ?></td>
            <td>
               <?php 



      $voteforteatrosec=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrosec'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrosec FROM teatro_votes WHERE voteforteatrosec = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrosec'])

                      $voteforteatrosec++;

                    //echo $row['voteforsscpres'];

                  }

    

                  $voteforteatrosec_value =  $voteforteatrosec*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrosec </h5>

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

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrotres']; ?></td>
            <td>
                <?php 



      $voteforteatrotres=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrotres'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrotres FROM teatro_votes WHERE voteforteatrotres = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrotres'])

                      $voteforteatrotres++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatrotres_value =  $voteforteatrotres*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrotres </h5>

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

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatroaudit']; ?></td>
            <td>
                <?php 



      $voteforteatroaudit=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatroaudit'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatroaudit FROM teatro_votes WHERE voteforteatroaudit = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatroaudit'])

                      $voteforteatroaudit++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatroaudit_value =  $voteforteatroaudit*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatroaudit </h5>

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

        <br><strong>PRO INTERNAL</strong><br>

        <div>

          <?php

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatroproin']; ?></td>
            <td>
                <?php 



      $voteforteatroproin=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatroproin'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatroproin FROM teatro_votes WHERE voteforteatroproin = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatroproin'])

                      $voteforteatroproin++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatroproin_value =  $voteforteatroproin*10;

                

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatroproin </h5>

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

         <br><strong>PRO EXTERNAL</strong><br>

        <div>

          <?php

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatroproex']; ?></td>
            <td>
               <?php 



      $voteforteatroproex=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatroproex'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatroproex FROM teatro_votes WHERE voteforteatroproex = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatroproex'])

                      $voteforteatroproex++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatroproex_value =  $voteforteatroproex*10;

                 

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatroproex </h5>

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

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrobm']; ?></td>
            <td>
               <?php 



      $voteforteatrobm=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrobm'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrobm FROM teatro_votes WHERE voteforteatrobm = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrobm'])

                      $voteforteatrobm++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatrobm_value =  $voteforteatrobm*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrobm </h5>

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

         <br><strong>SGT AT ARMS I</strong><br>

        <div>

          <?php

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrosgtarms1']; ?></td>
            <td>
               <?php 



      $voteforteatrosgtarms1=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrosgtarms1'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrosgtarms1 FROM teatro_votes WHERE voteforteatrosgtarms1 = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrosgtarms1'])

                      $voteforteatrosgtarms1++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatrosgtarms1_value =  $voteforteatrosgtarms1*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrosgtarms1 </h5>

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

        <br><strong>SGT AT ARMS II</strong><br>

        <div>

          <?php

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrosgtarms2']; ?></td>
            <td>
               <?php 



      $voteforteatrosgtarms2=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrosgtarms2'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrosgtarms2 FROM teatro_votes WHERE voteforteatrosgtarms2 = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrosgtarms2'])

                      $voteforteatrosgtarms2++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatrosgtarms2_value =  $voteforteatrosgtarms2*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrosgtarms2 </h5>

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

        <br><strong>SGT AT ARMS III</strong><br>

        <div>

          <?php

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrosgtarms3']; ?></td>
            <td>
               <?php 



      $voteforteatrosgtarms3=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrosgtarms3'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrosgtarms3 FROM teatro_votes WHERE voteforteatrosgtarms3 = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrosgtarms3'])

                      $voteforteatrosgtarms3++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatrosgtarms3_value =  $voteforteatrosgtarms3*10;

                  

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrosgtarms3 </h5>

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

        <br><strong>SGT AT ARMS IV</strong><br>

        <div>

          <?php

          $sql = "SELECT * from teatro_votes";

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

            <td><?php echo $row['voteforteatrosgtarms3']; ?></td>
            <td>
               <?php 



      $voteforteatrosgtarms4=0;

      //$candid_no = array("15-4010-405"); 

      $candid_no = $row['voteforteatrosgtarms4'];

      //$sql = "SELECT * FROM ssc_votes WHERE voteforsscpres ";

      $sql = "SELECT voteforteatrosgtarms4 FROM teatro_votes WHERE voteforteatrosgtarms4 = '$candid_no'";

      $result= mysqli_query($con, $sql);



      // $students = $con->query($sql) or die ($con->error);

      // $rows = $result->fetch_assoc();



        //echo $row['voteforsscpres'];

      //do {

                if(mysqli_num_rows($result)>0)

                {

                  while($row= mysqli_fetch_assoc($result))

                  {

                    if($row['voteforteatrosgtarms4'])

                      $voteforteatrosgtarms4++;

                    //echo $row['voteforsscpres'];

                  }

     

                  $voteforteatrosgtarms4_value =  $voteforteatrosgtarms4*10;

                 

                  echo "

                  <div class='text-primary'>

                    <h5 > : $voteforteatrosgtarms4 </h5>

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