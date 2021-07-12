<?php 

  session_start();

  if (isset($_SESSION['Access']) && $_SESSION['Access'] == "admin") {
  	echo "Welcome".$_SESSION['username'];
  } else{
  		echo header("location:profile.php");
  }

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

      // $sql = "SELECT * from ssc_votes";
      // $students = $con->query($sql) or die ($con->error);
      // $row = $students->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Admin Information System</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
 	<link href="assets/css/main.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	
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
    	}

  /*  ------------OVERLAY STYLE---------
*/



    </style>
    
</head>
<body>


  <?php include 'header.php'; ?>
  
  	 <section class="center-text">
    <!-- <h1>Database access List</h1> -->
    <div style="margin: auto; width: 100%; border: 3px solid green; padding: 10px;">
    <?php include 'scale_header.php'; ?>

      
        <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
          echo("<meta http-equiv='refresh' content='5'>");
        }

        ?>
      

    </div>

  </section>
          <!-- <script language="javascript">
            functions deleteme(delid)

            {
              if(confirm("SURE TO DELETE?"))
                window.location.href='delete.php?ID=' +delid+'';
              return true;
            }
          </script> -->


         

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
    header("location:adminpanel.php");
  }
  unset($_SESSION['prompt']);
  mysqli_close($con);

?>