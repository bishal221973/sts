@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Movie Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Movie Detail</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>



        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="background-color: #ccc">
                            <div class="card-body">
                                <div class="row">
                                    <div style="width: 300px;position: relative;">

                                        <img src="{{ asset('storage') }}{{ '/' }}{{ $movie->thumbnail }}"
                                            style="height: 300px;width:300px" alt="">
                                    </div>
                                    <div class="col px-5">
                                        <h3 class="font-weight-bold">{{ $movie->movie_name }}
                                            <small>({{ $movie->type->type }})</small>
                                        </h3>
                                        <label class="font-weight-normal"></label>
                                        <label class="font-weight-normal">
                                            @foreach ($movie->movie_has_tag as $tag)
                                                {{ $tag->tag->tag }}

                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </label>
                                        <br>
                                        <br>
                                        <label>Director : <span class="font-weight-normal">{{ $movie->director }}</span>
                                        </label> <br>
                                        <label>Cast : <span class="font-weight-normal">{{ $movie->cast }}</span> </label>
                                        <br>
                                        <label>Release On : <span
                                                class="font-weight-normal">{{ $movie->release_date }}</span> </label> <br>
                                        <label>Duration : <span class="font-weight-normal">{{ $movie->duration }}</span>
                                        </label> <br>
                                        <label>Language : <span
                                                class="font-weight-normal">{{ $movie->language->language }}</span> </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        @php
            $dates = $shows->keys();
            $todayDate = today()->format('Y-m-d');
        @endphp
        <hr class="col-12">

        <div class="d-flex justify-content-between align-items-center px-3">

            @php
                $showDates = 0;
            @endphp

            <div class="d-flex m-0 p-0" style="width:min-content">
                @foreach ($dates as $key => $date)
                    @if (today()->format('Y-m-d') < $date)
                        <a href="#" class="myTab {{ $date == $todayDate ? 'active' : '' }}"
                            data-date="{{ $date }}">
                            {{ $date }}
                        </a>
                    @else
                        @php
                            $showDates = $showDates + 1;
                        @endphp
                    @endif
                @endforeach


            </div>

            <div class="col-12">
                @if ($showDates > 0)
                    <div class="card col-12" style="background-color: #d3d0d0">
                        <div class="card-body d-flex justify-content-center align-items-center" style="height: 200px">
                            <h3 class="text-uppercase" style="color: #808080">Show not available</h3>
                        </div>
                    </div>
                @endif
            </div>
            <br>

        </div>
        <hr class="col-12">

        <form action="{{ route('seatDetail') }}" method="POST">
            @csrf
            <div class="d-flex m-0 p-0">
                @foreach ($movie->movieShow as $show)
                    <div
                        class="m-0 p-0 p-3 time ml-3 badge checkButton1 badge-secondary time-list  d-none  {{ $show->id }} {{ $show->date }}  {{ $show->date == $todayDate ? 'active' : '' }}">
                        <label class="m-0 p-0">{{ $show->time }}</label>
                        <input class="m-0 p-0 checkButton" type="checkbox" name="show_id" value="{{ $show->id }}"
                            id="{{ $show->id }}">
                    </div>
                @endforeach
            </div>
            {{-- @if ($showDates < 0) --}}
                <div class="col-12 mt-3 d-flex justify-content-end">
                    <input type="submit" value="Next" class="btn btn-success" name="" id="">
                </div>
            {{-- @endif --}}

        </form>

    </div>
@endsection
