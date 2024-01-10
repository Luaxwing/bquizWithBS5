<?php
include_once "./api/db.php";
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BQ01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./plugin/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./plugin/js/jquery-1.9.1.min.js"></script>
    <script src="./plugin/js/js.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <?php
    // $do = $_GET['do'] ?? 'main';
    // $file = "./front/{$do}.php";
    // if (file_exists($file)) {
    //     $page = $file;
    // } else {
    //     $page = "./back/main.php";
    // }
    

    // $link = ($page == "./front/main.php") ? "" : "?do=main";
    

    ?>
    <!-- navbar in -->
    <nav class="navbar navbar-expand-lg bg-custom " ">
        <div class=" container-fluid">
        <a class="navbar-brand navText" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="<?= $link ?>#" id="settingBtn"><i class="fa-solid fa-gear " id="gear"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link ?>#news">最新消息</i></a>
                </li>
                <!-- <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li> -->
            </ul>
        </div>
        </div>
    </nav>
    <!-- navbar end -->

    <div class="wrapper">
        hello
        <?= $_SESSION['login']; ?>
        <?php

        // include $page;
        
        ?>
    </div>



    <!--  -->
    <br>

    <!-- footer in -->
    <footer class="bg-dark footer-custom"></footer>
    <!-- footer end -->



<script>
    $("#settingBtn").mouseover(function(){
        $("#gear").attr('class','fa-solid fa-gear fa-spin')
        // console.log('over');
    });
    $("#settingBtn").mouseout(function(){
        $("#gear").attr('class','fa-solid fa-gear')
        // console.log('out');
    });


</script>

</body>

</html>