    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-info">
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
                    <div class="col-lg-2 col-md-6 footer-links">
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
                    <div class="col-lg-2 col-md-6 footer-links">
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
                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/svfc_history">SVFC History</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/college_seal">College Seal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/philosophy_mission_and_vision">Philosophy, Mission, and Vision</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/goals_and_objectives">Goals and Objectives</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="<?= base_url() ?>about/svfc_hymn">SVFC Hymn</a></li>
                        </ul>
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

    <!-- ======= View Profile Picture Modal ======= -->
    <div class="modal fade" id="view_image_modal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <img id="image_container" alt="Full Screen Image">
            </div>
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>public/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url() ?>public/vendor/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="<?= base_url() ?>public/vendor/datatables/js/dataTables.js"></script>
    <script src="<?= base_url() ?>public/vendor/datatables/js/dataTables.bootstrap5.js"></script>
    <script src="<?= base_url() ?>public/vendor/sweetalert/sweetalert2@11.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>public/js/main.js"></script>

    <!-- Custom JavaScript -->
    <script>
        $(document).ready(function() {
            var current_tab = "<?= session()->get("current_tab"); ?>";
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

            if (current_tab == "home") {
                img_1.src = "public/img/poster.gif";
                img_2.src = "public/img/process.png";
                img_3.src = "public/img/announcement.gif";

                if ($(window).width() <= 768) {
                    backdrop_image = "none";
                } else {
                    backdrop_image = "url('" + img_3.src + "') left top no-repeat";
                }

                window.onload = function() {
                    announcement(backdrop_image);
                };
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

            $(".no_function").click(function() {
                Swal.fire({
                    title: "Sorry...",
                    text: "This feature is under maintenance!",
                    icon: "error"
                });
            })

            $("#contact_us_message").on("focus", function() {
                var contact_us_message = $(this).val();

                if (contact_us_message == "Message") {
                    $(this).val("");
                }
            })

            $("#contact_us_message").on("blur", function() {
                var contact_us_message = $(this).val();

                if (contact_us_message == "") {
                    $(this).val("Message");
                }
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
                                        <button class="btn btn-primary py-3 w-100" id="btn_message_us">Enroll Now</button>
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
        })
    </script>
    </body>

    </html>

    <?php session()->remove("notification") ?>