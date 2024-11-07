<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Meta Data</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        .app-content {
            padding-top: 3rem;
            padding-right: 1rem;
            padding-left: 1rem;
            padding-bottom: 3rem;
        }

        .app-page-title {
            font-size: 1.75rem;
            font-weight: bold;
        }

        .app-card {
            border-radius: 0.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .app-card-body {
            padding: 1.5rem;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            display: block;
        }
    </style>
    <!-- Link ke Bootstrap JS dan dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</head>
<body>
    <?= $this->extend('admin/template/template'); ?>
    <?= $this->section('content'); ?>

    <div class="app-content">
        <div class="container-xl">
            <h1 class="app-page-title">Tambahkan Meta Data</h1>
            <hr class="mb-4">
            <div class="row g-4 settings-section">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="card-body">

                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger" role="alert">
                                <h4>Error</h4>
                                <p><?php echo session()->getFlashdata('error'); ?></p>
                            </div>
                        <?php endif; ?>

                        <form action="<?= base_url('admin/meta/proses_tambah') ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Nama Halaman</label>
                                        <input type="text" class="form-control" id="nama_halaman" name="nama_halaman" value="<?= old('nama_halaman') ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title Id</label>
                                        <input type="text" class="form-control" id="meta_title_id" name="meta_title_id" value="<?= old('meta_title_id') ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description Id</label>
                                        <textarea class="form-control" id="meta_description_id" name="meta_description_id"><?= old('meta_description_id') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Title En</label>
                                        <input type="text" class="form-control" id="meta_title_en" name="meta_title_en" value="<?= old('meta_title_en') ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Meta Description En</label>
                                        <textarea class="form-control" id="meta_description_en" name="meta_description_en"><?= old('meta_description_en') ?></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Canonical URL</label>
                                        <input type="text" class="form-control" id="canonical_url" name="canonical_url" value="<?= old('canonical_url') ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <div class="col">
                                    <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?php echo session()->getFlashdata('success') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!--//app-card-->
            </div><!--//row-->

            <hr class="my-4">
        </div><!--//container-xl-->
    </div><!--//app-content-->

    <?= $this->endSection('content'); ?>
</body>
</html>
