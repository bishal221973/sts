@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Client Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Client Detail</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('book') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="foerm-group">
                                            <label>Full Name :</label>
                                            <input type="text" name="name" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="foerm-group">
                                            <label>Email :</label>
                                            <input type="email" name="email" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="foerm-group">
                                            <label>Phone Number :</label>
                                            <input type="number" name="phone" class="form-control" id="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="foerm-group">
                                            <label>Address :</label>
                                            <input type="text" name="address" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" value="{{ $show->id }}" name="show_id">

                                @foreach ($request->seatName as $item)
                                    <input type="hidden" value="{{$item}}" name="seat[]">
                                @endforeach

                                <div class="col-12 d-flex justify-content-end">
                                    <input type="submit" value="Book" class="btn btn-info">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card">
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


                                    <label>Duration : <span class="font-weight-normal">{{ $movie->duration }}</span>
                                    </label> <br>
                                    <label>Language : <span
                                            class="font-weight-normal">{{ $movie->language->language }}</span>
                                    </label> <br>
                                    <label>Show Date : <span class="font-weight-normal">{{ $show->date }}</span>
                                    </label>
                                    <br>
                                    <label>Show Time : <span class="font-weight-normal">{{ $show->time }}</span>
                                    </label>
                                    <br>
                                    <label>Rate : <span class="font-weight-normal">RS. {{ $movie->price }} /-</span>
                                    </label>
                                    <br>
                                    <label>Rate : <span class="font-weight-normal">RS. {{ $movie->price }} /-</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>


    </div>
@endsection
