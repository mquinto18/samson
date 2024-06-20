<?php include('header.php'); ?>
<?php include('session.php'); ?>
<style>
	.good {
		background-color: green;
	}

	.defective {
		background-color: red;
	}
</style>

<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('employee_sidebar.php'); ?>

			<div class="span9" id="">
				<div class="empty">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="icon-info-sign"></i> <strong>Note!:</strong> Select the checbox if you want to delete?
					</div>
				</div>

				<?php
				$count_dev_name = mysqli_query($conn, "select * from items_available where category = 'Tools'");
				$count = mysqli_num_rows($count_dev_name);
				?>
				<div id="block_bg" class="block">
					<div class="navbar navbar-inner block-header">
						<div class="muted pull-left"><i class="icon-folder-open-alt"></i> Tools Item List</div>
						<div class="muted pull-right">
							Number of Available Item: <span class="badge badge-info"><?php echo $count; ?></span>
						</div>
					</div>
					<div class="block-content collapse in">
						<div class="span12">
							<form action="delete_item.php" method="post">

								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to Delete check item" data-toggle="modal" href="#delete_item" id="delete" class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></a>
									<script type="text/javascript">
										$(document).ready(function() {
											$('#delete').tooltip('show');
											$('#delete').tooltip('hide');
										});
									</script>
									<?php include('modal_delete.php'); ?>
									<thead>
										<tr>
											<th></th>
											<th>CATEGORY</th>
											<th>ITEM NAME</th>
											<th>BRAND</th>
											<th>MODEL</th>
											<th>DESCRIPTION</th>
											<th>DEPARTMENT</th>
											<th>CONDITION</th>
											<th>STATUS</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$device_name_query = mysqli_query($conn, "SELECT * FROM items_available WHERE item_status = 'Available' AND category = 'Tools'") or die("Query Failed");
										while ($row = mysqli_fetch_array($device_name_query)) {
											$id = $row['item_id'];
										?>

											<tr>
												<td width="30">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>

												<td><?php echo $row['category']; ?></td>
												<td><?php echo $row['item_name']; ?> </td>
												<td><?php echo $row['item_brand']; ?></td>
												<td><?php echo $row['item_model']; ?></td>
												<td><?php echo $row['item_description']; ?></td>
												<td><?php echo $row['department']; ?></td>
												<td style="color: <?php 
													switch ($row['item_remarks']) {
														case 'Good':
															echo 'green';
															break;
														case 'Defective':
															echo 'red';
															break;
														case 'Missing':
															echo 'orange'; 
															break;
														case 'Disposed':
															echo 'gray'; 
															break;
														default:
															echo 'black'; 
													}
												?>">
													<?php echo $row['item_remarks']; ?>
												</td>

												<td><?php echo $row['item_status']; ?></td>
												<td></td>

												<?php include('toolttip_edit_delete.php'); ?>
												<td width="">
												</td>


											</tr>
										<?php } ?>
									</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
				<!-- /block -->
			</div>


		</div>
	</div>
	<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>

</html>