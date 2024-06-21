<?php
$current_tab = session()->get("current_tab");
$current_main_page = session()->get("current_main_page");
$current_sub_page = session()->get("current_sub_page");

function isMobileDevice()
{
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $mobileKeywords = array('Android', 'iPhone', 'iPad', 'Windows Phone', 'BlackBerry', 'Opera Mini', 'Mobile', 'Tablet');

    foreach ($mobileKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
            return true;
        }
    }

    return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="The St. Vincent de Ferrer College of Camarin, Inc. is a private educational institution run by a family of selfless educators and named St. Vincent de Ferrer Academy, Inc. in 2001.">
    <meta name="keywords" content="SVFC Website, SVFC Landing Page, St. Vincent de Ferrer College, St. Vincent de Ferrer Academy, private educational institution, selfless educators">

    <title>St. Vincent de Ferrer College of Camarin, Inc.</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url() ?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>public/vendor/animate.css/animate.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/bootstrap-icons/bootstrap-icons.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/boxicons/css/boxicons.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/glightbox/css/glightbox.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/swiper/swiper-bundle.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/font-awesome/css/font-awesome.css?v=1.15" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>public/css/style.css?v=1.16" rel="stylesheet">
</head>

<body class="container bg-light" id="body_container">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center mx-auto">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo" style="display: flex; align-items: center;">
                <img src="<?= base_url() ?>public/img/logo.png" alt="" style="margin-right: 10px;">
                <div class="logo-content" style="display: flex; flex-direction: column;">
                    <a href="#hero" class="scrollto">
                        <span class="school-name" style="font-size: 20px;" id="full_sn">St. Vincent de Ferrer College of Camarin, Inc.</span>
                        <span class="school-name d-none" style="font-size: 20px;" id="abbr_sn">SVFC of Camarin, Inc.</span>
                        <small style="display: block; font-size: 12px; color: #334240;">The Home of Quality and Innovative Education</small>
                    </a>
                </div>
            </div>
            <!-- Navigator -->
            <nav id="navbar" class="navbar">
                <ul>
                    <!-- Home -->
                    <li><a class="nav-link active" href="#hero">Home</a></li>
                    <!-- About -->
                    <li class="dropdown"><a href="javascript:void(0)">
                            <span>About</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a class="nav-link" href="<?= base_url() ?>about/svfc_history">SVFC History</a></li>
                            <li><a class="nav-link" href="<?= base_url() ?>about/college_seal">College Seal</a></li>
                            <li><a class="nav-link" href="<?= base_url() ?>about/philosophy_mission_and_vision">Philosophy, Mission, and Vision</a></li>
                            <li><a class="nav-link" href="<?= base_url() ?>about/goals_and_objectives">Goals and Objectives</a></li>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Facilities</a></li>
                            <li><a class="nav-link" href="<?= base_url() ?>about/svfc_hymn">SVFC Hymn</a></li>
                        </ul>
                    </li>
                    <!-- Programs -->
                    <li class="dropdown"><a href="javascript:void(0)">
                            <span>Programs</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Preparatory</a></li>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Elementary</a></li>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Junior High</a></li>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Senior High</a></li>
                            <li><a class="nav-link no_function" href="javascript:void(0)">College</a></li>
                        </ul>
                    </li>
                    <!-- Admissions -->
                    <li class="dropdown"><a href="javascript:void(0)">
                            <span>Admissions</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Special Education Program Department (SEPD)</a></li>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Homeschooling</a></li>
                        </ul>
                    </li>
                    <!-- Contact Us -->
                    <li><a class="nav-link" href="<?= base_url() ?>contact_us">Contact Us</a></li>
                    <!-- Portal -->
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span>Portal</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a class="nav-link" href="https://portal.svfc-edu.com/login" target="_blank" rel="noopener noreferrer">Student Portal</a></li>
                            <li><a class="nav-link" href="https://portal.svfc-edu.com/faculty/login" target="_blank" rel="noopener noreferrer">Faculty Portal</a></li>
                        </ul>
                    </li>
                    <!-- Login -->
                    <?php if (session()->get("user_id")) : ?>
                        <li class="dropdown">
                            <a href="javascript:void(0)">
                                <span><?= session()->get("user_name") ?></span>
                                <i class="bi bi-chevron-down"></i>
                            </a>
                            <ul>
                                <li><a class="nav-link <?= $current_tab == "admin/list_of_messages" ? "active" : null ?>" href="<?= base_url() ?>admin/list_of_messages">List of Messages</a></li>
                                <?php if (session()->get("user_type") == "mis") : ?>
                                    <li><a class="nav-link <?= $current_tab == "admin/manage_user_accounts" ? "active" : null ?>" href="<?= base_url() ?>admin/manage_user_accounts">Manage User Accounts</a></li>
                                <?php endif ?>
                                <li><a class="nav-link" href="javascript:void(0)" id="update_my_account" user_id="<?= session()->get("user_id") ?>">Update My Account</a></li>
                                <li><a class="nav-link" href="<?= base_url() ?>admin/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php else : ?>
                        <li><a class="nav-link" id="btn_login" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#login_modal">Login</a></li>
                    <?php endif ?>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <!-- ======= Hero Container ======= -->
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                <div class="carousel-inner" role="listbox">
                    <!-- Slide 1 -->
                    <div class="carousel-item carousel-item_2 active" style="background-image: url(<?= base_url() ?>public/img/bg_pink.png);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <div class="home-wrapper">
                                    <img src="<?= base_url() ?>public/img/logo.png" alt="Logo" class="mb-2" style="max-width: 150px;">
                                    <h2 class="animate__animated animate__fadeInDown display-4 school-name" style="color: black;">St. Vincent de Ferrer College of Camarin, Inc.</h2>
                                    <p class="animate__animated animate__fadeInUp" style="color: black;">The Home of Quality and Innovative Education</p>
                                    <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto" style="color: black;">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url(<?= base_url() ?>public/img/bg_2.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown display-4 school-name">St. Vincent de Ferrer College of Camarin, Inc.</h2>
                                <p class="animate__animated animate__fadeInUp">The Home of Quality and Innovative Education</p>
                                <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url(<?= base_url() ?>public/img/bg_3.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown display-4 school-name">St. Vincent de Ferrer College of Camarin, Inc.</h2>
                                <p class="animate__animated animate__fadeInUp">The Home of Quality and Innovative Education</p>
                                <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4 -->
                    <div class="carousel-item" style="background-image: url(<?= base_url() ?>public/img/bg_4.jpg);">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown display-4 school-name">St. Vincent de Ferrer College of Camarin, Inc.</h2>
                                <p class="animate__animated animate__fadeInUp">The Home of Quality and Innovative Education</p>
                                <a href="#main" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-double-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-double-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>

    <!-- ======= Main ======= -->
    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section class="about bg-white">
            <div class="container">
                <div class="section-title">
                    <h2 style="text-transform: none;"><span class="school-name">St. Vincent de Ferrer College</span> History</h2>
                    <p><span class="school-name">St. Vincent de Ferrer College of Camarin, Inc.</span>, is a private educational institution managed by a dedicated family of educators.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?= base_url() ?>public/img/bg_with_logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content">
                        <h3><span class="school-name">St. Vincent de Ferrer College of Camarin, Inc.</span> objectives are as follows:</h3>
                        <ol style="text-align: justify;">
                            <li class="mb-3">To provide quality yet affordable education to poor but academically equipped youths of Camarin;</li>
                            <li class="mb-3">To support the government's goal of bringing all Filipinos to school;</li>
                            <li class="mb-3">To help alleviate the standard of living of the people of Camarin by providing courses/programs responsive to the demands of the community;</li>
                            <li class="mb-3">To help promote a continuing interest in education as well as improve the standards of living of the people of Camarin by providing the demands of an emerging industrial society; and,</li>
                        </ol>
                        <a class="normal-btn" href="<?= base_url() ?>about/svfc_history">Read More</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Mission, Vision, Etc ======= -->
        <section class="more-services section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <i class="bi bi-book card-img-top text-center" style="font-size: 200px"></i>

                            <div class="card-body">
                                <h5 class="card-title">Our Philosophy</h5>
                                <p class="card-text line-clamp" style="text-align: justify;">The St. Vincent de Ferrer College of Camarin, Inc. was established to serve as a prime instrument in educating and molding morally upright, self-reliant, God-fearing and community-oriented citizens of Camarin. This is to guarantee that those who have less in life will have the opportunity of wider access to quality yet affordable basic and tertiary education and skills training.</p>
                                <a href="<?= base_url() ?>about/philosophy_mission_and_vision" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <i class="bi bi-lightbulb card-img-top text-center" style="font-size: 200px"></i>

                            <div class="card-body">
                                <h5 class="card-title">Our Vision</h5>
                                <p class="card-text line-clamp" style="text-align: justify;">We envision the St. Vincent de Ferrer College of Camarin, Inc. as a leading learner-centered arts and trades skills institution, bridging perseverance and practical wisdom in the service of society, especially the poorest of the poor Camarinians, and the Filipino Youths in general. </p>
                                <a href="<?= base_url() ?>about/philosophy_mission_and_vision" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="card">
                            <i class="bi bi-mortarboard card-img-top text-center" style="font-size: 200px"></i>

                            <div class="card-body">
                                <h5 class="card-title">Our Mission</h5>
                                <p class="card-text line-clamp" style="text-align: justify;">To achieve its vision, St. Vincent de Ferrer College of Camarin, Inc. shall pursue and commit to develop highly competent, creative and competitive professionals and skilled workers from the children of poor Camarin residents by providing accessible and holistic quality education and standard of instruction. It also commits to provide a Center for Excellence and Development in research and technology in Caloocan and its neighboring localities; and to offer a haven for inculcating active citizenship with integrity for the fulfillment of the nation’s hopes and dreams for a progressive future for all.</p>
                                <a href="<?= base_url() ?>about/philosophy_mission_and_vision" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= College Courses Offered ======= -->
        <section class="about bg-white">
            <div class="container">
                <div class="section-title">
                    <h2>College Courses Offered</h2>
                </div>

                <div class="mb-5">
                    <h4 class="text-center mb-4">INSTITUTE OF EDUCATION</h4>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-12 mb-lg-0 mb-3 text-center">
                            <div class="circle-picture mx-auto mb-3">
                                <i class="bi bi-pencil" style="font-size: 48px; color: #FFFFFF;"></i>
                            </div>
                            <strong>
                                <a href="javascript:void(0)" style="font-size: 18px;" class="text-secondary no_function">
                                    BSED English
                                </a>
                            </strong>
                            <p>Bachelor of Secondary Education major in English</p>
                        </div>
                        <div class="col-lg-3 col-12 mb-lg-0 mb-3 text-center">
                            <div class="circle-picture mx-auto mb-3">
                                <i class="bi bi-flag" style="font-size: 48px; color: #FFFFFF;"></i>
                            </div>
                            <strong>
                                <a href="javascript:void(0)" style="font-size: 18px;" class="text-secondary no_function">
                                    BSED Filipino
                                </a>
                            </strong>
                            <p>Bachelor of Secondary Education major in Filipino</p>
                        </div>
                        <div class="col-lg-3 col-12 mb-lg-0 mb-3 text-center">
                            <div class="circle-picture mx-auto mb-3">
                                <i class="bi bi-globe" style="font-size: 48px; color: #FFFFFF;"></i>
                            </div>
                            <strong>
                                <a href="javascript:void(0)" style="font-size: 18px;" class="text-secondary no_function">
                                    BSED Social Studies
                                </a>
                            </strong>
                            <p>Bachelor of Secondary Education major in Social Studies</p>
                        </div>
                        <div class="col-lg-3 col-12 mb-lg-0 mb-3 text-center">
                            <div class="circle-picture mx-auto mb-3">
                                <i class="bi bi-mortarboard" style="font-size: 48px; color: #FFFFFF;"></i>
                            </div>
                            <strong>
                                <a href="javascript:void(0)" style="font-size: 18px;" class="text-secondary no_function">
                                    BEED GenEd
                                </a>
                            </strong>
                            <p>Bachelor of Elementary Education major in General Education</p>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h4 class="text-center mb-4">INSTITUTE OF INFORMATION TECHNOLOGY</h4>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-12 mb-lg-0 mb-3 text-center">
                            <div class="circle-picture mx-auto mb-3">
                                <i class="bi bi-laptop" style="font-size: 48px; color: #FFFFFF;"></i>
                            </div>
                            <strong>
                                <a href="javascript:void(0)" style="font-size: 18px;" class="text-secondary no_function">
                                    BSIT
                                </a>
                            </strong>
                            <p>Bachelor of Science in Information Technology</p>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h4 class="text-center mb-4">INSTITUTE OF HOSPITALITY MANAGEMENT AND TOURISM</h4>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-12 mb-lg-0 mb-3 text-center">
                            <div class="circle-picture mx-auto mb-3">
                                <i class="bi bi-hospital" style="font-size: 48px; color: #FFFFFF;"></i>
                            </div>
                            <strong>
                                <a href="javascript:void(0)" style="font-size: 18px;" class="text-secondary no_function">
                                    BSHM
                                </a>
                            </strong>
                            <p>Bachelor of Science in Hospitality Management</p>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h4 class="text-center mb-4">INSTITUTE OF BUSINESS ADMINISTRATION AND ACCOUNTANCY</h4>

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-12 mb-lg-0 mb-3 text-center">
                            <div class="circle-picture mx-auto mb-3">
                                <i class="bi bi-briefcase" style="font-size: 48px; color: #FFFFFF;"></i>
                            </div>
                            <strong>
                                <a href="javascript:void(0)" style="font-size: 18px;" class="text-secondary no_function">
                                    BSA
                                </a>
                            </strong>
                            <p>Bachelor of Science in Accountancy</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Clubs ======= -->
        <section class="about section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Clubs</h2>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-6 mb-lg-0 mb-3">
                        <div class="card">
                            <i class="bi bi-trophy card-img-top text-center bg-light" style="font-size: 200px"></i>

                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">Varsity</h5>
                                <ul>
                                    <li>Badminton - Table Tennis</li>
                                    <li>Basketball - Chess</li>
                                    <li>Volleyball</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-lg-0">
                        <div class="card">
                            <i class="bi bi-palette card-img-top text-center bg-light" style="font-size: 200px"></i>

                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">Languages / Arts</h5>
                                <ul>
                                    <li>Journalism and Broadcasting - Korean</li>
                                    <li>Commercial Painting Club - Nihonggo</li>
                                    <li>French</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-lg-0 mb-3">
                        <div class="card">
                            <i class="bi bi-music-note card-img-top text-center bg-light" style="font-size: 200px"></i>

                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">CESCCA</h5>
                                <ul>
                                    <li>Single Voice Club - Himig Musika Chorale</li>
                                    <li>Cultural Dance Troupe - Modern Dance Troupe</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-lg-0">
                        <div class="card">
                            <i class="bi bi-puzzle card-img-top text-center bg-light" style="font-size: 200px"></i>

                            <div class="card-body">
                                <h5 class="card-title text-center mb-3">Special Skills</h5>
                                <ul>
                                    <li>Handicraft</li>
                                    <li>Sewing Club</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= What’s New? ======= -->
        <section class="about bg-white">
            <div class="countainer">
                <div class="section-title">
                    <h2>What's New in SVFC?</h2>
                </div>

                <!-- Computer Screen -->
                <div id="computer_screen" class="d-lg-block d-none">
                    <h4 class="mx-auto" style="width: 92%;">
                        <span>Latest Videos</span>
                        <a href="https://www.youtube.com/@svfcmultimedia" target="_blank" rel="noopener noreferrer">
                            <span class="float-end">See all on YouTube</span>
                        </a>
                    </h4>

                    <div id="myCarousel" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                        <div class="mx-auto" style="width: 92%;">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div style="position: relative;">
                                                <a href="https://www.youtube.com/watch?v=B8gBq0k31S0" target="_blank">
                                                    <img src="https://img.youtube.com/vi/B8gBq0k31S0/hqdefault.jpg" width="100%" />
                                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="video-info">
                                                <h5>Bahay Kubo Covered by Rheyven Vermug</h5>
                                                <p>January 30, 2024</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="position: relative;">
                                                <a href="https://www.youtube.com/watch?v=nyglb4l-bYI" target="_blank">
                                                    <img src="https://img.youtube.com/vi/nyglb4l-bYI/hqdefault.jpg" width="100%" />
                                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="video-info">
                                                <h5>EHU GIRL Covered By Gerald</h5>
                                                <p>January 30, 2024</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="position: relative;">
                                                <a href="https://www.youtube.com/watch?v=7ToPoNaUNHE" target="_blank">
                                                    <img src="https://img.youtube.com/vi/7ToPoNaUNHE/hqdefault.jpg" width="100%" />
                                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="video-info">
                                                <h5>Chitchat with Sweet Ellen</h5>
                                                <p>January 30, 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div style="position: relative;">
                                                <a href="https://www.youtube.com/watch?v=uTpRy4ySaCs" target="_blank">
                                                    <img src="https://img.youtube.com/vi/uTpRy4ySaCs/hqdefault.jpg" width="100%" />
                                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="video-info">
                                                <h5>RADYO VINCENTIAN SEASON 1 EP. #4</h5>
                                                <p>January 30, 2024</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="position: relative;">
                                                <a href="https://www.youtube.com/watch?v=CZh4bI5doYE" target="_blank">
                                                    <img src="https://img.youtube.com/vi/CZh4bI5doYE/hqdefault.jpg" width="100%" />
                                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="video-info">
                                                <h5>RADYO VINCENTIAN SEASON 1 EP. #2 "Vincentian Ohana"</h5>
                                                <p>January 17, 2024</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div style="position: relative;">
                                                <a href="https://www.youtube.com/watch?v=5hwCij6bZoU" target="_blank">
                                                    <img src="https://img.youtube.com/vi/5hwCij6bZoU/hqdefault.jpg" width="100%" />
                                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="video-info">
                                                <h5>RADYO VINCENTIAN BEST OF 2023 COMPILATION PART 1</h5>
                                                <p>December 29, 2023</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev bg-secondary" style="width: 3%; height: 30%; margin: auto;" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next bg-secondary" style="width: 3%; height: 30%; margin: auto;" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <!-- Mobile Screen -->
                <div id="mobile_screen" class="d-lg-none d-block container">
                    <div class="row">
                        <div class="col-6">
                            <h4>Latest Videos</h4>
                        </div>
                        <div class="col-6">
                            <a href="https://www.youtube.com/@svfcmultimedia" target="_blank" rel="noopener noreferrer">
                                <span class="float-end">See all on YouTube</span>
                            </a>
                        </div>
                    </div>

                    <div class="video-container-mobile">
                        <div class="youtube-video">
                            <div style="position: relative;">
                                <a href="https://www.youtube.com/watch?v=B8gBq0k31S0" target="_blank">
                                    <img src="https://img.youtube.com/vi/B8gBq0k31S0/hqdefault.jpg" width="100%" />
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                    </div>
                                </a>
                            </div>

                            <div class="video-info">
                                <h5 class="truncate-text">Bahay Kubo Covered by Rheyven Vermug</h5>
                                <p>January 30, 2024</p>
                            </div>
                        </div>
                        <div class="youtube-video">
                            <div style="position: relative;">
                                <a href="https://www.youtube.com/watch?v=nyglb4l-bYI" target="_blank">
                                    <img src="https://img.youtube.com/vi/nyglb4l-bYI/hqdefault.jpg" width="100%" />
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                    </div>
                                </a>
                            </div>

                            <div class="video-info">
                                <h5 class="truncate-text">EHU GIRL Covered By Gerald</h5>
                                <p>January 30, 2024</p>
                            </div>
                        </div>
                        <div class="youtube-video">
                            <div style="position: relative;">
                                <a href="https://www.youtube.com/watch?v=7ToPoNaUNHE" target="_blank">
                                    <img src="https://img.youtube.com/vi/7ToPoNaUNHE/hqdefault.jpg" width="100%" />
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                    </div>
                                </a>
                            </div>

                            <div class="video-info">
                                <h5>Chitchat with Sweet Ellen</h5>
                                <p>January 30, 2024</p>
                            </div>
                        </div>
                        <div class="youtube-video">
                            <div style="position: relative;">
                                <a href="https://www.youtube.com/watch?v=uTpRy4ySaCs" target="_blank">
                                    <img src="https://img.youtube.com/vi/uTpRy4ySaCs/hqdefault.jpg" width="100%" />
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                    </div>
                                </a>
                            </div>

                            <div class="video-info">
                                <h5 class="truncate-text">RADYO VINCENTIAN SEASON 1 EP. #4</h5>
                                <p>January 30, 2024</p>
                            </div>
                        </div>
                        <div class="youtube-video">
                            <div style="position: relative;">
                                <a href="https://www.youtube.com/watch?v=CZh4bI5doYE" target="_blank">
                                    <img src="https://img.youtube.com/vi/CZh4bI5doYE/hqdefault.jpg" width="100%" />
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                    </div>
                                </a>
                            </div>

                            <div class="video-info">
                                <h5 class="truncate-text">RADYO VINCENTIAN SEASON 1 EP. #2 "Vincentian Ohana"</h5>
                                <p>January 17, 2024</p>
                            </div>
                        </div>
                        <div class="youtube-video">
                            <div style="position: relative;">
                                <a href="https://www.youtube.com/watch?v=5hwCij6bZoU" target="_blank">
                                    <img src="https://img.youtube.com/vi/5hwCij6bZoU/hqdefault.jpg" width="100%" />
                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                    </div>
                                </a>
                            </div>

                            <div class="video-info">
                                <h5 class="truncate-text">RADYO VINCENTIAN BEST OF 2023 COMPILATION PART 1</h5>
                                <p>December 29, 2023</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= School Paper ======= -->
        <section class="about section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>SVFC School Paper</h2>
                </div>

                <?php if (!isMobileDevice()) : ?>
                    <?php
                    $pageDetails = array(
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0001.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0002.jpg", "id" => "page1", "checkbox" => "checkbox-page1"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0003.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0004.jpg", "id" => "page2", "checkbox" => "checkbox-page2"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0005.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0006.jpg", "id" => "page3", "checkbox" => "checkbox-page3"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0007.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0008.jpg", "id" => "page4", "checkbox" => "checkbox-page4"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0009.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0010.jpg", "id" => "page5", "checkbox" => "checkbox-page5"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0011.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0012.jpg", "id" => "page6", "checkbox" => "checkbox-page6"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0013.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0014.jpg", "id" => "page7", "checkbox" => "checkbox-page7"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0015.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0016.jpg", "id" => "page8", "checkbox" => "checkbox-page8"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0017.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0018.jpg", "id" => "page9", "checkbox" => "checkbox-page9"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0019.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0020.jpg", "id" => "page10", "checkbox" => "checkbox-page10"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0021.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0022.jpg", "id" => "page11", "checkbox" => "checkbox-page11"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0023.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0024.jpg", "id" => "page12", "checkbox" => "checkbox-page12"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0025.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0026.jpg", "id" => "page13", "checkbox" => "checkbox-page13"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0027.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0028.jpg", "id" => "page14", "checkbox" => "checkbox-page14"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0029.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0030.jpg", "id" => "page15", "checkbox" => "checkbox-page15"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0031.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0032.jpg", "id" => "page16", "checkbox" => "checkbox-page16"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0033.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0034.jpg", "id" => "page17", "checkbox" => "checkbox-page17")
                    );
                    ?>

                    <div class="d-lg-block d-none">
                        <div class="flip-book">
                            <input type="checkbox" id="checkbox-cover" class="flip-book-input">

                            <?php for ($i = 0; $i < count($pageDetails) + 1; $i++) : ?>
                                <input type="checkbox" id="checkbox-page<?= $i ?>" class="flip-book-input">
                            <?php endfor; ?>

                            <div class="book">
                                <div class="cover">
                                    <label for="checkbox-cover"></label>

                                    <img src="<?= base_url() ?>public/img/logo.png" alt="Image" class="centered-image">
                                </div>

                                <?php foreach ($pageDetails as $page) : ?>
                                    <div class="page" id="<?= $page['id'] ?>">
                                        <div class="front-page">
                                            <img src="<?= $page['front'] ?>" class="fullscreen-image" title="Click to view fullscreen">
                                            <label class="next" for="<?= $page['checkbox'] ?>"><i class="fa fa-chevron-right"></i></label>
                                        </div>
                                        <div class="back-page">
                                            <img src="<?= $page['back'] ?>" class="fullscreen-image" title="Click to view fullscreen">
                                            <label class="prev" for="<?= $page['checkbox'] ?>"><i class="fa fa-chevron-left"></i></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <div class="back-cover">
                                    <img src="<?= base_url() ?>public/img/logo.png" alt="Image" class="centered-image">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <?php
                    $pageDetails_mobile = array(
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0001.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0002.jpg", "id" => "page1_mobile", "checkbox" => "checkbox-page1_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0003.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0004.jpg", "id" => "page2_mobile", "checkbox" => "checkbox-page2_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0005.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0006.jpg", "id" => "page3_mobile", "checkbox" => "checkbox-page3_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0007.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0008.jpg", "id" => "page4_mobile", "checkbox" => "checkbox-page4_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0009.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0010.jpg", "id" => "page5_mobile", "checkbox" => "checkbox-page5_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0011.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0012.jpg", "id" => "page6_mobile", "checkbox" => "checkbox-page6_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0013.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0014.jpg", "id" => "page7_mobile", "checkbox" => "checkbox-page7_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0015.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0016.jpg", "id" => "page8_mobile", "checkbox" => "checkbox-page8_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0017.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0018.jpg", "id" => "page9_mobile", "checkbox" => "checkbox-page9_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0019.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0020.jpg", "id" => "page10_mobile", "checkbox" => "checkbox-page10_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0021.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0022.jpg", "id" => "page11_mobile", "checkbox" => "checkbox-page11_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0023.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0024.jpg", "id" => "page12_mobile", "checkbox" => "checkbox-page12_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0025.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0026.jpg", "id" => "page13_mobile", "checkbox" => "checkbox-page13_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0027.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0028.jpg", "id" => "page14_mobile", "checkbox" => "checkbox-page14_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0029.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0030.jpg", "id" => "page15_mobile", "checkbox" => "checkbox-page15_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0031.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0032.jpg", "id" => "page16_mobile", "checkbox" => "checkbox-page16_mobile"),
                        array("front" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0033.jpg", "back" => "public/img/DHARBINGER-MAGAZINE/DHARBINGER-MAGAZINE-ISSUE-1_page-0034.jpg", "id" => "page17_mobile", "checkbox" => "checkbox-page17_mobile")
                    );
                    ?>

                    <div class="d-lg-none d-block">
                        <div class="flip-book_mobile">
                            <input type="checkbox" id="checkbox-cover_mobile" class="flip-book-input_mobile">

                            <?php for ($i = 0; $i < count($pageDetails_mobile) + 1; $i++) : ?>
                                <input type="checkbox" id="checkbox-page<?= $i ?>_mobile" class="flip-book-input_mobile">
                            <?php endfor; ?>

                            <div class="book_mobile">
                                <div class="cover_mobile">
                                    <label for="checkbox-cover_mobile"></label>

                                    <img src="<?= base_url() ?>public/img/logo.png" alt="Image" class="centered-image_mobile">
                                </div>

                                <?php foreach ($pageDetails_mobile as $page_mobile) : ?>
                                    <div class="page_mobile" id="<?= $page_mobile['id'] ?>">
                                        <div class="front-page_mobile">
                                            <img src="<?= $page_mobile['front'] ?>" class="fullscreen-image" title="Click to view fullscreen">
                                            <label class="next_mobile" for="<?= $page_mobile['checkbox'] ?>"><i class="fa fa-chevron-right"></i></label>
                                        </div>
                                        <div class="back-page_mobile">
                                            <img src="<?= $page_mobile['back'] ?>" class="fullscreen-image" title="Click to view fullscreen">
                                            <label class="prev_mobile" for="<?= $page_mobile['checkbox'] ?>"><i class="fa fa-chevron-left"></i></label>
                                        </div>
                                    </div>
                                <?php endforeach; ?>

                                <div class="back-cover_mobile">
                                    <img src="<?= base_url() ?>public/img/logo.png" alt="Image" class="centered-image_mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </section>

        <!-- ======= News ======= -->
        <section class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 mb-lg-0 mb-3 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <p><b>Visit RADYO VINCENTIAN:</b></p>
                            <a href="https://www.youtube.com/watch?v=uTpRy4ySaCs&list=PLVStl2mrcNzXvebOTOYwi7bOyq_0ZqHej" target="_blank" rel="noopener noreferrer">
                                <img class="img-shadow" src="<?= base_url() ?>public/img/news_banner.png" style="width: 100%;" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mb-lg-0 mb-3 d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <p style="font-size: 22px;"><b>RADYO VINCENTIAN Season 1 Episode 4: "Vincentian Ohana"</b></p>

                            <a href="https://www.youtube.com/watch?v=uTpRy4ySaCs" target="_blank">
                                <div style="position: relative;">
                                    <img class="img-shadow" src="<?= base_url() ?>public/img/news.png" style="width: 100%;" alt="YouTube Thumbnail">

                                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                        <img src="<?= base_url() ?>public/img/youtube-icon.svg" width="64" height="64" />
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>