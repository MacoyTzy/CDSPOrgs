<?php 

  session_start();

  if (isset($_SESSION['Status_ops']) && $_SESSION['Status_ops'] == "Free") {
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
    $selection_vpres_in = clean($_POST['selectionvpres_internal']);
    $selection_vpres_ex = clean($_POST['selectionvpres_external']); 
    $selection_sec = clean($_POST['selectionsec']);
    $selection_asstsec = clean($_POST['selectionasst_sec']);
    $selection_tres = clean($_POST['selectiontreasurer']);
    $selection_assttres = clean($_POST['selectionasst_treasurer']);
    $selection_audit = clean($_POST['selectionaudit']);
    $selection_bm = clean($_POST['selectionbm']);
    $selection_pro = clean($_POST['selectionpro']);
    $selection_sgtarms = clean($_POST['selectionsgtarms']);
    $selection_outreachdir = clean($_POST['selectionoutreachdir']);
    $selection_projectdir = clean($_POST['selectionprojectdir']);
    $selection_1strep = clean($_POST['selection1strep']);
    $selection_2ndrep = clean($_POST['selection2ndrep']);
    $selection_3rdrep = clean($_POST['selection3rdrep']);
    $selection_4threp = clean($_POST['selection4threp']);
    $selectionqualitymem1 = clean($_POST['selectionqualitymem1']);
    $selectionqualitymem2 = clean($_POST['selectionqualitymem2']);
    $selectionpartnership_ex = clean($_POST['selectionpartnership_ex']);
    $selectionwaste = clean($_POST['selectionwaste']);
    
  

    //$query = "SELECT username FROM students WHERE username = '$uname'";
    //$result = mysqli_query($con,$query);

    if(isset($_SESSION['Studentno']) && $_SESSION['Studentno'] == "$studno") {

      $query = "SELECT studentno FROM ops_votes WHERE studentno = '$studno'";
      $result = mysqli_query($con,$query);

       if(mysqli_num_rows($result) == 0) 
       {

        $query = "INSERT INTO ops_votes (studentno, firstname, lastname, ops_pres, ops_vpres_internal, ops_vpres_external, ops_secretary, ops_asst_secretary, ops_treasurer, ops_asst_treasurer, ops_auditor, ops_business_mngr, ops_pro, ops_sgtarms, ops_outreach_dir, ops_project_dir, ops_1st_rep, ops_2nd_rep, ops_3rd_rep, ops_4th_rep, ops_quality_mem1, ops_quality_mem2, ops_partnership_ex, ops_waste_means)
        VALUES ('$studno', '$fname', '$lname', '$selection_pres', '$selection_vpres_in', '$selection_vpres_ex', '$selection_sec', '$selection_asstsec', '$selection_tres', '$selection_assttres', '$selection_audit', '$selection_bm', '$selection_pro', '$selection_sgtarms', '$selection_outreachdir', '$selection_projectdir', '$selection_1strep', '$selection_2ndrep', '$selection_3rdrep', '$selection_4threp', '$selectionqualitymem1', '$selectionqualitymem2', '$selectionpartnership_ex', '$selectionwaste')";


        if(mysqli_query($con, $query)) 
        {
          $status = clean($_POST['status']);
          $query = "UPDATE students SET vote_status_ops = '$status' WHERE studentno = '$stud'";

          if(mysqli_query($con, $query)) 
            {
                $_SESSION['prompt'] = "Vote registered.";
                header("location:show.php");
                exit;

            } else 
              { die("Error with the student status query"); }

        } else 
          { die("Error with the ops_votes query"); }

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

  <title>Votes - OPS</title>

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
         <!--  <input  name="firstname"  placeholder="firstname">
          <input  name="lastname"  placeholder="lastname"> -->
          


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
          $sql = "SELECT * from candidates WHERE candid_position = 'President' AND candid_org = 'OPS'";
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
            <h3 class="normalFont">VICE PRESIDENT INTERNAL</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Vice-President Internal' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionvpres_internal" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <h3 class="normalFont">VICE PRESIDENT EXTERNAL</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Vice-President External' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionvpres_external" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
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
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Secretary' AND candid_org = 'OPS'";
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
            <h3 class="normalFont">ASST. SECRETARY</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Asst. Secretary' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionasst_sec" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">TREASURER</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Treasurer' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectiontreasurer" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">ASST. TREASURER</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Asst. Treasurer' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionasst_treasurer" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">AUDITOR</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Auditor' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionaudit" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">BUSINESS MANAGER</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Business Manager' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionbm" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">PUBLIC RELATION OFFICER</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Public Relation Officer' AND candid_org = 'OPS'";
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
            <h3 class="normalFont">SGT. AT ARMS</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Sgt. at Arms' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionsgtarms" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">OUTREACH DIRECTOR</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Outreach Director' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionoutreachdir" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">PROJECT DIRECTOR</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Project Director' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionprojectdir" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">4th YEAR REPRESENTATIVE</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = '4th Year Representative' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selection4threp" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">3rd YEAR REPRESENTATIVE</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = '3rd Year Representative' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selection3rdrep" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>
              <?php }while($row = $students->fetch_assoc()) ?>
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">2nd YEAR REPRESENTATIVE</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = '2nd Year Representative' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selection2ndrep" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>
              <?php }while($row = $students->fetch_assoc()) ?>
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">1st YEAR REPRESENTATIVE</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = '1st Year Representative' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selection1strep" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>
              <?php }while($row = $students->fetch_assoc()) ?>
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">SC @ QUALITY MEMBERSHIP I</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Quality Membership I' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionqualitymem1" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>
              <?php }while($row = $students->fetch_assoc()) ?>
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">SC @ QUALITY MEMBERSHIP II</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Quality Membership II' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionqualitymem2" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>
              <?php }while($row = $students->fetch_assoc()) ?>            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">SC @ PARTNERSHIP AND EXTERNAL</h3>
            <div class="">
          <?php          
          $sql = "SELECT * from candidates WHERE candid_position = 'Partnership and External' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionpartnership_ex" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>
              <?php }while($row = $students->fetch_assoc()) ?>
              <br>
              <hr>
            </div>
          </div>


<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">SC @ WASTE AND MEANS</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Waste and Means' AND candid_org = 'OPS'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionwaste" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>
              <?php }while($row = $students->fetch_assoc()) ?>
              <br>
              <hr>
            </div>
          </div>

        <a href="" onclick="close_window();return false;">Go back</a>
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