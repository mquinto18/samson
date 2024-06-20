<?php include('header.php'); ?>
<?php include('session.php'); 

if(isset($_GET['filter'])) {
    // Get the filter value
    $filter = $_GET['filter'];
    
    // Modify your SQL query based on the selected filter option
    switch($filter) {
        case 'daily':
            $query = "SELECT * FROM borrowing_form WHERE DATE(date_borrowed) = CURDATE()";
            break;
        case 'weekly':
            $query = "SELECT * FROM borrowing_form WHERE YEARWEEK(date_borrowed) = YEARWEEK(NOW())";
            break;
        case 'monthly':
            $query = "SELECT * FROM borrowing_form WHERE MONTH(date_borrowed) = MONTH(CURDATE()) AND YEAR(date_borrowed) = YEAR(CURDATE())";
            break;
        case 'yearly':
            $query = "SELECT * FROM borrowing_form WHERE YEAR(date_borrowed) = YEAR(CURDATE())";
            break;
        case 'all':
            $query = "SELECT * FROM borrowing_form";
            break;
        default:
            // If invalid filter value is provided, return all records
            $query = "SELECT * FROM borrowing_form";
    }

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if there are any results
    if(mysqli_num_rows($result) > 0) {
        // Output HTML for the table rows
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td></td>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['full_name'] . '</td>';
            echo '<td>' . $row['user_type'] . '</td>';
            echo '<td>' . $row['department'] . '</td>';
            echo '<td>' . $row['item_borrowed'] . '</td>';
            echo '<td>' . $row['date_borrowed'] . '</td>';
            echo '<td>' . $row['date_return'] . '</td>';
            echo '</tr>';
        }
    } else {
        // No records found
        echo '<tr><td colspan="8">No records found</td></tr>';
    }
} else {
    // If filter parameter is not set, return all records
    $query = "SELECT * FROM borrowing_form";
    $result = mysqli_query($conn, $query);
    
    // Output HTML for the table rows
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td></td>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['full_name'] . '</td>';
        echo '<td>' . $row['user_type'] . '</td>';
        echo '<td>' . $row['department'] . '</td>';
        echo '<td>' . $row['item_borrowed'] . '</td>';
        echo '<td>' . $row['date_borrowed'] . '</td>';
        echo '<td>' . $row['date_return'] . '</td>';
        echo '</tr>';
    }
}
?>