<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>St. Vincent de Ferrer College of Camarin, Inc.</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="public/css/style.css" rel="stylesheet" />

    <style>
        .main-body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            max-width: 600px;
        }
    </style>
</head>

<body style="background-image: url('public/img/bg_pink.webp'); background-size: cover; background-repeat: no-repeat;">
    <div class="container">
        <div class="main-body">
            <div class="card">
                <div class="card-body text-center">
                    <img src="public/img/logo.png" alt="SVFC Logo" style="width: 150px; height: 150px;" class="mb-3">
                    <h1 class="school-name mb-4" style="color: #FF00FF;">St. Vincent de Ferrer College of Camarin, Inc.</h1>
                    <p class="lead mb-4">For further inquires, please send us a message.</p>
                    <button class="btn btn-primary px-5 py-2" id="btn_contact_us">Contact Us</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us Modal -->
    <div class="modal fade" id="contact_us_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="javascript:void(0)" id="contact_us_form">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="contact_us_name" placeholder="Sample Placehoder" required>
                                    <label for="contact_us_name">Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="contact_us_email" placeholder="test@email.com" required>
                                    <label for="contact_us_email">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="contact_us_facebook_account" placeholder="Sample Placehoder" required>
                                    <label for="contact_us_facebook_account">Facebook Account</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="contact_us_mobile_number" placeholder="09123456789" required>
                                    <label for="contact_us_mobile_number">Mobile Number</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="contact_us_message" style="height: 100px" required></textarea>
                                        <label for="contact_us_message">Message</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="contact_us_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/vendor/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="public/vendor/sweetalert/sweetalert2@11.js"></script>
    <script src="public/js/script.js?v=1.10"></script>
</body>

</html>