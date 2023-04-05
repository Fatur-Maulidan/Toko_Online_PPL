<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Tbl_Barang extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_barang';
    protected $primaryKey       = 'id_barang';
    protected $returnType       = 'array';
    protected $allowedFields    = [];
    

    public function getAll() {
        $data = $this->db->query("SELECT * FROM {$this->table}");
        return $data->getResultArray();
    }
    public function insertBarang($dataBarang) {
        return $this->db->query("INSERT INTO {$this->table} (id_barang, nama_barang, stok, harga_barang, nama_file_barang) VALUES ('{$dataBarang['id_barang']}', '{$dataBarang['nama_barang']}', '{$dataBarang['stok']}', '{$dataBarang['harga_barang']}', '{$dataBarang['nama_file_barang']}')");
    }
}