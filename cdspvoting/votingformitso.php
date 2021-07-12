<?php 

  session_start();

  if (isset($_SESSION['Status_itso']) && $_SESSION['Status_itso'] == "Free") {
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
    $selection_vpres_c = clean($_POST['selectionvpres_creative']);
    $selection_vpres_a = clean($_POST['selectionvpres_academics']); 
    $selection_sec = clean($_POST['selectionsec']);
    $selection_finance = clean($_POST['selectionfinance']);
    $selection_audit = clean($_POST['selectionaudit']);
    $selection_pro = clean($_POST['selectionpro']);
    $selection_4threp = clean($_POST['selection4threp']);
    $selection_3rdrep = clean($_POST['selection3rdrep']);
    $selection_2ndrep = clean($_POST['selection2ndrep']);
    $selection_1strep = clean($_POST['selection1strep']);
    //itso creatives
    $selection_designer = clean($_POST['selectiondesigner']);
    $selection_videographer = clean($_POST['selectionvideographer']);
    $selection_dirphoto = clean($_POST['selectiondirphoto']);
    $selection_videoditor = clean($_POST['selectionvideoditor']);
    //itso academics
    $selection_diracads= clean($_POST['selectiondiracads']);
    $selection_asisdiracads= clean($_POST['selectionasisdiracads']);
    $selection_sysanal= clean($_POST['selectionsysanal']);
    $selection_prjtmngr= clean($_POST['selectionprjtmngr']);
  

    //$query = "SELECT username FROM students WHERE username = '$uname'";
    //$result = mysqli_query($con,$query);

    if(isset($_SESSION['Studentno']) && $_SESSION['Studentno'] == "$studno") {

      $query = "SELECT studentno FROM itso_votes WHERE studentno = '$studno'";
      $result = mysqli_query($con,$query);

       if(mysqli_num_rows($result) == 0) 
       {

        $query = "INSERT INTO itso_votes (studentno, firstname, lastname, voteforitsopres, voteforitsovprescreatives, voteforitsovpresacademic, voteforitsosec, voteforitsofinance, voteforitsoauditor, voteforitsopro, voteforitso4rep, voteforitso3rep, voteforitso2rep, voteforitso1rep, voteforitsogd, voteforitsoev, voteforitsodirp, voteforitsove, voteforitsodiracads, voteforitsoassdiracads, voteforitsosysanal, voteforitsoprjtmngr)
        VALUES ('$studno', '$fname', '$lname', '$selection_pres', '$selection_vpres_c', '$selection_vpres_a', '$selection_sec', '$selection_finance', '$selection_audit', '$selection_pro', '$selection_4threp', '$selection_3rdrep', '$selection_2ndrep', '$selection_1strep', '$selection_designer', '$selection_videographer', '$selection_dirphoto', '$selection_videoditor', '$selection_diracads', '$selection_asisdiracads', '$selection_sysanal', '$selection_prjtmngr' )";


        if(mysqli_query($con, $query)) 
        {
          $status = clean($_POST['status']);
          $query = "UPDATE students SET vote_status_itso = '$status' WHERE studentno = '$stud'";

          if(mysqli_query($con, $query)) 
            {
                $_SESSION['prompt'] = "Vote registered.";
                header("location:show.php");
                exit;

            } else 
              { die("Error with the student status query"); }

        } else 
          { die("Error with the itso_votes query"); }

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

  <title>Votes - ITSO</title>

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
          $sql = "SELECT * from candidates WHERE candid_position = 'President' AND candid_org = 'ITSO'";
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
            <h3 class="normalFont">VICE PRESIDENT FOR CREATIVES</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Vice-President for Creatives' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionvpres_creative" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <h3 class="normalFont">VICE PRESIDENT FOR ACADEMICS</h3>
            <div class="">
          <?php
          $sql = "SELECT * from candidates WHERE candid_position = 'Vice-President for Academics' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();
          ?>
              <?php do{ ?>
              <label for="">
                <input type="radio" name="selectionvpres_academics" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
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
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Secretary' AND candid_org = 'ITSO'";
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
            <h3 class="normalFont">FINANCE</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Finance' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionfinance" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
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
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Auditor' AND candid_org = 'ITSO'";
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
            <h3 class="normalFont">PUBLIC RELATION OFFICER</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Public Relation Officer' AND candid_org = 'ITSO'";
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
            <h3 class="normalFont">4th YEAR REPRESENTATIVE</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = '4th Year Representative' AND candid_org = 'ITSO'";
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
          
          $sql = "SELECT * from candidates WHERE candid_position = '3rd Year Representative' AND candid_org = 'ITSO'";
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
          
          $sql = "SELECT * from candidates WHERE candid_position = '2nd Year Representative' AND candid_org = 'ITSO'";
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
          
          $sql = "SELECT * from candidates WHERE candid_position = '1st Year Representative' AND candid_org = 'ITSO'";
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
            <h3 class="normalFont">GRAPHIC DESIGNER</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Graphic Designer' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectiondesigner" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">Event's Videographer</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Events Videographer' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionvideographer" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">DIRECTOR FOR PHOTOGRAPHY</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Director for Photography' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectiondirphoto" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">VIDEO EDITOR</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Video Editor' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionvideoditor" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">DIRECTOR FOR ACADEMICS</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Director for Academics' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectiondiracads" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">Asst. DIRECTOR FOR ACADEMICS</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Asst. Director for Academics' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionasisdiracads" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">SYSTEM ANALYST</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'System Analyst' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionsysanal" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
              </label><br>

              <?php }while($row = $students->fetch_assoc()) ?>
            
              <br>
              <hr>
            </div>
          </div>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
          <div class="">
            <br>
            <h3 class="normalFont">PROJECT MANAGER</h3>
            <div class="">
          <?php
          
          $sql = "SELECT * from candidates WHERE candid_position = 'Project Manager' AND candid_org = 'ITSO'";
          $students = $con->query($sql) or die ($con->error);
          $row = $students->fetch_assoc();

          ?>

              <?php do{ ?>

              <label for="">
                <input type="radio" name="selectionprjtmngr" value="<?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?>"> <strong><?php echo $row['candid_fname'];?> <?php echo $row['candid_lname'];?></strong>
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