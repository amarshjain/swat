<?php
    include "includes/admin_header.php";

    $query = "SELECT * FROM aboutus WHERE about_id = '1' ";
    $select_about = mysqli_query($connection, $query);
    while($row = mysqli_fetch_assoc($select_about)){
        $title = $row['title'];
        $body = $row['body'];
        $banner = $row['banner'];
        
    }

    if(isset($_POST['update_about'])){

        $title = $_POST['title'];
        $body = $_POST['body'];
        $banner = $_FILES['image']['name'];
        $banner_temp = $_FILES['image']['tmp_name'];
        
        move_uploaded_file($banner_temp, "../images/$banner");


        $query = "UPDATE aboutus SET ";
        $query .= "title = '{$title}',";
        $query .= "body = '{$body}',";
        $query .= "banner = '{$banner}' ";
        $query .= "WHERE about_id = 1";

        $update_about_query = mysqli_query($connection, $query);

        confirm_query($update_about_query);
        header("Location: aboutus.php");

    }

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
                                <label for="title">Title</label>
                                <input value="<?php echo $title; ?>" type="text" class="form-control" name="title">
                            </div>

                            <div class="form-group">
                                <label for="notice_body">Body</label>
                                <textarea class="form-control "name="body" id="body" cols="30" rows="10">
                                    <?php echo $body; ?>
                                </textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#body' ) )
                                            .catch( error => {
                                                console.error( error );
                                        } );
                                    </script>
                            </div>

                            <div class="form-group">
                                <label for="slider_image">Post Image</label>
                                <input type="file"  name="image">
                                <img width="80" src="../images/<?php echo $banner; ?>" alt="">

                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update_about" value="Update">
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