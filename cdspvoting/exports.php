<?php
// $filename = 'student_and_all_access.csv';
// $export_data = unserialize($_POST['export_data']);

// // file creation
// $file = fopen($filename,"w");

// foreach ($export_data as $line){
//  fputcsv($file,$line);
// }

// fclose($file);

// // download
// header("Content-Description: File Transfer");
// header("Content-Disposition: attachment; filename=".$filename);
// header("Content-Type: application/csv; "); 

// readfile($filename);

// // deleting file
// unlink($filename);
// exit();


//session_start();

  //require 'connect.php';
  //require 'functions.php';
//if(isset($_SESSION['username'], $_SESSION['password'])) {

   
   if(isset($_POST["export"])) {

   	require 'connect.php';
   	header('Content-Type: text/csv; charset=utf-8');
   	header('Content-Disposition: attachment; filename=data.csv');
   	$output = fopen("php://output", "w");
   	fputcsv($output, array('id', 'username', 'password','studentno', 'firstname', 'lastname', 'course', 'yrlevel', 'access', 'date_joined', 'vote_status'));
   	$sql = "SELECT * from students ORDER BY studentno DESC";
  	$result = mysqli_query($con,$sql);
   	while ($row = mysqli_fetch_array($result))
   	{
   		fputcsv($output, $row);
   	}
    fclose($output);
   }
	
   



?>

<?php 

  // } else {
  //   	header("location:adminpanel.php");
  // }

  // mysqli_close($con);

?>
