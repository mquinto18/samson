
  <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add New Technical User</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input type="password" class="input focused" name="password" id="focusedInput" type="text" placeholder = "Password" required>
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
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($conn,"select * from technical_user where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ")or die("query Failed");
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('User Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into technical_user (username,password,firstname,lastname,thumbnails) values('$username','$password','$firstname','$lastname','images/NO-IMAGE-AVAILABLE.jpg')")or die("query Failed");

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add Guest User $firstname $lastname')")or die("query Failed");
?>
<script>
window.location = "technical_user.php";
$.jGrowl("Technical User Successfully added", { header: 'Technical User add' });
</script>
<?php
}
}
?>