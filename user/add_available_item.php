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
			<?php include('transaction_sidebar.php'); ?>

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
										<div class="control-group">
											<label class="control-label">Item Name</label>
											<div class="controls">
												<input class="input focused" name="name" placeholder="Item Name" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Brand</label>
											<div class="controls">
												<input class="input focused" name="brand" placeholder="Brand" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Remarks</label>
											<div class="controls">
												<select name="remarks" class="chzn-select" required>
													<option></option>
													<option>Good Condition</option>
													<option>Defective</option>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Department Name</label>
											<div class="controls">
												<select name="departments" class="chzn-select" required>
													<option></option>
													<?php
													$result = mysqli_query($conn, "SELECT * FROM department") or die(mysqli_error($conn));
													while ($row = mysqli_fetch_array($result)) {
													?>
														<option value="<?php echo $row['dep_name']; ?>"><?php echo $row['dep_name']; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Description</label>
											<div class="controls">
												<input class="input focused" name="description" placeholder="Description" required>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label">Serial Number</label>
											<div class="controls">
												<input class="input focused" name="serial" placeholder="#########" required>
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
	$name = $_POST['name'];
	$brand = $_POST['brand'];
	$remarks = $_POST['remarks'];
	$departments = $_POST['departments'];
	$description = $_POST['description'];
	$serial = $_POST['serial'];

	$query = mysqli_query($conn, "SELECT * FROM items_available WHERE item_serial = '$serial' ") or die("query Failed");
	$count = mysqli_num_rows($query);

	if ($count > 0) { ?>
		<script>
			alert('Serial Already Exist');
		</script>
	<?php
	} else {
		mysqli_query($conn, "INSERT INTO items_available (item_name,item_brand,item_serial,item_description,item_remarks,item_department) VALUES ('$name','$brand','$serial','$description','$remarks','$departments')") or die("query Failed");

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