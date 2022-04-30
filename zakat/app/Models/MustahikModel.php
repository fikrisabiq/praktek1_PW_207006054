<?php

namespace App\Models;

use CodeIgniter\Model;

class MustahikModel extends Model
{
    protected $table = 'kategori_mustahik';
    protected $allowedFields = ['id_kategori', 'nama_kategori', 'jumlah_hak'];

    public function getMustahik($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_kategori' => $id])->first();
    }
}
