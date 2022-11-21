<?php
include "../utils/userQuery.php";

$user = getUserInfo();
?>

<div class="nav-user text-center">
    <p class="text-bold"><?php echo $user["name"]; ?></p>
    <a href="http://localhost/bku/utils/logout.php">Log out</a>
</div>