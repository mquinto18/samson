     <div class="span3" id="sidebar">
	              <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>"> 
                  <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                           <li class=""> 
						   <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home"></i>&nbsp;Dashboard</a> 
						   </li>
						 
						 <!------/.* manage device sidebar*------->						
						 <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i>&nbsp;Master File
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs" class="collapse">		
							<li class="">
                            	<a href="borrowed_list.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Request List</a>
                            </li>					
                            
                            <li class="">
                            	<a href="available_item.php"><i class="icon-chevron-right"></i><i class="icon-group"></i> Available Items</a>
                            </li>
							<li class="">
                            	<a href="not_available_item.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>Not Available Items</a>
                            </li>
												   							
						    </ul>
						</li>
						
						
						 <!------/.* manage department sidebar*------->	
						  <li class="">						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs1"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Manage Department
						    <div class="muted pull-right"><i class="caret"></i></div></a>					
						    <ul id="bs1" class="collapse">						
                            <li class="">
                             <a href="item_department.php"><i class="icon-chevron-right"></i><i class="icon-desktop"></i> Department </a>
                            </li>
                            <li class="">
                            <a href="department.php"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt"></i> Add Department</a>
                            </li> 					   							
						    </ul>
						</li>
						
                         <!------/.* tracsaction sidebar*------->	
					    <li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-sitemap"></i>&nbsp;Transaction
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs2" class="collapse">						
                            <li class="">
								<a href="add_available_item.php"><i class="icon-chevron-right"></i><i class="icon-share"></i> Add Available Item</a>
							</li>
							<li class="">
								<a href="borrowing.php"><i class="icon-chevron-right"></i><i class="icon-share"></i> Borrowers Form</a>
							</li>
							<li class="">
									<a href="borrowed_item.php"><i class="icon-chevron-right"></i><i class="icon-share"></i> Borrowed Item</a>
								</li>
						    </ul>
						</li>
						
					  <!------/.* Manage User sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs3"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;Manage User
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs3" class="collapse">						
                            <!-- 
<li class="">
                            <a href="technical_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;Technical Staff</a>
                            </li>
-->
						    <li class="">
                            <a href="admin_user.php"><i class="icon-chevron-right"></i><i class="icon-user"></i>&nbsp;System User</a>
                            </li>
						    </ul>
						</li>
						
						<!------/.* System Log sidebar*------->	
						<li>						
						    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs4"><i class="icon-chevron-right"></i><i class="icon-book"></i>&nbsp;System log
							<div class="muted pull-right"><i class="caret"></i></div></a>						
						    <ul id="bs4" class="collapse">						
                            <li class="">
                            <a href="activity_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> Activity Log</a>
                            </li>
						    <li class="">
                            <a href="user_log.php"><i class="icon-chevron-right"></i><i class="icon-file"></i> User Log</a>
                            </li>
						    </ul>
						</li>
						
					  <!------/.* Report sidebar*------->
					  <li class="">
    <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs5">
        <i class="icon-chevron-right"></i>
        <i class="icon-search icon-large"></i>&nbsp;Report
        <div class="muted pull-right"><i class="caret"></i></div>
    </a>
    <ul id="bs5" class="collapse">
        <li>
            <a href="report_borrowed.php"><i class="icon-chevron-right"></i><i class="icon-search"></i>&nbsp;Tools & Equipment Report</a>
        </li>
    </ul>
</li>
                  </ul>																										
</div>