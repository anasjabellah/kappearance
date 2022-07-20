<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class dashboardController extends Controller
{
    public function index(Request $request)
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);

        $data['products'] = Product::orderBy('id','desc')->paginate(10);
        return view('dashboard.index', $data);
    }
}
