<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
	<?php include('navbar.php'); ?>
	<div class="container-fluid">
		<div class="row-fluid">
			<?php include('sidebar/masterfile.php'); ?>

			<div class="span9" id="content">
				<div class="row-fluid">
					<script type="text/javascript">
						$(document).ready(function() {
							$('#add').tooltip('show');
							$('#add').tooltip('hide');
						});
					</script>
					<div id="sc" align="center">
						<image src="images/scst1.jpg" width="45%" height="45%" />
					</div>
					<?php
					$count_item = mysqli_query($conn, "select * from item");
					$count = mysqli_num_rows($count_item);
					?>
					<div id="block_bg" class="block">
						<div class="navbar navbar-inner block-header">
							<div class="muted pull-left"><i class="icon-reorder icon-large"></i> Item Stock (s) List</div>
							<div class="muted pull-right">
								Number of All Item: <span class="badge badge-info"><?php echo $count; ?></span>
							</div>
						</div>

						<h4 id="sc">Item Stock List
							<div align="right" id="sc">Date:
								<?php
								$date = new DateTime();
								echo $date->format('l, F jS, Y');
								?></div>
						</h4>

						<br>
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="empty">

									<div class="pull-left">
										<ul class="nav nav-pills">
											<?php
											$count_item = mysqli_query($conn, "select * from item	
		       ORDER BY item.item_id DESC");
											$count = mysqli_num_rows($count_item);
											?>
											<li class="active">
												<a href="item.php">Brand New&nbsp;<span class="label label-default"> <?php echo $count; ?></span></a>
											</li>

											<?php
											$count_item1 = mysqli_query($conn, "select * from release_details where remarks='/ Re-used'	
		       ORDER BY release_details.release_details_id DESC");
											$count1 = mysqli_num_rows($count_item1);
											?>

											<li class="">
												<a href="reuse_item.php">Re-Used Item&nbsp;<span class="label label-default"> <?php echo $count1; ?></span></a>
											</li>

										</ul>
									</div>

									<div class="pull-right">
										<!-- <a href=".php" class="btn btn-info" id="print" data-placement="left" title="Click to Print"><i class="icon-print icon-large"></i> Print List</a> 		      
		   <script type="text/javascript">
		     $(document).ready(function(){
		     $('#print').tooltip('show');
		     $('#print').tooltip('hide');
		     });
		   </script>        	  -->
									</div>
								</div>
							</div>
						</div>

						<div class="block-content collapse in">
							<div class="span12">
								<form action="" method="post">
									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
										<thead>
											<tr>
												<th class="empty"></th>
												<th>Item Name</th>
												<th>Item Description </th>
												<th>Inventory Code</th>
												<th>Item Brand </th>
												<th>Item Status / Remarks </th>
												<th>Item Realease Status </th>
											</tr>
										</thead>
										<tbody>
											<!-----------------------------------Content------------------------------------>
											<?php
											$device_query = mysqli_query($conn, "select * from item					    
		ORDER BY item.item_id DESC") or die("query Failed");
											while ($row = mysqli_fetch_array($device_query)) {
												$id = $row['item_id'];
											?>

												<tr>
													<td><?php
														$device_query2 = mysqli_query($conn, "select * from item 
		       ORDER BY item.item_id DESC ") or die("query Failed");
														$dev = mysqli_fetch_assoc($device_query2);
														if ($row['item_status'] == 'New') {
															echo '<i class="icon-check"></i><div id="hide"><strong>' . $row['item_status'] . '</strong></div>';
														} else if ($row['item_status'] == 'In-Used') {
															echo '<i class="icon-ok"></i><div id="hide"> <strong>' . $row['item_status'] . '</strong></div>';
														} else if ($row['item_status'] == 'Good condition') {
															echo '<i class="icon-ok"></i><div id="hide"><strong>' . $row['item_status'] . '</strong></div>';
														} else {
															echo '<i class="icon-ok"></i><div id="hide"><strong>' . $row['item_status'] . '</strong></div>';
														};
														?>
													</td>
													<td><?php echo $row['item_name']; ?></td>
													<td><?php echo $row['item_description']; ?></td>
													<td><?php echo $row['item_serial']; ?></td>
													<td><?php echo $row['item_brand']; ?></td>
													<td><?php
														$device_query1 = mysqli_query($conn, "select * from release_details
		       where item_id ='$id' and remarks =' / Brand new'
		       ORDER BY release_details.release_details_id DESC") or die("query Failed");
														$dev1 = mysqli_fetch_assoc($device_query1);
														if ($row['item_status'] == 'New') {
															echo '<div class="alert alert-success"><i class="icon-check"></i><strong>' . $row['item_status'] . '</strong></div>';
														} else if ($row['item_status'] == 'In-Used') {
															echo '<div class="alert alert-warning"><i class="icon-ok"> </i><strong>' . $row['item_status'] . '' . $dev1['remarks'] . '</strong></div>';
														} else if ($row['item_status'] == 'Good condition') {
															echo '<div class="alert alert-warning"><i class="icon-ok"></i><strong>' . $row['item_status'] . '' . $dev1['remarks'] . '</strong></div>';
														} else {
															echo '<div class="alert alert-danger"><i class="icon-wrench"></i><strong>' . $row['item_status'] . ' </strong></div>';
														};

														?></td>
													<?php
													$device_query12 = mysqli_query($conn, "select * from release_details
		where item_id ='$id' and remarks =' / Brand new'
		ORDER BY release_details.release_details_id DESC") or die("query Failed");
													$dev2 = mysqli_fetch_assoc($device_query12);
													?>
													<td><?php echo $dev2['release_status']; ?></td>
													<?php include('toolttip_edit_delete.php'); ?>

												</tr>

											<?php } ?>

										</tbody>
									</table>
								</form>


							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<?php include('footer.php'); ?>
	</div>
	<?php include('script.php'); ?>
</body>

</html>