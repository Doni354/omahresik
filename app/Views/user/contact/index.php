<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header-1 py-5 mb-5 wow fadeIn lazyload" style="background-image: url('<?= base_url('./asset-user/images/hero_12.jpg'); ?>');">
    <div class="container text-center py-5" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">
        <?php foreach ($profil as $perusahaan) : ?>
            <h3 class="display-6 text-white mb-4 animated slideInDown">
                <?php echo lang('Blog.titleOurContact');
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

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-5">
                <div class="map embed-responsive embed-responsive-16by9" style="width: 100%;">
                    <?php foreach ($profil as $maps) : ?>
                        <?php echo $maps->link_maps ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6 mb-5 mb-md-5">
                <?php foreach ($profil as $desc) : ?>
                    <div class="card contact-card">
                        <div class="card-body">
                            <div class="section-title">
                                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Hubungi Kami</h5>
                            </div>
                            <blockquote class="blockquote">
                                <div class="contact_details_row clearfix">
                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="ico-paperplane">&#x1F4CC;</i>
                                        </div>
                                        <div class="details">
                                            <h4>Alamat</h4>
                                            <span class="c_detail">
                                                <p><?php echo $desc->alamat; ?></p>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="ico-paperplane">&#x2709;&#xFE0F;</i>
                                        </div>
                                        <div class="details">
                                            <h4>Email</h4>
                                            <span class="c_detail">
                                                <p class="c_desc"><a target="_blank" href="mailto:<?php echo $desc->email; ?>"><?php echo $desc->email; ?></a></p>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="contact-item">
                                        <div class="icon">
                                            <i class="ico-phone">&#x260E;&#xFE0F;</i>
                                        </div>
                                        <div class="details">
                                            <h4>Nomor Tlp</h4>
                                            <span class="c_detail">
                                                <p><?php echo $desc->link_whatsapp; ?></p>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </blockquote>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contactCards = document.querySelectorAll(".contact-card");

        contactCards.forEach(card => {
            card.addEventListener("mouseenter", function() {
                // Tambahkan kelas atau ubah properti saat masuk
                this.classList.add("hovered");
            });

            card.addEventListener("mouseleave", function() {
                // Hapus kelas atau kembalikan properti saat keluar
                this.classList.remove("hovered");
            });
        });
    });
</script>


<style>
    body {
        margin: 20px;
    }

    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    .card h2 {
        color: #f46c25;
        font-size: 24px;
        margin-bottom: 20px;
        border-bottom: 2px solid #f46c25;
        padding-bottom: 10px;
    }

    .contact_details_row {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .contact-item {
        display: flex;
        align-items: center;
    }

    .contact-item .icon {
        background-color: #f46c25;
        border-radius: 50%;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        margin-right: 20px;
    }

    .contact-item .icon i {
        font-size: 24px;
    }

    .contact-item .details {
        flex: 1;
    }

    .contact-item .details .c_title {
        color: #f46c25;
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 5px;
    }

    .contact-item .details .c_detail {
        margin: 0;
        font-size: 16px;
    }

    .contact-item .details .c_name {
        font-weight: bold;
    }

    .contact-item .details .c_desc a {
        color: #f46c25;
        text-decoration: none;
    }

    .map,
    .contact-card {
        height: 100%;
    }

    .map iframe {
        width: 100%;
        height: 100%;
    }

    .contact-item {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .icon {
        background-color: #f46c25;
        border-radius: 50%;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        margin-right: 20px;
    }

    .icon i {
        font-size: 24px;
    }

    .details {
        flex: 1;
    }

    .details h4 {
        margin: 0;
        font-size: 18px;
        color: #f46c25;
    }

    .details p {
        margin: 0;
    }

    .contact_details_row {
        display: flex;
        flex-direction: column;
    }

    @media (min-width: 768px) {
        .col-md-6 {
            display: flex;
            align-items: stretch;
        }
    }

    .contact-card {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    

</style>

<?= $this->endSection('content'); ?>