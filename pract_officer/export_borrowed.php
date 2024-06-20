<?php include('./lib/dbcon.php'); // niremove ko header direct conn lang need
$conn = dbcon(); 
include('session.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if filter value is set
if (isset($_POST['filter'])) {
    // Get the filter value
    $filter = $_POST['filter'];

    // Modify your SQL query to select only necessary columns based on the selected filter option
    switch ($filter) {
        case 'daily':
            $query = "SELECT category, full_name, user_type, department, item_borrowed, date_borrowed, date_return, approved_date FROM borrowing_form WHERE DATE(date_borrowed) = CURDATE()";
            break;
        case 'weekly':
            $query = "SELECT category, full_name, user_type, department, item_borrowed, date_borrowed, date_return, approved_date FROM borrowing_form WHERE YEARWEEK(date_borrowed) = YEARWEEK(NOW())";
            break;
        case 'monthly':
            $query = "SELECT category, full_name, user_type, department, item_borrowed, date_borrowed, date_return, approved_date FROM borrowing_form WHERE MONTH(date_borrowed) = MONTH(CURDATE()) AND YEAR(date_borrowed) = YEAR(CURDATE())";
            break;
        case 'yearly':
            $query = "SELECT category, full_name, user_type, department, item_borrowed, date_borrowed, date_return, approved_date FROM borrowing_form WHERE YEAR(date_borrowed) = YEAR(CURDATE())";
            break;
        case 'all':
            $query = "SELECT category, full_name, user_type, department, item_borrowed, date_borrowed, date_return, approved_date FROM borrowing_form";
            break;
        default:
            // If invalid filter value is provided, return all records
            $query = "SELECT category, full_name, user_type, department, item_borrowed, date_borrowed, date_return, approved_date FROM borrowing_form";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if query execution was successful
    if(!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    // Check if any rows were returned by the query
    if(mysqli_num_rows($result) == 0) {
        echo "No data found for the selected filter.";
        exit;
    }

    // Set headers for CSV file download
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="borrowed_items.csv"');
    header('Pragma: no-cache');
    header('Expires: 0');

    // Output CSV headers
    $output = fopen('php://output', 'w');

    // Add header information
    fputcsv($output, array('  SAMSON COLLEGE OF SCIENCE AND TECHNOLOGY INC.'));
    fputcsv($output, array('587 EDSA Cubao, Quezon City')); // Add empty line for readability
    fputcsv($output, array(''));

    // Output data rows
    fputcsv($output, array('Category', 'Full Name', 'User Type', 'Department', 'Borrowed Item', 'Date Borrowed', 'Date Return', 'Date Approved'));
    while($row = mysqli_fetch_assoc($result)) {
        fputcsv($output, $row);
    }

    // Close the output stream
    fclose($output);
    exit;
}
?>
