<?php

if(!isset($dark_header)){
    $dark_header="";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>SHURFAT | Home</title>
</head>

<body dir="rtl">

    <!-- start preload block -->
    <div id="preloader">
        <div class="wavy">
            <span style="--i:1;">ش</span>
            <span style="--i:2;">ر</span>
            <span style="--i:3;">ف</span>
            <span style="--i:4;">ا</span>
            <span style="--i:5;">ت</span>
            <span style="--i:6;">.</span>
            <span style="--i:7;">.</span>
            <span style="--i:8;">.</span>
        </div>
    </div>

    <!-- sticky side bar -->

    <!-- start header -->
    <div class="SH-header fixed-top <?php echo $dark_header;?>">
        <div class="top-info">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-snapchat"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    </ul>
                    <ul>
                        <li><i class="fa-regular fa-envelope"></i> info@shurfat.com </li>
                        <li><a href="#"><i class="fa-brands fa-whatsapp"></i> 531200151 </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="assets/images/logo-white.svg" class="white-logo">
                    <img src="assets/images/logo-dark.svg" class="logo">
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">الرئيسيه</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">تعرف علينا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="projects.php">مشاريعنا</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>