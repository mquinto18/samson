<!DOCTYPE html>
<html>

<head>
	<title>Add Available Item</title>
	<?php include('header.php'); ?>
	<?php include('session.php'); ?>
	<?php include('script.php'); ?>
</head>

<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebars/transaction.php'); ?>

			<div class="span9" id="content">
				<div class="row-fluid">
					<h2 id="sc" align="center">
						<img src="images/scst1.jpg" width="45%" height="45%" />
					</h2>
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left"><i class="icon-check"></i>&nbsp;Available Item Form</div>
						</div>
						<div class="block-content collapse in">
							<div class="span12">
								<form method="post" class="control-group">
									<div class="empty">
										<div>
											<div class="control-group">
												<label class="control-label" for="inputPassword">Custodian</label>
												<div class="controls">
													<input type="text" class="span8" name="custodian" placeholder="Custodian Name" required>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Category</label>
												<div class="controls">
													<select name="category" class="chzn-select" required>
														<option></option>
														<option>Tools</option>
														<option>Equipment</option>
													</select>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputPassword">Item Name</label>
												<div class="controls">
													<input type="text" class="span8" name="name" placeholder="Item Name" required>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputPassword">Serial Number</label>
												<div class="controls">
													<input type="text" class="span8" name="serial" placeholder="Item Name" required>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Description</label>
												<div class="controls">
													<textarea class="span8" name="description" id="" required></textarea>
												</div>
											</div>
										</div>

										<div class="">
											
										<div class="control-group">
												<label class="control-label">Location / Office</label>
												<div class="controls">
													<select name="departments" class="chzn-select" required>
														<option value=""></option>
														<?php
														// Assuming $conn is your database connection
														$query = mysqli_query($conn, "SELECT dep_name FROM department WHERE dep_type = 'Location'") or die("Query Failed");
														if (mysqli_num_rows($query) > 0) {
															while ($row = mysqli_fetch_assoc($query)) {
																echo "<option value='" . $row['dep_name'] . "'>" . $row['dep_name'] . "</option>";
															}
														} else {
															echo "<option value=''>No Departments Found</option>";
														}
														?>
													</select>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Condition</label>
												<div class="controls">
													<select name="remarks" class="chzn-select" required>
														<option></option>
														<option>Good</option>
														<option>Defective</option>
														<option>Missing</option>
														<option>Disposed</option>
													</select>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label">Status</label>
												<div class="controls">
													<select name="latest_status" class="chzn-select" required>
														<option>Available</option>
														<option>Not Available</option>
													</select>
												</div>
											</div>
										</div>

									</div>
									<div class="control-group">
										<div class="controls">
											<button type="submit" class="btn btn-primary" name="save" title="Click to Release"><i class="icon-plus-sign"></i> Add Item</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php'); ?>
</body>

</html>

<?php
if (isset($_POST['save'])) {
	$category = $_POST['category'];
	$name = $_POST['name'];
	$brand = $_POST['brand'];
	$model = $_POST['model'];
	$custodian = $_POST['custodian'];
	$remarks = $_POST['remarks'];
	$departments = $_POST['departments'];
	$description = $_POST['description'];
	$status = $_POST['latest_status'];
	$serial = $_POST['serial'];

	$query = mysqli_query($conn, "SELECT * FROM items_available WHERE item_serial = '$serial' ") or die("query Failed");
	$count = mysqli_num_rows($query);

	if ($count > 0) { ?>
		<script>
			alert('Serial Already Exist');
		</script>
	<?php
	} else {
		mysqli_query($conn, "INSERT INTO items_available (custodian,category, item_name,item_brand, item_model, item_serial, item_description, department, item_status, item_remarks ) VALUES ('$custodian','$category','$name','$brand','$model','$serial','$description','$departments', '$status', '$remarks')") or die("query Failed");

		mysqli_query($conn, "INSERT INTO activity_log (date,username,action) VALUES (NOW(),'$admin_username','Add Item $serial')") or die("query Failed");
	?>
		<script>
			window.location = "add_available_item.php";
			$.jGrowl("System Item Successfully added", {
				header: 'System Item add'
			});
		</script>
<?php
	}
}
?>