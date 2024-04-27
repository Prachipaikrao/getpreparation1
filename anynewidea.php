<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_anynewidea');

// get the post records
$name= $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$tel = $_POST['tel'];



// database insert SQL code
$sql = "INSERT INTO `tbl_anynewidea` ( `fldname`, `fldemail`, `fldmsg` ,`fldtel`) VALUES ( '$name', '$email',  '$msg','$tel')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>