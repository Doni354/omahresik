<!-- Carousel Start -->
<div class="container-fluid px-0 mb-4">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php foreach ($tbslider as $key => $slider) : ?>
                <div class="carousel-item<?= $key === 0 ? ' active' : ''; ?> bg-cover" style="background-image: url('/asset-user/images/<?= $slider->file_foto_slider; ?>');">
                </div>
            <?php endforeach; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->
<style>
    .carousel-item {
        height: 100vh;
        /* Set the height of the carousel to be full screen */
        background-size: cover;
        /* Ensures the image covers the entire div */
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Prevents the image from repeating */
    }

    @media (max-width: 767px) {
        .carousel-item {
            height: 50vh;
            /* Adjust the height for mobile devices */
            background-size: contain;
            /* Ensure the image fits within the div without being cut off */
        }
    }
</style>
