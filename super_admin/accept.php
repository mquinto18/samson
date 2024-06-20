<?php
include('lib/dbcon.php');
$conn = dbcon();
if (isset($_POST['approve'])) {
	$appid = $_POST['appid'];
	$sql = "UPDATE borrowing_form 
	SET approval_status = '1', approved_date = CURRENT_DATE() 
	WHERE id = '$appid';
	";
	$run = mysqli_query($conn, $sql);
	if ($run == true) {
		echo "<script> 
					alert('Application Approved');
					window.open('borrowed_list.php','_self');
				  </script>";
	} else {
		echo "<script> 
			alert('Failed To Approved');
			</script>";
	}
}
