    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="d-flex justify-content-center">
            <div class="footer-top" style="background-color: transparent;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 footer-info">
                            <p><span class="school-name" style="font-size: 24px;">St. Vincent de Ferrer College of Camarin, Inc.</span></p>
                            <br>
                            <strong><u>School Address</u></strong>
                            <p>
                                SVFC Compound, San Vicente Ferrer Road, Area D, Brgy. 178, Camarin, Caloocan City
                                <br><br>
                                <strong><u>Admission/Concierge Numbers</u></strong>
                                <br>
                                SMART 0968-729-2593<br>
                                SMART 0969-597-2577<br>
                                SMART 0908-658-1680<br>
                                SMART 0969-597-2586
                            </p>
                        </div>
                        <!-- Programs -->
                        <div class="col-md-2 footer-links">
                            <h4>Programs</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a class="no_function" href="javascript:void(0)">Preparatory</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a class="no_function" href="javascript:void(0)">Elementary</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a class="no_function" href="javascript:void(0)">Junior High</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a class="no_function" href="javascript:void(0)">Senior High</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a class="no_function" href="javascript:void(0)">College</a></li>
                            </ul>
                        </div>
                        <!-- Admissions -->
                        <div class="col-auto footer-links">
                            <h4>Admissions</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a class="no_function" href="javascript:void(0)">Special Education Program Department (SEPD)</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a class="no_function" href="javascript:void(0)">Homeschooling</a></li>
                            </ul>

                            <p class="mt-5"><i>Follow Us:</i></p>
                            <div class="social-links mt-3">
                                <a href="https://www.facebook.com/SVFCofCamarinOfficialPage/" target="_blank" rel="noopener noreferrer" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="https://www.youtube.com/@svfcmultimedia" target="_blank" rel="noopener noreferrer" class="youtube"><i class="bx bxl-youtube"></i></a>
                            </div>
                        </div>
                        <!-- Useful Links -->
                        <div class="col-auto footer-links">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/svfc_history">SVFC History</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/college_seal">College Seal</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/philosophy_mission_and_vision">Philosophy, Mission, and Vision</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/goals_and_objectives">Goals and Objectives</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="javascript:void(0)" class="no_function">Facilities</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/svfc_hymn">SVFC Hymn</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                &copy; Copyright <span class="school-name">St. Vincent de Ferrer College of Camarin, Inc.</span> All Rights Reserved
            </div>
        </div>
    </footer>

    <?php if (session()->get("current_tab") == "about/svfc_hymn") : ?>
        <!-- SVFC Hymn Modal -->
        <div class="modal fade" id="svfcHymnModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="videoModalLabel">SVFC Hymn</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="embed-responsive-item w-100" id="video_player" controls>
                                <source src="<?= base_url() ?>public/vid/svfc_hymn.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <?php if (session()->get("current_tab") == "admin/list_of_messages") : ?>
        <!-- View Message Modal -->
        <div class="modal fade" id="view_message_modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Message Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="message-details d-none">
                            <p><strong>Processed By:</strong> <span id="view_message_processed_by"></span></p>
                            <p><strong>Name:</strong> <span id="view_message_name"></span></p>
                            <p><strong>Date:</strong> <span id="view_message_date_created"></span></p>
                            <p><strong>Email:</strong> <span id="view_message_email"></span></p>
                            <p><strong>Facebook Account:</strong> <span id="view_message_facebook_account"></span></p>
                            <p><strong>Mobile Number:</strong> <span id="view_message_mobile_number"></span></p>
                            <p><strong>Message:</strong> <span id="view_message_message"></span></p>
                        </div>
                        <div class="d-flex justify-content-center py-5 loading">
                            <img src="https://res.cloudinary.com/dovvgfevi/image/upload/v1714986366/SVFC%20Website/l8z09wsvyfc2bsemzyyt.gif" class="w-50" alt="Loading Image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    <!-- ======= View Profile Picture Modal ======= -->
    <div class="modal fade" id="view_image_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <img id="image_container" alt="Full Screen Image">
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="javascript:void(0)" id="login_form">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label for="login_username" class="fw-bold">Username</label>
                            <input type="text" id="login_username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="login_password" class="fw-bold">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="login_password">
                                <span class="input-group-text" role="button" id="login_show_password"><i class="fa fa-eye"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="login_submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update My Account Modal -->
    <div class="modal fade" id="update_my_account_modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update My Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="javascript:void(0)" id="update_my_account_form">
                    <div class="modal-body">
                        <div class="update-my-account-form d-none">
                            <div class="form-group mb-3">
                                <label for="update_my_account_name" class="fw-bold">Name</label>
                                <input type="text" id="update_my_account_name" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="update_my_account_username" class="fw-bold">Username</label>
                                <input type="text" id="update_my_account_username" class="form-control" required>
                                <small class="text-danger d-none" id="error_update_my_account_username">Username is already in use</small>
                            </div>
                            <div class="form-group mb-3">
                                <label for="update_my_account_password" class="fw-bold">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="update_my_account_password" placeholder="Password is hidden for security">
                                    <span class="input-group-text" role="button" id="update_my_account_show_password"><i class="fa fa-eye"></i></span>
                                </div>
                                <small class="text-danger d-none" id="error_update_my_account_password">Passwords do not match</small>
                            </div>
                            <div class="form-group">
                                <label for="update_my_account_confirm_password" class="fw-bold">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="update_my_account_confirm_password" placeholder="Password is hidden for security">
                                    <span class="input-group-text" role="button" id="update_my_account_show_confirm_password"><i class="fa fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center py-5 loading">
                            <img src="https://res.cloudinary.com/dovvgfevi/image/upload/v1714986366/SVFC%20Website/l8z09wsvyfc2bsemzyyt.gif" class="w-50" alt="Loading Image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" id="update_my_account_id">
                        <input type="hidden" id="update_my_account_old_username">
                        <input type="hidden" id="update_my_account_old_password">

                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update_my_account_submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url() ?>public/vendor/purecounter/purecounter_vanilla.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/glightbox/js/glightbox.min.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/isotope-layout/isotope.pkgd.min.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/swiper/swiper-bundle.min.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/waypoints/noframework.waypoints.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/jquery/jquery-3.5.1.slim.min.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/datatables/js/dataTables.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/datatables/js/dataTables.bootstrap5.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/vendor/sweetalert/sweetalert2@11.js?v=1.15"></script>
    <script src="<?= base_url() ?>public/js/main.js?v=1.15"></script>


    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            var current_tab = "<?= session()->get("current_tab"); ?>";
            var base_url = "<?= base_url() ?>";
            var notification = <?= session()->get("notification") ? json_encode(session()->get("notification")) : json_encode(null); ?>;
            var container_width = $("#body_container").width();
            var second_navbar = $('#header');
            var offset = second_navbar.offset().top;
            var img_1 = new Image();
            var img_2 = new Image();
            var img_3 = new Image();

            check_mobile();

            if (notification) {
                Swal.fire({
                    title: notification.title,
                    text: notification.message,
                    icon: notification.icon
                });
            }

            if (current_tab == "home" && !notification) {
                img_1.src = "https://res.cloudinary.com/dovvgfevi/image/upload/v1714986375/SVFC%20Website/aoknebicfsenmyc3xrbd.gif";
                img_2.src = "https://res.cloudinary.com/dovvgfevi/image/upload/v1714986375/SVFC%20Website/md1pyizccse2jjgajzli.png";
                img_3.src = "https://res.cloudinary.com/dovvgfevi/image/upload/v1714986364/SVFC%20Website/ikq8ch2uwk8ljgz7p1cj.gif";

                if ($(window).width() <= 768) {
                    backdrop_image = "none";

                    announcement(backdrop_image);
                } else {
                    backdrop_image = "url('" + img_3.src + "') left top no-repeat";

                    window.onload = function() {
                        announcement(backdrop_image);
                    };
                }
            }

            if (current_tab == "about/svfc_hymn") {
                $('#svfcHymnModal').on('hidend.bs.modal', function() {
                    $('#video_player').get(0).pause();
                })
            }

            $('#data_table').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true,
                "responsive": true,
            })

            $('#login_show_password').click(function() {
                var passwordField = $('#login_password');
                var passwordFieldType = passwordField.attr('type');

                if (passwordFieldType == 'password') {
                    passwordField.attr('type', 'text');
                    $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            })

            $(".no_function").click(function() {
                Swal.fire({
                    title: "Sorry...",
                    text: "This feature is under maintenance!",
                    icon: "error"
                });
            })

            $('#contact_us_email').on('blur', function() {
                const email = $(this).val();

                if (isValidEmail(email)) {
                    $('#error_contact_us_email').addClass("d-none");

                    $(this).removeClass("is-invalid");
                } else {
                    $('#error_contact_us_email').removeClass("d-none");

                    $(this).addClass("is-invalid");
                }
            })

            $('#contact_us_email').on('keydown', function() {
                $('#error_contact_us_email').addClass("d-none");

                $(this).removeClass("is-invalid");
            })

            $('#contact_us_email').on('blur', function() {
                const email = $(this).val();

                if (isValidEmail(email)) {
                    $('#error_contact_us_email').addClass("d-none");

                    $(this).removeClass("is-invalid");
                } else {
                    $('#error_contact_us_email').removeClass("d-none");

                    $(this).addClass("is-invalid");
                }
            })

            $('#contact_us_email').on('keydown', function() {
                $('#error_contact_us_email').addClass("d-none");

                $(this).removeClass("is-invalid");
            })

            $("#contact_us_form").submit(function() {
                $("#contact_us_submit").text("Please Wait...");
                $("#contact_us_submit").attr("disabled", true);

                $("#contact_us_name").attr("disabled", true);
                $("#contact_us_email").attr("disabled", true);
                $("#contact_us_facebook_account").attr("disabled", true);
                $("#contact_us_mobile_number").attr("disabled", true);
                $("#contact_us_message").attr("disabled", true);

                const name = $("#contact_us_name").val();
                const email = $("#contact_us_email").val();
                const facebook_account = $("#contact_us_facebook_account").val();
                const mobile_number = $("#contact_us_mobile_number").val();
                const message = $("#contact_us_message").val();

                var formData = new FormData();

                formData.append('name', name);
                formData.append('email', email);
                formData.append('facebook_account', facebook_account);
                formData.append('mobile_number', mobile_number);
                formData.append('message', message);

                $.ajax({
                    url: 'submit_message',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response) {
                            location.href = current_tab;
                        }
                    },
                    error: function(_, _, error) {
                        console.error(error);
                    }
                });
            })

            $(".fullscreen-image").click(function() {
                const src = $(this).attr("src");

                $("#image_container").attr("src", src);

                $("#view_image_modal").modal("show");
            })

            $("#login_modal").submit(function() {
                const username = $("#login_username").val();
                const password = $("#login_password").val();

                $("#login_username").attr("disabled", true);
                $("#login_password").attr("disabled", true);

                $("#login_submit").attr("disabled", true);
                $("#login_submit").text("Processing...");

                var formData = new FormData();

                formData.append('username', username);
                formData.append('password', password);

                $.ajax({
                    url: base_url + 'admin/login',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        location.href = base_url + current_tab;
                    },
                    error: function(_, _, error) {
                        console.error(error);
                    }
                });
            })

            $("#update_my_account").click(function() {
                const user_id = $(this).attr("user_id");

                $("#update_my_account_modal").modal("show");

                var formData = new FormData();

                formData.append('user_id', user_id);

                $.ajax({
                    url: base_url + 'admin/get_user_details',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $("#update_my_account_name").val(response.name);
                        $("#update_my_account_username").val(response.username);

                        $("#update_my_account_id").val(user_id);
                        $("#update_my_account_old_username").val(response.username);
                        $("#update_my_account_old_password").val(response.password);

                        $(".loading").addClass("d-none");
                        $(".update-my-account-form").removeClass("d-none");
                    },
                    error: function(_, _, error) {
                        console.error(error);
                    }
                });
            })

            $("#update_my_account_form").submit(function() {
                const name = $("#update_my_account_name").val();
                const username = $("#update_my_account_username").val();
                const password = $("#update_my_account_password").val();
                const confirm_password = $("#update_my_account_confirm_password").val();

                const id = $("#update_my_account_id").val();
                const old_username = $("#update_my_account_old_username").val();
                const old_password = $("#update_my_account_old_password").val();

                let errors = 0;

                if (password || confirm_password) {
                    if (password != confirm_password) {
                        $("#update_my_account_password").addClass("is-invalid");
                        $("#update_my_account_confirm_password").addClass("is-invalid");
                        $("#error_update_my_account_password").removeClass("d-none");

                        errors++;
                    }
                }

                if (errors == 0) {
                    $("#update_my_account_submit").text("Please wait...");
                    $("#update_my_account_submit").attr("disabled", true);

                    var formData = new FormData();

                    formData.append('name', name);
                    formData.append('username', username);
                    formData.append('password', password);
                    formData.append('old_username', old_username);
                    formData.append('old_password', old_password);
                    formData.append('id', id);

                    $.ajax({
                        url: base_url + 'admin/update_my_account',
                        data: formData,
                        type: 'POST',
                        dataType: 'JSON',
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response) {
                                location.href = base_url + current_tab;
                            } else {
                                $("#update_my_account_username").addClass("is-invalid");
                                $("#error_update_my_account_username").removeClass("d-none");

                                $("#update_my_account_submit").text("Submit");
                                $("#update_my_account_submit").removeAttr("disabled");
                            }
                        },
                        error: function(_, _, error) {
                            console.error(error);
                        }
                    });
                }
            })

            $("#update_my_account_username").keydown(function() {
                $("#update_my_account_username").removeClass("is-invalid");
                $("#error_update_my_account_username").addClass("d-none");
            })

            $("#update_my_account_password").keydown(function() {
                $("#update_my_account_password").removeClass("is-invalid");
                $("#update_my_account_confirm_password").removeClass("is-invalid");
                $("#error_update_my_account_password").addClass("d-none");
            })

            $("#update_my_account_confirm_password").keydown(function() {
                $("#update_my_account_password").removeClass("is-invalid");
                $("#update_my_account_confirm_password").removeClass("is-invalid");
                $("#error_update_my_account_password").addClass("d-none");
            })

            $('#update_my_account_show_password').click(function() {
                var passwordField = $('#update_my_account_password');
                var passwordFieldType = passwordField.attr('type');

                if (passwordFieldType == 'password') {
                    passwordField.attr('type', 'text');
                    $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            })

            $('#update_my_account_show_confirm_password').click(function() {
                var passwordField = $('#update_my_account_confirm_password');
                var passwordFieldType = passwordField.attr('type');

                if (passwordFieldType == 'password') {
                    passwordField.attr('type', 'text');
                    $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordField.attr('type', 'password');
                    $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            })

            $(document).on("click", ".update_status", function() {
                const message_id = $(this).attr("message_id");
                const user_id = $(this).attr("user_id");

                Swal.fire({
                    title: "Are you sure?",
                    text: "This means you already processed this message.",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, it's processed!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        var formData = new FormData();

                        formData.append('id', message_id);
                        formData.append('user_id', user_id);

                        $.ajax({
                            url: base_url + 'set_to_processed',
                            data: formData,
                            type: 'POST',
                            dataType: 'JSON',
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                location.href = base_url + current_tab;
                            },
                            error: function(_, _, error) {
                                console.error(error);
                            }
                        });
                    }
                });
            })

            $(document).on("click", ".view_message", function() {
                const message_id = $(this).attr("message_id");
                const processed_by = $(this).attr("processed_by");

                $(".loading").removeClass("d-none");
                $(".message-details").addClass("d-none");

                $("#view_message_modal").modal("show");

                var formData = new FormData();

                formData.append('id', message_id);

                $.ajax({
                    url: base_url + 'get_message_details',
                    data: formData,
                    type: 'POST',
                    dataType: 'JSON',
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        var dateString = response.date_created;
                        var date = new Date(dateString);
                        var date_created = date.toLocaleString('en-US', {
                            month: 'long',
                            day: 'numeric',
                            year: 'numeric',
                            hour: 'numeric',
                            minute: 'numeric',
                            hour12: true
                        });

                        $("#view_message_processed_by").text(processed_by);
                        $("#view_message_name").text(response.name);
                        $("#view_message_date_created").text(date_created);
                        $("#view_message_email").text(response.email);
                        $("#view_message_facebook_account").text(response.facebook_account);
                        $("#view_message_mobile_number").text(response.mobile_number);
                        $("#view_message_message").text(response.message);

                        $(".loading").addClass("d-none");
                        $(".message-details").removeClass("d-none");
                    },
                    error: function(_, _, error) {
                        console.error(error);
                    }
                });
            })

            function isValidEmail(email) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                return emailRegex.test(email);
            }

            function check_mobile() {
                if ($(window).width() <= 768) {
                    $("#body_container").removeClass("container");

                    $("#abbr_sn").removeClass("d-none");
                    $("#full_sn").addClass("d-none");
                } else {
                    $("#body_container").addClass("container");
                    $("#full_sn").removeClass("d-none");
                    $("#abbr_sn").addClass("d-none");

                    second_navbar.attr("style", `width: ${container_width}px`);
                }
            }

            function announcement(backdrop_image) {
                Swal.fire({
                    html: `
                        <style>
                            @keyframes blink {
                                0% {
                                opacity: 1;
                                }
                                50% {
                                opacity: 0;
                                }
                                100% {
                                opacity: 1;
                                }
                            }

                            @keyframes fall {
                                0% {
                                transform: translateY(-100px) rotateZ(0deg);
                                opacity: 1;
                                }
                                100% {
                                transform: translateY(1000px) rotateZ(720deg);
                                opacity: 0;
                                }
                            }

                            .confetti {
                                position: absolute;
                                width: 10px;
                                height: 10px;
                                background-color: #ff00ff;
                                border-radius: 10px;
                                animation: fall linear infinite;
                                opacity: 0;
                                pointer-events: none;
                            }
                        </style>

                        <div class="container">
                            <?php for ($i = 0; $i <= 100; $i = $i + 5) : ?>
                                <?php
                                $top = rand(-1000, -100);
                                $left = rand(0, 100);
                                $duration = rand(5, 10);
                                ?>
                                <div class="confetti" style="top: <?= $top ?>px; left: <?= $left ?>%; animation-duration: <?= $duration ?>s;"></div>
                            <?php endfor ?>

                            <h1 style="text-align: center; animation: blink 2s infinite; color: #ff00ff;">Special Announcement</h1>
                            <hr>
                            <div class="card w-100 border-0">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <img src="${img_1.src}" class="card-img-top mb-3 w-100 h-100" alt="...">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <img src="${img_2.src}" class="card-img-top mb-3 w-100 h-100" alt="...">
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-12 mb-md-0 mb-2">
                                        <button class="btn btn-primary py-3 w-100" id="btn_message_us">Contact Us</button>
                                    </div>
                                    <div class="col-12 d-md-none d-block">
                                        <button class="btn btn-danger py-3 w-100" id="closeBtn">Close</button>
                                    </div>
                                </div>
                            </div>

                            <button class="text-danger d-md-block d-none" id="closeBtn_2" style="position: absolute; top: 10px; right: 10px; background: none; border: none; cursor: pointer; font-size: 30px;">
                                &times;
                            </button>
                        </div>
                    `,
                    width: 1000,
                    showConfirmButton: false,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    backdrop: `rgba(255, 192, 203, 0.4) ${backdrop_image}`
                });

                document.getElementById('btn_message_us').addEventListener('click', () => {
                    location.href = "contact_us";
                });

                document.getElementById('closeBtn').addEventListener('click', () => {
                    Swal.close();
                });

                document.getElementById('closeBtn_2').addEventListener('click', () => {
                    Swal.close();
                });
            }

            function disable_developer_functions(enabled) {
                if (enabled) {
                    $(document).on('contextmenu', function() {
                        return false;
                    });

                    $(document).on('keydown', function(event) {
                        if (event.ctrlKey && event.shiftKey) {
                            if (event.keyCode === 74) {
                                return false;
                            }

                            if (event.keyCode === 67) {
                                return false;
                            }

                            if (event.keyCode === 73) {
                                return false;
                            }
                        }

                        if (event.ctrlKey && event.keyCode === 85) {
                            return false;
                        }
                    });
                }
            }
        })
    </script>

    </body>

    </html>

    <?php session()->remove("notification") ?>