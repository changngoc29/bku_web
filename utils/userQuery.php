<?php
include "configDB.php";
if (!isset($_SESSION)) {
    session_start();
}
function getUserInfo()
{
    global $conn;
    $user_id = mysqli_real_escape_string($conn, $_SESSION["user_id"]);
    $userQuery = mysqli_query($conn, "SELECT name, role FROM user WHERE id={$user_id}");

    $user = mysqli_fetch_assoc($userQuery);

    return $user;
}
?>

<?php ?>

