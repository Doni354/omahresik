<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<div class="container-fluid page-header-2 py-5 mb-5 wow fadeIn lazyload" data-wow-delay="0.1s" style="min-height: 200px; display: flex; align-items: center; justify-content: center; background-image: url('<?= base_url('./asset-user/images/hero_14.jpg'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleAboutUs');
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
                    <span><?php echo lang('Blog.headerAbout'); ?></span>
                </p>
            </ol>
        </nav>
    </div>

</div>
<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <?php foreach ($profil as $descper) : ?>
            <div class="row gx-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="position-relative">
                        <img class="rounded wow zoomIn lazyload" data-wow-delay="0.9s" data-src="<?= base_url('asset-user/images/' . $descper->foto_utama); ?>" style="object-fit: cover; object-position: center; max-width: 100%; height: auto;">
                    </div>
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <div class="mb-4">
                        <div class="section-title">
                            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary"><?php echo lang('Blog.titleAboutUs'); ?></h5>
                        </div>
                        <h3 class="display-5 mb-0"><?= $descper->nama_perusahaan; ?></h3>
                    </div>

                    <p class="mb-4">
                        <?php if (lang('Blog.Languange') == 'en') {
                            echo nl2br($descper->deskripsi_perusahaan_en);
                        } ?>
                        <?php if (lang('Blog.Languange') == 'in') {
                            echo nl2br($descper->deskripsi_perusahaan_in);
                        } ?>
                    </p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- About End -->

<?= $this->endSection('content'); ?>