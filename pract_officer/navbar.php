<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    
</body>
<style>
    .notification-bells{
        position: absolute;
        top: 12px;
        cursor: pointer;
        right: 160px;
    }
    .notification-bell i{
        font-size: 20px;
    }
    .notification-bell{
        position: relative;
    }
    .notif{
        color: white;
        padding: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        background-color: red;
        height: 10px;
        position: absolute;
        top: -5px;
        border-radius: 100px;
        right: -7px;
        width: 10px;
    }
    .notification-dropdown {
    max-height: 200px;
    overflow-y: auto;
}

.notification-header {
    font-weight: bold;
    padding: 10px 10px;
    background-color: #f5f5f5;
   
}
.notification-message{
    border-bottom: 1px solid rgba(0,0,0,0.3);
}
.notification-new{
    padding: 3px 10px;
    display: flex;
    flex-direction: column;
}

.notification-dropdown{
    margin-left: -200px;
    width: 220px;
}
</style>
</html>
<?php
    // Check for overdue items
    $today = date("Y-m-d");
    $overdue_query = "SELECT * FROM borrowing_form WHERE date_return <= '$today' AND approval_status = 1 AND category = 'Equipment'";
    $overdue_result = mysqli_query($conn, $overdue_query);

    // Initialize notification message
    $notification_messages = array();

    // If there are overdue items, generate notification messages
    while ($row = mysqli_fetch_assoc($overdue_result)) {
        $username = $row['full_name'];
        $item_name = $row['item_borrowed'];
        // Append notification message
        $notification_messages[] = "<li>$username, the return date for $item_name is today.</li>";
    }
?>
  <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
               <div class="container-fluid">
				 <!-- Brand and toggle get grouped for better mobile display -->
				 <div class="navbar-header">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					 <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#">TOOLS AND EQUIPMENT MONITORING SYSTEM</span>
				 </div>
				  <!--.nav-collapse -->
                  <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                        <div class="notification-bells">
                            <div class="notification-bell dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa-solid fa-bell bell" style="color: #ffffff;"></i>
                                    <div class="notif"><?php echo mysqli_num_rows($overdue_result); ?></div>
                                </a>
                                <ul class="dropdown-menu notification-dropdown">
                                    <div class="notif-list">
                                    <?php 
                                    if (!empty($notification_messages)) {
                                        echo "<div class='notification-header'>Notifications</div>";
                                        echo "<div class='notification-new'>";
                                        foreach ($notification_messages as $notification_message) {
                                            echo "<p class='notification-message'>$notification_message</p>";
                                            echo "<div class='border-bottom'></div>"; // Add border bottom div
                                        }
                                        echo "</div>";
                                    } else {
                                        echo "<div class='notification-header'>No notifications</div>";
                                    }
                                    ?>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <?php 
                            $query= mysqli_query($conn,"select * from user where user_id = '$session_id'")or die('query failed');
                            $row = mysqli_fetch_array($query);
                        ?>
                        <li class="dropdown">
                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                                <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>">&nbsp;<?php echo $row['firstname']." ".$row['lastname'];  ?>
                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a tabindex="-1" href="change_password_admin.php"><i class="icon-cog"></i>&nbsp;Change Password</a>
                                    <a tabindex="-1" href="#myModal3" data-toggle="modal"><i class="icon-picture"></i>&nbsp;Change Picture</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>

        
		<?php include('admin_change_picture.php'); ?>	