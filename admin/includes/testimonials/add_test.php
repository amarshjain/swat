<?php
    createTestimonial();
?>


<form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="test_firstname">First Name</label>
         <input type="text" class="form-control" name="test_firstname">
     </div>

     <div class="form-group">
        <label for="test_lastname">Last Name</label>
         <input type="text" class="form-control" name="test_lastname">
     </div>

     <div class="form-group">
        <label for="test_department">Department</label>
         <input type="text" class="form-control" name="test_department">
     </div>

   <div class="form-group">
        <label for="test_image">User Image</label>
         <input type="file"  name="test_image">
     </div>

     <div class="form-group">
            <label for="test_msg">User Message</label>
            <textarea class="form-control "name="test_msg" id="body" cols="30" rows="10">
            </textarea>
     </div>
     
     

      <div class="form-group">
         <input class="btn btn-primary" type="submit" name="create_test" value="Add Testimonial">
     </div>

</form>