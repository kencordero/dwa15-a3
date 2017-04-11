<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillSplitterController extends Controller
{
    /*
        GET
        /
    */
    public function form(Request $request) {
        $quotient = null;
        if ($_GET) {
            $total = $request->input("total", null);
            $splits = $request->input("splits", null);
            $tip = $request->input("tip", null);

            if ($splits != 0)
                $quotient = $total / $splits;
            if ($total && $splits && $tip) {

            }
        }
        return view('billsplit.form')->with([
            "request" => $request,
            "quotient" => $quotient
        ]);
    }
}
