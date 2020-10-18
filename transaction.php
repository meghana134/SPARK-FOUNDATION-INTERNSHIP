<?php
include_once 'database.php';
if(isset($_POST["Transfer"]))
{	 
	 $sender = $_POST["sender"];
	 $receiver = $_POST["receiver"];
	 $credits = $_POST["credits"];
	
	
	 $sql = "INSERT INTO transaction (sender,receiver,credits)
	 VALUES ('$sender','$receiver','$credits')";
	 if (mysqli_query($conn, $sql)) {
	 header("location:viewcustomer.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>