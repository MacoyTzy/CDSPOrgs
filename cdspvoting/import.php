<?php

require "connect.php";
if(isset($_POST["Import"])){

$filename=$_FILES["file"]["tmp_name"];    
 if($_FILES["file"]["size"] > 0)
 {
    $file = fopen($filename, "r");
    $flag = true;
      while  (($getData = fgetcsv($file, 10000, ",")) !== FALSE )
      {
      if($flag) { $flag = false; continue; }
         $sql = "INSERT INTO students (id , username, password, studentno, firstname, lastname, email, course, yrlevel, access, date_joined, vote_status_ssc, vote_status_teatro, vote_status_itso, vote_status_jpia, vote_status_ops, vote_status_shs, vote_status_jhs, vote_status_elem) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."','".$getData[11]."','".$getData[12]."','".$getData[13]."','".$getData[14]."','".$getData[15]."','".$getData[16]."','".$getData[17]."','".$getData[18]."')";
         $result = mysqli_query($con, $sql);
}
    if(!isset($result))
    {
        echo "<script type=\"text/javascript\">
          alert(\"Invalid File:Please Upload CSV File.\");
          window.location = \"adminpanel.php\"
          </script>";    
    }
    else {
        echo "<script type=\"text/javascript\">
        alert(\"CSV File has been successfully Imported.\");
        window.location = \"adminpanel.php\"
      </script>";
    }
       }
}

?>

