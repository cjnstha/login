<?php 
include('connection.php');
session_start();
	// If form submitted, insert values into the database.
if (isset($_POST['submit'])){
	$program= $_POST['program_name'];
	$renew= $_POST['renew_date'];
	$expiry= $_POST['expiry_date'];
	$billamt= $_POST['bill_amount'];
	$invoice= $_POST['invoice_number'];
	// $request= $_POST['entry_date'];
	$entered = $_POST['entered_by'];

	$insert_qry="INSERT INTO programs (program_name, renew_date, expiry_date, expiry_date, bill_amount, invoice_number, entry_date, entered_by) VALUES('$program', '$renew','$expiry', '$billamt','$invoice',now(),'$entered')";
	// $results = mysqli_query($conn, $insert_qry);
	if (mysqli_query($conn, $insert_qry)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $insert_qry . "<br>" . mysqli_error($conn);
	}
}
?>