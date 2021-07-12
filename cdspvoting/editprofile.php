<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  
  $id = $_GET['ID'];

  $sql = "SELECT * from students WHERE id = '$id'";
  $students = $con->query($sql) or die ($con->error);
  $row = $students->fetch_assoc();


  if(isset($_POST['update'])) {
    
    $uname = clean($_POST['username']); 
    $pword = clean($_POST['password']); 
    $studno = clean($_POST['studentno']); 
    $fname = clean($_POST['firstname']); 
    $lname = clean($_POST['lastname']); 
    $email = clean($_POST['email']);
    $course = clean($_POST['course']); 
    $yrlevel = clean($_POST['yrlevel']); 


     $sql = "UPDATE students SET username = '$uname', password = '$pword', studentno = '$studno', firstname = '$fname', lastname = '$lname', email = '$email', course = '$course', yrlevel = '$yrlevel' WHERE id = '$id'";
     $con->query($sql) or die ($con->error);
       
        if(mysqli_query($con, $sql)) {

          $_SESSION['prompt'] = "Updated!!!";
          header("Refresh:5");
          echo header("location:index.php");

          exit;

        } else {

          die("Error with the query");

        }
  } 
  if(isset($_SESSION['username'], $_SESSION['password'])) {


?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Edit Admin/Voter</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body>

  <?php include 'header.php'; ?>

  <section class="center-text">
    
 <!--   <strong>Register</strong> -->

    <div class="registration-form box-center clearfix">

    <!-- <?php 
        // if(isset($_SESSION['errprompt'])) {
        //   showError();
        // }
    ?> -->

      <form action="editprofile.php?ID=<?php echo $_GET['ID'];?>" method="POST">
        
        <div class="row">
          <div class="account-info col-sm-6">
          
            <fieldset>
              <legend>Account Info</legend>
              
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo $row['username'];?>" required>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>" required>
              </div>

            </fieldset>
            

          </div>

          <div class="personal-info col-sm-6">
            
            <fieldset>
              <legend>Personal Info</legend>
              
              <div class="form-group">
                <label for="studentno">Student Number</label>
                <input type="text" class="form-control" name="studentno" value="<?php echo $row['studentno'];?>">
              </div>

              <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname'];?>" required>
              </div>

              <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname'];?>" required>
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $row['email'];?>" required>
              </div>

              <div class="form-group">
                <label for="course">Course</label>

                <select class="form-control" name="course">
                  <option value="BSOA"<?php echo ($row['course'] == "BSOA")?'selected' : '';?>>BSOA</option>
                  <option value="BSIT"<?php echo ($row['course'] == "BSIT")?'selected' : '';?>>BSIT</option>
                  <option value="BSEN"<?php echo ($row['course'] == "BSEE")?'selected' : '';?>>BSEN</option>
                  <option value="BSA"<?php echo ($row['course'] == "BSA")?'selected' : '';?>>BSA</option>
                  <option value="SHS"<?php echo ($row['course'] == "SHS")?'selected' : '';?>>SHS</option>
                  <option value="JHS"<?php echo ($row['course'] == "JHS")?'selected' : '';?>>JHS</option>
                  <option value="ELEM"<?php echo ($row['course'] == "ELEM")?'selected' : '';?>>ELEM</option>
                  
                </select>

              </div>

              <div class="form-group">
                <label for="yrlevel">Year Level</label>

                <select class="form-control" name="yrlevel">
                  <option <?php echo ($row['yrlevel'] == "1st year")?'selected' : '';?>>1st year</option>
                  <option <?php echo ($row['yrlevel'] == "2nd year")?'selected' : '';?>>2nd year</option>
                  <option <?php echo ($row['yrlevel'] == "3rd year")?'selected' : '';?>>3rd year</option>
                  <option <?php echo ($row['yrlevel'] == "4th year")?'selected' : '';?>>4th year</option>
                </select>

              </div>

               <div class="form-group">
                <label for="access">Access</label>

                <select class="form-control" name="course">
                  <option value="BSEN"<?php echo ($row['access'] == "BSEN")?'selected' : '';?>>BSEN</option>
                  <option value="BSOA"<?php echo ($row['access'] == "BSOA")?'selected' : '';?>>BSOA</option>
                  <option value="BSIT"<?php echo ($row['access'] == "BSIT")?'selected' : '';?>>BSIT</option>
                  <option value="BSA"<?php echo ($row['access'] == "BSA")?'selected' : '';?>>BSA</option>
                  <option value="SHS"<?php echo ($row['course'] == "SHS")?'selected' : '';?>>SHS</option>
                  <option value="JHS"<?php echo ($row['course'] == "JHS")?'selected' : '';?>>JHS</option>
                  <option value="ELEM"<?php echo ($row['course'] == "ELEM")?'selected' : '';?>>ELEM</option>
                  
                </select>

            </fieldset>
            

          </div>
        </div>

        
        
        
        <input class="btn btn-primary" type="submit" name="update" value="Update">



      </form>
    </div>

  </section>


  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php 

  } else {
    header("location:adminpanel.php");
  }

  mysqli_close($con);

?>