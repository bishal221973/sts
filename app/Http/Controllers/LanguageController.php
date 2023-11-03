<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Str;
class LanguageController extends Controller
{
    public function index(Language $language){
        $languages = Language::latest()->get();
        return view("movie.language",compact("languages","language"));
    }

    public function store(Request $request){
        $data=$request->validate([
            "language"=> "required",
        ]);

        $data["slug"]=Str::slug($request->language);

        Language::create($data);

        return redirect()->back()->with("success","New Language saved.");
    }

    public function show(Language $language){
        $language->delete();
        return redirect()->back()->with("success","Selected language removed.");
    }

    public function edit(Language $language){
        $languages = Language::latest()->get();
        return view("movie.language",compact("languages","language"));
    }

    public function update(Request $request, Language $language){
        $data=$request->validate([
            "language"=> "required",
        ]);

        $data["slug"]=Str::slug($request->language);

        $language->update($data);

        return redirect()->route('language.index')->with("success","Selected language update.");
    }
}
