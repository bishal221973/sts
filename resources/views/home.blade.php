@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card bg-info cursur-pointer">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase m-0 p-0">Total Movies</h5>
                                <div class="d-flex justify-content-end">
                                </div>
                                <label class="m-0 p-0" style="font-size: 40px">{{ $totalMovie }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-warning cursur-pointer">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase m-0 p-0">Total Shows</h5>
                                <div class="d-flex justify-content-end">
                                </div>
                                <label class="m-0 p-0" style="font-size: 40px">{{ $totalShows }}</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card bg-success cursur-pointer">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase m-0 p-0">Total Booked Seat</h5>
                                <div class="d-flex justify-content-end">
                                </div>
                                <label class="m-0 p-0" style="font-size: 40px"> {{ $bookedSet }} </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card bg-danger cursur-pointer">
                            <div class="card-body">
                                <h5 class="font-weight-bold text-uppercase m-0 p-0">Total User</h5>
                                <div class="d-flex justify-content-end">
                                </div>
                                <label class="m-0 p-0" style="font-size: 40px"> {{ $user }} </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <hr>
            <div class="col-12 d-flex justify-content-center">
                <div class="col-lg-6">
                    <input type="text" id="movieSearch" class="col-12 form-control mb-3 searchInput"
                        placeholder="Search for movies">
                </div>
            </div>
            <div class="row">
                @foreach ($movieLists as $item)
                    @php
                        $movie = \App\Models\Movie::where('id', $item->id)->first();
                    @endphp
                    <div class="mx-2 zoom mb-3" data-movie-title="{{ strtolower($movie->movie_name) }}"
                        data-page="{{ $movieLists->currentPage() }}">
                        <div class="movieThumbnail"
                            style="background-image: url({{ asset('storage') }}{{ '/' }}{{ $movie->thumbnail }})">

                        </div>
                        <div class="movieDetail col-12">
                            <h3 class="m-0 p-0 col-12 text-center text-white font-weight-bold">{{ $movie->movie_name }}
                            </h3>
                            <label
                                class="col-12 text-center text-white font-weight-normal">({{ $movie->movie_name }})</label>

                            <div class="col-12 mb-3 d-flex justify-content-center">
                                <a href="{{ route('movieDetail', $movie->id) }}" class="col-12 text-center">Book Now</a>
                            </div>
                        </div>

                    </div>
                @endforeach



                <div class="col-12 d-flex justify-content-center">
                    <div class="d-block">
                        <label class="col-12 text-center"> Displaying 1-10 on page
                            {{ $movieLists->currentPage() }}/{{ $movieLists->lastPage() }}</label>
                        <div class="table-container" style="--data-limit: 9">

                            <div class="pagination-container">
                                <div class="d-flex row flex-fill align-items-end justify-content-center">
                                    <span class="pagination-info"></span>
                                    <a href="{{ $movieLists->url(1) }}" class="btn">
                                        <i class="fas fa-angle-double-left"></i>
                                    </a>
                                    <a href="{{ $movieLists->previousPageUrl() }}" class="btn">
                                        <i class="fas fa-angle-left"></i>
                                    </a>
                                    <div style="position: relative;top: -8px" class="px-5">
                                        {{-- <div class="pagination-wrapper"> --}}
                                        {{ $movieLists->currentPage() }}
                                        {{-- </div> --}}
                                    </div>
                                    <a href="{{ $movieLists->nextPageUrl() }}" class="btn">
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                    <a href="{{ $movieLists->url($movieLists->lastPage()) }}" class="btn">
                                        <i class="fas fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="progress-bar">
                                <div class="progress-point"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="container-fluid mt-3">
                <div class="card">

                    <div class="card-body">
                        <table id="button" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Movie</th>
                                    <th>Language</th>
                                    <th>Tag</th>
                                    <th>Director</th>
                                    <th>Total Price</th>
                                    <th>Shows</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($movies as $movie)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <b>{{ $movie->movie_name }}</b>
                                            <p class="m-0 p-0">{{ $movie->type->type }}</p>
                                            <p class="m-0 p-0 text-muted">{{ $movie->duration }} Hour</p>
                                        </td>
                                        <td> {{ $movie->language->language }} </td>
                                        <td>
                                            @foreach ($movie->movie_has_tag as $tag)
                                                {{ $tag->tag->tag }}

                                                @if (!$loop->last)
                                                    @php
                                                        echo ', ';
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </td>

                                        <td> {{ $movie->director }} </td>
                                        <td>
                                            @php
                                                $totalTax = 0;
                                            @endphp
                                            @foreach ($movie->movie_has_tax as $tax)
                                                @php
                                                    $totalTax = $totalTax + $tax->tax->percentage;
                                                @endphp
                                            @endforeach

                                            @php
                                                $taxPrice = $movie->price + $movie->price * ($totalTax / 100);

                                                echo 'RS.' . $taxPrice . '/-';
                                            @endphp
                                        </td>
                                        <td>
                                            <button class="btn">{{ $movie->movieShow->count() }} Show</button>
                                        </td>
                                        <td class="d-flex">
                                            <a href="{{ route('movieDetail', $movie->id) }}" class="btn btn-info">Book
                                                Now</a>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SN</th>
                                    <th>Movie</th>
                                    <th>Language</th>
                                    <th>Tag</th>
                                    <th>Director</th>
                                    <th>Total Price</th>
                                    <th>Shows</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
