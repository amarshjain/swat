<?php
    include "includes/admin_header.php";

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
                            <small><?php echo $_SESSION['username'] ?></small>
                        </h1>

                    </div>
                </div>
                <!-- /.row -->

                       
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                    <i class="fas fa-images fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                <div class='huge'>
                                    <?php
                                        $query = "SELECT * FROM slides";
                                        $select_all_slides = mysqli_query($connection, $query);
                                        $all_slides_count = mysqli_num_rows($select_all_slides);
                                        echo $all_slides_count;
                                    ?>
                                </div>
                                        <div>Sliders</div>
                                    </div>
                                </div>
                            </div>
                            <a href="slider.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-scroll fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <div class='huge'>
                                        <?php
                                            $query = "SELECT * FROM notices";
                                            $select_all_notices = mysqli_query($connection, $query);
                                            $all_notices_count = mysqli_num_rows($select_all_notices);
                                            echo $all_notices_count;
                                        ?>
                                    </div>
                                    <div>Notices</div>
                                    </div>
                                </div>
                            </div>
                            <a href="notices.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-user-tie fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                    <div class='huge'>
                                        <?php
                                            $query = "SELECT * FROM testimonials";
                                            $select_all_tests = mysqli_query($connection, $query);
                                            $all_tests_count = mysqli_num_rows($select_all_tests);
                                            echo $all_tests_count;
                                        ?>
                                    </div>
                                        <div> Testimonials</div>
                                    </div>
                                </div>
                            </div>
                            <a href="testimonials.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <h1>Contact Enquiries : </h1>
                <?php
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            } else {
                                $source = '';
                            }

                            switch($source) {

                                case 'edit_contact':
                                    include "";     
                                    break;

                                    
                                default:
                                    include "includes/contactus/view_all.php";     
                            }
                        ?>
            </div>
            <!-- /.container-fluid -->

        </div>
     
<?php
    include "includes/admin_footer.php";
?>