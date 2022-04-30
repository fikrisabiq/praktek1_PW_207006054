<?php

namespace App\Controllers;

use \App\Models\MustahikModel;

class Mustahik extends BaseController
{
    protected $MustahikModel;
    public function __construct()
    {
        $this->MustahikModel = new MustahikModel();
    }
    public function index()
    {
        $mustahik = $this->MustahikModel->getMustahik();
        $data = [
            'title' => 'Daftar mustahik',
            'mustahik' => $mustahik
        ];
        return view('mustahik/index', $data);
    }

    public function detail($id)
    {
        $mustahik = $this->MustahikModel->getMustahik($id);
        $data = [
            'title' => 'Detail mustahik',
            'mustahik' => $mustahik
        ];
        return view('mustahik/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data mustahik',
            'validation' => \Config\Services::validation()
        ];
        return view('mustahik/create', $data);
    }
    public function save()
    {
        $this->MustahikModel->save([
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            'jumlah_hak' => $this->request->getVar('jumlah_hak')
        ]);

        return redirect()->to('/mustahik');
    }

    public function delete($id_kategori)
    {
        $this->MustahikModel->where('id_kategori', $id_kategori)->delete();
        return redirect()->to('/mustahik');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Data mustahik',
            'mustahik' => $this->MustahikModel->getMustahik($id)
        ];
        return view('mustahik/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_kategori' => $this->request->getVar('nama_kategori'),
            'jumlah_hak' => $this->request->getVar('jumlah_hak')
        ];
        $this->MustahikModel->whereIn('id_kategori', [$id])->set($data)->update();

        return redirect()->to('/mustahik');
    }
}
