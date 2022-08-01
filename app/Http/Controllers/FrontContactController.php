<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;
use App\Models\Category;

class FrontContactController extends Controller
{
    public function index(){

        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        $data['Setting']  = Setting::where("id", 1)->first();
        return view('frontPage.contact', $data);

    }



}
