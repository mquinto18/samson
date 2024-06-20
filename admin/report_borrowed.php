<?php include('header.php'); ?>
<?php include('session.php'); ?>

<style>
    .good {
        background-color: green;
    }

    .defective {
        background-color: red;
    }

    .export-form-container {
        display: flex;
        /* Adjust margin as needed */
    }

    .export-form {
        margin-right: 10px;
        /* Adjust margin as needed */
    }
</style>

<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('advance_search_slidebar.php'); ?>

            <div class="span9" id="">
                <div class="empty"></div>

                <?php
                $count_dev_name = mysqli_query($conn, "SELECT * FROM borrowing_form WHERE category = 'Tools'");
                $count = mysqli_num_rows($count_dev_name);
                ?>
                <div id="block_bg" class="block">
                    <div class="navbar navbar-inner block-header">
                        <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Item List</div>
                        <div class="muted pull-right">
                            Number of Available Item: <span class="badge badge-info"><?php echo $count; ?></span>
                        </div>
                    </div>

                    <div class="block-content collapse in">
                        <div class="span12">
                            <div class="span9">
                                <form id="exportForm" method="post" action="export_borrowed.php"> <!---Export to excel--->
                                    <button type="button" id="exportButton" class="btn btn-success">Export</button>
                                </form>


                                <div class="filter-options">
                                    <label for="filter">Filter By:</label>
                                    <select id="filter" onchange="filterData()">
                                        <option value="all">All</option>
                                        <option value="daily">Daily</option>
                                        <option value="weekly">Weekly</option>
                                        <option value="monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>

                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Full Name</th>
                                        <th>User Type</th>
                                        <th>Department</th>
                                        <th>Borrowed Item</th>
                                        <th>Date Borrowed</th>
                                        <th>Date Return</th>
                                        <th>Status</th>
                                        <th>Date Approved</th>
                                    </tr>
                                </thead>
                                <tbody id="refresh">
                                    <?php
                                    $device_name_query = mysqli_query($conn, "SELECT * FROM borrowing_form WHERE category = 'Tools'") or die("query Failed");
                                    $cnt = 1;
                                    while ($row = mysqli_fetch_array($device_name_query)) {
                                    ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['full_name']; ?></td>
                                            <td><?php echo $row['user_type']; ?></td>
                                            <td><?php echo $row['department']; ?></td>
                                            <td><?php echo $row['item_borrowed']; ?></td>
                                            <td><?php echo $row['date_borrowed']; ?></td>
                                            <td><?php echo $row['date_return']; ?></td>
                                            <td>
                                                <?php
                                                if ($row['approval_status'] == 0) {
                                                    echo "<span class='badge badge-warning'>Pending</span>";
                                                } else if ($row['approval_status'] == 5) {
                                                    echo "<span class='badge badge-danger'>Rejected</span>";
                                                } else if ($row['approval_status'] == 2) {
                                                    echo "<span class='badge badge-success'>Returned</span>";
                                                } else {
                                                    echo "<span class='badge badge-success'>Approved</span>";
                                                }

                                                ?>
                                            </td>
                                            <td><?php echo $row['approved_date']; ?></td>
                                        </tr>
                                    <?php
                                        $cnt++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <script>
                                function changeColor(selectElement) {
                                    var status = selectElement.value;
                                    if (status === 'approve') {
                                        // Change background color to green
                                        $(selectElement).closest('tr').css('background-color', 'lightgreen');
                                    } else if (status === 'reject') {
                                        // Change background color to red
                                        $(selectElement).closest('tr').css('background-color', 'lightcoral');
                                    }
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <?php include('script.php'); ?>

    <script>
        function filterData() {
            var filterValue = document.getElementById("filter").value;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "filter.php?filter=" + filterValue, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("refresh").innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        document.getElementById("exportButton").addEventListener("click", function() {
            var filterValue = document.getElementById("filter").value;
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "export_borrowed.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.responseType = 'blob';

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var blob = new Blob([xhr.response], {
                        type: 'text/csv'
                    });
                    var link = document.createElement('a');
                    link.href = window.URL.createObjectURL(blob);
                    link.download = 'borrowed_items.csv';
                    link.click();
                }
            };

            xhr.send("filter=" + filterValue);
        });
    </script>
</body>

</html>