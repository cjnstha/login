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

	$insert_qry="INSERT INTO programs (program_name, renew_date, expiry_date, bill_amount, invoice_number, entry_date, entered_by) VALUES('$program', '$renew','$expiry', '$billamt','$invoice',now(),'$entered')";
	// $results = mysqli_query($conn, $insert_qry);
	if (mysqli_query($conn, $insert_qry)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $insert_qry . "<br>" . mysqli_error($conn);
	}
    header("location:page.php");
}
?>

<!doctype html>
	<html lang="en">
	
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8">
		<?php 
		include('title.php');	
		?>
	</head>
	<body>
	<!-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> -->
	<?php 
	include('header.php');
	?>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">

			<div class="card-box pd-20 height-50-p mb-30">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="pull-left">
									<h4 class="text-blue h4" style="color:blue;">Program Add Form</h4>
								</div>
								
							</div>
						</div>
					</div>
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
					<!-- <div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Program Add Form</h4>
							 <p class="mb-30">All bootstrap element classies</p> 
						</div>
					</div>  -->
					<form action="" method = "POST" name="program-form">
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Program Name</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" placeholder="Program Name" name="program_name" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Renew Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="Renew Date" type="date" name="renew_date" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Expiry Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="date" name="expiry_date" required>
							</div>
						</div>
						
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Bill Amount</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="100" type="number" placeholder="Bill Amount" name="bill_amount" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Invoice Number</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="invoice_number" placeholder="Invoice Number" required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Entry Date</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="date" name="entry_date" placeholder="Entry Date" value="<?php echo date('Y-m-d')?>    " required>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Entered By</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" type="text" name="entered_by" placeholder="Entered By" required>
							</div>
						</div>

						<div class="form-group">
							<div class= "col-md-4">
								<button class="btn btn-primary btn-lg btn-block" style="margin-left:227px;" name="submit" type="submit" value="submit">Submit</button>
							</div>
						</div>

					</form>
				</div>
				<!-- Default Basic Forms End -->
			</div>

			<div class="footer-wrap pd-20 mb-20 card-box" style="margin-top: 317px;">
				DeskApp - Template By <a href="https://www.lumbinibikasbank.com" target="_blank">Lumbini Bikas Bank </a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>

	<script src="form/js/jquery-3.3.1.min.js"></script>
	<script src="form/js/popper.min.js"></script>
	<script src="form/js/bootstrap.min.js"></script>
	<script src="form/js/main.js"></script>
</body>
</html>