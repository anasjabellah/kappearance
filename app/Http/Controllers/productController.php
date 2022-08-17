<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;

class productController extends Controller
{

    public function index()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        $data['products'] = Product::orderBy('id','desc')->paginate(10);
        return view('products.index', $data);
    }


    public function create()
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('products.create', $data);

    }


    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'price' => 'required',
            'discount_price' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Product::create($input);
     

        return redirect()->route('products.index')
                ->with('success','Product has been created successfully.');
    }



    public function show(Product $Product)
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('products.show',compact('Product'), $data);
    }


    public function edit(Product $Product)
    {
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('products.edit',compact('Product'), $data);
    }




    //  update categories
    public function update(Request $request, Product $Product)
    {
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'price' => 'required',
            'discount_price' => 'required',
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

        $Product->update($input);

        return redirect()->route('products.index')
                ->with('success','Category updated successfully');
    }

    


        // 
        // delet Category
    // 
    public function destroy(Product $Product)
    {
        $Product->delete();
        
        return redirect()->route('products.index')
                ->with('success','product has been deleted successfully');
    }
    

    public function getProductsCategory($id)
    {
        $where = array('category_id' => $id);
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        $data['products']  = Product::orderBy('id','desc')->where($where)->paginate(10);

        return view('products.getProducts', $data);
    }





}
