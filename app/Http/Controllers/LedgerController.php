<?php

namespace App\Http\Controllers;

use App\Models\Ledger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LedgerController extends Controller
{
    public function ledger()
    {

        $ledger = Ledger::select([
            'id',
            'date',
            'name',
            'cr',
            'dr',
            'amount'
       ])
       ->get();

        return view('ledger')->with('ledgers',$ledger);
    }
    public function insert(Request $request)
    {
        $ledger = new Ledger();
        $ledger->date=$request->date;
        $ledger->name=$request->name;
        $ledger->cr=$request->cr;
        $ledger->dr=$request->dr;
        $ledger->amount=$ledger->cr - $ledger->dr;
        $ledger->save();
    }
    // public function show()
    // {
    //    $ledger = Ledger::select([
    //         'id',
    //         'date',
    //         'name',
    //         'cr',
    //         'dr',
    //         'amount'
    //    ])
    //    ->get();
    //    return view('ledgers',[
            
    //    ]);
    // }
}
