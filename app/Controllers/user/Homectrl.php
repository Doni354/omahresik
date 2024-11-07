<?php

namespace App\Controllers\user;

use App\Controllers\user\BaseController;
use App\Models\ProfilModel;
use App\Models\SliderModel;
use App\Models\ProdukModel;
use App\Models\ArtikelModel;
use App\Models\MetaModel;


class Homectrl extends BaseController
{

    private $ProfilModel;
    private $SliderModel;
    private $ProdukModel;
    private $ArtikelModel;
    private $MetaModel;

    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
        $this->SliderModel = new SliderModel();
        $this->ProdukModel = new ProdukModel();
        $this->ArtikelModel = new ArtikelModel();
        $this->MetaModel = new MetaModel();
    }

    public function index()
    {
        // SEO
    $metaModel = new MetaModel;
    $meta = $metaModel->where('nama_halaman', 'Beranda')->first();
    
    $canonicalUrl = base_url('/beranda');

    $lang = session()->get('lang') ?? 'en';

    // Ambil data dari model
    $data = [
        'profil' => $this->ProfilModel->findAll(),
        'tbslider' => $this->SliderModel->findAll(),
        'tbproduk' => $this->ProdukModel->findAll(),
        'artikelterbaru' => $this->ArtikelModel->getArtikelTerbaru(), // Ambil artikel terbaru
        'meta' => $meta,
        'canonicalUrl' => $canonicalUrl,
        'lang' => $lang,  // Tambahkan canonical URL ke data
    ];


        $data['Title'] = $data['profil'][0]->title_website;

        helper('text');

        if (session('lang') === 'in') {
            $teks = strip_tags($data['profil'][0]->deskripsi_perusahaan_in);
        } else {
            $teks = strip_tags($data['profil'][0]->deskripsi_perusahaan_en);
        }

        $batasan = 150;
        $data['Meta'] = character_limiter($teks, $batasan);

        return view('user/home/index', $data);
    }

    public function redirectToHome()
    {
        return redirect()->to('user/home');
    }

    public function language($locale)
    {
        $session = session();

        // Validasi bahasa yang diterima
        if ($locale === 'in' || $locale === 'en') {
            // Mengatur sesi bahasa ke bahasa yang dipilih
            $session->set('lang', $locale);
        }

        // Redirect kembali ke halaman sebelumnya
        return redirect()->back();
    }
}
