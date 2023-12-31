<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Str;
class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Type $type)
    {
        $types = Type::latest()->get();
        return view("movie.type", compact("types", "type"));
    }

    public function store(Request $request){
        $data=$request->validate([
            "type"=> "required|unique:types,type",
        ]);

        $data["slug"]=Str::slug($request->type);

        Type::create($data);

        return redirect()->back()->with("success","New movie type saved successfully.");
    }

    public function show(Type $type){
        $type->delete();
        return redirect()->back()->with("success","Selected movie type removed successfully.");
    }

    public function edit(Type $type){
        $types = Type::latest()->get();
        return view('movie.type',compact("types","type"));
    }

    public function update(Request $request, Type $type){
        $data=$request->validate([
            "type"=> "required|unique:types,type,".$type->id,
        ]);

        $data["slug"]=Str::slug($request->type);

        $type->update($data);

        return redirect()->route('type.index')->with("success","Selected movie type update successfully.");
    }
}
