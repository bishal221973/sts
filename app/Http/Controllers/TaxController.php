<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use App\Models\TaxFor;
use App\Models\Type;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Tax $tax)
    {
        $taxs = Tax::with('taxFor.type')->latest()->get();
        $types = Type::latest()->get();
        return view('tax.index', compact('tax', 'taxs', 'types'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tax' => 'required',
            'percentage' => 'required',
            'type_id' => 'required',
        ]);

        $tax = Tax::create($data);

        if ($tax) {
            foreach ($request->type_id as $id) {
                TaxFor::create([
                    'taxe_id' => $tax->id,
                    'type_id' => $id,
                ]);
            }
        }
        return redirect()->back()->with('success', 'New movie tax save successfully.');
    }

    public function show(Tax $tax)
    {
        $tax->delete();
        return redirect()->back()->with('success', 'Selected movie tax removed successfully.');
    }

    public function edit(Tax $tax)
    {
        $taxs = Tax::latest()->get();
        $types = Type::latest()->get();
        return view('tax.index', compact('tax', 'taxs','types'));
    }

    public function update(Request $request, Tax $tax)
    {
        $data = $request->validate([
            'tax' => 'required',
            'percentage' => 'required',
        ]);

        $tax->update($data);

        return redirect()->route('tax.index')->with('success', 'Selected tax remove successfully.');
    }
}
