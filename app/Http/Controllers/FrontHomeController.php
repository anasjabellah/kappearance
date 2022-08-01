<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\Setting;

class FrontHomeController extends Controller
{
    public function index(){

        $data['categories'] = Category::orderBy('id','desc')->paginate(10);

        $data['products'] = Product::orderBy('id','desc')->paginate(10);



        return view('frontPage.index', $data);

    }

    
    public function GetSetting(Setting $setting)
    {
        return view('frontPage.index', compact('setting'));
    }





    public function getProductsCategory($id)
    {
        $where = array('category_id' => $id);
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        $data['products']  = Product::orderBy('id','desc')->where($where)->paginate(10);

        $data['getAllProduct'] =  Product::select("*")->where($where)->count();

        return view('frontPage.productCategories', $data);
    }


    public function getProduct($id){

        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        $data['product']  = Product::where("id", $id)->first();
        $data['products']  = Product::orderBy('id','desc')->paginate(5);

        return view('frontPage.product', $data);

    }



}
