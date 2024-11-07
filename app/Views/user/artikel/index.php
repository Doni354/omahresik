<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<?php
$lang = session('lang') ?? 'in'; // Definisikan variabel $lang
?>

<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/hero_13.jpg'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleOurarticle');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?>
            </h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"> <?php echo lang('Blog.headerHome'); ?></a>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerArticle');  ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>

<!-- News With Sidebar Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 text-primary"><?php echo lang('Blog.headerArticle'); ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php foreach ($artikelterbaru as $row) : ?>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 hover-effect">
                        <a href="<?= base_url(($lang === 'en' ? 'en/article' : 'id/artikel') . '/' . ($lang === 'en' ? $row->slug_en : $row->slug_in)); ?>" class="img-link">
                            <div class="img-container">
                                <img data-src="<?= base_url('asset-user/images/' . $row->foto_artikel); ?>"
                                    alt="<?= $lang === 'en' ? $row->judul_artikel_en : $row->judul_artikel_in; ?>"
                                    class="card-img-top img-fluid lazyload"
                                    style="object-fit: cover;">
                            </div>
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h4 class="card-title mb-0" style="font-size: 20px;">
                                    <a class="read-more-link" href="<?= base_url($lang . '/' . ($lang === 'en' ? 'article' : 'artikel') . '/' . ($lang === 'en' ? $row->slug_en : $row->slug_in)); ?>">
                                        <?= esc(($lang === 'en') ? $row->judul_artikel_en : $row->judul_artikel_in); ?>
                                    </a>
                                </h4>
                                <p class="mb-0" style="font-size: 15px; position: absolute; bottom: 10px; right: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                                    <?= date('d F Y', strtotime($row->created_at)); ?>
                                </p>
                            </div>
                            <p class="card-text"><?= substr(strip_tags($row->deskripsi_artikel), 0, 30) ?>...</p>
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
        /* Optional: tambahkan bayangan untuk efek muncul */
    }

    .hover-effect:hover {
        transform: translateY(-5px);
        /* Atur perubahan transformasi sesuai keinginan */
    }

    .img-container {
        width: 100%;
        height: 250px;
        /* Sesuaikan tinggi sesuai keinginan */
        overflow: hidden;
    }

    .img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-body {
        width: 90%;
        /* Lebih kecil dari card gambar */
        margin: 0 auto;
        /* Pusatkan body card */
    }

    .card-body p,
    .card-body h4,
    .card-body .card-text {
        text-align: left;
        /* Buat teks rata kiri */
    }
</style>


<?= $this->endSection('content'); ?>