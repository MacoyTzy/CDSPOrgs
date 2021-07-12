<?php
        include 'dbcontroller.php'; //database connection file included
        $ip = $_SERVER['REMOTE_ADDR']; //getting the IP Address
        $t=time(); //Storing time in variable
        $diff = (time()-300); // Here 300 mean 5 minutes 10*60
        mysqli_query($conn, "INSERT INTO tbl_loginLimit VALUES (null,'$ip','$t')"); //Insert Query
        $result = mysqli_query($conn, "SELECT COUNT(*) FROM tbl_loginLimit WHERE ipAddress LIKE '$ip' 
          AND timeDiff > $diff"); //Fetching Data 
            $count = mysqli_fetch_array($result);
        if($count[0] > 3)
{
   echo "You are allowed 3 attempts in 10 minutes";
}
?>

<?php 
        $result = mysqli_query($conn, "SELECT COUNT(*) FROM tbl_loginLimit WHERE ipAddress LIKE '$ip' 
        AND timeDiff > $diff"); //Fetching Data 
        $count = mysqli_fetch_array($result); 
        if($count[0] > 3) { 
        echo "You are allowed 3 attempts in 10 minutes"; 
} 
?>