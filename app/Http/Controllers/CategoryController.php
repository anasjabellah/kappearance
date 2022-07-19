<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{

    public function index()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('categories.index', $data);
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Category::create($input);
     
        return redirect()->route('Category.index')
                ->with('success','Category has been created successfully.');
    }


    public function show(Category $Category)
    {
        return view('categories.show',compact('Category'));
    }


    public function edit(Category $Category)
    {
        return view('categories.edit',compact('Category'));
    }


    //  update categories
    public function update(Request $request, Category $Category)
    {
        $request->validate([
            'name' => 'required',
        ]);
        

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }

        $Category->update($input);
    
        return redirect()->route('Category.index')->with('success','Category updated successfully');
    }


    // 
        // delet Category
    // 
    public function destroy(Category $Category)
    {
        $Category->delete();
        
        return redirect()->route('Category.index')
                ->with('success','Category has been deleted successfully');
    }
}
