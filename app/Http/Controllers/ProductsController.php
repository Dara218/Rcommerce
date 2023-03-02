<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showMenu(){
        $allProducts = Products::all()->take(10);
        return view('components.menu', ['products' => $allProducts]);
    }
}
