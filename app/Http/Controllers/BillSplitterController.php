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
            $this->validate($request, [
               'total' => 'required|numeric|min:.01',
                'splits' => 'required|integer|min:1',
                'tip' => 'required|integer|between:0, 100'
            ]);



            $total = $request->input("total", null);
            $splits = $request->input("splits", null);
            $tip = $request->input("tip", null);

            if ($splits != 0)
                $quotient = ceil($total / $splits * 100) / 100;
            if ($tip) {
                $quotient = $quotient * (1 + $tip / 100 );
            }
            if ($request->has("round")) {
                $quotient = ceil($quotient);
            }
        }
        return view('billsplit.form')->with([
            "request" => $request,
            "quotient" => $quotient
        ]);
    }
}
