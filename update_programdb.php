<?php 
include('connection.php');
session_start();
	// If form submitted, insert values into the database.
if (isset($_POST['update'])){
    $id = $_POST['id'];
	$program= $_POST['program_name'];
	$renew= $_POST['renew_date'];
	$expiry= $_POST['expiry_date'];
	$billamt= $_POST['bill_amount'];
	$invoice= $_POST['invoice_number'];
	// $request= $_POST['entry_date'];
	$entered = $_POST['entered_by'];

	$update_qry="UPDATE programs set program_name = '$program', 
                                     renew_date = '$renew', 
                                     expiry_date = '$expiry', 
                                     bill_amount = '$billamt', 
                                     invoice_number = '$invoice', 
                                     entry_date = '$entry', 
                                     entered_by = '$entered',
                                     where id = '$id'";
	// $results = mysqli_query($conn, $insert_qry);
	if (mysqli_query($conn, $update_qry)) {
		echo "New record updated successfully";
	} else {
		echo "Error: " . $update_qry . "<br>" . mysqli_error($conn);
	}
}
?>