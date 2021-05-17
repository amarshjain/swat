
<table class="table table-bordered table-hover">

<thead>
    <tr>
        <!-- <th><input type="checkbox" id="selectAllBoxes"></th> -->
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Delete</th>

    </tr>
</thead>
<tbody>

    <?php
        findAllEnquiries();
    ?>  
    <?php
        deleteEnq();
    ?>   

</tbody>
</table>