<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookedSeat;
use App\Models\Movie;
use App\Models\MovieShow;
use Illuminate\Contracts\Session\Session;
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

    public function seatDetail($show_id)
    {
        $movie=MovieShow::with('movie')->where('id', $show_id)->first();
        $seats = Book::where('show_id', $show_id)->get();
        $bookedSeats = BookedSeat::where('movie_show_id', $show_id)->get();
        // return MovieShow::with('movie')->find($show_id);
        return view('booking.seat', compact('show_id', 'seats', 'bookedSeats','movie'));
    }

    public function clientDetail(Request $request)
    {
        $pre=settings()->get('pre_sn');
        $sn=settings()->get('post_sn');
        $bookId = [];
        foreach ($request->seatName as $key => $seat) {
            $books=Book::latest()->latest()->first();
            if($books){
                // return $books;
                $sn=$books->post_sn+1;
            }
            settings()->get('silver_ticket_price');
            if(settings()->get('silver_ticket_price')!=$request->seatPrice[$key]){
                // return $request->seatPrice[$key];
                $seatType='Gold';
            }else{
                $seatType='Silver';

            }
            $movie= MovieShow::with('movie')->find($request->show_id);
            // return $movie;
            $book=Book::create([
                'pre_sn'=>$pre,
                'post_sn'=>$sn,
                'show_id'=>$request->show_id,
                'seat'=>$seat,
                'price'=>$request->seatPrice[$key],
                'seat_type'=>$seatType,
                'movie_name'=>$movie->movie->movie_name,
                'date'=>$movie->date,
                'time'=>$movie->time,
            ]);
            // return $book;
            $bookId[$key] = $book->id;
        }
        $show_id=$request->show_id;
        $request->session()->put('bookId', $bookId);
        return view('booking.client', compact('bookId','show_id'));
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
        $movies=Movie::latest()->get();
        //  return $reports = DB::table('booked_seats')
        // ->select('*')
        // ->join('books','books.id','=','booked_seats.book_id')
        // // ->where('movie_id', $id)
        // ->get()
        // ->groupBy('phone,created_at');
        return view('report',compact('reports','movies'));
    }

    public function printData(){
        return session()->get('bookId');
    }

    public function prints($id){
        return Book::find($id);
    }

    public function filter(Request $request){
        $movies=Movie::latest()->get();
        if($request->date){
            $reports=Book::where('date',$request->date)->with('bookedSeat','shows.movie.movie_has_tax.tax')->get();
        }
        elseif($request->movie){
            $reports=Book::where('movie_name',$request->movie)->with('bookedSeat','shows.movie.movie_has_tax.tax')->get();
        }
        elseif($request->movie && $request->date){
            $reports=Book::where('date',$request->date)->where('movie_name',$request->movie)->with('bookedSeat','shows.movie.movie_has_tax.tax')->get();
        }else{
            $reports=Book::with('bookedSeat','shows.movie.movie_has_tax.tax')->get();
        }
        return view('report',compact('reports','movies'));
    }
}
