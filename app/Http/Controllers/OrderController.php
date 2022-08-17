<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{

    public function index()
    {
        $data['orders'] = Order::orderBy('id','desc')->paginate(10);
        $data['categories'] = Order::orderBy('id','desc')->paginate(10);
        return view('order.index', $data);
    }



    // show contact 
    public function show($id)
    {    

        $where = array('id' => $id);
        $Order  = Order::where($where)->first();
        $orderProduct =  $Order['product_id'];
        
        $data['orderUser'] = Order::join('users', 'user_id', '=', 'users.id')->select('users.*')->get();
        $data['orderProduct'] = Order::join('products','products.id', '=', 'product_id')->where('product_id', '=',$orderProduct)->select('products.*')->get();
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);

        return view('Order.show', compact('Order'), $data);
    }



    public function store(Request $request) 
    {
        $input = $request->all();
        Order::create($input);
        return redirect()->route('front.index')->with('success','Product has been created successfully.');
    }



    public function destroy(Order $Order)
    {
        $Order->delete();
        
        return redirect()->route('order.index')
                ->with('success','Message has been deleted successfully');
    }



    public function cart(){
        $data['categories'] = Category::orderBy('id','desc')->paginate(10);
        return view('frontPage.cart', $data);
    }


    public function addToCart($id)

    {

        $product = Product::findOrFail($id); 
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {

            $cart[$id] = [

                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image

            ];

        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
    

    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }


    public function remove(Request $request)
    {

        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

            }

            session()->flash('success', 'Product removed successfully');

        }

    }


}
