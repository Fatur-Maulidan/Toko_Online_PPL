<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_Checkout extends BaseController
{
    public function index()
    {
        return view('Checkout/V_Checkout');
    }

    public function store() {
        
    }
}