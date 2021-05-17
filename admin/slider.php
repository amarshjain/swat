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

                                case 'add_slider':
                                    include "includes/slider/add.php";     
                                    break;

                                case 'edit_post':
                                    include "includes/edit_post.php";
                                    break;
                                    
                                default:
                                    include "includes/slider/view_all.php";     
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