<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>	
             	
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysqli_query($conn,"select * from user where user_id = '$session_id'")or die("query Failed");
			         $row = mysqli_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> Welcome! <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
                      </div>
                    </div>
     
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
									
<div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $stocks = mysqli_query($conn,"select * from items_available")or die("query Failed");
		 $stocks = mysqli_num_rows($stocks);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $stocks; ?></div>
                                        <div class="">All Items</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="tools.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
                    <?php 
                        $result_items_available = mysqli_query($conn, "SELECT * FROM items_available WHERE item_status = 'Available'") or die("Query Failed");
                        $total_items_available = mysqli_num_rows($result_items_available);
                        
                    ?>
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-share-square fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo   $total_items_available;?></div>
                                        <div>Availabe Items</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="available_item.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div> 				 							
<div id="page-wrapper">
           <div class="row-fluid">
		    
		<?php 
	     $client = mysqli_query($conn,"select * from user ")or die("query Failed");
		 $client = mysqli_num_rows($client);
		 ?>				
					<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-group fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $client;?></div>
                                        <div>Registered User</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="admin_user.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>   	
                    
                    <?php 
	     $Realease = mysqli_query($conn,"select * from borrowing_form where approval_status in (0,1)")or die("query Failed");
		 $Realease = mysqli_num_rows($Realease);
		 ?>		   
			<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa icon-ok  fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $Realease;?></div>
                                        <div>Borrowed Item</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="borrowed_list.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
              </div>	       
        </div>  	


               
				
				
			                 </div>
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />	