<?php
include('lib/dbcon.php');
$conn = dbcon();
if (isset($_POST['reject'])) {
	$appid = $_POST['appid'];
	$sql = "UPDATE borrowing_form SET approval_status='5' WHERE id = '$appid'";
	$update_items_available_sql = "UPDATE items_available SET item_status = 'Available' WHERE item_id IN (SELECT item_id FROM borrowing_form WHERE id = '$appid')";
	$run_update_items_available = mysqli_query($conn, $update_items_available_sql);
	$run = mysqli_query($conn, $sql);
	if ($run == true) {
		echo "<script> 
					alert('Request Rejected');
					window.open('borrowed_list.php','_self');
				  </script>";
	} else {
		echo "<script> 
			alert('Failed To Approved');
			</script>";
	}
}
