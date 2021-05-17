<style>
    .card {
        margin: 0 auto;
        border: none;
    }
    .card .carousel-item {
        min-height: 190px;
    }
    .card .carousel-caption {
        padding: 0;
        right: 15px;
        left: 15px;
        top: 15px;
        color: #3d3d3d;
        border: 1px solid #ccc;
        min-height:175px;
        padding: 15px;
    }
    .card .carousel-caption .col-sm-3 {
        display: flex;
        align-items: center;
    }
    .card .carousel-caption .col-sm-9 {
        text-align: left;
    }
    .card .carousel-control-prev, .card .carousel-control-next {
        color: #3d3d3d !important;
        opacity: 1 !important;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-image: none;
        /* color: #fff; */
        font-size: 14px;
        background-color: #cd3a54;
        height: 32px;
        line-height: 32px;
        width: 32px;
    }
    .carousel-control-prev-icon:hover, .carousel-control-next-icon:hover {
        opacity: 0.85;
    }
    .carousel-control-prev {
        left: 40%;
        top: 110%;
    }
    .carousel-control-next {
        right: 40%;
        top: 110%;
    }
    .midline {
        width: 60px;
        border-top: 1px solid #d43025;
    }
    .carousel-caption h2 {
        font-size: 14px;
    }
    .carousel-caption h2 span {
        color: #cd3a54;
    }
    @media (min-width: 320px) and (max-width: 575px) {
    .carousel-caption {
        position: relative;
    }
    .card .carousel-caption {
        left: 0;
        top: 0;
        margin-bottom: 15px;
    }
    .card .carousel-caption img {
        margin: 0 auto;
    }
    .carousel-control-prev {
        left: 35%;
        top: 105%;
    }
    .carousel-control-next {
        right: 35%;
        top: 105%;
    }
    .card .carousel-caption h3 {
        margin-top: 0;
        font-size: 16px;
        font-weight: 700;
    }
    }
    @media (min-width: 576px) and (max-width: 767px) {
    .carousel-caption {
        position: relative;
    }
    .card .carousel-caption {
        left: 0;
        top: 0;
        margin-bottom: 15px;
    }
    .card .carousel-caption img {
        margin: 0 auto;
    }
    .card .carousel-caption h3, .card .carousel-caption small {
        text-align: center;
    }
    .carousel-control-prev {
        left: 35%;
        top: 105%;
    }
    .carousel-control-next {
        right: 35%;
        top: 105%;
    }
    }
    @media (min-width: 767px) and (max-width: 991px) {
    .card .carousel-caption h3 {
        margin-top: 0;
        font-size: 16px;
        font-weight: 700;
    }
    }

</style>

<section class="pt-5 pb-5">
			<div class="container">
				<h2 class="text-center">Testimonials</h2>
				<hr class="midline">
			  	<div class="card col-md-12 mt-2">
			      	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
			        	<div class="w-100 carousel-inner mb-5" role="listbox">

                            <?php

                            $query = "SELECT * FROM testimonials ";
                            $notices = mysqli_query($connection, $query);

                            while($row = mysqli_fetch_assoc($notices)){
                                $test_id = $row['test_id'];
                                $test_name = $row['test_firstname'] . ' ' . $row['test_lastname'];
                                $test_department = $row['test_department'];
                                $test_msg = $row['test_msg'];
                                $test_image = $row['test_image'];

                            ?>
                                <div class="carousel-item <?php if($test_id == 1) {echo "active";} ?>">
                                    <div class="bg"></div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="carousel-caption">
                                                <div class="row">
                                                    <div class="col-sm-3 col-4 align-items-start">
                                                        <img src="./images/<?php echo $test_image; ?>" alt="" width="100px" class="rounded-circle img-fluid">
                                                    </div>
                                                    <div class="col-sm-9 col-8">
                                                    <h2><?php echo $test_name; ?> - <span><?php echo $test_department; ?></span></h2>
                                                    <small><?php echo $test_msg; ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
			    		</div>
				        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i>  </span>
				          <span class="sr-only">Previous</span>
				        </a>
				        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i> </span>
				          <span class="sr-only">Next</span>
				        </a>
			  		</div>
				</div> 
			</div>
		</section>