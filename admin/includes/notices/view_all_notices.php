<table class="table table-bordered table-hover">

        <thead>
            <tr>
                <!-- <th><input type="checkbox" id="selectAllBoxes"></th> -->
                <th>Id</th>
                <th>Title</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            <?php
                findAllNotices();
            ?>  
            <?php
                deleteNotice();
            ?>   

        </tbody>
    </table>