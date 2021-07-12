<?php
	
  session_start();

  require 'connect.php';
  require 'functions.php';
if(isset($_SESSION['username'], $_SESSION['password'])) {

$id = $_GET['ID'];
$sql = "DELETE FROM candidates WHERE id = '$id'";

if ($con->query($sql) == TRUE) {
  	echo header("location:candidatepanel.php");
} else {
  echo "Error deleting record: ";
}

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