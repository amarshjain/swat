<?php
    include "includes/header.php";
    include "includes/db.php";

?>

<?php
    if(isset($_POST['submit_contact'])){
        $contact_name   = mysqli_real_escape_string($connection, $_POST['contact_name']);
        $contact_email   = mysqli_real_escape_string($connection, $_POST['contact_email']);
        $contact_subject   = mysqli_real_escape_string($connection, $_POST['contact_subject']);
        $contact_body   = mysqli_real_escape_string($connection, $_POST['contact_body']);



            
        $query = "INSERT INTO contactus (contact_name, contact_email, contact_subject, contact_body) ";
        $query.= "VALUES('{$contact_name}','{$contact_email}','{$contact_subject}','{$contact_body}')";
        $contactus_query = mysqli_query($connection, $query);

        if(!$contactus_query){
            die("QUERY FAILED : " . mysqli_error($connection));
        }
        $message = "<div class='alert alert-success' role='alert'>
                        Your Query Has Been Sent Successfully!
                    </div>";
        echo $message;
    }
?>

    <!-- Navigation -->
    <?php
        include "includes/navigation.php";
    ?>

    <section class="container mt-5">
    <!--Contact heading-->
    <div class="row">
        <!--Grid column-->
        <div class="col-sm-12 mb-4 col-md-5">
            <!--Form with header-->
            <div class="card border-dark rounded-0">
                <div class="card-header p-0">
                <div class="bg-dark text-white text-center py-2">
                    <h3><i class="fa fa-envelope"></i> Contact Us:</h3>
                </div>
                </div>
                <div class="card-body p-3">
                        <form action="" method="POST">

                            <div class="form-group">
                                <label> Your name </label>
                                <div class="input-group">
                                    <input value="" type="text" name="contact_name" class="form-control" id="inlineFormInputGroupUsername" placeholder="Your name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your email</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="email" value="" name="contact_email" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <input type="text" name="contact_subject" class="form-control" id="inlineFormInputGroupUsername" placeholder="Subject">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <div class="input-group mb-2 mb-sm-0">
                                    <textarea class="form-control" name="contact_body" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" name="submit_contact" value="submit" class="btn btn-primary btn-block rounded-0 py-2">
                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        <!--Grid column-->
        
        <!--Grid column-->
        <div class="col-sm-12 col-md-7">
            <!--Google map-->
            <div class="mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.121018825102!2d86.43899201415016!3d23.81429528455792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6bc9fac678481%3A0x122cb1d133a89995!2sIndian%20Institute%20of%20Technology%20(Indian%20School%20of%20Mines)%20Dhanbad!5e0!3m2!1sen!2sin!4v1621256012424!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-map-marker"></i></a>
                <p> Main Campus IIT (ISM), Dhanbad, Jharkhand, INDIA, 826004 </p>
                </div>
                <div class="col-md-4">
                <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-phone"></i></a>
                <p>0326-2235401</p>
                </div>
                <div class="col-md-4">
                <a class="bg-primary px-3 py-2 rounded text-white mb-2 d-inline-block"><i class="fa fa-envelope"></i></a>
                <p> demo@iitism.ac.in</p>
                </div>
            </div>
        </div>
        <!--Grid column-->
            </div>
    </section>

<?php
    include "includes/footer.php";
?>