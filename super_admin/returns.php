<?php
include('./lib/dbcon.php');
$conn = dbcon();
if (isset($_POST['return'])) {
    $appid = $_POST['appid'];
    
    // Update borrowing_form table
    $update_borrowing_form_sql = "UPDATE borrowing_form SET approval_status='2' WHERE id = '$appid'";
    $run_update_borrowing_form = mysqli_query($conn, $update_borrowing_form_sql);
    
    // Update items_available table
    $update_items_available_sql = "UPDATE items_available SET item_status = 'Available' WHERE item_id IN (SELECT item_id FROM borrowing_form WHERE id = '$appid')";
    $run_update_items_available = mysqli_query($conn, $update_items_available_sql);
    
    if ($run_update_borrowing_form && $run_update_items_available) {
        echo "<script> 
                    alert('Item Returned');
                    window.open('borrowed_list.php','_self');
                  </script>";
    } else {
        echo "<script> 
            alert('Failed To Approve');
            </script>";
    }
}
?>