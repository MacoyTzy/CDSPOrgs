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
         $sql = "INSERT INTO candidates (id , studentno, candid_fname, candid_lname, candid_initial, candid_org, candid_position) VALUES ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."')";
         $result = mysqli_query($con, $sql);
}
    if(!isset($result))
    {
        echo "<script type=\"text/javascript\">
          alert(\"Invalid File:Please Upload CSV File.\");
          window.location = \"candidatepanel.php\"
          </script>";    
    }
    else {
        echo "<script type=\"text/javascript\">
        alert(\"CSV File has been successfully Imported.\");
        window.location = \"candidatepanel.php\"
      </script>";
    }
       }
}

?>