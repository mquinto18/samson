<?php
include('./lib/dbcon.php');
$conn = dbcon();
if (isset($_POST['delete_item'])) {
    $id = $_POST['selector'];
    $N = count($id);
    echo $id;
    for ($i = 0; $i < $N; $i++) {
        $result = mysqli_query($conn, "DELETE FROM items_available where item_id='$id[$i]'");
    }
    header("location: available_item.php");
}
