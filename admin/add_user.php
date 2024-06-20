   <div class="row-fluid">
     <!-- block -->
     <div class="block">
       <div class="navbar navbar-inner block-header">
         <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Add System User</i></div>
       </div>
       <div class="block-content collapse in">
         <div class="span12">
           <form method="post">
             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="firstname" id="focusedInput" type="text" placeholder="Firstname" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="middlename" id="focusedInput" type="text" placeholder="Middlename" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="lastname" id="focusedInput" type="text" placeholder="Lastname" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="username" id="focusedInput" type="text" placeholder="Username" required>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <input class="input focused" name="password" id="focusedInput" type="password" placeholder="Password" required>
               </div>
             </div>
             <div class="control-group">
               <div class="controls">
                 <select id="edit_role" name="edit_role">
                   <option value="employee">Employee</option>
                   <option value="student">Student</option>
                 </select>
               </div>
             </div>

             <div class="control-group">
               <div class="controls">
                 <button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
                 <script type="text/javascript">
                   $(document).ready(function() {
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
    if (isset($_POST['save'])) {
      $firstname = $_POST['firstname'];
      $middlename = $_POST['middlename'];
      $lastname = $_POST['lastname'];
      $username = $_POST['username'];
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password using PHP's built-in password_hash function
      $role = $_POST['edit_role']; // Retrieve the selected role from the select element

      $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'") or die("Query Failed");
      $count = mysqli_num_rows($query);

      if ($count > 0) { ?>
       <script>
         alert('Data Already Exist');
       </script>
     <?php
      } else {
        mysqli_query($conn, "INSERT INTO user (username,password,firstname,middlename,lastname,role,adminthumbnails) VALUES ('$username','$password','$firstname','$middlename','$lastname','$role','images/NO-IMAGE-AVAILABLE.jpg')") or die("Query Failed");

        // Assuming $admin_username is defined elsewhere
        mysqli_query($conn, "INSERT INTO activity_log (date,username,action) VALUES (NOW(),'$admin_username','Add System User $firstname $lastname')") or die("Query Failed");
      ?>
       <script>
         window.location = "admin_user.php";
         alert('System User Successfully added');
       </script>
   <?php
      }
    }
?>
