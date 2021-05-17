<?php
    createNotice();
?>


<form action="" method="post" enctype="multipart/form-data">    
     
     <div class="form-group">
        <label for="slider_title">Notice Title</label>
         <input type="text" class="form-control" name="notice_title">
     </div>

     <div class="form-group">
            <label for="notice_body">Notice Body</label>
            <textarea class="form-control "name="notice_body" id="body" cols="30" rows="10">
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
         <input class="btn btn-primary" type="submit" name="create_notice" value="Add Notice">
     </div>

</form>