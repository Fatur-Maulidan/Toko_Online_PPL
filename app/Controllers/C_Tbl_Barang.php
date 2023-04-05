<?php

namespace App\Controllers;

use App\Models\M_Tbl_Barang as Tbl_Barang;
use App\Controllers\BaseController; 

class C_Tbl_Barang extends BaseController
{
    protected $model;

    public function __construct(){
        $this->model = new Tbl_Barang;
    }
    public function index()
    {
        $barang = $this->model->getAll();
        $data = [
            'barang' => $barang,
        ];
        return view("Barang/V_Barang", $data);
    }

    public function create() {
        return view('Barang/V_Tambah_Barang');
    }

    public function store() {
        // if (!$this->validate([
        //     'id_barang' => [
        //         'label' => 'ID_Barang',
        //         'rules' => 'required|numeric|min_length[9]|max_length[9]',
        //         'errors' => [
        //             'required' => '{field} harus diisi',
        //             'numeric' => '{field} harus berupa angka',
        //             'min_length' => '{field} harus berjumlah 9 karakter',
        //             'max_length' => '{field} harus berjumlah 9 karakter'
        //         ]
        //     ],
        //     'nama' => [
        //         'label' => 'Nama Barang',
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} harus diisi'
        //         ]
        //     ],
        //     'stok' => [
        //         'label' => 'Stok',
        //         'rules' => 'required|numeric',
        //         'errors' => [
        //             'required' => '{field} harus diisi',
        //             'numeric' => '{field} harus berupa angka'
        //         ]
        //     ],
        //     'harga' => [
        //         'label' => 'Harga',
        //         'rules' => 'required|numeric',
        //         'errors' => [
        //             'required' => '{field} harus diisi',
        //             'numeric' => '{field} harus berupa angka'
        //         ]
        //     ],
        //     ])) {
        //     return view('Barang/V_Tambah_Barang', [
        //         'errors' => $this->validator->getErrors(),
        //         'title' => 'Barang Masuk Error !'
        //     ]);

        $file = $this->request->getFile('gambar');
        if($file->isValid() && ! $file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move('image/Produk', $fileName);
        }
        $dataBarang = [
            'id_barang' => $this->request->getPost('id_barang'),
            'nama_barang' => $this->request->getPost('nama'),
            'stok' => $this->request->getPost('stok'),
            'harga_barang' => $this->request->getPost('harga'),
            'nama_file_barang' => $fileName,
        ];
        
        $this->model->insertBarang($dataBarang);
        return redirect()->to('api');
        }
    }