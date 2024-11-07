<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<?php
$lang = session('lang') ?? 'in'; // Definisikan variabel $lang
?>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/hero_15.jpg'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleActivities');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"><?php echo lang('Blog.Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerActivities');  ?></span>
                </p>
            </ol>
        </nav>
    </div>

</div>
<!-- Page Header End -->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 text-primary"><?php echo lang('Blog.headerActivities'); ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php foreach ($tbaktivitas as $aktivitas) : ?>
                <div class="col-md-4 mb-4 mb-lg-6 col-lg-4">
                    <div class="card h-100 hover-effect"> <!-- Tambahkan class hover-effect di sini -->


                        <a href="<?= base_url($lang . '/' . ($lang === 'en' ? 'activities' : 'aktivitas') . '/' . ($lang === 'en' ? $aktivitas->slug_en : $aktivitas->slug_in)); ?>" class="article-card-link">
                            <img data-src="<?= base_url('asset-user/images/' . $aktivitas->foto_aktivitas); ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                                            echo $aktivitas->nama_aktivitas_en;
                                                                                                                        } else {
                                                                                                                            echo $aktivitas->nama_aktivitas_in;
                                                                                                                        } ?>"
                                class="img-fluid img-larger lazyload">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="<?= base_url($lang . '/' . ($lang === 'en' ? 'activities' : 'aktivitas') . '/' . ($lang === 'en' ? $aktivitas->slug_en : $aktivitas->slug_in)); ?>" class="article-card-link">
                                    <?php if (lang('Blog.Languange') == 'en') {
                                        echo $aktivitas->nama_aktivitas_en;
                                    } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $aktivitas->nama_aktivitas_in;
                                    } ?>
                                </a>

                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<style>
    .hover-effect {
        transition: transform 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hover-effect:hover {
        transform: translateY(-5px);
    }

    .img-container {
        width: 100%;
        height: 250px;
        overflow: hidden;
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-body {
        width: 90%;
        margin: 0 auto;
    }

    .card-body p,
    .card-body h5,
    .card-body .card-text {
        text-align: left;
    }
</style>

<?= $this->endSection('content'); ?>