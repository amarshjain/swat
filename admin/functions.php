<?php

    function confirm_query($result){
        global $connection;
        if(!$result){
            die("QUERY FAILED : " . mysqli_error($connection));
        }
    }

    function escape($string) {
        global $connection;
        return mysqli_real_escape_string($connection, trim($string));
    }

    function users_online(){
        
        if(isset($_GET['onlineusers'])){
            
            global $connection;

            if(!$connection){
                session_start();
                include('../includes/db.php');
                    
                $session = session_id();
                $time = time();
                $timeout = 10;
                $timeout = $time - $timeout;

                $query = "SELECT * FROM users_online WHERE session = '$session' ";
                $send_query = mysqli_query($connection, $query);
                $count = mysqli_num_rows($send_query);
                if($count == NULL){
                    mysqli_query($connection, "INSERT INTO users_online(session, time) VALUES('$session', '$time') ");
                } else {
                    mysqli_query($connection, "UPDATE users_online SET time='$time' WHERE session = '$session' ");

                }

                $users_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time > '$timeout'");
                echo $count_users = mysqli_num_rows($users_online_query);
                
            }
        }
    }
    users_online();


    // **********
    // FOR SLIDER
    // **********


    function createSlider() {
        global $connection;

        if(isset($_POST['create_slider'])){

            $slide_title = $_POST['slider_title'];
    
            $slider_image = $_FILES['image']['name'];
            $slider_image_temp = $_FILES['image']['tmp_name'];
            
            $slider_body = $_POST['slider_body'];
    
            move_uploaded_file($slider_image_temp, "../images/$slider_image");
    
            $query = "INSERT INTO slides(slide_title, slider_image, slider_body) ";
            $query .= "VALUES('{$slide_title}', '{$slider_image}','{$slider_body}')";
            $create_slider_query = mysqli_query($connection, $query);
    
            confirm_query($create_slider_query);
            $created_slider_id = mysqli_insert_id($connection);
            echo "<p class='bg-success'>Slider Created</p>";

        }
    }

    function findAllSlides() {
        global $connection;
        $query = "SELECT * FROM slides ORDER BY slider_id DESC";
        $slides = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($slides)){

            $slider_id = $row['slider_id'];
            $slide_title = $row['slide_title'];
            $slider_image = $row['slider_image'];
            $slider_body = $row['slider_body'];

            echo "<tr>";
            // echo "<td><input type='checkbox' class='checkBoxes' name='checkBoxArray[]' value='$post_id'></td>";
            echo "<td>{$slider_id}</td>";
            echo "<td>{$slide_title}</td>";
            echo "<td><img width='100' src='../images/$slider_image' alt='image'></td>";
            echo "<td><a onClick=\"javascript: return confirm('Are You Sure, you want to delete it ?'); \" href='slider.php?delete=$slider_id'>DELETE</a></td>";
            echo "</tr>";

        }
    }

    function deleteSlide(){
        
        global $connection;

        if(isset($_GET['delete'])){
            $delete_slide_id = $_GET['delete'];
            $query = "DELETE FROM slides WHERE slider_id = {$delete_slide_id}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: slider.php");
        }
    }

    // **********
    // FOR NOTICES
    // **********


    function createNotice() {
        global $connection;

        if(isset($_POST['create_notice'])){

            $notice_title = $_POST['notice_title'];
            $notice_body = $_POST['notice_body'];


            $query = "INSERT INTO notices(notice_title, notice_body) ";
            $query .= "VALUES('{$notice_title}', '{$notice_body}')";
            $create_notice_query = mysqli_query($connection, $query);
    
            confirm_query($create_notice_query);
            $created_Notice_id = mysqli_insert_id($connection);
            echo "<p class='bg-success'>Notice Created</p>";

        }
    }

    function findAllNotices() {
        global $connection;
        $query = "SELECT * FROM notices ORDER BY notice_id DESC";
        $notices = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($notices)){

            $notice_id = $row['notice_id'];
            $notice_title = $row['notice_title'];
            $notice_body = $row['notice_body'];

            echo "<tr>";
            echo "<td>{$notice_id}</td>";
            echo "<td>{$notice_title}</td>";
            echo "<td><a onClick=\"javascript: return confirm('Are You Sure, you want to delete it ?'); \" href='notices.php?delete=$notice_id'>DELETE</a></td>";
            echo "</tr>";

        }
    }

    function deleteNotice(){
        
        global $connection;

        if(isset($_GET['delete'])){
            $delete_notice_id = $_GET['delete'];
            $query = "DELETE FROM notices WHERE notice_id = {$delete_notice_id}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: notices.php");
        }
    }


    // **********
    // FOR TESTIMONIALS
    // **********

    function createTestimonial() {
        global $connection;

        if(isset($_POST['create_test'])){

            $test_firstname = $_POST['test_firstname'];
            $test_lastname = $_POST['test_lastname'];
            $test_department = $_POST['test_department'];
            $test_msg = $_POST['test_msg'];

            $test_image = $_FILES['test_image']['name'];
            $test_image_temp = $_FILES['test_image']['tmp_name'];
                
            move_uploaded_file($test_image_temp, "../images/$test_image");
    
            $query = "INSERT INTO testimonials(test_firstname, test_lastname, test_department, test_msg, test_image) ";
            $query .= "VALUES('{$test_firstname}', '{$test_lastname}','{$test_department}', '{$test_msg}', '{$test_image}')";
            $create_test_query = mysqli_query($connection, $query);
    
            confirm_query($create_test_query);
            $created_test_id = mysqli_insert_id($connection);
            echo "<p class='bg-success'>Testimonial Created</p>";

        }
    }

    function findAllTestimonials() {
        global $connection;
        $query = "SELECT * FROM testimonials ORDER BY test_id DESC";
        $tests = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($tests)){

            $test_id = $row['test_id'];
            $test_firstname = $row['test_firstname'];
            $test_lastname = $row['test_lastname'];
            $test_department = $row['test_department'];
            $test_msg = $row['test_msg'];
            $test_image = $row['test_image'];


            echo "<tr>";
            // echo "<td><input type='checkbox' class='checkBoxes' name='checkBoxArray[]' value='$post_id'></td>";
            echo "<td>{$test_id}</td>";
            echo "<td>{$test_firstname} $test_lastname</td>";
            echo "<td><img width='100' src='../images/$test_image' alt='image'></td>";
            echo "<td>{$test_department}</td>";
            echo "<td>{$test_msg}</td>";
            echo "<td><a onClick=\"javascript: return confirm('Are You Sure, you want to delete it ?'); \" href='slider.php?delete=$test_id'>DELETE</a></td>";
            echo "</tr>";

        }
    }

    function deleteTestimonial(){
        
        global $connection;

        if(isset($_GET['delete'])){
            $delete_test_id = $_GET['delete'];
            $query = "DELETE FROM testimonials WHERE test_id = {$delete_test_id}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: testimonials.php");
        }
    }

    // **********
    // FOR USERS
    // **********


    function findAllUsers(){
        global $connection;
        $query = "SELECT * FROM users";
        $all_users = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($all_users)){

            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['user_password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];

            echo "<tr>";
            echo "<td>{$user_id}</td>";
            echo "<td>{$username}</td>";
            echo "<td>{$user_firstname}</td>";
            echo "<td>{$user_lastname}</td>";
            echo "<td>{$user_email}</td>";
            echo "<td>{$user_image}</td>";
            echo "<td>{$user_role}</td>";
            echo "<td><a href='users.php?change_to_admin=$user_id'>Create Admin</a></td>";
            echo "<td><a href='users.php?change_to_subs=$user_id'>Create Subscriber</a></td>";
            echo "<td><a href='users.php?source=edit_user&u_id=$user_id'>EDIT</a></td>";
            echo "<td><a href='users.php?delete=$user_id'>DELETE</a></td>";
            echo "</tr>";  

            // $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
            // $select_post = mysqli_query($connection, $query);
    
            // while($row = mysqli_fetch_assoc($select_post)){
    
            //     $post_id = $row['post_id'];
            //     $post_title = $row['post_title'];

            //     echo "<td><a href='../post.php?p_id=$post_id'>{$post_title}</a></td>";
            
            // } 

        }
    }

    function createUser() {
        global $connection;

        if(isset($_POST['create_user'])){
        
            $user_firstname = $_POST['user_firstname'];
            $user_lastname = $_POST['user_lastname'];
            $user_role = $_POST['user_role'];
            $username = $_POST['username'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];
    
            // $post_image = $_FILES['image']['name'];
            // $post_image_temp = $_FILES['image']['tmp_name'];
    
            // move_uploaded_file($post_image_temp, "../images/$post_image");
    
            $user_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10) );

            $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
            $query .= "VALUES('{$user_firstname}','{$user_lastname}', '{$user_role}','{$username}','{$user_email}','{$user_password}')";
            $create_user_query = mysqli_query($connection, $query);
    
            confirm_query($create_user_query);

            echo "User Created: " . " " ."<a href='users.php'>View Users</a> ";
        }
    }

    function deleteUser(){
        
        global $connection;

        if(isset($_SESSION['user_role']) == 'admin' && isset($_GET['delete'])){

            $delete_user_id = mysqli_real_escape_string($connection, $_GET['delete']);
            $query = "DELETE FROM users WHERE user_id = {$delete_user_id}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: users.php");
        }
    }

    function changeRole(){
        
        global $connection;

        if(isset($_GET['change_to_admin'])){
            $user_id = $_GET['change_to_admin'];
            $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $user_id ";
            $update_query = mysqli_query($connection, $query);
            confirm_query($update_query);
            header("Location: users.php");

        }

        if(isset($_GET['change_to_subs'])){
            $user_id = $_GET['change_to_subs'];
            $query = "UPDATE users SET user_role = 'subscriber' WHERE user_id = $user_id ";
            $update_query = mysqli_query($connection, $query);
            confirm_query($update_query);
            header("Location: users.php");

        }


    }

    function updateUser($user_id) {
        global $connection;

        if(isset($_POST['edit_user'])){
        
            $username = $_POST['username'];
            $user_firstname = $_POST['user_firstname'];
            $user_lastname = $_POST['user_lastname'];
            $user_role = $_POST['user_role'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];

            if(!empty($user_password)){
                $query_password = "SELECT user_password FROM users WHERE user_id=$user_id ";
                $get_user = mysqli_query($connection, $query_password);
                confirm_query($get_user);

                $row = mysqli_fetch_assoc($get_user);
                $db_user_password = $row['user_password'];

            }

            if($db_user_password != $user_password){
                $hashed_password = password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 12) );
            }

            $query = "UPDATE users SET ";
            $query .= "username = '{$username}',";
            $query .= "user_firstname = '{$user_firstname}',";
            $query .= "user_lastname = '{$user_lastname}',";
            $query .= "user_role = '{$user_role}',";
            $query .= "user_email = '{$user_email}',";
            $query .= "user_password = '{$hashed_password}' ";
            $query .= "WHERE user_id = {$user_id}";

            $update_user_query = mysqli_query($connection, $query);
    
            confirm_query($update_user_query);
            header("Location: users.php");

        }
    }

    function updateProfile($username) {
        global $connection;

        if(isset($_POST['update_profile'])){
        
            $username = $_POST['username'];
            $user_firstname = $_POST['user_firstname'];
            $user_lastname = $_POST['user_lastname'];
            $user_role = $_POST['user_role'];
            $user_email = $_POST['user_email'];
            $user_password = $_POST['user_password'];

    
            // $post_image = $_FILES['image']['name'];
            // $post_image_temp = $_FILES['image']['tmp_name'];
    
            // move_uploaded_file($post_image_temp, "../images/$post_image");
    
            // if(empty($post_image)){
            //     $query = "SELECT * from posts where post_id = $post_id";
            //     $select_image = mysqli_query($connection, $query);
            //     while($row = mysqli_fetch_assoc($select_image)){
            //         $post_image = $row['post_image'];
            //     }
                
            // }

            $query = "UPDATE users SET ";
            $query .= "username = '{$username}',";
            $query .= "user_firstname = '{$user_firstname}',";
            $query .= "user_lastname = '{$user_lastname}',";
            $query .= "user_role = '{$user_role}',";
            $query .= "user_email = '{$user_email}',";
            $query .= "user_password = '{$user_password}' ";
            $query .= "WHERE username = '{$username}'";

            $update_user_query = mysqli_query($connection, $query);
    
            confirm_query($update_user_query);
            header("Location: profile.php");

        }
    }

    // **********
    // FOR CONTACT US
    // **********

    function findAllEnquiries() {
        global $connection;
        $query = "SELECT * FROM contactus ORDER BY contact_id DESC";
        $enq = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($enq)){

            $contact_id = $row['contact_id'];
            $contact_name = $row['contact_name'];
            $contact_email = $row['contact_email'];
            $contact_subject = $row['contact_subject'];
            $contact_body = $row['contact_body'];


            echo "<tr>";
            // echo "<td><input type='checkbox' class='checkBoxes' name='checkBoxArray[]' value='$post_id'></td>";
            echo "<td>{$contact_id}</td>";
            echo "<td>{$contact_name}</td>";
            echo "<td>{$contact_email}</td>";
            echo "<td>{$contact_subject}</td>";
            echo "  <td>
                        <button type='button' class='btn btn-primary' data-toggle='popover' title='Message' data-content='{$contact_body}'>View Message</button>
                    </td>";

            echo "<td><a onClick=\"javascript: return confirm('Are You Sure, you want to delete it ?'); \" href='contactus.php?delete=$contact_id'>DELETE</a></td>";
            echo "</tr>";

        }
    }

    function deleteEnq(){
        
        global $connection;

        if(isset($_GET['delete'])){
            $delete_enq_id = $_GET['delete'];
            $query = "DELETE FROM contactus WHERE contact_id = {$delete_enq_id}";
            $delete_query = mysqli_query($connection, $query);
            header("Location: contactus.php");
        }
    }
?>