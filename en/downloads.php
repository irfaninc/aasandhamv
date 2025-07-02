<?php include '../inc/en-header.php'; ?>

<main class="content-wrapper">
    <!-- Hero -->
    <section class="pb-5 bg-aasandha-primary position-relative" style="margin-top: -116px; padding-top: 116px;">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="text-center my-5"><strong>Downloads</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row g-4 g-md-5">

                <!-- Left column for tab links (dropdown on mobile) -->
                <div class="col-12 col-md-3">
                    <!-- Mobile Dropdown Navigation -->
                    <div class="dropdown d-block d-md-none mb-3">
                        <button class="btn btn-outline-primary dropdown-toggle w-100" type="button" id="mobileTabDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <span id="currentTabText">Latest Downloads</span>
                        </button>
                        <ul class="dropdown-menu w-100" aria-labelledby="mobileTabDropdown">
                            <li><a class="dropdown-item mobile-tab-link" href="#overview" data-tab-text="Latest Downloads">Latest Downloads</a></li>
                            <li><a class="dropdown-item mobile-tab-link" href="#emergency" data-tab-text="Application Forms">Application Forms</a></li>
                            <li><a class="dropdown-item mobile-tab-link" href="#local" data-tab-text="Job Application Forms">Job Application Forms</a></li>
                            <li><a class="dropdown-item mobile-tab-link" href="#overseas" data-tab-text="Laws, Regulations & Guidelines">Laws, Regulations & Guidelines</a></li>
                        </ul>
                    </div>

                    <!-- Desktop Tab Navigation -->
                    <ul class="nav flex-column nav-pills w-100 d-none d-md-block" role="tablist">
                        <li class="nav-item aasandha-nav-tabs mb-2">
                            <a class="nav-link active" id="list-overview-tab" data-bs-toggle="pill" href="#overview" role="tab">Latest Downloads</a>
                        </li>
                        <li class="nav-item aasandha-nav-tabs mb-2">
                            <a class="nav-link" id="list-emergency-tab" data-bs-toggle="pill" href="#emergency" role="tab">Application Forms</a>
                        </li>
                        <li class="nav-item aasandha-nav-tabs mb-2">
                            <a class="nav-link" id="list-local-tab" data-bs-toggle="pill" href="#local" role="tab">Job Application Forms</a>
                        </li>
                        <li class="nav-item aasandha-nav-tabs mb-2">
                            <a class="nav-link" id="list-overseas-tab" data-bs-toggle="pill" href="#overseas" role="tab">Laws, Regulations & Guidelines</a>
                        </li>
                    </ul>
                </div>

                <!-- Right column for Tab Content -->
                <div class="col-12 col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel">
                            <h3>Latest Downloads</h3>
                            <div class="card">
                                <div class="card-body p-3">
                                    <div class="d-flex min-w-0 justify-content-between gap-2 gap-sm-3">
                                        <div class=" d-flex flex-wrap align-items-center justify-content-between">
                                            <h3 class="fs-base text-dark lh-md mb-2 mb-md-0">Master Medicines and Consumables List (Updated on 20 April 2025)</h3>
                                        </div>
                                        <div class="h5 mb-0">
                                            <a href="https://www.aasandha.mv/api/downloads/226/file/2025-04-21_Master%20Medicines%20and%20Consumables%20List%20(Updated%20on%2020%20April%202025).pdf" target="_blank"><button type="button" class="btn btn-sm btn-primary rounded-pill">Download</button></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="nav align-items-center gap-1 fs-xs">
                                            <div class="text-body-secondary">20th May 2025</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-3">
                                    <div class="d-flex min-w-0 justify-content-between gap-2 gap-sm-3">
                                        <div class=" d-flex flex-wrap align-items-center justify-content-between">
                                            <h3 class="fs-base text-dark lh-md mb-2 mb-md-0">'Meranaa Scheme' Reimbursement Form</h3>
                                        </div>
                                        <div class="h5 mb-0">
                                            <a href="https://www.aasandha.mv/api/downloads/238/file/2024-11-12_'Meranaa%20Scheme'%20Reimbursement%20Form.pdf" target="_blank"><button type="button" class="btn btn-sm btn-primary rounded-pill">Download</button></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="nav align-items-center gap-1 fs-xs">
                                            <div class="text-body-secondary">20th May 2025</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="emergency" role="tabpanel">
                            <h3>Application Forms</h3>
                            <p>Information is not available</p>
                        </div>
                        <div class="tab-pane fade" id="local" role="tabpanel">
                            <h3>Job Application Forms</h3>
                            <p>Information is not available</p>
                        </div>
                        <div class="tab-pane fade" id="overseas" role="tabpanel">
                            <h3>Laws, Regulations & Guidelines</h3>
                            <p>Information is not available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main>

<?php include '../inc/en-footer.php'; ?>


</body>

</html>