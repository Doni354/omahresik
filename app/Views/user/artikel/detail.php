<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<style>
    .article-title {
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        width: 100%;
    }

    .article-item {
        display: flex;
        height: 110px;
        /* Tinggi card sesuai dengan tinggi gambar */
        overflow: hidden;
        /* Sembunyikan overflow */
    }

    .article-image {
        width: 110px;
        height: 110px;
        object-fit: cover;
    }

    .article-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex: 1;
        padding: 0 1rem;
        white-space: normal;
        /* Izinkan teks membungkus ke baris berikutnya */
        overflow: hidden;
        /* Sembunyikan overflow yang tidak perlu */
        text-overflow: ellipsis;
        /* Tambahkan ellipsis pada teks yang terlalu panjang */
    }
</style>

<div class="container-fluid page-header py-5" style="background-image: url('<?= base_url('./asset-user/images/hero_14.jpg'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleOurarticle');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?></h3>
        <?php endforeach; ?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <p class="text-white text-center">
                    <a href="<?= base_url('/') ?>"> <?php echo lang('Blog.headerHome'); ?></a></li>
                    <span class="mx-2">/</span>
                    <span><?php echo lang('Blog.headerArticle');  ?></span>
                </p>
            </ol>
        </nav>
    </div>
</div>
</div>


<!-- News With Sidebar Start -->
<div class="container-fluid pt-5 mb-3" style="background-image: url('<?= base_url('asset-user/img/product-bg-1.png'); ?>'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="<?= base_url('asset-user/images/' . $artikel->foto_artikel); ?>" style="object-fit: cover;">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($artikel->created_at)); ?></a>
                        </div>
                        <h1 class="display-5 mb-2 article-title">
                            <?= ($lang == 'en') ? esc($artikel->judul_artikel_en ?? 'Judul tidak tersedia') : esc($artikel->judul_artikel_in ?? 'Judul tidak tersedia'); ?>
                        </h1>
                        <p class="fs-5"><?= $artikel->deskripsi_artikel; ?></p>
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4">
                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Baca Juga</h5>
                    </div>
                    <br>
                    <div class="bg-white border border-top-0 p-3">
                        <?php foreach ($artikel_lain as $artikel_item) : ?>
                            <div class="d-flex align-items-center bg-white mb-3 article-item hover-effect">
                                <img class="img-fluid article-image" src="<?= base_url('asset-user/images/' . $artikel_item->foto_artikel); ?>" alt="">
                                <div class="w-100 h-100 d-flex flex-column justify-content-center border border-left-0 article-content">
                                    <div class="mb-2">
                                    <a href="<?= base_url($lang . '/' . ($lang === 'en' ? 'article' : 'artikel') . '/' . ($lang === 'en' ? $artikel_item->slug_en : $artikel_item->slug_in)); ?>">
                                        <img class="img-fluid article-image" src="<?= base_url('asset-user/images/' . $artikel_item->foto_artikel); ?>" alt="Gambar utama untuk artikel <?= esc($lang == 'en' ? $artikel_item->judul_artikel_en : $artikel_item->judul_artikel_in); ?>" loading="lazy">
                                    </a>
                                    </div>
                                    <a class="h6 m-0 display-7" href="<?= base_url($lang . '/' . ($lang === 'en' ? 'article' : 'artikel') . '/' . ($lang === 'en' ? $artikel_item->slug_en : $artikel_item->slug_in)); ?>">
                                            <?= ($lang == 'en') ? esc($artikel_item->judul_artikel_en) : esc($artikel_item->judul_artikel_in); ?>...
                                        </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Popular News End -->
            </div>


            <!-- Popular News End -->
        </div>
    </div>
</div>

</div>
<!-- News With Sidebar End -->

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

    .article-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-item:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>

<?= $this->endSection('content'); ?>