
<table class="table table-bordered table-hover">

<thead>
    <tr>
        <!-- <th><input type="checkbox" id="selectAllBoxes"></th> -->
        <th>Id</th>
        <th>Name</th>
        <th>Image</th>
        <th>Department</th>
        <th>Message</th>
        <th>Delete</th>

    </tr>
</thead>
<tbody>

    <?php
        findAllTestimonials();
    ?>  
    <?php
        deleteTestimonial();
    ?>   

</tbody>
</table>