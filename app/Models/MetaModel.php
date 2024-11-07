<?php

namespace App\Models;

use CodeIgniter\Model;

class MetaModel extends Model
{
    protected $table = 'tb_meta'; // Nama tabel
    protected $primaryKey = 'id_seo'; // Primary key
    protected $allowedFields = ['nama_halaman', 'meta_title_id', 'meta_description_id', 'meta_title_en', 'meta_description_en','canonical_url']; // Kolom yang bisa diisi

    // Optional: Jika kamu ingin menggunakan timestamp
    protected $useTimestamps = false; // Set true jika ingin menggunakan created_at dan updated_at

    // Jika perlu, bisa menambahkan rules untuk validasi
    protected $validationRules = [
        'nama_halaman' => 'required',
        'meta_title_id' => 'required',
        'meta_description_id' => 'required',
        'meta_title_en' => 'required',
        'meta_description_en' => 'required',
        'canonical_url' => 'max_length[255]',
    ];

    protected $validationMessages = [
        // Tambahkan pesan kustom jika perlu
    ];

    protected $skipValidation = false; // Set true jika tidak ingin validasi dilakukan
}
