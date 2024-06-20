<?php	
	include('header.php');
	include('session.php');

	// Check if 'dep_name' is set in the URL
	if(isset($_GET['dep_name'])) {
		$get_name = $_GET['dep_name']; // Get department name
	} else {
		// Handle the case when 'dep_name' is not set
		$get_name = "Unknown Department";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Department Details</title>
	<?php include('script.php'); ?>
</head>
<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('item_location_slidebar.php'); ?>
			<div class="span9" id="content">
				<a href="item_department.php" class="btn btn-info" id="return" data-placement="right" title="Click to return"><i class="icon-arrow-left icon-large"></i> Back</a>
				<script type="text/javascript">
					$(document).ready(function(){
						$('#return').tooltip('show');
						$('#return').tooltip('hide');
					});
				</script>

				<!-----------------------------------sc logo for print------------------------------------>
				<h2 id="sc" align="center"><image src="images/scst1.jpg" width="45%" height="45%"/></h2>

				<!-------------------------------block ------------------------------>
				<?php
					// Fetch department details
					$location_query = mysqli_query($conn,"select * from department where dep_name = '$get_name'") or die('Query Failed');
					$location_row = mysqli_fetch_array($location_query);
				?>
				<div id="block_bg" class="block">
					<div class="navbar navbar-inner block-header">
						<div class="pull-left"><i class="icon-building"></i> Department <?php echo $get_name; ?></div>
						<div class="pull-right" id="">
							<?php 
								// Count number of devices in this department
								$my_device = mysqli_query($conn, "SELECT * FROM items_available WHERE department = '$get_name'") or die(mysqli_error($conn));
								$count_my_device = mysqli_num_rows($my_device);
							?>
							Number of Devices: <span class="badge badge-info"><?php echo $count_my_device; ?></span>
						</div>
					</div>

					<!-----------------------------------for Print display visible------------------------------------>
					<h4 id="sc">Location:<?php echo $get_name; ?> all Item List
						<div align="right" id="sc">Date: <?php echo date('l, F jS, Y'); ?></div>
					</h4>

					<!-----------------------------------device categorized by their location details using nav pills------------------------------------>	
					<div class="block-content collapse in">
						<div class="empty">
							<div class="pull-right">
								<!-- Print button (commented out because the element with id "print" is missing) -->
								<!--
								<a class="btn btn-info" id="print" data-placement="left" title="Click to Print" href="print_list_inventory.php<?php echo '?dep_id='.$get_id; ?>" class="btn btn-info"><i class="icon-print icon-large"></i> Print List</a>
								-->
								<script type="text/javascript">
									$(document).ready(function(){
										$('#print').tooltip('show');
										$('#print').tooltip('hide');
									});
								</script>
							</div>
						</div>
					</div> 

					<div class="block-content collapse in">
						<div class="span12">
							<form action="" method="post">
								<!-----------------------------------table form------------------------------------>	
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<thead>		
										<tr>			        
											<th>CUSTODIAN</th>
											<th>CATEGORY</th>
											<th>ITEM NAME</th>
											<th>SERIAL</th>
											<th>DESCRIPTION</th>
											<th>LOCATION / OFFICE</th>
											<th>CONDITION</th>				
										</tr>
									</thead>
									<tbody>
										<?php
											// Fetch items available in this department
											$item_query = mysqli_query($conn, "SELECT * FROM items_available WHERE department = '$get_name'") or die(mysqli_error($conn));
											while ($item_row = mysqli_fetch_assoc($item_query)) {
												echo "<tr>";
												echo "<td>{$item_row['custodian']}</td>";
												echo "<td>{$item_row['category']}</td>";
												echo "<td>{$item_row['item_name']}</td>";
												echo "<td>{$item_row['item_serial']}</td>";
												echo "<td>{$item_row['item_description']}</td>";
												echo "<td>{$item_row['department']}</td>";
												echo "<td>{$item_row['item_remarks']}</td>";
												echo "</tr>";
											}
										?>
									</tbody>
								</table>
							</form>	
							<!---------------------------------------------------- /block --------------------------------------------->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>
</html>
