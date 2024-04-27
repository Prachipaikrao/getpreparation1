<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_entercoment');

// get the post records
$comment= $_POST['comment'];
$idea= $_POST['idea'];



// database insert SQL code
$sql = "INSERT INTO `tbl_entercoment` ( `fldcomment`, `fldidea`,) VALUES ( '$comment', '$idea', )";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>