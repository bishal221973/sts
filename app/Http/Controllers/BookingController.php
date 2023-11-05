<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookedSeat;
use App\Models\Movie;
use App\Models\MovieShow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Commands\Show;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function movieDetail($id)
    {
        $movie = Movie::with('type', 'language', 'movie_has_tag.tag', 'movie_has_tax.tax', "movieShow")->where('id', $id)->first();
        $shows = DB::table('movie_shows')
            ->select('*')
            ->where('movie_id', $id)
            ->get()
            ->groupBy('date');


        return view('booking.detail', compact('movie', 'shows'));
    }

    public function seatDetail(Request $request)
    {
        $show_id = $request->show_id;
        $seats = Book::with('bookedSeat')->where('show_id', $show_id)->get();
        $bookedSeats = BookedSeat::where('movie_show_id', $show_id)->get();
        // return MovieShow::with('movie')->find($show_id);
        return view('booking.seat', compact('show_id', 'seats', 'bookedSeats'));
    }

    public function clientDetail(Request $request)
    {
        $show = MovieShow::where('id', $request->show_id)->first();
        $movie = Movie::find($show->movie_id);
        return view('booking.client', compact('request', 'movie', 'show'));
    }

    public function book(Request $request)
    {
        $data = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
            'show_id' => 'nullable',
        ]);

        $show = MovieShow::where('id', $request->show_id)->first();
        $book = Book::create($data);

        if ($book) {
            foreach ($request->seat as $key => $seat) {
                BookedSeat::create([
                    'book_id' => $book->id,
                    'seat' => $seat,
                    'movie_show_id' => $request->show_id,
                    'movie_id' => $show->movie_id,
                ]);
            }
        }

        return redirect()->route('booked', $book->id)->with('success', 'Saved');
    }

    public function booked($id)
    {
        $movie = Book::with(['bookedSeat', 'shows.movie.movie_has_tax.tax'])->find($id);
        return view('booking.invoice', compact('movie'));
    }

    public function bookedSeat($id){
        $movie=Movie::with('movieShow')->find($id);
        $seats=BookedSeat::with('book')->where('movie_id', $id)->get();
        return view('booking.bookedSeat',compact('movie','seats'));
    }
    public function report(){
        $reports=Book::with('bookedSeat','shows.movie.movie_has_tax.tax')->get();
        //  return $reports = DB::table('booked_seats')
        // ->select('*')
        // ->join('books','books.id','=','booked_seats.book_id')
        // // ->where('movie_id', $id)
        // ->get()
        // ->groupBy('phone,created_at');
        return view('report',compact('reports'));
    }
}
