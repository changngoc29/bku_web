<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <style>
        <?php
        include "../styles/main.css";
        ?>
    </style>
    <title>Document</title>
</head>

<body>
    <!-- <div class="container m-auto text-center" id='navbar'>
        <header class="row py-3 mb-4 border-bottom">
            <div class="row col-md-10 col-5 col  navbar-left d-flex justify-content-start align-items-center">
                <img class="col-md-1 col-1" src="../img/HCMUT_official_logo.png" alt="HCMUT logo">

                <ul class="nav col-11 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="http://localhost/bku/index.php?page=home" class="nav-link px-2 link-secondary">Home</a></li>
                    <li class="product-nav"><a href="http://localhost/bku/index.php?page=courses" class="nav-link px-2 link-dark">Course</a>
                        <ul class="sub_nav">
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Business</a></a></li>
                            <li><a href="#">Language</a></li>
                        </ul>
                    </li>
                    <li><a href="http://localhost/bku/index.php?page=faqs" class="nav-link px-2 link-dark">FAQs</a></li>
                </ul>
            </div>


            <div class="row col-md-2 col-5 navbar_right text-center">

            </div>
        </header>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/bku/index.php?page=home">VTK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/bku/index.php?page=home">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Courses
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="http://localhost/bku/index.php?page=courses">Technology</a></li>
                            <li><a class="dropdown-item" href="#">Business</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="http://localhost/bku/index.php?page=faqs">FAQs</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div class="nav-auth ms-0 ms-lg-5">
                    <?php
                    if (isset($_SESSION["user_id"])) {
                        include "navbar/inLogin.php";
                    } else {
                        include "navbar/notInlogin.php";
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="navbar-separate"></div>