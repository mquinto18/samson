
  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add Items</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="itemName" id="focusedInput" type="text" placeholder = "Item Name" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="brand" id="focusedInput" type="text" placeholder = "Brand" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="description" id="focusedInput" type="text" placeholder = "Description" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="remarks" id="focusedInput" type="text" placeholder = "Remarks" required>
                                          </div>
                                        </div>
									
						
										
										<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>				 
                    <?php
// Assuming $conn is your database connection

if (isset($_POST['save'])){
    // Retrieve values from POST data
    $itemName = $_POST['itemName'];
    $brand = $_POST['brand'];
    $description = $_POST['description'];
    $remarks = $_POST['remarks']; // Fixed variable name

    // Assuming you have appropriate validation and sanitization for the input data

    // Prepare and execute the query to insert data into the database
    $query = "INSERT INTO items_available (itemname, brand, description, remarks) VALUES ('$itemName', '$brand', '$description', '$remarks')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Query executed successfully, you can redirect or display a success message
        ?>
        <script>
            window.location = "employee.php";
            $.jGrowl("New Item Successfully added", { header: 'Item added' });
        </script>
        <?php
    } else {
        // Query execution failed, you might want to display an error message
        echo "Error: " . mysqli_error($conn);
    }
}
?>
