<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class ProductController extends Controller
{

    private $objProduct;

    public function __construct()
    {
        $this->objProduct= new Product();
        $this->middleware('web');
    }

    public function index()
    {
        $product=$this->objProduct->all()->sortBy('created_at');

        return view('products.showProduct', compact('product'));
    }

    public function createProduct()
    {
        return view('products.createProduct');
    }

    public function edit($id)
    {
        $product=$this->objProduct->find($id);
        return view('products.createProduct',compact('product'));
    }


    public function storeProduct(Request $request)
    {
        $cad=$this->objProduct->create([
            'name'=>$request->name,
            'balance'=>$request->balance,
            'created_by'=>Auth::user()->name,
        ]);

        if($cad)
        {
            return redirect('dashboard');
        }

    }

    public function update(Request $request, $id)
    {
        $this->objProduct->where(['id'=>$id])->update([
            'name'=>$request->name,
            'balance'=>$request->balance,
        ]);
        return redirect('dashboard');
    }

    public function destroy($id)
    {
        $del=$this->objProduct->destroy($id);
        return ($del) ?"sim":"não";
    }

}
