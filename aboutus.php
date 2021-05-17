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
        <div class="jumbotron">
            <?php

                    $aboutus_query = "SELECT * FROM aboutus WHERE about_id = 1";
                    $send_query = mysqli_query($connection, $aboutus_query);
                    
                    if(!$send_query){
                        die("QUERY FAILED : " . mysqli_error($connection));
                    }

                    while($row = mysqli_fetch_assoc($send_query)){
                        $title = $row['title'];
                        $body = $row['body'];
                        $banner = $row['banner'];
            ?>
            <img src="images/<?php echo $banner; ?>" alt="">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead">            	
                <?php echo $body; ?>
            </p>
            <hr class="my-4">
            <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="https://iitism.ac.in" role="button">Learn more</a>
            </p>
            <?php } ?>
        </div>
        <hr>
    </div>


<?php
    include "includes/footer.php";
?>