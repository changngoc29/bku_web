<!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#createUserModal">
    Create User
</button>

<!-- Modal -->
<div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserModalLabel">Create User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action=".././utils/user.php?method=create">
                    <div class="mb-3">
                        <label for="create-user-modal__name" class="form-label">Name</label>
                        <input type="text" name="user-name" class="form-control" id="create-user-modal__name">
                    </div>
                    <div class="mb-3">
                        <label for="create-user-modal__username" class="form-label">Username</label>
                        <input type="text" name="user-username" class="form-control" id="create-user-modal__username">
                    </div>
                    <div class="mb-3">
                        <label for="create-user-modal__role" class="form-label">Role</label>
                        <input type="text" name="user-role" class="form-control" id="create-user-modal__role">
                    </div>
                    <div class="mb-3">
                        <label for="create-user-modal__password" class="form-label">Password</label>
                        <input type="text" name="user-password" class="form-control" id="create-user-modal__password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
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
        $row_id = null;
        $array = getAllUser();
        foreach ($array as $row) {
            $row_id = $row['id'];
            $url_delete = "http://localhost/bku/utils/user.php?id={$row['id']}&method=delete";
            echo "
            <tr>
            <th scope='row'>{$row['id']}</th>
            <td>{$row['name']}</td>
            <td>{$row['username']}</td>
            <td>@{$row['role']}</td>
            <td class='col-2'>
                <button class='user-change-btn btn btn-outline-primary' type='button' data-bs-toggle='modal' data-bs-target='#updateUserModal' data-bs-whatever='{$row['id']}'>Change</button>
                <button class='user-change-btn btn btn-danger' ><a href=\"{$url_delete}\" class='text-decoration-none text-white'>Delete</a></button>
            </td>
            </tr>
            ";
        }
        ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Update User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action=".././utils/user.php?method=update">
                    <div class="mb-3">
                        <label for="user-modal__id" class="form-label">ID</label>
                        <input type="text" name="user-id" class="form-control" id="user-modal__id">
                    </div>
                    <div class="mb-3">
                        <label for="user-modal__name" class="form-label">Name</label>
                        <input type="text" name="user-name" class="form-control" id="user-modal__name">
                    </div>
                    <div class="mb-3">
                        <label for="user-modal__username" class="form-label">Username</label>
                        <input type="text" name="user-username" class="form-control" id="user-modal__username">
                    </div>
                    <div class="mb-3">
                        <label for="user-modal__role" class="form-label">Role</label>
                        <input type="text" name="user-role" class="form-control" id="user-modal__role">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    var updateUserModal = document.getElementById('updateUserModal')
    updateUserModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var id = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.

        var idInput = updateUserModal.querySelector('#user-modal__id');

        idInput.value = id
    })
</script>
<?php

?>