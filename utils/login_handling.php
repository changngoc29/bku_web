<?php
include "./configDB.php";
session_start();

if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $checkLogin = mysqli_query($conn, "SELECT id FROM user WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($checkLogin) > 0) {
        $row = mysqli_fetch_assoc($checkLogin);
        $_SESSION["user_id"] = $row["id"];

        // create a new cookie here
        $cookie_name = "user";
        $cookie_value = $_SESSION["user_id"];
        setcookie($cookie_name, $cookie_value, time() + 3600, "/");

        header("Location: ../pages/welcome.php");
    }
    else {
        header("Location: ../pages/login.php");
    }
}
