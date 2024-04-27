<?php error_reporting(0); ?> 

<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_login');

$email = $_POST['email'];
$password = $_POST['password'];




// database insert SQL code
$sql = "INSERT INTO `tbl_login` (  `fldemail`, `password`) VALUES ( '$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>