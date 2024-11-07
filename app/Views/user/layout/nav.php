<div class="container-fluid bg-white sticky-top">
    <?php foreach ($profil as $header) : ?>
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3">
            <div class="logo" style="margin-left: 20px;">
                <a href="<?= base_url('/') ?>" class="logo">
                    <img src="<?= base_url('asset-user/images/') . $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" class="img-fluid logo-img" style="height: 50px; width: 50px;">
                </a>
            </div>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <?php
                    // Ambil bahasa yang disimpan di session
                    $lang = session()->get('lang') ?? 'en'; // Default ke 'en' jika tidak ada di session

                    $current_url = uri_string();

                    // Simpan segmen bahasa saat ini
                    $lang_segment = substr($current_url, 0, strpos($current_url, '/') + 1); // Menyimpan 'id/' atau 'en/'

                    // Definisikan tautan untuk setiap halaman berdasarkan bahasa
                    $aboutLink = ($lang_segment === 'en/') ? 'about' : 'tentang';
                    $articleLink = ($lang_segment === 'en/') ? 'article' : 'artikel';
                    $productLink = ($lang_segment === 'en/') ? 'service' : 'layanan';
                    $activitiesLink = ($lang_segment === 'en/') ? 'activities' : 'aktivitas';
                    $contactLink = ($lang_segment === 'en/') ? 'contact' : 'kontak';

                    // Buat array untuk menggantikan segmen berdasarkan bahasa
                    $replace_map = [
                        'tentang' => 'about',
                        'artikel' => 'article',
                        'layanan' => 'service',
                        'aktivitas' => 'activities',
                        'kontak' => 'contact'
                    ];

                    // Ambil bagian dari URL tanpa segmen bahasa
                    $url_without_lang = substr($current_url, strlen($lang_segment));

                    // Tentukan bahasa yang ingin digunakan
                    $new_lang_segment = ($lang_segment === 'en/') ? 'id/' : 'en/';

                    // Gantikan setiap segmen dalam URL berdasarkan bahasa yang aktif
                    foreach ($replace_map as $indonesian_segment => $english_segment) {
                        if ($lang_segment === 'en/') {
                            // Jika bahasa yang dipilih adalah 'en', maka ganti segmen ID ke EN
                            $url_without_lang = str_replace($english_segment, $indonesian_segment, $url_without_lang);
                        } else {
                            // Jika bahasa yang dipilih adalah 'id', maka ganti segmen EN ke ID
                            $url_without_lang = str_replace($indonesian_segment, $english_segment, $url_without_lang);
                        }
                    }

                    // Tautan dengan bahasa yang baru
                    $clean_url = $new_lang_segment . ltrim($url_without_lang, '/');

                    // Tautan Bahasa Inggris
                    $english_url = base_url($clean_url);

                    // Tautan Bahasa Indonesia
                    $indonesia_url = base_url($clean_url);
                    ?>

                    <!-- Link navigasi dengan bahasa yang sedang aktif -->
                    <a href="<?= base_url($lang . '/') ?>" class="nav-item nav-link <?= uri_string() == '' ? 'active' : '' ?>">
                        <?php echo lang('Blog.headerHome'); ?>
                    </a>
                    <a href="<?= base_url($lang . '/' . $aboutLink) ?>" class="nav-item nav-link <?= uri_string() == ($lang . '/' . $aboutLink) ? 'active' : '' ?>">
                        <?php echo lang('Blog.headerAbout'); ?>
                    </a>
                    <a href="<?= base_url($lang . '/' . $articleLink) ?>" class="nav-item nav-link <?= (uri_string() == ($lang . '/' . $articleLink) || strpos(uri_string(), $lang . '/' . $articleLink . '/detail') === 0) ? 'active' : '' ?>">
                        <?php echo lang('Blog.headerArticle'); ?>
                    </a>
                    <a href="<?= base_url($lang . '/' . $productLink) ?>" class="nav-item nav-link <?= (uri_string() == ($lang . '/' . $productLink) || strpos(uri_string(), $lang . '/' . $productLink . '/detail') === 0) ? 'active' : '' ?>">
                        <?php echo lang('Blog.headerProducts'); ?>
                    </a>
                    <a href="<?= base_url($lang . '/' . $activitiesLink) ?>" class="nav-item nav-link <?= uri_string() == ($lang . '/' . $activitiesLink) ? 'active' : '' ?>">
                        <?php echo lang('Blog.headerActivities'); ?>
                    </a>
                    <a href="<?= base_url($lang . '/' . $contactLink) ?>" class="nav-item nav-link <?= uri_string() == ($lang . '/' . $contactLink) ? 'active' : '' ?>">
                        <?php echo lang('Blog.headerContact'); ?>
                    </a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link drop" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo lang('Blog.headerLanguage'); ?> <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-menu text-capitalize" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= $english_url ?>">English</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= $indonesia_url ?>">Indonesia</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <?php endforeach; ?>
</div>


<!-- Pastikan jQuery dan Bootstrap dimuat sebelum script Anda -->
<script>
    $(document).ready(function() {
        // Tambahkan event listener untuk setiap tautan di navbar
        $(".navbar-nav a").on("click", function() {
            $(".navbar-nav").find(".active").removeClass("active");
            $(this).addClass("active");
            // Tutup navbar setelah klik
            if ($(".navbar-collapse").hasClass("show")) {
                $(".navbar-toggler").click();
            }
        });
    });
</script>

<style>
    .logo {
        display: flex;
        align-items: center;
        height: 100%;
    }

    .logo-img {
        max-height: 70px;
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .logo-img {
            max-height: 50px;
        }
    }

    @media (min-width: 992px) {
        .logo-img {
            max-height: 90px;
        }
    }
</style>