<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class productController extends Controller
{

    public function index(Request $request)
    {
        $data['products'] = Product::orderBy('id','desc')->paginate(10);
        return view('products.index', $data);
    }


    public function create()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('products.create', $data);

    }

    public function show(Product $Product)
    {
        return view('products.show',compact('Product'));
    }


    public function edit(Product $Product)
    {
        return view('products.edit',compact('Product'));
    }



}
