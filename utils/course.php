<?php
include "./configDB.php";

if (isset($_GET) && $_GET["method"] == "delete") {
    global $conn;
    $course_id = mysqli_escape_string($conn, $_GET["id"]);

    $query = mysqli_query($conn, "DELETE FROM `course` WHERE `id`={$course_id}");
    header("Location: /bku/pages/admin.php");
}

if (isset($_GET) && $_GET["method"] == "update") {
    global $conn;
    $num_id = (int)$_POST['course-id'];
    $course_name = mysqli_escape_string($conn, $_POST['course-name']);
    $course_author = mysqli_escape_string($conn, $_POST['course-author']);
    $course_price = mysqli_escape_string($conn, $_POST['course-price']);
    $course_image = mysqli_escape_string($conn, $_POST['course-image']);

    if (isset($_POST)) {
        $query = mysqli_query($conn, "UPDATE `course` SET `name` = '{$course_name}', `author` = '$course_author', `price` = '$course_price', `image` = '$course_image' WHERE `course`.`id` = $num_id");
    }

    header("Location: /bku/pages/admin.php");
}

if (isset($_GET) && $_GET["method"] == "create") {
    global $conn;
    $course_name = mysqli_escape_string($conn, $_POST['course-name']);
    $course_author = mysqli_escape_string($conn, $_POST['course-author']);
    $course_price = mysqli_escape_string($conn, $_POST['course-price']);
    $course_image = mysqli_escape_string($conn, $_POST['course-image']);


    if (isset($_POST)) {
        $query = mysqli_query($conn, "INSERT INTO `course` (`id`, `name`, `author`, `price`, `image`) VALUES (NULL, '{$course_name}', '{$course_author}', '{$course_price}', '{$course_image}')");
    }

    header("Location: /bku/pages/admin.php");
}
?>

<?php ?>