<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitterController extends Controller
{
    /*
        GET
        /
    */
    public function form() {
        return view('billsplit.form');
    }
}
