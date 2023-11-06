<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Str;
class LanguageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Language $language){
        $languages = Language::latest()->get();
        return view("movie.language",compact("languages","language"));
    }

    public function store(Request $request){
        $data=$request->validate([
            "language"=> "required|unique:languages,language",
        ]);

        $data["slug"]=Str::slug($request->language);

        Language::create($data);

        return redirect()->back()->with("success","New movie language saved  successfully.");
    }

    public function show(Language $language){
        $language->delete();
        return redirect()->back()->with("success","Selected movie language removed successfully.");
    }

    public function edit(Language $language){
        $languages = Language::latest()->get();
        return view("movie.language",compact("languages","language"));
    }

    public function update(Request $request, Language $language){
        $data=$request->validate([
            "language"=> "required|unique:languages,language,".$language->id,
        ]);

        $data["slug"]=Str::slug($request->language);

        $language->update($data);

        return redirect()->route('language.index')->with("success","Selected movie language update successfully.");
    }
}
