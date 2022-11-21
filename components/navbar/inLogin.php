<?php
include "../utils/userQuery.php";

$user = getUserInfo();
?>

<div class="nav-user text-center d-flex align-items-center">
    <p class="text-bold d-block my-auto me-2"><?php echo $user["name"]; ?></p>
    <a href="http://localhost/bku/utils/logout.php">Log out</a>
</div>