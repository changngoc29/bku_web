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

function getAllUser()
{
    global $conn;
    $array = [];
    $query = mysqli_query($conn, "SELECT id, name, username, role FROM user");

    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            array_push($array, $row);
        }
    }

    return $array;
}

function getAllCourse()
{
    global $conn;
    $array = [];
    $query = mysqli_query($conn, "SELECT id, name, author, price, image FROM course");

    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            array_push($array, $row);
        }
    }
    // print_r($array);

    return $array;
}
?>

<?php ?>

