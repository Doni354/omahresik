<?php

namespace App\Controllers\user;

use App\Controllers\user\BaseController;
use App\Models\ProfilModel;
use App\Models\SliderModel;
use App\Models\ProdukModel;
use App\Models\AktivitasModel;
use App\Models\MetaModel;

class Aktivitasctrl extends BaseController
{
    private $ProfilModel;
    private $SliderModel;
    private $ProdukModel;
    private $AktivitasModel;
    private $MetaModel;


    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
        $this->SliderModel = new SliderModel();
        $this->ProdukModel = new ProdukModel();
        $this->AktivitasModel = new AktivitasModel();
        $this->MetaModel = new MetaModel();
    }

    public function index()
    {
        // SEO
        $metaModel = new MetaModel();
        $meta = $metaModel->where('nama_halaman', 'Aktivitas')->first();

        $canonicalUrl = base_url('/aktivitas');

        $data = [
            'profil' => $this->ProfilModel->findAll(),
            'tbslider' => $this->SliderModel->findAll(),
            'tbproduk' => $this->ProdukModel->findAll(),
            'tbaktivitas' => $this->AktivitasModel->findAll(),
            'meta' => $meta,
            'canonicalUrl' => $canonicalUrl,
        ];

        helper('text');

        if (session('lang') === 'in') {
            $nama_perusahaan = $data['profil'][0]->nama_perusahaan;
            $deskripsi_perusahaan = strip_tags($data['profil'][0]->deskripsi_perusahaan_in);

            $data['Title'] = $data['tbproduk']->nama_produk_in ?? 'Aktivitas';
            $teks = "Aktivitas dari $nama_perusahaan. $deskripsi_perusahaan";
        } else {
            $nama_perusahaan = $data['profil'][0]->nama_perusahaan;
            $deskripsi_perusahaan = strip_tags($data['profil'][0]->deskripsi_perusahaan_en);

            $data['Title'] = $data['tbproduk']->nama_produk_en ?? 'Activities';
            $teks = "Activities of $nama_perusahaan. $deskripsi_perusahaan";
        }

        $batasan = 150;
        $data['Meta'] = character_limiter($teks, $batasan);

        return view('user/aktivitas/index', $data);
    }

    public function detailBySlug($slug)
    {
        // Cari aktivitas berdasarkan slug
        $tbaktivitas = $this->AktivitasModel->where('slug_in', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        // Jika tidak ditemukan, tampilkan halaman 404
        if (!$tbaktivitas) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Aktivitas dengan slug $slug tidak ditemukan.");
        }

        // Siapkan data profil dan aktivitas untuk dikirim ke view
        $data = [
            'profil' => $this->ProfilModel->findAll(),
            'tbaktivitas' => $tbaktivitas,
        ];

        helper('text');

        // Tentukan bahasa yang digunakan dan tentukan meta data sesuai bahasa
        if (session('lang') === 'in') {
            $nama_aktivitas = $data['tbaktivitas']->nama_aktivitas_in;
            $deskripsi_aktivitas = strip_tags($data['tbaktivitas']->deskripsi_aktivitas_in);

            $data['Title'] = $nama_aktivitas ?? '';
            $teks = "$nama_aktivitas. $deskripsi_aktivitas";
        } else {
            $nama_aktivitas = $data['tbaktivitas']->nama_aktivitas_en;
            $deskripsi_aktivitas = strip_tags($data['tbaktivitas']->deskripsi_aktivitas_en);

            $data['Title'] = $nama_aktivitas ?? '';
            $teks = "$nama_aktivitas. $deskripsi_aktivitas";
        }

        // Batasi meta deskripsi dengan 150 karakter
        $batasan = 150;
        $data['Meta'] = character_limiter($teks, $batasan);

        return view('user/aktivitas/detail', $data);
    }
}
