<?php

namespace App\Controllers\user;

use App\Controllers\user\BaseController;
use App\Models\ProfilModel;
use App\Models\SliderModel;
use App\Models\ArtikelModel;
use App\Models\MetaModel;

class Artikelctrl extends BaseController
{
    private $ProfilModel;
    private $SliderModel;
    private $ArtikelModel;
    private $MetaModel;

    public function __construct()
    {
        $this->ProfilModel = new ProfilModel();
        $this->SliderModel = new SliderModel();
        $this->ArtikelModel = new ArtikelModel();
        $this->MetaModel = new MetaModel();
    }

    public function index()
    {
        $metaModel = new MetaModel();
        $meta = $metaModel->where('nama_halaman', 'Artikel')->first();
        $canonicalUrl = base_url('/artikel');
        $lang = session()->get('lang') ?? 'en';

        $data = [
            'profil' => $this->ProfilModel->findAll(),
            'tbslider' => $this->SliderModel->findAll(),
            'artikelterbaru' => $this->ArtikelModel->getArtikelTerbaru(),
            'meta' => $meta,
            'canonicalUrl' => $canonicalUrl,
            'lang' => $lang,
        ];

        helper('text');

        // Set meta description based on session language
        $metaDescription = $this->generateMetaDescription($data);
        $data['Meta'] = character_limiter($metaDescription, 150);

        // Set default title
        $data['Title'] = 'Artikel';

        return view('user/artikel/index', $data);
    }

    public function detailBySlug($slug)
    {
        // Cari artikel berdasarkan slug dalam bahasa Indonesia dan Inggris
        $artikel = $this->ArtikelModel->where('slug_in', $slug)->orWhere('slug_en', $slug)->first();

        if (!$artikel) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Artikel dengan slug $slug tidak ditemukan");
        }

        $lang = session('lang') ?? 'in'; // Ambil bahasa dari session


        $data = [
            'profil' => $this->ProfilModel->findAll(),
            'artikel' => $artikel,
            'artikel_lain' => $this->ArtikelModel->getArtikelLainnya($artikel->id_artikel, 4),
            'lang' => $lang
        ];
        helper('text');

        // Set meta description based on session language
        $metaDescription = $this->generateMetaDescription($data);
        $data['Meta'] = character_limiter($metaDescription, 150);

        // Set default title berdasarkan bahasa
        $data['Title'] = ($lang === 'en') ? $artikel->judul_artikel_en : $artikel->judul_artikel_in;

        // Set canonical URL untuk halaman detail
        $data['canonicalUrl'] = base_url("/artikel/{$slug}");

        return view('user/artikel/detail', $data);
    }

    private function generateMetaDescription($data)
    {
        $nama_perusahaan = $data['profil'][0]->nama_perusahaan;
        $deskripsi_perusahaan = session('lang') === 'in' ?
            strip_tags($data['profil'][0]->deskripsi_perusahaan_in) :
            strip_tags($data['profil'][0]->deskripsi_perusahaan_en);

        $teks = session('lang') === 'in' ?
            "Artikel dari $nama_perusahaan. $deskripsi_perusahaan" :
            "Articles of $nama_perusahaan. $deskripsi_perusahaan";

        return $teks;
    }
}
