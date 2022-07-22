<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        $data['contacts'] = Contact::orderBy('id','desc')->paginate(12);
        return view('contact.index', $data);
    }



    // show contact 
    public function show($id)
    {     
        $where = array('id' => $id);
        $contact  = Contact::where($where)->first();

        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('contact.show', compact('contact'), $data);
    }
    


    // delet Contact
    // 
    public function destroy(Contact $Contact)
    {
        $Contact->delete();
        
        return redirect()->route('Contact.index')
                ->with('success','Message has been deleted successfully');
    }



}
