<?php
include "../components/navbar.php";
?>
<?php
if (isset($_SESSION["user_id"])) {
    if ($user["role"] != "admin") {
        header("Location: ./home.php");
    }
}
?>
<div class="row mt-3 container-fluid">
    <div class="col-2">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-user-list" data-bs-toggle="list" href="#user-list" role="tab" aria-controls="user-list">User</a>
            <a class="list-group-item list-group-item-action" id="list-course-list" data-bs-toggle="list" href="#list-course" role="tab" aria-controls="list-course">Course</a>
        </div>
    </div>
    <div class="col-10">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="user-list" role="tabpanel" aria-labelledby="list-user-list">
                <?php
                include "../components/admin/userTable.php";
                ?>
            </div>
            <div class="tab-pane fade" id="list-course" role="tabpanel" aria-labelledby="list-course-list">
                <?php
                include "../components/admin/courseTable.php";
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include "../components/footer.php"
?>