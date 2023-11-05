<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Movie;
use App\Models\MovieHasTag;
use App\Models\MovieHasTax;
use App\Models\MovieShow;
use App\Models\Tag;
use App\Models\Tax;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Movie $movie)
    {
        $languages = Language::latest()->get();
        $types = Type::latest()->get();
        $tags = Tag::latest()->get();
        $taxs = Tax::latest()->get();
        $movies = Movie::with('type', 'language', 'movie_has_tag.tag', 'movie_has_tax.tax')->latest()->get();
        return view("movie.index", compact("languages", "types", "tags", "taxs", "movies","movie"));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'movie_name' => 'required',
            'language_id' => 'required',
            'type_id' => 'required',
            'duration' => 'required',
            'release_date' => 'required',
            'cast' => 'nullable',
            'director' => 'nullable',
            'price' => 'required',
            'trailer' => 'required',
            'thumbnail' => 'nullable',
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnail');
        }

        $movie = Movie::create($data);

        foreach ($request->tag_id as $tag) {
            MovieHasTag::create([
                'movie_id' => $movie->id,
                'tag_id' => $tag,
            ]);
        }

        foreach ($request->taxe_id as $tax) {
            MovieHasTax::create([
                'movie_id' => $movie->id,
                'taxe_id' => $tax,
            ]);
        }



        return redirect()->back()->with('success', "New Movie Saved");
    }

    public function show(Movie $movie)
    {
        if ($movie->thumbnail) {
            Storage::delete($movie->thumbnail);
        }

        $movie->delete();

        return redirect()->back()->with("success", "Selected movie removed.");
    }

    public function edit(Movie $movie)
    {
        $languages = Language::latest()->get();
        $types = Type::latest()->get();
        $tags = Tag::latest()->get();
        $taxs = Tax::latest()->get();
        $movies = Movie::with('type', 'language', 'movie_has_tag.tag', 'movie_has_tax.tax')->latest()->get();
        return view("movie.index", compact("languages", "types", "tags", "taxs", "movies", "movie"));
    }


    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'movie_name' => 'required',
            'language_id' => 'required',
            'type_id' => 'required',
            'duration' => 'required',
            'release_date' => 'required',
            'cast' => 'required',
            'director' => 'required',
            'price' => 'required',
            'trailer' => 'required',
            'thumbnail' => 'nullable',
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($movie->thumbnail) {
                Storage::delete($movie->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('thumbnail');
        }

        $movie->update($data);

        MovieHasTag::where('movie_id', $movie->id)->delete();
        MovieHasTax::where('movie_id', $movie->id)->delete();
        foreach ($request->tag_id as $tag) {

            MovieHasTag::create([
                'movie_id' => $movie->id,
                'tag_id' => $tag,
            ]);
        }

        foreach ($request->taxe_id as $tax) {
            MovieHasTax::create([
                'movie_id' => $movie->id,
                'taxe_id' => $tax,
            ]);
        }



        return redirect()->route('movie.index')->with('success', "Selected Movie Updated.");
    }

    public function shows(Movie $movie){
        $movieShow=new MovieShow();
        $shows=MovieShow::where('movie_id',$movie->id)->latest()->get();
        return view("movie.show", compact("movie","shows","movieShow"));
    }
}
