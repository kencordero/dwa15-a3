<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitterController extends Controller
{
    /*
        GET
        /
    */
    public function billSplit() {
        return view('billsplit.form');
    }
}
