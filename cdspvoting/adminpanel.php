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
  require 'import.php';

   

  if(isset($_SESSION['username'], $_SESSION['password'])) {

  //$id = $_GET['ID'];

  
  $sql = "SELECT * from students ORDER BY studentno desc";
  $result = mysqli_query($con,$sql);
  $row = $result->fetch_assoc();



  if(isset($_POST["export"])) {

    require 'connect.php';
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $outputs = fopen("php://output", "w");
    fputcsv($outputs, array('id','username', 'password','studentno', 'firstname', 'lastname', 'course', 'yrlevel', 'access', 'date_joined', 'vote_status'));
    $squery = "SELECT * from students ORDER BY studentno DESC";
    $results = mysqli_query($con,$squery);
    while ($rows = mysqli_fetch_row($results))
    {
      fputcsv($outputs, $rows);

    }
    fclose($outputs);
    exit();
   }
 // }
    
 
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
    .center {
border: 5px solid #800000;
text-align: left;
}

    img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"]{display:none;}
    body {
  font-family: Arial;
}

input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
body {
  background-image: url('images/image1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  backdrop-filter: blur(10px);
}

    </style>
    
</head>
<body>


  <?php include 'header.php'; ?>

  <section class="center-text">
  	<!-- <h1>Database access List</h1> -->
  	<div style="margin: auto; width: 100%; border: 3px solid maroon; padding: 10px;">

      
     <?php include 'prompt.php'; ?>
  


    <table>
      <br>
      
      <h3><img src="images/cdsp.png" width="80" height="80">Students and access list</h3>
      <br>
      



        <a href="register.php" class="btn btn-primary" id="add-btn">Add Students</a>
       
      <form method="POST" enctype="multipart/form-data" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
       <div class="center">
       <input type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
       <input type="submit" value='Import' name="Import" class="btn btn-primary" id="Import-btn">
      </div>
    


    	<thead>
        
    		<th>Student No</th>
    		<th>First Name</th>
    		<th>Last Name</th>
        <th>Email</th>
    		<th>Course</th>
    		<th>Year</th>
    		<th> <button onclick="window.print()" class="btn btn-info btn-primary" id="print-btn"><span class="glyphicon glyphicon-print"></span>Print</button></th>
    		<!-- <th><input type='submit' value='Export' name='Export'></th> -->
        <th><input type="submit" href="" value="CSV Export" name="export" class="btn btn-primary" id="export-btn"></th>
        
    	</thead>
      </form>
    	<tbody>
    		<?php 
              do{
              //while ($row = mysqli_fetch_array($result)) {
         ?>
    		<tr>
    			
    			<td><?php echo $row['studentno']; ?></td>
    			<td><?php echo $row['firstname']; ?></td>
    			<td><?php echo $row['lastname']; ?></td>
          <td><?php echo $row['email']; ?></td>
    			<td><?php echo $row['course']; ?></td>
    			<td><?php echo $row['yrlevel']; ?></td>
          <!-- EDIT --> 
    			<td><!-- href="editprofile.php?ID=<?php echo $row['id'];?>" class="btn btn-primary" id="edit-btn">Edit</a></td>-->
          <!-- DELETE -->
    			<td><button onclick="deleteme(<?php echo $row['id'];?>)" class="btn btn-primary" id="delete-btn">Delete</button> </td>
          <!-- <td><button name="delete">Delete</button> </td> -->
          <!-- DELETE CONFIRMATION -->
         

    		</tr>
    		<?php
        } while($row = $result->fetch_assoc()) 
        ?>
    	</tbody>
    </table>

     <script language="javascript">
            function deleteme(delid)

            {
              if(confirm("SURE TO DELETE?"))
                window.location.href='delete.php?ID=' +delid+'';
              return true;
            }
        </script>  


 
  
 <!-- </form> -->

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
    header("location:index.php");
    exit;
  } 

  unset($_SESSION['prompt']);
  unset($_SESSION['errprompt']);
  mysqli_close($con);

?>