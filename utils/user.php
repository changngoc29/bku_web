<?php
include "./configDB.php";
if (isset($_GET) && $_GET["method"] == "delete") {
    global $conn;
    $user_id = mysqli_escape_string($conn, $_GET["id"]);
    $query = mysqli_query($conn, "DELETE FROM `user` WHERE `id`={$user_id}");
    header("Location: /bku/pages/admin.php");
}
