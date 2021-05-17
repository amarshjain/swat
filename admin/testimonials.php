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
                            <small>Author</small>
                        </h1>

                        <?php
                            if(isset($_GET['source'])){
                                $source = $_GET['source'];
                            } else {
                                $source = '';
                            }

                            switch($source) {

                                case 'add_test':
                                    include "includes/testimonials/add_test.php";     
                                    break;

                                    
                                default:
                                    include "includes/testimonials/view_all_tests.php";     
                            }
                        ?>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
     
<?php
    include "includes/admin_footer.php";
?>