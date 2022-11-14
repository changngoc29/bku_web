<?php
session_start();
include "../utils/configDB.php";
include "../components/navbar.php";
?>


<div class="container mt-10">
    <h1 class="text-center">WELCOME TO OUR WEBSITE</h1>
    <?php
    // Check if the cookie work well ?
    // if (!isset($_COOKIE["user"])) {
    //     echo "Cookie user is not set";
    // } else {
    //     echo "Cookie is set";
    //     echo "Value is: " . $_COOKIE["user"];
    // }

    if (isset($_SESSION["user_id"])) {
        $user_id = mysqli_real_escape_string($conn, $_SESSION["user_id"]);
        $userQuery = mysqli_query($conn, "SELECT name FROM user WHERE id={$user_id}");

        $user = mysqli_fetch_assoc($userQuery);
        echo "<h1 class='text-center'>" . $user["name"] . "</h1>";
    }


    ?>
</div>

<div class="container text-center">
    <a href="http://localhost/bku/utils/logout.php" class="btn btn-primary">Log out</a>
</div>

<?php
include "../components/footer.php";
?>