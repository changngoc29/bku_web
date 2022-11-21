<?php
include "../components/navbar.php";
?>

<div class="container"></div>

<div class="container">
    <?php
    if (isset($_SESSION["user_id"]) && $user["role"] == "admin") {
        include "../components/admin/userTable.php";
    }
    ?>
</div>

<?php
include "../components/footer.php"
?>