<?php include '../inc/en-header.php'; ?>

<main class="content-wrapper">
    <!-- Hero -->
    <section class="pb-5 bg-aasandha-primary position-relative" style="margin-top: -116px; padding-top: 116px;">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="text-center my-5"><strong>Contact Us</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-3 text-center">
                    <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
                        <i class="ci-map-pin position-absolute top-50 start-50 translate-middle"></i>
                    </div>
                    <h3 class="h6 contact">Office location</h3>
                    <ul class="list-unstyled m-0">
                        <li>Aasandha Head Office, Fen Building 3rd Floor</li>
                        <li>Ameenee Magu, Male' City</li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
                        <i class="ci-phone-outgoing position-absolute top-50 start-50 translate-middle"></i>
                    </div>
                    <h3 class="h6 contact">Call us directly</h3>
                    <ul class="list-unstyled m-0">
                        <li class="nav animate-underline justify-content-center">
                            Hotline:
                            <a class="nav-link fs-base ms-1 p-0" href="tel:+9603011400">1400</a>
                        </li>
                        <li class="nav animate-underline justify-content-center">
                            Phone:
                            <a class="nav-link fs-base ms-1 p-0" href="tel:+9603011400">3011400</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 text-center">
                    <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
                        <i class="ci-mail position-absolute top-50 start-50 translate-middle"></i>
                    </div>
                    <h3 class="h6 contact">Send a message</h3>
                    <ul class="list-unstyled m-0">
                        <li class="nav animate-underline justify-content-center">
                            <a class="nav-link fs-base ms-1 p-0" href="mailto:info@aasandha.mv">info@aasandha.mv</a>
                            <a class="nav-link fs-base ms-1 p-0" href="mailto:1400@aasandha.mv">1400@aasandha.mv</a>

                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3  text-center">
                    <div class="position-relative d-inline-block bg-body-tertiary text-dark-emphasis fs-xl rounded-circle p-4 mb-3">
                        <i class="ci-clock position-absolute top-50 start-50 translate-middle"></i>
                    </div>
                    <h3 class="h6 contact">Working hours</h3>
                    <ul class="list-unstyled m-0">
                        <li>Service Hours: 08:00-16:00 on Government Working Days</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center">
        <hr>
        <h2 class="pt-3 contact">Information Officer</h2>
        <p class="pb-2 pb-sm-3 fw-bold">Aishath Zameera, Deputy Manager</p>
        <button type="button" class="btn btn-outline-secondary animate-slide-end">
            <i class="ci-phone animate-target fs-base ms-2 me-2"></i>
            7721850
        </button>
        <button type="button" class="btn btn-outline-secondary animate-slide-end">
            <i class="ci-mail animate-target fs-base ms-2 me-2"></i>
            zameera@aasandha.mv
        </button>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <!-- Form Section -->
                <div class="col bg-body-tertiary py-5 px-4 px-xl-5 rounded-start">
                    <form class="needs-validation py-md-2 px-md-1 px-lg-3 mx-lg-3" novalidate="">
                        <div class="position-relative mb-4">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" id="name" required="">
                            <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your name!</div>
                        </div>
                        <div class="position-relative mb-4">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control form-control-lg rounded-pill" id="email" required="">
                            <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter your email address!</div>
                        </div>
                        <div class="position-relative mb-4">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" class="form-control form-control-lg rounded-pill" id="subject" required="">
                            <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Enter subject!</div>
                        </div>
                        <div class="position-relative mb-4">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control form-control-lg rounded-3" id="message" rows="5" required=""></textarea>
                            <div class="invalid-tooltip bg-transparent z-0 py-0 ps-3">Write your message!</div>
                        </div>
                        <div class="pt-2">
                            <button type="submit" class="btn btn-lg btn-primary rounded-pill">Send message</button>
                        </div>
                    </form>
                </div>

                <!-- Image Section -->
                <div class="col position-relative d-none d-md-block rounded-end overflow-hidden">
                    <div class="ratio ratio-4x3"></div>
                    <img src="../images/officebuilding.jpg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Image">
                </div>

            </div>
        </div>
    </section>




    <section class="my-5">
        <div class="container">
        </div>
    </section>





</main>

<?php include '../inc/en-footer.php'; ?>


</body>

</html>