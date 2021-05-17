<?php
    include "includes/admin_header.php";

    if(isset($_SESSION['username'])){

        $username = $_SESSION['username'];
        $query = "SELECT * FROM users WHERE username = '{$username}' ";
        $select_user_profile = mysqli_query($connection, $query);
        while($row = mysqli_fetch_assoc($select_user_profile)){
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];
        }
    }

    updateProfile($username);

?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php
            include "includes/admin_navigation.php";
        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                        <h1 class="page-header">
                            Welcome to Admin Portal
                            <small>Author</small>
                        </h1>

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
                                <input class="btn btn-primary" type="submit" name="update_profile" value="Update Profile">
                            </div>

                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
     
<?php
    include "includes/admin_footer.php";
?>