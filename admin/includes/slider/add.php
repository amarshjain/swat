<?php
    createSlider();
?>


<form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="slider_title">Title</label>
         <input type="text" class="form-control" name="slider_title">
     </div>

   <div class="form-group">
        <label for="slider_image">Post Image</label>
         <input type="file"  name="image">
     </div>

     <div class="form-group">
            <label for="slider_body">Post Content</label>
            <textarea class="form-control "name="slider_body" id="body" cols="30" rows="10">
            </textarea>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#body' ) )
                        .catch( error => {
                            console.error( error );
                    } );
                </script>
     </div>
     
     

      <div class="form-group">
         <input class="btn btn-primary" type="submit" name="create_slider" value="Add Slider">
     </div>

</form>