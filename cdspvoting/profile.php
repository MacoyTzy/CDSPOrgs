<?php 


  session_start();

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



	<title>Welcome <?php echo $_SESSION['username']; ?> </title>



  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <link rel="icon" href="images/cdsp.png">

	<link href="css/main.css" rel="stylesheet">



	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <style>

    body{

      background-color:maroon;

    }

    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}

    

  </style>

    

</head>

<body>



  <?php include 'userheader.php'; ?>



  <section>



    <div class="container">



      

    </div>

    

    

    <div class="profile-box box-left">

      <legend><img src="images/cdsp.png" width="100" height="100" style="float:top"><strong class="title">About You</strong></legend>

      

      <?php include 'prompt.php'; ?>



      



      <?php



       





        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";



        if($result = mysqli_query($con, $query)) {



          $row = mysqli_fetch_assoc($result);



          echo "<div class='info'><strong>Student No:</strong> <span>".$row['studentno']."</span></div>";

          echo "<div class='info'><strong>Student Name:</strong> <span>".$row['lastname'].", ".$row['firstname']."</span></div>";

          echo "<div class='info'><strong>Course:</strong> <span>".$row['course']."</span></div>";

          echo "<div class='info'><strong>Year Level:</strong> <span>".$row['yrlevel']."</span></div>";



          // $query_date = "SELECT DATE_FORMAT(date_joined, '%m/%d/%Y') FROM students WHERE id = '".$_SESSION['userid']."'";

          // $result = mysqli_query($con, $query_date);



          // $row = mysqli_fetch_row($result);



         

        } else {



          die("Error with the query in the database");



        }



      ?>

     

      

      <div class="options">

        <!-- <a class="btn btn-primary" href="editprofile.php">Edit Profile</a> -->

        <a class="btn btn-success" href="changepassword.php">Change Password</a>

        <!-- <a class="btn btn-success" href="votingformssc.php?ID=<?php echo $row['id'];?>">Cast Vote</a> -->

      </div>



      

    </div>



  </section>





	<script src="assets/js/jquery-3.1.1.min.js"></script>

  <script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/main.js"></script>

</body>

</html>



<!-- insert clock here Mr. ANDREI LEYVA! -->



<?php





  }  else {

    header("location:index.php");

    exit;

  } 



  unset($_SESSION['prompt']);

  unset($_SESSION['errprompt']);

  mysqli_close($con);



?>