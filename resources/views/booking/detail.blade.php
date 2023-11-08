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

            <div class="d-flex m-0 p-0" style="width:300px">
                @foreach ($dates as $key => $date)
                    @if (today()->format('Y-m-d') <= $date)
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
            <br>

        </div>
        <hr class="col-12">

            <div class="d-flex m-0 p-0">
                @foreach ($movie->movieShow as $show)
                    <a href="{{route('seatDetail',$show->id)}}" class="text-white text-uppercase btn btn-secondary ml-3 time-list d-none {{ $show->id }} {{ $show->date }}  {{ $show->date == $todayDate ? 'active' : '' }}">{{date('h:i a', strtotime($show->time))}}</a>
                @endforeach
            </div>

    </div>
@endsection
