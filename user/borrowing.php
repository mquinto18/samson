<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>
    <?php include('navbar.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('sidebar/transaction.php'); ?>

            <div class="span9" id="content">
                <div class="row-fluid">

                    <h2 id="sc" align="center">
                        <image src="images/scst1.jpg" width="45%" height="45%" />
                    </h2>

                    <div id="block_borrow" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-check"></i>&nbsp;Borrowers Form</div>
                            <div class="muted pull-right">
                                <!-- eto yung sa gilid ng Borrowers Form -->
                            </div>
                        </div>


                        <!--------------------form------------------->

                        <div class="">
                            <div class="text-center text-city">
                                <h3>SAMSON COLLEGE OF SCIENCE AND TECHNOLOGY INC.</h3>
                                <h4>587 EDSA Cubao, Quezon City</h4>
                            </div>
                        </div>
                        <div class="container">
                            <div class="text-center text-city" style="padding: 10px;">

                            </div>
                        </div>


                        <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="block-content collapse in">
                                <div class="span12">

                                    <div class="text-center">
                                        <div class="control-group">
                                            <label class="control-label" for="user_type">Borrowers Type</label>
                                            <div class="controls">
                                                <select name="user_type" id="user_type" class="chzn-select" required>
                                                    <option value="">-- Select Borrowers Type --</option>
                                                    <option value="student">Student</option>
                                                    <option value="employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="control-group" id="full_name">
                                            <label class="control-label" for="full_name">Full Name</label>
                                            <div class="controls">
                                                <input type="text" id="full_name" name="full_name" placeholder="Enter the full name" required>
                                            </div>


                                            <!-- <div class="control-group">
                                                <label class="control-label" for="department">Department</label>
                                                <div class="controls">
                                                    <select name="department" id="department" class="chzn-select" required>
                                                        <option value="">-- Select Department --</option>
                                                        <option value="BS Crim">BS Criminology</option>
                                                        <option value="BS IT">BS Information Technology</option>
                                                        <option value="SHS">Senior High School</option>
                                                        <option value="Technical">Technical Courses</option>
                                                        <option value="Other">Others</option>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="control-group" id="other_department_div">
                                                <label class="control-label" for="other_department">Course/Section</label>
                                                <div class="controls">
                                                    <input type="text" id="department" name="department" placeholder="ex. BSIT 3 - 4" required>
                                                </div>
                                            </div>

                                            <!-- script to if others id-->
                                            <script>
                                                $(document).ready(function() {
                                                    $("#user_type").change(function() {
                                                        if ($(this).val() === "student") {
                                                            $(".id-upload-fields").show();
                                                        } else if ($(this).val() === "employee") {
                                                            $(".id-upload-fields").hide();
                                                            $("#uploadIdFront").closest('.control-group').show();
                                                        } else {
                                                            $(".id-upload-fields").hide();
                                                        }
                                                    });
                                                });
                                            </script>
                                        
                                        <div class="control-group">
                                                <label class="control-label" for="item_type">Item Type</label>
                                                <div class="controls">
                                                    <select name="category" id="category" class="chzn-select" required>
                                                        <option value="" selected>-- Select Item Type --</option>
                                                        <option value="equipment">Equipment</option>
                                                        <option value="tool">Tool</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="equipment_content" style="display: none;">
                                                <!-- Content for Equipment -->
                                                <div class="control-group">
                                                    <label class="control-label" for="category">Borrowed Equipment</label>
                                                    <div class="controls">
                                                        <select name="equipment_borrowed" id="equipment_borrowed"  required>
                                                            <optgroup label="======= Equipment =======">
                                                                <?php
                                                                $result = mysqli_query($conn, "SELECT * FROM `items_available` WHERE category = 'Equipment' AND item_status = 'Available' ORDER BY `items_available`.`item_name` ASC ") or die("query Failed");
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    echo "<option value='" . $row['item_name'] . "'>" . $row['item_name'] . ' ' . $row['item_brand'] . "</option>";
                                                                }
                                                                ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tool_content" style="display: none;">
                                                <!-- Content for Tools -->
                                                <div class="control-group">
                                                    <label class="control-label" for="category">Borrowed Tool</label>
                                                    <div class="controls" >
                                                        <select name="tool_borrowed" id="tool_borrowed"  required>
                                                            <optgroup label="======= Tools =======">
                                                                <?php
                                                                $result = mysqli_query($conn, "SELECT * FROM `items_available` WHERE category = 'Tools' AND item_status = 'Available' ORDER BY `items_available`.`item_name` ASC ") or die("Query Failed");
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    echo "<option value='" . $row['item_name'] . "'>" . $row['item_name'] . ' ' . $row['item_brand'] . "</option>";
                                                                }
                                                                ?>
                                                            </optgroup>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <script>
                                                $(document).ready(function() {
                                                    // Hide the content initially
                                                    $("#equipment_content").hide();
                                                    $("#tool_content").hide();

                                                    // Show the content based on the selected item type
                                                    $("#category").change(function() {
                                                        var category = $(this).val();
                                                        if (category === "equipment") {
                                                            $("#equipment_content").show();
                                                            $("#tool_content").hide();
                                                        } else if (category === "tool") {
                                                            $("#equipment_content").hide();
                                                            $("#tool_content").show();
                                                        } else {
                                                            $("#equipment_content").hide();
                                                            $("#tool_content").hide();
                                                        }
                                                    });
                                                });
                                            </script>


                                            <!-- <div class="control-group">
                                                <label class="control-label" for="borrowedItem">Borrowed Item</label>
                                                <div class="controls">
                                                    <select name="category" id="category" class="chzn-select" required>
                                                        <optgroup label="======= Equipment ======="></optgroup>
                                                        <?php
                                                        $result = mysqli_query($conn, "SELECT * FROM `items_available` WHERE category = 'Equipment' AND item_status = 'Available' ORDER BY `items_available`.`item_name` ASC ") or die("query Failed");
                                                        while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['item_name']; ?>"><?php echo $row['item_name'] . ' ' . $row['item_brand']; ?></option>
                                                        <?php } ?>

                                                        <optgroup label="======= Tools ======="></optgroup>
                                                        <?php
                                                        $result = mysqli_query($conn, "SELECT * FROM `items_available` WHERE category = 'Tools' AND item_status = 'Available' ORDER BY `items_available`.`item_name` ASC ") or die("Query Failed");
                                                        while ($row = mysqli_fetch_array($result)) {
                                                        ?>
                                                            <option value="<?php echo $row['item_name']; ?>"><?php echo $row['item_name'] . ' ' . $row['item_brand']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div> -->

                                            <div class="pull-upright">
                                                <ul class="nav nav-pills">
                                                    <div class="pull-upright">
                                                        <div class="control-group">
                                                            <label class="control-label" for="dateBorrowed">Date Borrowed</label>
                                                            <div class="controls">
                                                                <input type="date" id="date_borrowed" name="date_borrowed" required>
                                                            </div>
                                                        </div>

                                                        <div class="control-group">
                                                            <label class="control-label" for="dateReturn">Date Return</label>
                                                            <div class="controls">
                                                                <input type="date" id="date_return" name="date_return" required>
                                                            </div>
                                                        </div>

                                                        <div class="control-group id-upload-fields">
                                                            <label class="control-label" for="uploadIdFront">Upload ID (Front View)</label>
                                                            <div class="controls">
                                                                <input name="uploadIdFront" class="input-file uniform_on" id="uploadIdFront" type="file" required>
                                                            </div>
                                                        </div>

                                                        <div class="control-group id-upload-fields">
                                                            <label class="control-label" for="uploadIdBack">Upload ID (Back View)</label>
                                                            <div class="controls">
                                                                <input name="uploadIdBack" class="input-file uniform_on" id="uploadIdBack" type="file">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <input type="hidden" name="status" value="0">
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>

                                            <div class="control-group">
                                                <div class="controls">
                                                    <button type="submit" name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-small"> Save</i></button>
                                                    <script type="text/javascript">
                                                        $(document).ready(function() {
                                                            $('#save').tooltip('show');
                                                            $('#save').tooltip('hide');
                                                        });

                                                        $('#save').click(function() {
                                                            alert("Successfully added");
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                        </form>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <?php
    if (isset($_POST['save'])) {
        // Get form data
        $user_type = $_POST['user_type'];
        $full_name = $_POST['full_name'];
        $department = $_POST['department'];
        if ($department == "Other") {
            $department = $_POST['other_department'];
        }
        $category = $_POST['category'];
        $item_borrowed = $_POST['item_borrowed']; // nabago to
        $date_borrowed = $_POST['date_borrowed'];
        $approval_status = $_POST['status'];
        $item_id = $_POST['item_id'];
        $date_return = $_POST['date_return'];
        $uploadIdFront = $_FILES['uploadIdFront']['name'];
        $uploadIdBack = $_FILES['uploadIdBack']['name'];

        /// Get the category of the item based on the selected item_borrowed
        // Determine if it's equipment or tool based on item_type
        $category = $_POST['category'];
        if ($category === 'equipment') {
            $item_borrowed = $_POST['equipment_borrowed'];
        } elseif ($category === 'tool') {
            $item_borrowed = $_POST['tool_borrowed'];
        } else {
            // Handle error if item type is neither equipment nor tool
            // Redirect or show error message
            exit("Invalid item type selected");
        }

        // Fetch category from the database based on the selected item_borrowed
        // nabago to
        $query = "SELECT category FROM items_available WHERE item_name = '$item_borrowed'";
        $result = mysqli_query($conn, $query);
        if ($row = mysqli_fetch_assoc($result)) {
            $category = $row['category'];
        } else {
            // Handle error if the category is not found
            $category = "Unknown";
        }


        $upload_dir = "admin/uploads/";
        move_uploaded_file($_FILES['uploadIdFront']['tmp_name'], $upload_dir . $uploadIdFront);
        move_uploaded_file($_FILES['uploadIdBack']['tmp_name'], $upload_dir . $uploadIdBack);

        $update_query = "UPDATE items_available SET item_status = 'Not Available' WHERE item_name = '$item_borrowed'";

        $update_result = mysqli_query($conn, $update_query);
        $query = "INSERT INTO borrowing_form (user_type, full_name, department, other_department, category, item_borrowed, date_borrowed, date_return, id_front_image, id_back_image, approval_status, borrowers_type) 
        VALUES ('$user_type', '$full_name', '$department', '" . $_POST['other_department'] . "', '$category','$item_borrowed', '$date_borrowed', '$date_return', '$uploadIdFront', '$uploadIdBack', '$approval_status','user')";

        $result = mysqli_query($conn, $query);

        if ($result) {
    ?>
            <script>
                window.location = "borrowing.php";
                $.jGrowl("Successfully added", {
                    header: 'Added'
                });
            </script>
    <?php
        } else {
            $error_message = "Error: " . mysqli_error($conn);
            echo "<script>alert('$error_message');</script>";
        }
    }
    ?>


    <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>