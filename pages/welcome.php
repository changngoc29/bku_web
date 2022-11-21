<?php
include "../components/navbar.php";
if (isset($_SESSION["user_id"])) {
    if ($user["role"] == "admin") {
        include "../components/admin/userTable.php";
    }
}
include "../components/footer.php";
