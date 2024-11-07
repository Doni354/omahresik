<?php

namespace App\Controllers\user;

use App\Controllers\user\BaseController;
use App\Models\ProfilModel;
use App\Models\SliderModel;
use App\Models\ProdukModel;
use App\Models\MetaModel;

class Productsctrl extends BaseController
{
    private $ProfilModel;
    private $SliderModel;
    private $ProdukModel;
    private $MetaModel;

    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
        $this->SliderModel = new SliderModel();
        $this->ProdukModel = new ProdukModel();
        $this->MetaModel = new MetaModel();
    }

    public function index()
    {
        $meta = $this->MetaModel->where('nama_halaman', 'Product')->first();
        $canonicalUrl = base_url('/product');

        $data = [
            'profil' => $this->ProfilModel->findAll(),
            'tbslider' => $this->SliderModel->findAll(),
            'tbproduk' => $this->ProdukModel->findAll(),
            'meta' => $meta,
            'canonicalUrl' => $canonicalUrl,
        ];

        helper('text');

        if (session('lang') === 'in') {
            $nama_perusahaan = $data['profil'][0]->nama_perusahaan;
            $deskripsi_perusahaan = strip_tags($data['profil'][0]->deskripsi_perusahaan_in);

            $data['Title'] = $data['tbproduk']->nama_produk_in ?? 'Produk';
            $teks = "Produk dari $nama_perusahaan. $deskripsi_perusahaan";
        } else {
            $nama_perusahaan = $data['profil'][0]->nama_perusahaan;
            $deskripsi_perusahaan = strip_tags($data['profil'][0]->deskripsi_perusahaan_en);

            $data['Title'] = $data['tbproduk']->nama_produk_en ?? 'Products';
            $teks = "Products of $nama_perusahaan. $deskripsi_perusahaan";
        }

        $batasan = 150;
        $data['Meta'] = character_limiter($teks, $batasan);

        return view('user/products/index', $data);
    }

    public function detailBySlug($slug)
{
    // Cari produk berdasarkan slug
    $tbproduk = $this->ProdukModel->where('slug_in', $slug)
        ->orWhere('slug_en', $slug)
        ->first();

    // Jika tidak ditemukan, tampilkan halaman 404
    if (!$tbproduk) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Produk dengan slug $slug tidak ditemukan.");
    }

    // Siapkan data profil dan produk untuk dikirim ke view
    $data = [
        'profil' => $this->ProfilModel->findAll(),
        'tbproduk' => $tbproduk,
    ];

    helper('text');

    // Tentukan bahasa yang digunakan dan tentukan meta data sesuai bahasa
    if (session('lang') === 'in') {
        $nama_produk = $data['tbproduk']->nama_produk_in;
        $deskripsi_produk = strip_tags($data['tbproduk']->deskripsi_produk_in);

        $data['Title'] = $nama_produk ?? '';
        $teks = "$nama_produk. $deskripsi_produk";
    } else {
        $nama_produk = $data['tbproduk']->nama_produk_en;
        $deskripsi_produk = strip_tags($data['tbproduk']->deskripsi_produk_en);

        $data['Title'] = $nama_produk ?? '';
        $teks = "$nama_produk. $deskripsi_produk";
    }

    // Batasi meta deskripsi dengan 150 karakter
    $batasan = 150;
    $data['Meta'] = character_limiter($teks, $batasan);

    return view('user/products/detail', $data);
}

}
