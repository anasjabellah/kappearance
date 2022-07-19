<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data['contacts'] = Contact::orderBy('id','desc')->paginate(12);
        return view('contact.index', $data);
    }


    public function create()
    {
        //
    }


    // show contact 
    public function show($id)
    {    
        
        $where = array('id' => $id);
        $contact  = Contact::where($where)->first();
        return view('contact.show', compact('contact'));
    }
    

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
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
