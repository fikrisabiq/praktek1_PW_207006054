<?php

namespace App\Models;

use CodeIgniter\Model;

class MuzakkiModel extends Model
{
    protected $table = 'muzakki';
    protected $allowedFields = ['id_muzakki', 'nama_muzakki', 'jumlah_tanggungan', 'keterangan'];

    public function getMuzakki($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_muzakki' => $id])->first();
    }
}
