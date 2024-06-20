<?php include('header.php'); ?>
<?php include('session.php'); ?>
<style>
	.good {
		background-color: green;
	}

	.defective {
		background-color: red;
	}

	.modal-back {
		background-color: #FAA327;
		padding: 10px;
	}

	.modal-title h5 {
		padding: 0 20px;
		color: white;
		font-size: 20px;
	}

	.model-back {
		display: none;
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.5);
		z-index: 100;
		justify-content: center;
		align-items: center;
	}

	.pendings_table {
		position: absolute;
		top: 50%;
		/* Move the top edge of the element to the middle of the container */
		left: 50%;
		/* Move the left edge of the element to the middle of the container */
		transform: translate(-50%, -50%);
		/* Center the element horizontally and vertically */
		background-color: white;
	}

	.custom-table {
		width: 100%;
		border-collapse: collapse;
		border-spacing: 0;
	}

	/* Style for table header */
	.custom-table th {
		background-color: #f8f9fa;
		color: #212529;
		border-bottom: 2px solid #dee2e6;
		padding: 10px 15px;
		text-align: left;
		font-weight: bold;
	}

	/* Style for table body */
	.custom-table td {
		border-bottom: 1px solid #dee2e6;
		padding: 10px 15px;
	}

	/* Style for alternating row colors */
	.custom-table tbody tr:nth-of-type(even) {
		background-color: #f8f9fa;
	}

	/* Style for pending status */
	.custom-table .pending {
		color: orange;
	}

	/* Style for approved status */
	.custom-table .approved {
		color: green;
	}

	/* Style for action button */
	.custom-table .action-button {
		background-color: #007bff;
		color: #ffffff;
		border: none;
		padding: 6px 12px;
		border-radius: 4px;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		display: inline-block;
	}

	.table-container {
		max-height: 36em;
		/* 6 rows * 6em per row */
		overflow-y: auto;
	}

	/* Style for action button on hover */
	.custom-table .action-button:hover {
		background-color: #0056b3;
	}

	.modal-title {
		display: flex;
		justify-content: space-between;
		/* Align the button to the right */
		align-items: center;
		/* Center vertically */
	}

	.close {
		background-color: transparent;
		border: none;
		cursor: pointer;
		padding: 0;
		margin-right: 10px;
		/* Adjust the margin as needed */
	}

	.close span {
		font-size: 1.5rem;
	}

	.close:focus {
		outline: none;
	}

	.btn-danger {
		font-size: 10px;
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
				$count_dev_name = mysqli_query($conn, "select * from borrowing_form WHERE approval_status IN (0,1) AND category = 'Tools'");
				$count = mysqli_num_rows($count_dev_name);
				?>
				<div id="block_bg" class="block">
					<div class="navbar navbar-inner block-header">
						<div class="muted pull-left"><i class="icon-folder-open-alt"></i> Item List</div>
						<div class="muted pull-right">
							Number of Available Item: <span class="badge badge-info"><?php echo $count; ?></span>
						</div>
					</div>
					<div class="block-content collapse in">
						<div class="span12">
							<form method="post" action="delete_req.php">
								<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-placement="right" title="Click to see Pendings" href="#" id="delete" class="btn btn-warning ml-4 pendings" name=""><i class="fa fa-spinner"></i> Pendings</a>
									<a data-placement="right" title="Click to Return item" href="#" id="delete" class="btn btn-success ml-4 return" name=""><i class="fa fa-spinner"></i> Return</a>


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
										$device_name_query = mysqli_query($conn, "SELECT * FROM borrowing_form WHERE approval_status IN (0,1) AND category = 'Tools'") or die("query Failed");
										$cnt = 1;
										while ($row = mysqli_fetch_array($device_name_query)) {

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


	<div class="model-back" id="myModel">
		<div class="pendings_table">
			<div class="modal-content">
				<div class="modal-back">
					<div class="modal-title">
						<h5>Pendings</h5>
						<button type="button" class="close" aria-label="Close" id="closeModal">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
				<div class="table-container">
					<div class="custom-table">
						<table class="">
							<thead>
								<tr>
									<th>#</th>
									<th>FULL NAME</th>
									<th>USER TYPE</th>
									<th>DEPARTMENT</th>
									<th>BORROWED ITEM</th>
									<th>DATE BORROWED</th>
									<th>DATE RETURN</th>
									<th>STATUS</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM borrowing_form WHERE approval_status = 0 AND category = 'Tools'";
								$que = mysqli_query($conn, $sql);
								$cnt = 1;
								while ($result = mysqli_fetch_assoc($que)) {
								?>
									<tr>
										<td><?php echo $cnt; ?></td>
										<td><?php echo $result['full_name']; ?></td>
										<td><?php echo $result['user_type']; ?></td>
										<td><?php echo $result['department']; ?></td>
										<td><?php echo $result['item_borrowed']; ?></td>
										<td><?php echo $result['date_borrowed']; ?></td>
										<td><?php echo $result['date_return']; ?></td>
										<td>
											<?php
											if ($result['approval_status'] == 0) {
												echo "Pending";
											} else {
												echo "Approved";
											}
											?>
										</td>
										<td>
											<?php if ($result['approval_status'] == 0) { ?>
												<div class="butt-cont">
													<form action="accept.php?id=<?php echo $result['id']; ?>" method="POST">
														<input type="hidden" name="appid" value="<?php echo $result['id']; ?>">
														<input type="submit" class="btn btn-sm btn-success" name="approve" value="Approve">
													</form>
													<form action="reject.php?id=<?php echo $result['id']; ?>" method="POST">
														<input type="hidden" name="appid" value="<?php echo $result['id']; ?>">
														<input type="submit" class="btn btn-sm btn-danger" name="reject" value="Reject">
													</form>
												</div>

											<?php } ?>
										</td>
									</tr>
								<?php
									$cnt++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="model-back" id="myModel1">
		<div class="pendings_table">
			<div class="modal-content">
				<div class="modal-back">
					<div class="modal-title">
						<h5>Return</h5>
						<button type="button" class="close" aria-label="Close" id="closeModal1">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
				<div class="table-container">
					<div class="custom-table">
						<table class="">
							<thead>
								<tr>
									<th>#</th>
									<th>FULL NAMEQWE</th>
									<th>USER TYPE</th>
									<th>DEPARTMENT</th>
									<th>BORROWED ITEM</th>
									<th>DATE BORROWED</th>
									<th>DATE RETURN</th>
									<th>STATUS</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$sql = "SELECT * FROM borrowing_form WHERE approval_status = 1 AND category = 'Tools'";
								$que = mysqli_query($conn, $sql);
								$cnt = 1;
								while ($result = mysqli_fetch_assoc($que)) {
								?>
									<tr>
										<td><?php echo $cnt; ?></td>
										<td><?php echo $result['full_name']; ?></td>
										<td><?php echo $result['user_type']; ?></td>
										<td><?php echo $result['department']; ?></td>
										<td><?php echo $result['item_borrowed']; ?></td>
										<td><?php echo $result['date_borrowed']; ?></td>
										<td><?php echo $result['date_return']; ?></td>
										<td>
											<?php
											if ($result['approval_status'] == 0) {
												echo "Pending";
											} else {
												echo "Approved";
											}
											?>
										</td>
										<td>
											<?php if ($result['approval_status'] == 1) { ?>
												<form action="returns.php?id=<?php echo $result['id']; ?>" method="POST">
													<input type="hidden" name="appid" value="<?php echo $result['id']; ?>">
													<input type="submit" class="btn btn-sm btn-success" name="return" value="Return">
												</form>
											<?php } ?>
										</td>
									</tr>
								<?php
									$cnt++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const pendingBtns = document.querySelectorAll('.pendings');
			const pendingTable = document.getElementById('myModel');
			const closeModalBtn = document.getElementById('closeModal');

			pendingBtns.forEach(function(pendingBtn) {
				pendingBtn.addEventListener("click", function(event) {
					event.preventDefault();
					pendingTable.style.display = "flex";
				});
			});

			// Close modal button functionality
			closeModalBtn.addEventListener('click', function() {
				pendingTable.style.display = "none";
			});
		});
		document.addEventListener("DOMContentLoaded", function() {
			const pendingBtns = document.querySelectorAll('.return');
			const pendingTable = document.getElementById('myModel1');
			const closeModalBtn = document.getElementById('closeModal1');

			pendingBtns.forEach(function(pendingBtn) {
				pendingBtn.addEventListener("click", function(event) {
					event.preventDefault();
					pendingTable.style.display = "flex";
				});
			});

			// Close modal button functionality
			closeModalBtn.addEventListener('click', function() {
				pendingTable.style.display = "none";
			});
		});
	</script>
</body>

</html>