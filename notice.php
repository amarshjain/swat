<?php
    include "includes/header.php";
    include "includes/db.php";
?>

    <!-- Navigation -->
    <?php
        include "includes/navigation.php";
    ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php

                    if(isset($_GET['notice_id'])){
                    
                        $notice_id = $_GET['notice_id'];

                        $query = "SELECT * FROM notices WHERE notice_id = $notice_id ";
                        $notice = mysqli_query($connection, $query);

                        while($row = mysqli_fetch_assoc($notice)){
                            $notice_title = $row['notice_title'];
                            $notice_body = $row['notice_body'];

                ?>
                <hr>
                <!-- First Blog Post -->
                <h2>
                    <?php echo $notice_title ?>
                </h2>
                <hr>
                <p><?php echo $notice_body ?></p>

                <hr>
                    <?php
                        }
                    } else {
                        header("Location: index.php");
                    }
                ?>


        </div>
        <!-- /.row -->

        <hr>

<?php
    include "includes/footer.php";
?>