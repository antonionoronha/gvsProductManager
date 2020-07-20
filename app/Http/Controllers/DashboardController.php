<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DashboardController extends Controller
{

    private $objProduct;

    public function __construct()
    {
        $this->objProduct= new Product();
        $this->middleware('web');
    }

    public function dashboard()
    {
        $product=$this->objProduct->all()->sortBy('created_at');

        return view('layouts.dashboard', compact('product'));
    }
}
