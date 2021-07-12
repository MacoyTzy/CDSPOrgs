<?php

          require 'connect.php';
          require('config.php');

                  
        
         $sql = "SELECT * from tbl_users WHERE id";

          if(isset($_POST["submit"])){
          if(isset($_POST["voterName"]) && isset($_POST["voterEmail"]) && isset($_POST["voterID"]) && isset($_POST["selectedCandidate"]))
          {
            $name= test_input($_POST["voterName"]);
            $email= test_input($_POST["voterEmail"]);
            $voterID= test_input($_POST["voterID"]);
            $selection= test_input($_POST["selectedCandidate"]);
          }
        }
        else
        {
          echo "<br>All Field Recquired";
        }
        
       $DB_HOST= "localhost";
       $DB_USER="root";
       $DB_PASSWORD="";
       $DB_NAME="db_evoting";
  

        $conn= @mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME)
        or die("Couldn't Connect to Database :");
        

        $sql= "INSERT INTO db_evoting.tbl_users VALUES(null,'".$name."','".$email."','".$voterID."','".$selection."');";
          

        if(mysqli_query($conn, $sql)){
          echo "<img src='images/success.png' width='70' height='70'>";
          echo "<h3 class='text-info specialHead text-center'><strong> YOU'VE  SUCCESSFULLY   VOTED.</strong></h3>";
          echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
        }
        else
        {
          echo "<img src='images/error.png' width='70' height='70'>";
          echo "<h3 class='text-info specialHead text-center'><strong> SORRY! WE'VE SOME ISSUE..</strong></h3>";
          echo "<a href='index.html' class='btn btn-primary'> <span class='glyphicon glyphicon-ok'></span> <strong> Finish</strong> </a>";
        }

        
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voting Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="index.html" class="navbar-brand headerFont text-lg"><strong>eVoting</strong></a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            <!--
             <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
            <li><a href="#feedbackTab"><span class="subFont"><strong>Feedback</strong></span></a></li>
            <li><a href="#"><span class="subFont"><strong>About</strong></span></a></li> 
          -->
          </ul>
          

          <button type="submit" class="btn btn-success navbar-right navbar-btn"><span class="normalFont"><strong>Admin Panel</strong></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">
          
          <div class="page-header">
            <h2 class="specialHead">Choose Your Candidate.</h2>
            <p class="normalFont">Prove Your Authencity of being correct voter.</p>
          </div>
          
          <form action="vault.php" method="POST">
          <div class="form-group">
            <label>Voter's Name :</label><br>
            
            <input type="text" name="voterName" pattern="[A-Za-z]{6,}" title="Enter Your Full Name" placeholder="Enter Your Full Name" class="form-control" required/><br>

            <label>Voter's Registered Email ID :</label><br>
            <input type="text" name="voterEmail" placeholder="Enter Your Email ID" class="form-control"/><br>

            <label>Voter's Card No. :</label><br>
            <input id="id1" type="text" name="voterID" pattern="[0-9].{6,}" placeholder="Enter Your Voter Uniquie ID" class="form-control" required/><br>
            
            <h3 class="normalFont">Selet Any One of Them,</h3>
            <div class="radio">
              <label for="">
                <input type="radio" name="selectedCandidate" value="BJP"> <strong>Bhartiya Janta Party (BJP)</strong>
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="INC"> <strong>Congress (INC)</strong> 
              </label><br>
              
              <label for="">
                <input type="radio" name="selectedCandidate" value="AAP"> <strong>YSR Congress (YSRCP)</strong>
              </label><br>

              <label for="">
                <input type="radio" name="selectedCandidate" value="TMC"> <strong>JanaSena (JNS)</strong>
              </label><br>
              <br>
              <hr>
              <button type="submit" name="submit" class="btn btn-primary"><strong>Submit</strong></button>
              <button type="submit" class="btn btn-default">Decline</button>
            </div>
          </div>
          </form>

        </div>
      </div>
    </div>
  </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
