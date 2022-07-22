<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{

    public function index()
    {
        $data['settings'] = Setting::orderBy('id','desc')->paginate(12);
        return view('setting.index', $data);
    }


     public function edit(Setting $setting)
    {
        return view('setting.index',compact('setting'));
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
