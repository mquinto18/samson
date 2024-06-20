<?php
session_start();
include('dbcon.php');
$conn = dbcon();
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $query) or die("Query Failed");
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['id'] = $user['user_id'];
    if ($user['role'] == 'student' || $user['role'] == 'employee') {
        echo 'true';
    } elseif ($user['role'] == 'Super Admin') {
        echo 'superadd';
    } elseif ($user['role'] == 'officer') {
        echo 'officer';
    } else {
        echo 'true_admin';
    }
    mysqli_query($conn, "INSERT INTO user_log (username, login_date, user_id) VALUES ('$username', NOW(), " . $user['user_id'] . ")") or die("Query Failed");
} else {
    echo 'false';
}
?>
