@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Report</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Report</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <form action="{{route('filter')}}" method="GET" class="col-12">
                                        <div class="row col-12">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <input type="date" name="date" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <select class="form-control select2" name="movie"
                                                        style="width: 100%;">
                                                        <option value="">Please select a movie type</option>

                                                        @foreach ($movies as $movie)
                                                                <option value="{{$movie->movie_name}}">{{$movie->movie_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <input type="submit" value="Filter" class="btn btn-info" style="height: 38px">
                                            <a href="{{route('report')}}" class="btn btn-danger mx-3" style="height: 38px"><i class="fas fa-times"></i></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="example1" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>SN</th>
                                            <th>Movie</th>
                                            <th>Booked Date</th>
                                            <th>Seat</th>
                                            <th>Price (Per Seat)</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $totalPricePerSeat = 0;
                                            $total = 0;
                                        @endphp
                                        @foreach ($reports as $report)
                                            @php
                                                $totalTax = 0;
                                                $totalSeat = 0;
                                                $totalPrice = 0;
                                            @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{$report->pre_sn}}-{{$report->post_sn}}
                                                </td>
                                                <td> {{ $report->shows->movie->movie_name }} </td>
                                                <td> {{ $report->created_at }} </td>
                                                <td>
                                                   {{$report->seat}}
                                                </td>


                                                <td>
                                                    RS. {{$report->price}}
                                                    @php
                                                        $total = $total + $report->price;
                                                    @endphp
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th> RS. {{ $total }} </th>
                                        </tr>
                                        <tr>
                                            <th>#</th>
                                            <th>SN</th>
                                            <th>Movie</th>
                                            <th>Booked Date</th>
                                            <th>Seat</th>
                                            <th>Price (Per Seat)</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
