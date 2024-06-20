
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Technology Resource Inventory System">
    <meta name="author" content="Jonremus Sevellejo">
<link rel="shortcut icon" href="images/samson.png" />
</head>
<?php include('header_dashboard.php'); ?>
    <body id="home">
		<?php include('navbar_about.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12" id="content">
                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
								<div class="navbar navbar-inner block-header">
									<div id="" class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="index.php"><i class="icon-arrow-left"></i> Back</a></div>
									<script type="text/javascript">
																$(document).ready(function(){
																	$('#return').tooltip('show');
																	$('#return').tooltip('hide');
																});
																</script> 
								</div>
                            <div class="block-content collapse in">
							<h3></i><i class="icon-group"></i>&nbsp;Team Code Warrior Developers</h3>
							<hr>
                                <div class="span3">
										<center>
										<img id="developers" src="admin/developers/Jhon Ericson Bandoy.jpg" class="img-circle">
										<hr>
										<p>Name: Jhon Ericson Bandoy</p>
										<p>Address: Quzon City</p>
										<p>Email: bandits@gmail.com</p>
										<p>Position: Head Programmer</p>
										</center>
								</div>
								
                                <div class="span3">
										<center>
								        <img id="developers" src="admin/developers/Mark Allan C Reyes.jpg" class="img-circle">
								        <hr>
										<p>Name: Mark Allan Reyes</p>
										<p>Address: Taguig City</p>
										<p>Email: datamark.reyes@gmail.com</p>
										<p>Position: Web Programmer </p>
								        </center>
								</div>
								
                                <div class="span3">
										<center>
								        <img id="developers" src="admin/developers/Mery Love Metin.jpg" class="img-circle">
								        <hr>
										<p>Name: Francine Mery Love Metin</p>
										<p>Address: Quezon City</p>
										<p>Email: loveme@gmail.com</p>
										<p>Position: Document Specialist </p>
								        </center>
								</div>
								
                                <div class="span3">
										<center>
								        <img id="developers" src="admin/developers/Aron Tolentino.jpg" class="img-circle">
								        <hr>
										<p>Name: Aron Tolentino</p>
										<p>Address: North Ave. Quezon City</p>
										<p>Email: copycat.com</p>
										<p>Position: System Analysis </p>
								        </center>
								</div>
								
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
			<br><br><br><br><br><br>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>