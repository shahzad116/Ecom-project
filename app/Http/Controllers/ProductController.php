<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    function index(Request $req)
    {
        return 'Welcome to product page.';
    }


}
