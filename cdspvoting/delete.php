<?php
	
  session_start();

  require 'connect.php';
  require 'functions.php';
if(isset($_SESSION['username'], $_SESSION['password'])) {

$id = $_GET['ID'];
$sql = "DELETE FROM students WHERE id = '$id'";

if ($con->query($sql) == TRUE) {
  	$_SESSION['prompt'] = "Student data deleted..";
    header("Refresh:5");
    header("location:adminpanel.php");
} else {
  echo "Error deleting record: ";
}


// if(isset($_POST["export"])) {

//     require 'connect.php';
//     header('Content-Type: text/csv; charset=utf-8');
//     header('Content-Disposition: attachment; filename=data.csv');
//     $outputs = fopen("php://output", "w");
//     fputcsv($outputs, array('id','username', 'password','studentno', 'firstname', 'lastname', 'course', 'yrlevel', 'access', 'date_joined', 'vote_status'));
//     $squery = "SELECT * from students ORDER BY studentno DESC";
//     $results = mysqli_query($con,$squery);
//     while ($rows = mysqli_fetch_row($results))
//     {
//       fputcsv($outputs, $rows);

//     }
//     fclose($outputs);
//     exit();
//    }







///////////////////////////////////////////////////////

// if (isset($_POST['delete'])) {
	
// 	$id = $_POST['ID'];
// 	$sql = "DELETE FROM students WHERE id = '$id'";
// 	$con->query($sql) or die ($con->error);
// 	echo "Deleted";
// } else {

// 	echo "Not Deleted";

// }

?>
<?php 

  } else {
    	header("location:adminpanel.php");
  }

  mysqli_close($con);

?>