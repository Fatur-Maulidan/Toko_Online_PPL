<?php

namespace App\Controllers;
use App\Models\M_Tbl_Barang as Tbl_Barang;

use App\Controllers\BaseController;

class C_Cart extends BaseController
{
    public function index()
    {
        $data['items'] = array_values(session('cart'));
        return view('Cart/V_Cart', $data);
    }

    public function buy($id){
        $barangModel = new Tbl_Barang();
        $barang = $barangModel->find($id);
        $item = array(
            'id_barang' => $barang['id_barang'],
            'nama_barang' => $barang['nama_barang'],
            'harga_barang' => $barang['harga_barang'],
            'quantity' => 1,
            'nama_file_barang' => $barang['nama_file_barang'],
        );
        $session = session();
        if($session->has('cart')){
            $index = $this->exists($id);
            $cart = array_values(session('cart'));
            if($index == -1){
                array_push($cart,$item);
            }
            $session->set('cart',$cart);
        } else {
            $cart = array($item);
            $session->set('cart', $cart);
        }
        
        return $this->response->redirect(base_url('/api'));
    }

    public function quantity(){
        $index = $this->request->getPost('index');
        $type = $this->request->getPost('type');
        $cart = array_values(session('cart'));
        dd($cart);
        $session = session();
        if($type == 'add'){
            $cart[$index]['quantity'] += 1;
        } else if($type == 'min'){
            $cart[$index]['quantity'] -= 1;
            if($cart[$index]['quantity'] == 0) {
                unset($cart[$index]);
            }
        }
        $session->set('cart',$cart);

        return $this->response->redirect(base_url('/api/cart'));
    }

    private function exists($id){
        $items = array_values(session('cart'));
        for($i = 0; $i < count($items); $i++){
            if($items[$i]['id_barang'] == $id){
                return $i;
            }
        }
        return -1;
    }
}