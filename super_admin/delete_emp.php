<?php
include('./lib/dbcon.php');
$conn = dbcon();
if (isset($_POST['delete_emp'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM items_available where id='$id[$i]'");
}
header("location: employee.php");
}
?>