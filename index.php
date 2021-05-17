<?php
    include "includes/header.php";
    include "includes/db.php";

?>

    <!-- Navigation -->
    <?php
        include "includes/navigation.php";
    ?>

    <div class="container">
        <hr>
        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <?php
                    include "includes/slider.php";
                ?>
            </div>

            <div class="col-md-4">
                <?php
                    include "includes/notices.php";
                ?>
            </div>
        </div>
        <hr>

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <?php
                    include "includes/testimonials.php";
                ?>
            </div>
        </div>
        <hr>

        
    </div>


<?php
    include "includes/footer.php";
?>