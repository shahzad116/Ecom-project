<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{

    function index(Request $req)
    {
        $data= Product::all();
        return view("product",["products"=>$data]);
    }

    function details($id)
    {
        $data = Product::find($id);
        return view("detail",["products"=>$data]);
    }

    function search(Request $req)
    {
         $data = Product::where('name', 'like', '%'. $req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }

    function AddToCart(REQUEST $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart();
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('detail/'.$req->product_id);
        }
        else
        {
            return redirect("/login");
        }

    }

    static function CartItem()
    {
        $user_id = session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }


}
