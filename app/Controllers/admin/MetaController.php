<?php

namespace App\Controllers\admin; // Pastikan namespace mengikuti struktur folder

use App\Controllers\BaseController; // Extend ke BaseController
use App\Models\MetaModel;

class MetaController extends BaseController
{
    protected $metaModel;

    public function __construct()
    {
        // Inisialisasi model
        $this->metaModel = new MetaModel();
    }

    // Menampilkan semua meta data
    public function index()
    {
        // Mengambil semua data dari tabel tb_meta
        $data['meta'] = $this->metaModel->findAll();

        // Load view dengan data
        return view('admin/meta/index', $data); // Pastikan folder admin/meta ada
    }

    // Menampilkan form tambah data
    public function tambah()
    {
        return view('admin/meta/tambah'); // Pastikan view tambah berada di admin/meta
    }

    // Menyimpan data baru
    public function proses_tambah()
    {
        // Validasi data input
        if (!$this->validate([
            'nama_halaman' => 'required',
            'meta_title_id' => 'required',
            'meta_description_id' => 'required',
            'meta_title_en' => 'required',
            'meta_description_en' => 'required',
            
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Simpan data jika validasi lolos
        $this->metaModel->save([
            'nama_halaman' => $this->request->getPost('nama_halaman'),
            'meta_title_id' => $this->request->getPost('meta_title_id'),
            'meta_description_id' => $this->request->getPost('meta_description_id'),
            'meta_title_en' => $this->request->getPost('meta_title_en'),
            'meta_description_en' => $this->request->getPost('meta_description_en'),
            'canonical_url' => $this->request->getPost('canonical_url'),
        ]);

        return redirect()->to(base_url('admin/meta/index'))->with('success', 'Meta data berhasil ditambahkan');
    }

    // Menampilkan form edit data
    public function edit($id)
    {
        // Ambil data meta berdasarkan ID
        $data['meta'] = $this->metaModel->find($id);

        // Jika data tidak ditemukan, kembali ke halaman sebelumnya
        if (empty($data['meta'])) {
            return redirect()->back()->with('error', 'Meta data tidak ditemukan');
        }

        return view('admin/meta/edit', $data); // Pastikan view edit berada di admin/meta
    }
    // Mengupdate data
    public function update($id)
    {
        // Validasi data input
        if (!$this->validate([
            'nama_halaman' => 'required',
            'meta_title_id' => 'required',
            'meta_description_id' => 'required',
            'meta_title_en' => 'required',
            'meta_description_en' => 'required',
            
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Update data jika validasi lolos
        $this->metaModel->update($id, [
            'nama_halaman' => $this->request->getPost('nama_halaman'),
            'meta_title_id' => $this->request->getPost('meta_title_id'),
            'meta_description_id' => $this->request->getPost('meta_description_id'),
            'meta_title_en' => $this->request->getPost('meta_title_en'),
            'meta_description_en' => $this->request->getPost('meta_description_en'),
            'canonical_url' => $this->request->getPost('canonical_url'),
        ]);

        return redirect()->to(base_url('admin/meta/index'))->with('success', 'Meta data berhasil diupdate');
    }

    // Menghapus data
    public function delete($id)
    {
        // Hapus data meta berdasarkan ID
        $this->metaModel->delete($id);

        return redirect()->to(base_url('admin/meta/index'))->with('success', 'Meta data berhasil dihapus');
    }
}
