<?php
$current_tab = session()->get("current_tab");
$current_main_page = session()->get("current_main_page");
$current_sub_page = session()->get("current_sub_page");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="The St. Vincent de Ferrer College of Camarin, Inc. is a private educational institution run by a family of selfless educators and named St. Vincent de Ferrer Academy, Inc. in 2001.">
    <meta name="keywords" content="SVFC Website, SVFC Landing Page, St. Vincent de Ferrer College, St. Vincent de Ferrer Academy, private educational institution, selfless educators">

    <title><?= $current_sub_page ? $current_sub_page : $current_main_page ?> - St. Vincent de Ferrer College of Camarin, Inc.</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?= base_url() ?>favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&amp;v=1.0" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/animate.css/animate.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/bootstrap/css/bootstrap.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/bootstrap-icons/bootstrap-icons.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/boxicons/css/boxicons.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/glightbox/css/glightbox.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/swiper/swiper-bundle.min.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/vendor/font-awesome/css/all.min.css?v=1.15" rel="stylesheet" />
    <link href="<?= base_url() ?>public/vendor/datatables/css/dataTables.bootstrap5.css?v=1.15" rel="stylesheet">
    <link href="<?= base_url() ?>public/css/style.css?v=1.19" rel="stylesheet">
</head>

<body class="container bg-light" id="body_container">
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center mx-auto">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <div class="logo" style="display: flex; align-items: center;">
                <img src="<?= base_url() ?>public/img/logo.png" alt="" class="img-fluid" style="margin-right: 10px;">
                <div class="logo-content" style="display: flex; flex-direction: column;">
                    <a href="<?= base_url() ?>" class="scrollto">
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
                    <li><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
                    <!-- About -->
                    <li class="dropdown">
                        <a class="<?= ($current_tab == "about/svfc_history") || ($current_tab == "about/college_seal") || ($current_tab == "about/philosophy_mission_and_vision") || ($current_tab == "about/goals_and_objectives") || ($current_tab == "about/svfc_hymn") || ($current_tab == "about/facilities") ? "active" : null ?>" href="javascript:void(0)">
                            <span>About</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a class="nav-link <?= $current_tab == "about/svfc_history" ? "active" : null ?>" href="<?= base_url() ?>about/svfc_history">SVFC History</a></li>
                            <li><a class="nav-link <?= $current_tab == "about/college_seal" ? "active" : null ?>" href="<?= base_url() ?>about/college_seal">College Seal</a></li>
                            <li><a class="nav-link <?= $current_tab == "about/philosophy_mission_and_vision" ? "active" : null ?>" href="<?= base_url() ?>about/philosophy_mission_and_vision">Philosophy, Mission, and Vision</a></li>
                            <li><a class="nav-link <?= $current_tab == "about/goals_and_objectives" ? "active" : null ?>" href="<?= base_url() ?>about/goals_and_objectives">Goals and Objectives</a></li>
                            <li><a class="nav-link <?= $current_tab == "about/facilities" ? "active" : null ?>" href="<?= base_url() ?>about/facilities">Facilities</a></li>
                            <li><a class="nav-link <?= $current_tab == "about/svfc_hymn" ? "active" : null ?>" href="<?= base_url() ?>about/svfc_hymn">SVFC Hymn</a></li>
                        </ul>
                    </li>
                    <!-- Programs -->
                    <li class="dropdown">
                        <a href="javascript:void(0)">
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
                    <li class="dropdown">
                        <a href="javascript:void(0)">
                            <span>Admissions</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Special Education Program Department (SEPD)</a></li>
                            <li><a class="nav-link no_function" href="javascript:void(0)">Homeschooling</a></li>
                        </ul>
                    </li>
                    <!-- Contact Us -->
                    <li><a class="nav-link <?= $current_tab == "contact_us" ? "active" : null ?>" href="<?= base_url() ?>contact_us">Contact Us</a></li>
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
    <div class="w-100 inner-page-header" style="background-image: url(<?= base_url() ?>public/img/bg_pink.png);">
        <div class="text-center text-white mt-5">
            <h3><?= $current_main_page ?></h3>
            <h1><?= $current_sub_page ?></h1>
        </div>
    </div>