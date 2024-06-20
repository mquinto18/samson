<div class="span3" id="sidebar">
    <img id="admin_avatar" class="img-polaroid" src="<?php echo $row['adminthumbnails']; ?>">
    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
        <li class="">
            <a href="dashboard.php"><i class="icon-chevron-right"></i><i class="icon-home icon-large"></i>&nbsp;Dashboard</a>
        </li>

        <!------/.* manage device sidebar*------->
        <li class="active">
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs"><i class="icon-chevron-right"></i><i class="icon-folder-open-alt icon-large"></i>&nbsp;Master File
                <div class="muted pull-right"><i class="caret"></i></div>
            </a>
            <ul id="bs" class="collapse">
               
                <li class="">
                    <a href="available_item.php"><i class="icon-chevron-right"></i><i class="icon-group"></i> Available Items</a>
                </li>
                <li class="">
					<a href="not_available_item.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>Not Available Items</a>
				</li>
            </ul>
        </li>



        <!------/.* tracsaction sidebar*------->
        <li class="">
            <a href="javascript:;" role="button" class="dropdown-toggle" data-toggle="collapse" data-target="#bs2"><i class="icon-chevron-right"></i><i class="icon-retweet icon-large"></i>&nbsp;Transaction
                <div class="muted pull-right"><i class="caret"></i></div>
            </a>
            <ul id="bs2" class="collapse">
                <li class="">
                    <a href="borrowing.php"><i class="icon-chevron-right"></i><i class="icon-share"></i>Borrowers Form</a>
                </li>
                <li class="">
					<a href="borrowed_item.php"><i class="icon-chevron-right"></i><i class="icon-share"></i>Borrowed Item</a>
				</li>
            </ul>
        </li>



        <!------/.* Report sidebar*------->
        
    </ul>

    <?php include('search_form.php'); ?>
</div>