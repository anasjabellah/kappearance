<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;

class SettingController extends Controller
{

    public function index()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        $data['settings'] = Setting::orderBy('id','desc')->paginate(12);
        return view('setting.index', $data);
    }


    public function edit(Setting $setting)
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('setting.edit',compact('setting'), $data);
    }



    public function update(Request $request, Setting $setting)
        {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'facebook' => 'required',
                'twitter' => 'required',
                'instagram' => 'required',
                'youtube' => 'required',
            ]);
            
         
            $input = $request->all();
    
            if ($image = $request->file('logo')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['logo'] = "$profileImage";
            } else {
                unset($input['logo']);
            }
    
            $setting ->update($input);
        
            return redirect()->route('setting.index')->with('success','Element updated successfully');
        }


    

}
