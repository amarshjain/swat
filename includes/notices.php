
    <h1>Notices</h1>
    <div class="overflow-auto" style="height: 35vw;overflow: scroll;">
        <?php

            $query = "SELECT * FROM notices ";
            $notices = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($notices)){
                $notice_id = $row['notice_id'];
                $notice_title = $row['notice_title'];
                $notice_body = $row['notice_body'];
        ?>
            <p><a href="notice.php?notice_id=<?php echo $notice_id; ?>"><?php echo $notice_title; ?></a></p>
            <hr>
        <?php } ?>
    
    </div>

  