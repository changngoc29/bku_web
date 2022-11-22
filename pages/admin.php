<?php
include "../components/navbar.php";
if (isset($_SESSION["user_id"])) {
    if ($user["role"] == "admin") {
        echo "<h4 class='text-center'>User table</h4>";
        include "../components/admin/userTable.php";
        echo "<h4 class='text-center'>Course table</h4>";
        include "../components/admin/courseTable.php";
    }
} else {
    echo '
        <h4 class="text-danger text-center my-5">You dont have permission to reach this page !</h4>
    ';
}
?>



<?php
include "../components/footer.php"
?>