<?php 

  session_start();

  if (isset($_SESSION['Access']) && $_SESSION['Access'] == "admin") {
    echo "";
  } else{
      echo header("location:adminpanel.php");
  }

  require 'connect.php';
  require 'functions.php';
  require 'importcandid.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

  // $id = $_GET['ID'];

  $sql = "SELECT * from candidates ORDER BY candid_org";
  $students = $con->query($sql) or die ($con->error);
  $row = $students->fetch_assoc();


?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Candidate Panel</title>

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
    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}
      body {
  background-image: url('images/image1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  backdrop-filter: blur(10px);
}

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
        background-color:#f2f2f2 
      }

  /*  ------------OVERLAY STYLE---------*/

  body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}

    </style>
    
</head>
<body>

<?php include 'header.php'; ?>


  <section class="center-text">
    <!-- <h1>Candidate List</h1> -->
    <div style="margin: auto; width: 100%; border: 3px solid maroon; padding: 10px;">
    
    <table> 
      <br>
      <h3><img src="images/cdsp.png" width="80" height="80">Candidate List</h3>
      
      <br>
      
</form>

     <?php include 'prompt.php'; ?>

      <div class="" style="padding-right: 40px;">
       <button onclick="window.print()" class="btn btn-primary" id="print-btn" style="float: right;">Print</button>
      </div>  
      <form method="POST" enctype="multipart/form-data" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       <input type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
       <input type="submit" value='Import' name="Import" position="left" class="btn btn-primary" id="Import-btn">
      </div> </form>
      <thead>
        <th>Student Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>INITIAL</th>
        <th>Candidate Org</th>
        <th>Position</th>
        <th></th>

     
      </thead>
      <tbody>
        <?php do{ ?>
        <tr>
          <td value="studentno"><?php echo $row['studentno']; ?></td>
          <td><?php echo $row['candid_fname']; ?></td>
          <td><?php echo $row['candid_lname']; ?></td>
          <td><?php echo $row['candid_initial']; ?></td>
          <td><?php echo $row['candid_org']; ?></td>
          <td><?php echo $row['candid_position']; ?></td>
          <!-- EDIT --> 
          <!-- <td><a href="editcandidate.php?ID=<?php echo $row['id'];?>">Edit</a></td> -->
          <!-- DELETE -->
          <td><button onclick="deleteme(<?php echo $row['id'];?>)" class="btn-primary"id="delete-btn">Delete</button> </td>
          <!-- DELETE CONFIRMATION -->
         

        </tr>
        
         <script language="javascript">
            function deleteme(delid)

            {
              if(confirm("SURE TO DELETE?"))
                window.location.href='candidatedelete.php?ID=' +delid+'';
              return true;
            }
          </script>

        <?php }while($row = $students->fetch_assoc()) ?>

      </tbody>
    </table>
 <!--   <strong>Register</strong> -->

    </div>
    
  </section>
  

  <br>
          <script language="javascript">
            functions deleteme(delid)

            {
              if(confirm("SURE TO DELETE?"))
                window.location.href='delete.php?ID=' +delid+'';
              return true;
            }
  </script> 



    </div>

  </section>







  <script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php


  } else {
    header("location:index.php");
    exit;
  } 

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);
  mysqli_close($con);

?>