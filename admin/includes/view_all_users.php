<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>UserId</th>
            <th>Username</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Image</th>
            <th>Role</th>
            <th>Admin</th>
            <th>Subscriber</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php
            findAllUsers();
        ?>  
        <?php
            changeRole();
        ?>  
        <?php
            deleteUser();
        ?>   

    </tbody>
</table>