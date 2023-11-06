<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Tax $tax){
        $taxs=Tax::latest()->get();
        return view('tax.index',compact('tax','taxs'));
    }

    public function store(Request $request){
        $data=$request->validate([
            'tax'=>'required',
            'percentage'=>'required',
        ]);

        Tax::create($data);

        return redirect()->back()->with('success','New movie tax save successfully.');
    }

    public function show(Tax $tax){
        $tax->delete();
        return redirect()->back()->with('success','Selected movie tax removed successfully.');
    }

    public function edit(Tax $tax){
        $taxs=Tax::latest()->get();
        return view('tax.index',compact('tax','taxs'));
    }

    public function update(Request $request, Tax $tax){
        $data=$request->validate([
            'tax'=>'required',
            'percentage'=>'required',
        ]);

        $tax->update($data);

        return redirect()->route('tax.index')->with('success','Selected tax remove successfully.');
    }

}
