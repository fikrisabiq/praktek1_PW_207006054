<?php

namespace App\Controllers;

use \App\Models\MuzakkiModel;

class Muzakki extends BaseController
{
    protected $MuzakkiModel;
    public function __construct()
    {
        $this->MuzakkiModel = new MuzakkiModel();
    }
    public function index()
    {
        $muzakki = $this->MuzakkiModel->getMuzakki();
        $data = [
            'title' => 'Daftar Muzakki',
            'muzakki' => $muzakki
        ];
        return view('muzakki/index', $data);
    }

    public function detail($id)
    {
        $muzakki = $this->MuzakkiModel->getMuzakki($id);
        $data = [
            'title' => 'Detail Muzakki',
            'muzakki' => $muzakki
        ];
        return view('muzakki/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Muzakki',
            'validation' => \Config\Services::validation()
        ];
        return view('muzakki/create', $data);
    }
    public function save()
    {
        $this->MuzakkiModel->save([
            'nama_muzakki' => $this->request->getVar('nama_muzakki'),
            'jumlah_tanggungan' => $this->request->getVar('jumlah_tanggungan'),
            'keterangan' => $this->request->getVar('keterangan')
        ]);

        return redirect()->to('/');
    }

    public function delete($id_muzakki)
    {
        $this->MuzakkiModel->where('id_muzakki', $id_muzakki)->delete();
        return redirect()->to('/muzakki');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Form Edit Data Muzakki',
            'muzakki' => $this->MuzakkiModel->getMuzakki($id)
        ];
        return view('muzakki/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_muzakki' => $this->request->getVar('nama_muzakki'),
            'jumlah_tanggungan' => $this->request->getVar('jumlah_tanggungan'),
            'keterangan' => $this->request->getVar('keterangan')
        ];
        $this->MuzakkiModel->whereIn('id_muzakki', [$id])->set($data)->update();

        return redirect()->to('/muzakki');
    }

    public function login()
    {
        $data = [
            'title' => 'Halaman Login'
        ];
        return view('/muzakki/login', $data);
    }

    public function valid()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        if (($username == 'admin') & ($password == 'password')) {
            $_SESSION['status'] = 'masuk';
            return redirect()->to('/');
        } else {
            return redirect()->to('/muzakki/login');
        }
    }

    public function keluar()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();

        return redirect()->to('/muzakki/login');
    }
}
