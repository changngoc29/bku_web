<?php
include "./configDB.php";
if (isset($_GET) && $_GET["method"] == "delete") {
    global $conn;
    $user_id = mysqli_escape_string($conn, $_GET["id"]);
    $query = mysqli_query($conn, "DELETE FROM `user` WHERE `id`={$user_id}");
    header("Location: /bku/pages/admin.php");
}

if (isset($_GET) && $_GET["method"] == "update") {
    global $conn;
    $num_id = (int)$_POST['user-id'];
    $user_name = mysqli_escape_string($conn, $_POST['user-name']);
    $user_username = mysqli_escape_string($conn, $_POST['user-username']);
    $user_role = mysqli_escape_string($conn, $_POST['user-role']);


    if (isset($_POST)) {
        $query = mysqli_query($conn, "UPDATE `user` SET `username` = '{$user_username}', `role` = '$user_role', `name` = '$user_name' WHERE `user`.`id` = $num_id");
    }

    header("Location: /bku/pages/admin.php");
}

if (isset($_GET) && $_GET["method"] == "create") {
    global $conn;
    $user_name = mysqli_escape_string($conn, $_POST['user-name']);
    $user_username = mysqli_escape_string($conn, $_POST['user-username']);
    $user_password = mysqli_escape_string($conn, $_POST['user-password']);
    $user_role = mysqli_escape_string($conn, $_POST['user-role']);


    if (isset($_POST)) {
        $query = mysqli_query($conn, "INSERT INTO `user` (`id`, `username`, `password`, `role`, `name`) VALUES (NULL, '{$user_username}', '{$user_password}', '{$user_role}', '{$user_name}')");
    }

    header("Location: /bku/pages/admin.php");
}
