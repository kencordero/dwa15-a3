<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
    * GET
    * /show/{name}
    */
    public function show($name) {
        return view('products.show')->with(['name' => $name]);
    }

    /*
    * GET
    * /
    */
    public function index() {
        return view('products.index');
    }
}
