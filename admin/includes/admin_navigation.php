<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand lg" href="index.php">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b0/Indian_Institute_of_Technology_%28Indian_School_of_Mines%29%2C_Dhanbad_Logo.png/220px-Indian_Institute_of_Technology_%28Indian_School_of_Mines%29%2C_Dhanbad_Logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>

        <a class="navbar-brand" href="index.php">Indian Institute of Technology (ISM) Dhanbad Admin</a>

    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <li><a href="../index.php">Home Site</a></li>
         
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
            
            <?php
                if(isset($_SESSION['username'])){
                    $firstname = $_SESSION['user_firstname'];
                    $lastname = $_SESSION['user_lastname'];
                    echo $firstname . " " . $lastname;
                }
            ?>
            
            <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>




    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">

        <ul class="nav navbar-nav side-nav">

            <li>
                <a href="index.php"><i class="fas fa-chart-line"></i> Dashboard</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#slides_dropdown"><i class="fas fa-images"></i> Slider <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="slides_dropdown" class="collapse">
                    <li>
                        <a href="slider.php">View All</a>
                    </li>
                    <li>
                        <a href="slider.php?source=add_slider">Add</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#notice_dropdown"><i class="fas fa-scroll"></i> Notices <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="notice_dropdown" class="collapse">
                    <li>
                        <a href="notices.php">View All</a>
                    </li>
                    <li>
                        <a href="notices.php?source=add_notice">Add</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#testimonials"><i class="fas fa-user-tie"></i> Testimonials <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="testimonials" class="collapse">
                    <li>
                        <a href="testimonials.php">View All</a>
                    </li>
                    <li>
                        <a href="testimonials.php?source=add_test">Add</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fas fa-user-circle"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="users.php">View All Users</a>
                    </li>
                    <li>
                        <a href="users.php?source=add_user">Add User</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="contactus.php"><i class="fas fa-address-book"></i> Contact Us</a>
            </li>

            <li>
                <a href="aboutus.php"><i class="fas fa-university"></i> About Us</a>
            </li>

        </ul>
         
    </div>





    <!-- /.navbar-collapse -->
</nav>