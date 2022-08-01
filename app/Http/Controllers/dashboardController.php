<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\Order;

class dashboardController extends Controller
{
    public function index(Request $request)
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);

        $data['products'] = Product::orderBy('id','desc')->paginate(10);

        $data['getAllProduct'] =  Product::select("*")->count();

        $data['getAllCategory'] =  Category::select("*")->count();

        $data['getAllOrder'] =  Order::select("*")->count();

        $data['sumPriceProduct'] = Product::sum('price');

        $data['sumPriceOrder'] = Product::sum('DISCOUNT_PRICE');

        return view('dashboard.index', $data);
    }


}
