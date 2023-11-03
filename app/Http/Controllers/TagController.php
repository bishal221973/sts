<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Str;
class TagController extends Controller
{
    public function index(Tag $tag)
    {
        $tags = Tag::latest()->get();
        return view("movie.tag", compact("tags", "tag"));
    }

    public function store(Request $request){
        $data=$request->validate([
            "tag"=> "required",
        ]);

        $data["slug"]=Str::slug($request->tag);

        Tag::create($data);

        return redirect()->back()->with("success","New tag saved.");
    }

    public function show(Tag $tag){
        $tag->delete();
        return redirect()->back()->with("success","Selected tag removed.");
    }

    public function edit(Tag $tag){
        $tags = Tag::latest()->get();
        return view('movie.tag',compact("tags","tag"));
    }

    public function update(Request $request, Tag $tag){
        $data=$request->validate([
            "tag"=> "required",
        ]);

        $data["slug"]=Str::slug($request->tag);

        $tag->update($data);

        return redirect()->route('tag.index')->with("success","Selected tag update.");
    }
}
