<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    /*
        GET
        /order
    */
    public function displayOrderForm() {
        return view('order.form');
    }

    /*
        POST
        /order
    */
    public function placeOrder() {
        return view('order.placeOrder');
    }
}
