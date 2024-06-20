<?php
include('./lib/dbcon.php');
$conn = dbcon();
if (isset($_POST['delete_req'])) {
    $id = $_POST['selector'];
    $N = count($id);
    for ($i = 0; $i < $N; $i++) {
        $result = mysqli_query($conn, "DELETE FROM borrowing_form WHERE id='$id[$i]'");
    }
    header("location: borrowed_list.php");
}