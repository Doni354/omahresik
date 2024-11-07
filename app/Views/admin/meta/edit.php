<!DOCTYPE html>
<html>
<head>
    <title>Edit Meta</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Edit Meta</h1>
        <form action="<?= base_url('admin/meta/update/' . $meta['id_seo']) ?>" method="post">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="nama_halaman">Nama Halaman:</label>
                <input type="text" class="form-control" id="nama_halaman" name="nama_halaman" value="<?= old('nama_halaman', $meta['nama_halaman']) ?>">
                <?php if (isset($errors['nama_halaman'])): ?>
                    <div class="text-danger"><?= $errors['nama_halaman'] ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="meta_title">Meta Title Id:</label>
                <input type="text" class="form-control" id="meta_title_id" name="meta_title_id" value="<?= old('meta_title_id', $meta['meta_title_id']) ?>">
                <?php if (isset($errors['meta_title_id'])): ?>
                    <div class="text-danger"><?= $errors['meta_title_id'] ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="meta_description">Meta Description Id:</label>
                <input type="text" class="form-control" id="meta_description_id" name="meta_description_id" value="<?= old('meta_description_id', $meta['meta_description_id']) ?>">
                <?php if (isset($errors['meta_description_id'])): ?>
                    <div class="text-danger"><?= $errors['meta_description_id'] ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="meta_title">Meta Title En:</label>
                <input type="text" class="form-control" id=" meta_title_en" name="meta_title_en" value="<?= old('meta_title_en', $meta['meta_title_en']) ?>">
                <?php if (isset($errors['meta_title_en'])): ?>
                    <div class="text-danger"><?= $errors['meta_title_en'] ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="meta_description">Meta Description En:</label>
                <input type="text" class="form-control" id="meta_description_en" name="meta_description_en" value="<?= old('meta_description_en', $meta['meta_description_en']) ?>">
                <?php if (isset($errors['meta_description_en'])): ?>
                    <div class="text-danger"><?= $errors['meta_description_en'] ?></div>
                <?php endif; ?>
            </div>
            
            <div class="form-group">
                <label for="canonical_url">Canonical URL:</label>
                <input type="text" class="form-control" id="canonical_url" name="canonical_url" value="<?= old('canonical_url', $meta['canonical_url']) ?>">
                <?php if (isset($errors['canonical_url'])): ?>
                    <div class="text-danger"><?= $errors['canonical_url'] ?></div>
                <?php endif; ?>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
