<?php include('header.php'); ?>
<?php include('session.php'); ?>
<style>
    .img-polaroid{
        width: 150px;
    height: 100px; /* Set a fixed height to maintain aspect ratio */
    object-fit: cover; /* Ensure the image covers the entire container */
    }
</style>
<body id="class_div">
    <?php include('navbar.php') ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('department_slidebar.php'); ?>
            <div class="span9" id="content">
                <div class="row-fluid">                     
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left"><i class="icon-reorder icon-building"></i> Department Display List</div>
                            <div class="muted pull-right">
                                <?php 
                                $my_department = mysqli_query($conn,"select * from department ")or die("query Failed");
                                $count_my_department = mysqli_num_rows($my_department);?>
                                Number of Display Department: <span class="badge badge-info"><?php echo $count_my_department; ?></span>
                            </div>
                        </div>                              
                        <div class="block-content collapse in">
                            <div class="span12">
                                <ul class="da-thumbs grid-4">
                                    <?php 
                                    $query = mysqli_query($conn,"select * from department")or die("query Failed");                                    
                                    $count = mysqli_num_rows($query);
                                    
                                    if ($count > 0){
                                        while($row = mysqli_fetch_array($query)){
                                            $dep_id = $row['dep_id'];
                                    ?>
                                    <li id="del<?php echo $id; ?>" class="grid-item">
									<a href="myitem.php<?php echo '?dep_id='.$dep_id.'&dep_name='.$row['dep_name']; ?>"> <!-- Modified link here -->
                                            <img src ="<?php echo $row['thumbnails'] ?>" class="img-polaroid" alt="">
                                            <div>
                                                <span><p><?php echo $row['dep_name']; ?></p></span>
                                            </div>
                                        </a>
                                        <?php include('count_item.php') ?>
                                        <p class="class"><?php echo $row['dep_name']; ?>
                                            <?php if($not_count == '0'){ ?>
                                            <?php } else { ?>
                                                <span class="badge badge-success"><?php echo $not_count; ?></span>
                                            <?php } ?>
                                        </p>
                                    </li>
                                    <?php } } else { ?>                                      
                                    <div class="alert alert-info"><i class="icon-info-sign"></i> No Department Currently Added</div>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>                                  
            </div>              
        </div>
    <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>
</html>
<style>
    /* Add this CSS */
    .da-thumbs.grid-4 {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .da-thumbs.grid-4 li {
        width: 25%; /* Four columns */
        float: left;
        margin-bottom: 20px;
        padding: 0 15px;
        box-sizing: border-box;
    }

    @media (max-width: 767px) {
        .da-thumbs.grid-4 li {
            width: 50%; /* Two columns on smaller screens */
        }
    }
</style>
