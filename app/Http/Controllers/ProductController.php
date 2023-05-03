<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

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


}
