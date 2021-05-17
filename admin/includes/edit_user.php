<?php

    if(isset($_GET['u_id'])){
        $u_id = $_GET['u_id'];
    

    $query = "SELECT * FROM users WHERE user_id=$u_id";
    $select_users_by_id = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($select_users_by_id)){

        // $user_id = $row['user_id'];
        $username = $row['username'];
        $user_password = $row['user_password'];
        $user_firstname = $row['user_firstname'];
        $user_lastname = $row['user_lastname'];
        $user_email = $row['user_email'];
        $user_image = $row['user_image'];
        $user_role = $row['user_role'];

    }
    
    updateUser($u_id);

    } else {
        header("Location: index.php");
    }
?>

<form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="title">Firstname</label>
         <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
     </div>

     <div class="form-group">
        <label for="title">Lastname</label>
         <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
     </div>

     <!-- <div class="form-group">
        <label for="title">Profile Picture</label>
         <input type="text" class="form-control" name="user_lastname">
     </div> -->

     <div class="form-group">
        <label for="category">Role : </label>
        <select name="user_role" id="">

            <?php
                echo "<option value='{$user_role}'>{$user_role}</option>";

                if($user_role == 'admin'){
                    echo "<option value='subscriber'>subscriber</option>";
                } else {
                    echo "<option value='admin'>admin</option>";

                }
            ?>

        </select>
     
     </div>
     

     <div class="form-group">
        <label for="title">Username</label>
         <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
     </div>

     <div class="form-group">
        <label for="title">Email</label>
         <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
     </div>

     <div class="form-group">
        <label for="title">Password</label>
         <input type="password" autocomplete="off" class="form-control" name="user_password">
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
         <input class="btn btn-primary" type="submit" name="edit_user" value="Update User">
     </div>

</form>