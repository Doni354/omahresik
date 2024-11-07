<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<?php
$lang = session('lang') ?? 'in'; // Definisikan variabel $lang
?>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/hero_11.jpg'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleOurproducts');
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
                    <span><?php echo lang('Blog.headerProducts'); ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-6 text-primary"><?php echo lang('Blog.btnOurproducts'); ?></h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php foreach ($tbproduk as $produk) : ?>
                <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
                    <div class="card h-100 hover-effect">
                        <a href="<?= base_url($lang . '/' . (($lang == 'en') ? 'service' : 'layanan') . '/' . (($lang == 'en') ? $produk->slug_en : $produk->slug_in)) ?>" class="article-card-link">

                            <img class="img-fluid mb-3 mb-sm-0 lazyload"
                                data-src="<?= base_url('asset-user/images/' . $produk->foto_produk); ?>" alt="<?php
                                                                                                                if (lang('Blog.Languange') == 'en') {
                                                                                                                    echo $produk->nama_produk_en;
                                                                                                                } else {
                                                                                                                    echo $produk->nama_produk_in;
                                                                                                                }
                                                                                                                ?>"
                                class="img-fluid lazyload">
                        </a>

                        <div class="card-body">
                            <h5 class="card-title text-center">
                                <a href="<?= base_url($lang . '/' . (($lang == 'en') ? 'service' : 'layanan') . '/' . (($lang == 'en') ? $produk->slug_en : $produk->slug_in)) ?>" class="article-card-link">

                                    <h3 class="h3-link">
                                        <?= ($lang == 'en') ? $produk->nama_produk_en : $produk->nama_produk_in; ?>
                                    </h3>
                                </a>

                            </h5>
                            <p class="card-text">
                                <!-- Tambahkan deskripsi produk jika diperlukan -->
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- </div> -->

<style>
    .hover-effect {
        transition: transform 0.3s ease;
    }

    .hover-effect:hover {
        transform: scale(1.05);
        /* Atur skala sesuai keinginan */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Optional: tambahkan bayangan untuk efek muncul */
    }
</style>

<?= $this->endSection('content'); ?>