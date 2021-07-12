<?php 

  session_start();

  if (isset($_SESSION['Status_ssc']) && $_SESSION['Status_ssc'] == "Free") {
    echo "";
  } else {
      echo header("location:show.php");
  }
 

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {


  //$id = $_GET['ID'];

  // $sql = "SELECT * from students WHERE id = '$id'";
  // $students = $con->query($sql) or die ($con->error);
  // $row = $students->fetch_assoc();


  if(isset($_POST['register'])) {

    $stud = clean($_POST['stud']); 
    $studno = clean($_POST['studentno']); 
    $fname = clean($_POST['firstname']); 
    $lname = clean($_POST['lastname']); 
    $selection_pres = clean($_POST['selectionpres']); 
    $selection_vpres = clean($_POST['selectionvpres']); 
    $selection_sec = clean($_POST['selectionsec']);
    $selection_tres = clean($_POST['selectiontres']);
    $selection_pro = clean($_POST['selectionpro']);
    $selection_saa = clean($_POST['selectionsaa']);
    //$selection_bsoarep = clean($_POST['selectionbsoarep']);
    $selection_bsarep = clean($_POST['selectionbsarep']);
    //$selection_bsitrep = clean($_POST['selectionbsitrep']);

    //$query = "SELECT username FROM students WHERE username = '$uname'";
    //$result = mysqli_query($con,$query);

    if(isset($_SESSION['Studentno']) && $_SESSION['Studentno'] == "$studno") {

      $query = "SELECT studentno FROM ssc_votes WHERE studentno = '$studno'";
      $result = mysqli_query($con,$query);

       if(mysqli_num_rows($result) == 0) 
       {

        $query = "INSERT INTO ssc_votes (studentno, firstname, lastname, voteforsscpres, voteforsscvpres, voteforsscsec, voteforssctres, voteforsscpro, voteforsscsgtarms, voteforsscbsarep)
        VALUES ('$studno', '$fname', '$lname', '$selection_pres', '$selection_vpres', '$selection_sec', '$selection_tres', '$selection_pro', '$selection_saa', '$selection_bsarep')";


        if(mysqli_query($con, $query)) 
        {
          $status = clean($_POST['status']);
          $query = "UPDATE students SET vote_status_ssc = '$status' WHERE studentno = '$stud'";

          if(mysqli_query($con, $query)) 
            {
                $_SESSION['prompt'] = "Vote registered.";
                header("location:show.php");
                exit;

            } else 
              { die("Error with the student status query"); }

        } else 
          { die("Error with the ssc_votes query"); }

        } else 
          {
               $_SESSION['errprompt'] = "Your vote are not Counted, You are already responded.";
               header("location:show.php");
               exit;
          }

    } else 
      {
        //echo header("location:votingformssc.php");
        $_SESSION['errprompt'] = "Username already exists.";
      }

  } 
 

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Votes - SSC</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      h3 {
          text-decoration: underline;
      }
      legend{
        border-color: powderblue;
      }
    </style>

    
</head>
<body>



  <section class="center-text" >
    
 <!--   <strong>Register</strong> -->


    <div class="registration-form box-center clearfix" >

    <?php 

        if(isset($_SESSION['prompt'])) {
          showPrompt();
          //echo("<meta http-equiv='refresh' content='5'>");
        }
    ?>

    <?php 

        if(isset($_SESSION['errprompt'])) {
          showError();
          echo("<meta http-equiv='refresh' content='5'>");
        }
    ?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" onsubmit="return confirm('Are you sure you want to submit? You are going to log out')">
      <fieldset>
        <div class="row">
          <div class="">
          <input type="hidden" name="status" value="1">
          <input type="hidden" name="stud" value="<?php echo "".$_SESSION['username'];?>" placeholder="student number">
          <input type="hidden" name="studentno" value="<?php echo "".$_SESSION['username'];?>" placeholder="student number">
         
          


          <legend>Info</legend>
          <div class="account-info col-sm-6">
            <fieldset>
              
              <div class="form-group">
                <label for="candid_fname">First Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
              </div>
            </fieldset>
          </div>

          <div class="account-info col-sm-6">
            <fieldset>
              <div class="form-group">
                <label for="candid_lname">Last Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
              </div>
            </fieldset>
          </div>
          </div>
          <br>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <br>
            <br>
            <legend><h2>Choose your votes:</h2></legend>
            <h3 class="normalFont">PRESIDENT</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'President' AND candid_org = 'SSC'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionpres" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"><strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <h3 class="normalFont">VICE PRESIDENT</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Vice President' AND candid_org = 'SSC'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionvpres" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">SECRETARY</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Secretary' AND candid_org = 'SSC'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionsec" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">Treasurer</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Treasurer' AND candid_org = 'SSC'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectiontres" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">Public Relation Officer</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Public Relation Officer' AND candid_org = 'SSC'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionpro" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">Sgt. at Arms</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Sgt. at Arms' AND candid_org = 'SSC'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionsaa" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">BSA Representative</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'BSA Representative' AND candid_org = 'SSC'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionbsarep" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>
        </div>

        <a href="" onclick="close_window();return false;">Clear</a>
        <input class="btn btn-primary" type="submit" name="register" value="Register">




        
      </form>
    </div>

  </section>

  <!-- <script>
      function close_window() 
      {
          if (confirm("Close Window?")) 
          {
              myWindow.close();
          }
      }
  </script> -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>


<?php


  }  else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);
  mysqli_close($con);

?>