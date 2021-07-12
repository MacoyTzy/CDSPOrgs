<?php
$flag = true;
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
if($flag) { $flag = false; continue; }
//your code for insert
}
?>