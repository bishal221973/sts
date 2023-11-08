<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\MovieShow;
use Illuminate\Http\Request;

class MovieShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            "movie_id" => 'required',
            "date" => 'required',
            "time" => 'required',
        ]);

        MovieShow::create($data);

        return redirect()->back()->with('success', 'New show saved.');
    }

    public function show($id)
    {
        $movieShow=MovieShow::where('id', $id)->first();
        $movieShow->delete();
        return redirect()->back()->with('success', 'Selected show removed successfull');
    }


    public function edit($id){
         $movieShow=MovieShow::where('id', $id)->first();
         $movie=Movie::where('id', $movieShow->movie_id)->first();

        $shows=MovieShow::where('movie_id',$movieShow->movie_id)->latest()->get();
        return view("movie.show", compact("movie","shows","movieShow"));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            "date" => 'required',
            "time" => 'required',
        ]);
        $shows=MovieShow::find($id);
        $shows->update($data);
        $movie=Movie::where('id', $shows->movie_id)->first();
        return redirect()->route('movie.shows',$movie)->with('success','Selected show update');
    }
}
