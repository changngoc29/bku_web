<?php
if ($_GET['page']) {
    if ($_GET['page'] == 'home') {
        header("Location: /bku/pages/home.php");
    } elseif ($_GET['page'] == 'courses') {
        header("Location: /bku/pages/courses.php");
    } elseif ($_GET['page'] == 'faqs') {
        header("Location: /bku/pages/faqs.php");
    } elseif ($_GET['page'] == 'login') {
        header("Location: /bku/pages/login.php");
    } elseif ($_GET['page'] == 'admin') {
        header("Location: /bku/pages/admin.php");
    } elseif ($_GET['page'] == 'myCourse') {
        header("Location: /bku/pages/myCourse.php");
    }
} else {
    header("Location: /bku/pages/home.php");
}
