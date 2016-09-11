<?php
// Fetching Values From URL
echo "string";
$fname2 = $_POST['fname'];
$lname2 = $_POST['lname'];
$email2 = $_POST['email'];
$phone_number2 = $_POST['phone_number'];
$gender2 = $_POST['gender'];
$dob2 = $_POST['dob'];

$date = date('Y-m-d', strtotime(str_replace('-', '/', $dob2)));
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("mydba", $connection); // Selecting Database
if (isset($_POST['fname'])) {
$query = mysql_query("insert into form_element(fname,lname,email,phone_number,sex,dob) values ('$fname2','$lname2', '$email2','$phone_number2', '$gender2', '$date')"); //Insert Query
//echo $query;
echo "Form Submitted succesfully",$date;
}
mysql_close($connection); // Connection Closed
?>


