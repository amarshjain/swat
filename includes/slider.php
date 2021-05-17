<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

  <?php

        $query = "SELECT * FROM slides";
        $slides = mysqli_query($connection, $query);
        $slides_count = mysqli_num_rows($slides);

        for($i=1;$i<$slides_count;$i++){

    ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" ></li>
    <?php } ?>
  </ol>
  <div class="carousel-inner">

    <?php

        $query = "SELECT * FROM slides";
        $slides = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($slides)){
            $slider_id = $row['slider_id'];
            $slide_title = $row['slide_title'];
            $slider_image = $row['slider_image'];
            $slider_body = $row['slider_body'];
    ?>
    <div class="carousel-item <?php if($slider_id == 2) {echo "active";} ?>">
      <img class="d-block w-100" src="./images/<?php echo $slider_image ?>" alt="Slide">
      <div class="carousel-caption d-none d-md-block">
            <h5><?php echo $slide_title; ?></h5>
            <p><?php echo $slider_body; ?></p>
        </div>
    </div>
    <?php
        }
    ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>