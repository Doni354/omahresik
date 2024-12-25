<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>
<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>


<div class="container-fluid py-5 py-lg-0 feature">
    <?php foreach ($profil as $title) : ?>
        <h1 class="mt-5 mb-5 text-center"><?= $title->title_website; ?></h1>
    <?php endforeach; ?>
</div>
<!-- Features End -->

<!-- About Start -->
<div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <?php foreach ($profil as $descper) : ?>
            <div class="row gx-5 align-items-center" style="min-height: 500px;">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="position-relative h-100 d-flex align-items-center justify-content-center">
                        <img class="rounded wow zoomIn lazyload" data-wow-delay="0.9s" data-src="<?= base_url('asset-user/images/' . $descper->foto_utama); ?>" alt="<?= base_url('asset-user/images/' . $descper->foto_utama); ?>" style="object-fit: contain; object-position: center; max-width: 100%; max-height: 100%;">
                    </div>
                </div>
                <div class="col-lg-7 d-flex flex-column justify-content-center">
                    <div class="mb-1">
                        <div class="section-title">
                            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary"><?php echo lang('Blog.titleAboutUs'); ?></h5>
                        </div>
                        <h3 class="display-5 mb-0"><?= $descper->nama_perusahaan; ?></h3>
                    </div>

                    <p class="mb-4">
                        <?php if (lang('Blog.Languange') == 'en') {
                            echo character_limiter($descper->deskripsi_perusahaan_en, 700);
                        } ?>
                        <?php if (lang('Blog.Languange') == 'in') {
                            echo character_limiter($descper->deskripsi_perusahaan_in, 700);
                        } ?>
                    </p>
                    <div class="button">
                        <a href="<?= base_url('about') ?>" class="btn btn-outline-primary btn-lg rounded-border"><?php echo lang('Blog.btnReadmore'); ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- About End -->

<!-- Products Start -->
<div class="container-fluid product py-5 my-5">
    <div class="container py-5">
        <div class="row">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 text-primary"><?php echo lang('Blog.btnOurproducts'); ?></h1>
            </div>
        </div>
    </div>

    <div class="container" style="overflow-x: auto;"> <!-- Added container to restrict width and enable scrolling -->
        <div class="row">
            <?php $count = 0;
            foreach ($tbproduk as $produk) :
                if ($count < 3) { ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                        <div class="card h-100 hover-effect"> <!-- Tambahkan class hover-effect di sini -->
                            <a href="<?= base_url($lang . '/' . ($lang === 'en' ? 'service' : 'layanan') . '/' . ($lang === 'en' ? $produk->slug_en : $produk->slug_in)); ?>" class="article-card-link">
                                <img class="img-fluid mb-3 mb-sm-0 lazyload" data-src="<?= base_url('asset-user/images/' . $produk->foto_produk); ?>"
                                    alt="<?= ($lang === 'en') ? $produk->nama_produk_en : $produk->nama_produk_in; ?>">
                            </a>
                            <div class="card-body d-flex align-items-center justify-content-center flex-column">
                                <h4 class="card-title">
                                    <a href="<?= base_url($lang . '/' . ($lang === 'en' ? 'service' : 'layanan') . '/' . ($lang === 'en' ? $produk->slug_en : $produk->slug_in)); ?>" class="article-card-link">
                                        <h3 class="h3-link">
                                            <?= ($lang === 'en') ? $produk->nama_produk_en : $produk->nama_produk_in; ?>
                                        </h3>
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>

            <?php
                    $count++;
                }
            endforeach; ?>
        </div>
    </div>

    <br>
    <br>
    <div class="d-flex justify-content-center"> <!-- Centering the button -->
        <a href="<?= base_url('product') ?>" class="btn btn-lg px-4 btn-primary"><?php echo lang('Blog.btnOurproducts'); ?></a>
    </div>
</div>
<!-- Products End -->

<!-- News With Sidebar Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6 text-primary"><?php echo lang('Blog.headerArticle'); ?></h1>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php
            // Shuffle the articles to get a random order
            shuffle($artikelterbaru);

            // Limit the number of articles to 3
            $artikelterbaru_limited = array_slice($artikelterbaru, 0, 3);
            foreach ($artikelterbaru_limited as $row) : ?>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 hover-effect" style="font-size: 14px;">
                        <a href="<?= base_url('artikel/detail/' . $row->id_artikel) ?>" class="img-link">
                            <img data-src="<?= base_url('asset-user/images/' . $row->foto_artikel); ?>"
                                alt="<?= $lang === 'en' ? $row->judul_artikel_en : $row->judul_artikel_in; ?>"
                                class="card-img-top img-fluid lazyload"
                                style="height: 200px; object-fit: cover;"> <!-- Standardized image size -->
                        </a>

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <h4 class="card-title mb-0" style="font-size: 20px;">
                                    <a href="<?= base_url('artikel/detail/' . $row->id_artikel) ?>">
                                        <?= strip_tags($lang === 'en' ? $row->judul_artikel_en : $row->judul_artikel_in); ?>
                                    </a>
                                </h4>

                                <p class="mb-0" style="font-size: 12px; position: absolute; bottom: 10px; right: 10px; text-shadow: 2px 2px 4px rgba(0,0,0,0.2);">
                                    <?= date('d F Y', strtotime($row->created_at)); ?>
                                </p>
                            </div>
                            <p class="card-text" style="font-size: 14px;"><?= substr(strip_tags($row->deskripsi_artikel), 0, 30) ?>...</p>
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
    }

    .hover-effect:hover {
        transform: scale(1.05);
        /* Atur skala sesuai keinginan Anda */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* Optional: tambahkan bayangan untuk efek muncul */
    }
</style>


<?= $this->endSection('content') ?>

<!-- end sementara -->
