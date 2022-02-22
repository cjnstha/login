

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
          <div class="row align-items-center">
            <div class="col-md-8">
              <h4 class="font-20 weight-500 mb-10 text-capitalize">
                Table #4
              </h4>
            </div>
            <div class="col-md-4">
              <a href="add-program.php" class="btn btn-outline-primary" style="text-decoration:none;">Add Programs</a>
              <!-- <a href="export.php" class="btn btn-outline-primary" style="text-decoration:none;">Export</a> -->
            </div>
          </div>
      </div>
			

      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  
              <th scope="col">S.No.</th>
              <th scope="col">Title</th>
              <th scope="col">Renew Date</th>
              <th scope="col">Expiry Date</th>
              <th scope="col">Amount Paid</th>
              <th scope="col">Inovice No.</th>
              <th scope="col">Entered Date</th>
              <th scope="col">Remarks / Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
              include('connection.php');
              $qry = "SELECT * FROM programs";
              $result = mysqli_query($conn, $qry);
              $result_array = array();
              while($row = mysqli_fetch_array($result)){
              array_push($result_array, $row);
              }
              foreach($result_array as $key=>$value){
                $id = $value['id'];
                  $name = $value['program_name'];
                  $renew = $value['renew_date'];
                  $expiry = $value['expiry_date'];
                  $amount = $value['bill_amount'];
                  $invoice = $value['invoice_number'];
                  $request = $value['entry_date'];
                  // $name = $value['program_name'];
                  if($expiry < $renew){
                    $remarks = '<p style=color:green;font-weight:bolder;margin-bottom:0px;">Running</p>';
                  }
                  else{
                    $remarks = '<p style=color:red;font-weight:bolder;margin-bottom:0px;">Expired</p>';
                  }
               
               ?> 
            <tr scope="row">
              <td>
                <?php echo $id++?>
              </td>
              <td><a href="#"><?php echo $name?></a></td>
              <td>
              <?php echo $renew?>
              </td>
              <td>
              <?php echo $expiry?>
              </td>
              <td><?php echo $amount?></td>
              <td><?php echo $invoice?></td>
              <td><?php echo $request?></td>
              <!-- <td><?php echo $invoice?></td> -->
               <td><?php echo $remarks?></td>
            </tr>
            <?php }
            ?>
          </tbody>
        </table>
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