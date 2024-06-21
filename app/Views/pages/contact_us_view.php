<!-- ======= Main ======= -->
<main id="main">
    <section class="inner-page bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mx-auto">
                    <div class="mb-5" id="contact_us_form_div">
                        <p class="text-center mb-4" style="font-size: 22px;">For further inquiries, please send us a message.</p>

                        <form action="javascript:void(0)" class="mb-4" id="contact_us_form">
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

                                        <small class="text-danger d-none" id="error_contact_us_email">Please enter a valid email address.</small>
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
                            <div class="row">
                                <div class="col-lg-3 col-12 mx-auto">
                                    <button type="submit" class="btn btn-primary py-3 w-100" id="contact_us_submit">SEND</button>
                                </div>
                            </div>
                        </form>

                        <div class="text-center">
                            <small>This site is protected by reCAPTCHA and the <a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer">Google Privacy Policy</a> and <a href="https://policies.google.com/terms" target="_blank" rel="noopener noreferrer">Terms of Service</a> apply.</small>
                        </div>
                    </div>

                    <div class="d-none d-flex justify-content-center align-items-center pb-5" id="response_div" style="height: 350px;">
                        <div class="text-center">
                            <p class="mb-2"><i class="bi bi-check2-circle text-primary" style="font-size: 50px;"></i></p>
                            <p class="text-danger">Thank you for your inquiry! We will get back to you within 48 hours.</p>
                        </div>
                    </div>

                    <div class="text-center mb-5">
                        <p class="mb-0" style="font-size: 22px;">Welcome to <span class="school-name">St. Vincent de Ferrer College of Camarin, Inc.</span></p>
                        <p>We love our customers, so feel free to visit during normal business hours.</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-lg-0 mb-5 text-center">
                            <div style="height: 80px;">
                                <span style="font-size: 22px;" class="school-name">St. Vincent de Ferrer College of Camarin, Inc.</span>
                            </div>

                            <p>SVFC Compound, San Vicente Ferrer Road, Area D, Brgy. 178, Camarin, Caloocan City</p>
                            <a href="tel:+639687292593">SMART 0968-729-2593</a>
                            <br>
                            <a href="tel:+639695972577">SMART 0969-597-2577</a>
                            <br>
                            <a href="tel:+639086581680">SMART 0908-658-1680</a>
                            <br>
                            <a href="tel:+639695972586">SMART 0969-597-2586</a>
                        </div>
                        <div class="col-lg-6">
                            <div style="height: 80px;" class="text-center">
                                <span style="font-size: 22px;">Hours</span>
                                <?php if ($isSchoolOpen == "OPEN") : ?>
                                    <small class="text-success d-block">Open Now</small>
                                <?php else : ?>
                                    <small class="text-danger d-block">Closed Now</small>
                                <?php endif ?>
                            </div>
                            <div class="row <?= date('D') == "Mon" ? "fw-bold" : null ?>">
                                <div class="col-5 text-end">
                                    <span>Mon</span>
                                </div>
                                <div class="col-7">
                                    <span>8:00 AM - 5:00 PM</span>
                                </div>
                            </div>
                            <div class="row <?= date('D') == "Tue" ? "fw-bold" : null ?>">
                                <div class="col-5 text-end">
                                    <span>Tue</span>
                                </div>
                                <div class="col-7">
                                    <span>8:00 AM - 5:00 PM</span>
                                </div>
                            </div>
                            <div class="row <?= date('D') == "Wed" ? "fw-bold" : null ?>">
                                <div class="col-5 text-end">
                                    <span>Wed</span>
                                </div>
                                <div class="col-7">
                                    <span>8:00 AM - 5:00 PM</span>
                                </div>
                            </div>
                            <div class="row <?= date('D') == "Thu" ? "fw-bold" : null ?>">
                                <div class="col-5 text-end">
                                    <span>Thu</span>
                                </div>
                                <div class="col-7">
                                    <span>8:00 AM - 5:00 PM</span>
                                </div>
                            </div>
                            <div class="row <?= date('D') == "Fri" ? "fw-bold" : null ?>">
                                <div class="col-5 text-end">
                                    <span>Fri</span>
                                </div>
                                <div class="col-7">
                                    <span>8:00 AM - 5:00 PM</span>
                                </div>
                            </div>
                            <div class="row <?= date('D') == "Sat" ? "fw-bold" : null ?>">
                                <div class="col-5 text-end">
                                    <span>Sat</span>
                                </div>
                                <div class="col-7">
                                    <span>Closed</span>
                                </div>
                            </div>
                            <div class="row <?= date('D') == "Sun" ? "fw-bold" : null ?>">
                                <div class="col-5 text-end">
                                    <span>Sun</span>
                                </div>
                                <div class="col-7">
                                    <span>Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.211777926766!2d121.05697287415265!3d14.757095373227926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b01faeafe71d%3A0x6df429917a6fbfe3!2sSt.%20Vincent%20de%20Ferrer%20College%20of%20Camarin%2C%20Inc.!5e0!3m2!1sen!2sph!4v1707917693362!5m2!1sen!2sph" height="400" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>