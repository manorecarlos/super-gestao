<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index() {
        $fornecedores = [];
        return view('app.fornecedores.index', compact('fornecedores'));
    }
}
