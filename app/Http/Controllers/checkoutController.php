<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use App\Models\user;


class checkoutController extends Controller
{
    public function index($id){

        $where = array('id' => $id);
        $data['product']  = product::where($where)->first();
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);

        return view('frontPage.checkout', $data );
    }
}
