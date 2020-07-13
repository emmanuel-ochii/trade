<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investment;


class InvestmentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('investment.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'amount' => 'required',
            'deposit' => 'required',
        ]);    
       
        $investment = new Investment;
        $investment->amount = $request->get('amount');
        $investment->deposit = $request->get('deposit');
        $investment->save();

        return back()->with('success','Investment successfully created');

    }
}
