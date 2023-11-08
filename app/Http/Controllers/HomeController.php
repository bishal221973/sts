<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookedSeat;
use App\Models\Movie;
use App\Models\MovieShow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Commands\Show;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movies = Movie::with('type', 'language', 'movie_has_tag.tag', 'movie_has_tax.tax', "movieShow")->latest()->get();
        $movieLists = Movie::with('type', 'language', 'movie_has_tag.tag', 'movie_has_tax.tax', 'movieShow')
            ->latest()
            ->paginate(10);

        // Get and return the current page number of the paginated results.
        // return $currentPage = $movieLists->items();

        // return $movieLists;

        //  $counts = DB::table('booked_seats')
        // ->select('movie_id', DB::raw('count(*) as seat_count'))
        // ->groupBy('movie_id')
        // ->orderBy('seat_count', 'desc')
        // ->limit(3)
        // ->get();
        // ->orderBy('count', 'desc')
        $totalMovie = Movie::count();
        $bookedSet = Book::count();
        $user = User::count();
        $totalShows = MovieShow::count();
        $collection = Book::get();
        $groupedData = collect($collection)->groupBy('date')->map(function ($items) {
            return [
                'count' => $items->count(),
                'date' => $items[0]['date'],
            ];
        })->values()->sortByDesc('date')->take('10')->values()->toArray();
        foreach ($groupedData as $item) {
            $labels[] = $item['date'];
            // You can adjust this line to retrieve the appropriate count or data value from your item
            $data[] = $item['count'];
        }
        $output = [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => '# of Votes', // No need for htmlspecialchars in JavaScript
                    'data' => $data,
                    'borderWidth' => 1,
                ],
            ],
        ];
        $outputJson = json_encode($output);
        return view('home', compact('movies', 'movieLists', 'totalMovie', 'bookedSet', 'totalShows', 'user','outputJson'));
    }

    public function profile()
    {
        return view('layouts.profile');
    }
    public function profileUpdate(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'nullable',
            'contact' => 'nullable',
            'avatar' => 'nullable',
        ]);


        if ($request->email) {
            $data['email_verified_at'] = null;
        }

        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::delete($user->avatar);
            }
            $data['avatar'] = $request->file('avatar')->store('avatar');
        }
        $user->update($data);

        return redirect()->back()->with("success", "User profile changed.");
    }

    public function orgSetting()
    {
        return view('layouts.settings.orgSetting');
    }

    public function security()
    {
        return view('layouts.settings.security');
    }

    public function movieSetting()
    {
        return view('layouts.settings.movieSetting');
    }
}
