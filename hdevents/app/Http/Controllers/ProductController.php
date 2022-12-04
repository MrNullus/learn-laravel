<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function pegarProduto($id) {
        return view('product', ['id' => $id]);
    }
}
