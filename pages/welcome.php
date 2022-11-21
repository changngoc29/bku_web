<?php
include "../utils/userQuery.php";
$user = getUserInfo();
if (isset($_SESSION["user_id"])) {
    if ($user["role"] == "admin") {
        header("Location: /bku/pages/admin.php");
    }
}
include "../components/footer.php";
