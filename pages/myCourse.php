<?php
include "../components/navbar.php";
if (isset($_SESSION["user_id"])) {
    echo "My Course Page";
}
?>



<?php
include "../components/footer.php"
?>