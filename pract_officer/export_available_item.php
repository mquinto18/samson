<?php 
include('./lib/dbcon.php');
$conn = dbcon();
include('session.php');
// ETO YUNG SA AVAILABLE ITEMS
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the request method is POST
    if(isset($_POST['export_available_item'])) {
        // Set headers for CSV file download
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="available_items.csv"');

        // Output CSV data
        $output = fopen('php://output', 'w');

        // Add header information
        fputcsv($output, array('  SAMSON COLLEGE OF SCIENCE AND TECHNOLOGY INC.'));
        fputcsv($output, array('587 EDSA Cubao, Quezon City')); // Add empty line for readability
        fputcsv($output, array(''));

        // Define CSV header
        $header = array("CATEGORY", "ITEM NAME", "SERIAL","DESCRIPTION", "DEPARTMENT", "CONDITION", "STATUS");
        fputcsv($output, $header);

        // Query available items
        $query = "SELECT category, item_name, item_serial, item_description, department, item_remarks, item_status FROM items_available WHERE item_status = 'Available' AND category='Tools'";
        $result = mysqli_query($conn, $query);

        // Check if query execution was successful
        if(!$result) {
            echo "Error: " . mysqli_error($conn);
            exit;
        }

        // Output data rows
        while($row = mysqli_fetch_assoc($result)) {
            fputcsv($output, $row);
        }

        // Close the output stream
        fclose($output);
        exit;
    } else {
    // Handle invalid request method
    header("HTTP/1.0 405 Method Not Allowed");
    echo "Method Not Allowed";
    exit;
}
?>
