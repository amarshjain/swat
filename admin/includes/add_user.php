<?php
    createUser();
?>


<form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="title">Firstname</label>
         <input type="text" class="form-control" name="user_firstname">
     </div>

     <div class="form-group">
        <label for="title">Lastname</label>
         <input type="text" class="form-control" name="user_lastname">
     </div>

     <!-- <div class="form-group">
        <label for="title">Profile Picture</label>
         <input type="text" class="form-control" name="user_lastname">
     </div> -->

     <div class="form-group">
        <label for="category">Role : </label>
        <select name="user_role" id="">
            <option value="subscriber">Select Role</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
     
     </div>
     

     <div class="form-group">
        <label for="title">Username</label>
         <input type="text" class="form-control" name="username">
     </div>

     <div class="form-group">
        <label for="title">Email</label>
         <input type="email" class="form-control" name="user_email">
     </div>

     <div class="form-group">
        <label for="title">Password</label>
         <input type="password" class="form-control" name="user_password">
     </div>
     
     
<!-- 
      <div class="form-group">
        <select name="post_status" id="">
            <option value="draft">Post Status</option>
            <option value="published">Published</option>
            <option value="draft">Draft</option>
        </select>
     </div>
      -->
     
     
   <!-- <div class="form-group">
        <label for="post_image">Post Image</label>
         <input type="file"  name="image">
     </div> -->

      <div class="form-group">
         <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
     </div>

</form>