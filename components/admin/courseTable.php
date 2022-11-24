<!-- Button trigger modal -->
<button type="button" class="btn btn-primary m-2" data-bs-toggle="modal" data-bs-target="#createCourseModal">
    Create Course
</button>

<!-- Modal -->
<div class="modal fade" id="createCourseModal" tabindex="-1" aria-labelledby="createCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCourseModalLabel">Create Course</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action=".././utils/course.php?method=create">
                    <div class="mb-3">
                        <label for="create-course-modal__name" class="form-label">Name</label>
                        <input type="text" name="course-name" class="form-control" id="create-course-modal__name">
                    </div>
                    <div class="mb-3">
                        <label for="create-course-modal__author" class="form-label">Author</label>
                        <input type="text" name="course-author" class="form-control" id="create-course-modal__author">
                    </div>
                    <div class="mb-3">
                        <label for="create-course-modal__price" class="form-label">Price</label>
                        <input type="text" name="course-price" class="form-control" id="create-course-modal__price">
                    </div>
                    <div class="mb-3">
                        <label for="create-course-modal__image" class="form-label">Image</label>
                        <input type="text" name="course-image" class="form-control" id="create-course-modal__image">
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

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Author</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $course_id = null;
        $course_array = getAllCourse();
        foreach ($course_array as $course) {
            $course_id = $course['id'];
            $url_delete = "http://localhost/bku/utils/course.php?id={$course['id']}&method=delete";
            echo "
            <tr>
            <th scope='row'>{$course['id']}</th>
            <td>{$course['name']}</td>
            <td>{$course['author']}</td>
            <td>{$course['price']}</td>
            <td>{$course['image']}</td>
            <td class='col-2'>
                <button class='course-change-btn btn btn-outline-primary' type='button' data-bs-toggle='modal' data-bs-target='#updateCourseModal' data-bs-whatever='{$course['id']}'>Change</button>
                <button class='course-change-btn btn btn-danger' ><a href=\"{$url_delete}\" class='text-decoration-none text-white'>Delete</a></button>
            </td>
            </tr>
            ";
        }
        ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="updateCourseModal" tabindex="-1" aria-labelledby="updateCourseModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateCourseModalLabel">Update User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action=".././utils/course.php?method=update">
                    <div class="mb-3">
                        <label for="course-modal__id" class="form-label">ID</label>
                        <input type="text" name="course-id" class="form-control" id="course-modal__id">
                    </div>
                    <div class="mb-3">
                        <label for="course-modal__name" class="form-label">Name</label>
                        <input type="text" name="course-name" class="form-control" id="course-modal__name">
                    </div>
                    <div class="mb-3">
                        <label for="course-modal__author" class="form-label">Author</label>
                        <input type="text" name="course-author" class="form-control" id="course-modal__author">
                    </div>
                    <div class="mb-3">
                        <label for="course-modal__price" class="form-label">Price</label>
                        <input type="text" name="course-price" class="form-control" id="course-modal__price">
                    </div>
                    <div class="mb-3">
                        <label for="course-modal__image" class="form-label">Image</label>
                        <input type="text" name="course-image" class="form-control" id="course-modal__image">
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
    var updateUserModal = document.getElementById('updateCourseModal')
    updateUserModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var id = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.

        var idInput = updateCourseModal.querySelector('#course-modal__id');

        idInput.value = id
    })
</script>