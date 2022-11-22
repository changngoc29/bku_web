<table class="user-table table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Role</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $array = getAllUser();
        foreach ($array as $row) {
            echo "
            <tr>
            <th scope='row'>{$row['id']}</th>
            <td>{$row['name']}</td>
            <td>{$row['username']}</td>
            <td>@{$row['role']}</td>
            <td class='col-2'>
                <button class='user-change-btn btn btn-primary'>Change</button>
                <button class='user-change-btn btn btn-danger'><a href='http://localhost/bku/utils/user.php?id={$row["id"]}&method=delete' class='text-decoration-none text-white'>Delete</a>
                </button>
            </td>
            </tr>
            ";
        }
        ?>
    </tbody>
</table>

<a href="http://localhost/bku/utils/user.php"></a>

<?php

?>