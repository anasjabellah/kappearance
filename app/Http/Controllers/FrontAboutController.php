<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;
use App\Models\product;
use App\Models\Setting;

class FrontAboutController extends Controller
{


    public function index(){

        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('frontPage.about' , $data);

    }

}
