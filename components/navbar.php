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
        <?php include "../styles/main.css";
        ?>
    </style>
    <title>Document</title>
</head>

<body>
    <div class="container m-auto" id='navbar'>
        <header class="row py-3 mb-4 border-bottom">
            <div class="row col-md-10 navbar-left d-flex justify-content-start align-items-center">
                <img class="col-md-1" src="../img/HCMUT_official_logo.png" alt="HCMUT logo">

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


            <div class="col-md-2 navbar_right">
                <button type="button" class="btn btn-outline-primary me-2 login">
                    <a href="http://localhost/bku/index.php?page=login">Login</a>
                </button>
                <button type="button" class="btn btn-primary me-2 signup">
                    <a href="http://localhost/bku/index.php?page=signup">Sign up</a>
                </button>
            </div>
        </header>
    </div>