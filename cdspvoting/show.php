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

  <title>Responded</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

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
  </style>
    
</head>
<body>


  <section>

    <div class="container">

      
    </div>
    
    
    <div class="profile-box box-left">
      <legend><strong class="title">YOU ARE ALREADY RESPONDED</strong></legend>

      <?php 

        if(isset($_SESSION['prompt'])) {
          showPrompt();
          echo("<meta http-equiv='refresh' content='5'>");
          echo "<div><p>Please wait a second to process your vote thanks you. </p></div>";
          session_destroy();
        }
    ?>

    <?php 

        if(isset($_SESSION['errprompt'])) {
          showError();
          //echo("<meta http-equiv='refresh' content='5'>");
        }
    ?>

      

      
     
      
      

      
    </div>

  </section>


  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
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