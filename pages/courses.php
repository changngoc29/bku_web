<?php
include "../components/navbar.php";
?>

<div class="container">
    <div class="row m-0">
        <?php
        $courses = getAllCourse();
        if (isset($_GET['id'])) {
            foreach ($courses as $course) {
                if ($course['id'] == $_GET['id']) {
                    echo "
                    <div class='container'>
                        <img class='card-img-top d-block w-50' src='{$course["image"]}' alt='Course image'>
                        <div class='card-body'>
                        <h4 class='card-title'>{$course["name"]}</h4>
                        <p class='card-text'>{$course["author"]}</p>
                        <p>{$course["price"]}$</p>
                    </div>
                    ";
                }
            }
        } else {
            foreach ($courses as $course) {
                echo "
            <div class='col-6 col-md-3 my-2 px-3 card'>
                <img class='card-img-top' src='{$course["image"]}' alt='Course image'>
                <div class='card-body'>
                    <h4 class='card-title'>{$course["name"]}</h4>
                    <p class='card-text'>{$course["author"]}</p>
                    <p>{$course["price"]}$</p>
                    <a href='http://localhost/bku/pages/courses.php?id={$course["id"]}' class='btn btn-primary'>View Course</a>
                </div>
            </div>
            ";
            }
        }

        ?>
    </div>
</div>


<?php
include "../components/footer.php";
?>