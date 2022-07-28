<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Setting;

class FrontContactController extends Controller
{
    public function index(){


        $data['Setting']  = Setting::where("id", 1)->first();
        return view('frontPage.contact', $data);

    }



}
