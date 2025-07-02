<?php include '../inc/en-header.php'; ?>

<main class="content-wrapper">
    <!-- Hero -->
    <section class="pb-5 bg-aasandha-primary position-relative" style="margin-top: -116px; padding-top: 116px;">
        <div class="container">
            <!-- Title -->
            <div class="row">
                <div class="col-xl-12">
                    <h1 class="text-center my-5"><strong>Gallery</strong></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <!-- Image gallery with zoom effect on hover -->
            <div class="row row-cols-2 row-cols-md-4 g-5 g-xl-5">

                <!-- Item -->
                <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="../images/img-1.png" data-glightbox data-gallery="image-gallery">
                        <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% -->
                        <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(300 / 300 * 100%)">
                            <img src="../images/img-1.png" alt="Image" class="object-fit-cover">
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="../images/img-2.png" data-glightbox data-gallery="image-gallery">
                        <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% -->
                        <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(300 / 300 * 100%)">
                            <img src="../images/img-2.png" alt="Image" class="object-fit-cover">
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="../images/img-3.png" data-glightbox data-gallery="image-gallery">
                        <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% -->
                        <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(300 / 300 * 100%)">
                            <img src="../images/img-3.png" alt="Image" class="object-fit-cover">
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="col">
                    <a class="hover-effect-scale hover-effect-opacity position-relative d-flex rounded overflow-hidden" href="../images/img-4.png" data-glightbox data-gallery="image-gallery">
                        <i class="ci-zoom-in hover-effect-target fs-3 text-white position-absolute top-50 start-50 translate-middle opacity-0 z-2"></i>
                        <!-- Wrap the image with a "ratio" element to avoid content shifts on page load. Formula: imageHeight / imageWidth * 100% -->
                        <div class="ratio hover-effect-target bg-body-tertiary rounded" style="--cz-aspect-ratio: calc(300 / 300 * 100%)">
                            <img src="../images/img-4.png" alt="Image" class="object-fit-cover">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>





</main>

<?php include '../inc/en-footer.php'; ?>


</body>

</html>