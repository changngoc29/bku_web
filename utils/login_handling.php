<?php
include "./configDB.php";

if (isset($_POST["login"])) {
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);

    $checkLogin = mysqli_query($conn, "SELECT id FROM user WHERE username='$username' AND password='$password'");

    if (mysqli_num_rows($checkLogin) > 0) {
        echo "Log in successfully";
        $row = mysqli_fetch_assoc($checkLogin);
        $_SESSION["user_id"] = $row["id"];
        header("Location: ../pages/welcome.php");
    } else {
        echo "Fail log in";
    }
}
?>


<?php ?>