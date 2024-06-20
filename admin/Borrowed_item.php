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
			<?php include('transaction_sidebar.php'); ?>

			<div class="span9" id="">
				<div class="empty">
					<div class="alert alert-success alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="icon-info-sign"></i> <strong>Note!:</strong> Select the checbox if you want to delete?
					</div>
				</div>

				<?php
				$count_dev_name = mysqli_query($conn, "select * from borrowing_form WHERE approval_status <2 AND borrowers_type = 'toolcat'");
				$count = mysqli_num_rows($count_dev_name);
				?>
				<div id="block_bg" class="block">
					<div class="navbar navbar-inner block-header">
						<div class="muted pull-left"><i class="icon-folder-open-alt"></i>Borrowed Item</div>
						<div class="muted pull-right">
							Number of Borrowed Item: <span class="badge badge-info"><?php echo $count; ?></span>
						</div>
					</div>
					<div class="block-content collapse in">
						<div class="span12">
							<form method="post" action="delete_req.php">
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">


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
											<th></th>
											<th>Full Name</th>
											<th>User Type</th>
											<th>Department</th>
											<th>Borrowed Item</th>
											<th>Date Borrowed</th>
											<th>Date Return</th>
											<th>Status</th>

										</tr>
									</thead>
									<tbody>
										<?php
                                        $device_name_query = mysqli_query($conn, "SELECT * FROM borrowing_form WHERE category ='Tools' AND approval_status < 2 AND user_type IN ('student', 'Employee') AND borrowers_type = 'toolcat'") or die("Query Failed");										$cnt = 1;
										while ($row = mysqli_fetch_array($device_name_query)) {
											$id = $row['id'];
										?>

											<tr>
												<td width="30">
													<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $cnt; ?></td>
												<td><?php echo $row['full_name']; ?></td>
												<td><?php echo $row['user_type']; ?> </td>
												<td><?php echo $row['department']; ?></td>
												<td><?php echo $row['item_borrowed']; ?></td>
												<td><?php echo $row['date_borrowed']; ?></td>
												<td><?php echo $row['date_return']; ?></td>
												<td>
												<?php
												if ($row['approval_status'] == 0) {
													echo "<span class='badge badge-warning'>Pending</span>";
												} else {
													echo "<span class='badge badge-success'>Approved</span>";
												}
												$cnt++;
											}
												?>
												</td>
											</tr>
									</tbody>
								</table>
								<script>
									function changeColor(selectElement) {
										var status = selectElement.value;
										if (status === 'approve') {
											// Change background color to green
											$(selectElement).closest('tr').css('background-color', 'lightgreen');
										} else if (status === 'reject') {
											// Change background color to red
											$(selectElement).closest('tr').css('background-color', 'lightcoral');
										}
									}
								</script>
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