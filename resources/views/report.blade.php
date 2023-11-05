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
                                    <h3 class="card-title">Users Table</h3>
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
                                            <th>Total Price</th>

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
                                                <td>ART 020-{{settings()->get("sn_number", $default = "0")+ $report->id }}
                                                </td>
                                                <td> {{ $report->shows->movie->movie_name }} </td>
                                                <td> {{ $report->created_at }} </td>
                                                <td>
                                                    @foreach ($report->bookedSeat as $seat)
                                                        {{ $seat->seat }}
                                                        @php
                                                            $totalSeat = $totalSeat + 1;
                                                        @endphp
                                                        @if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                </td>


                                                <td>
                                                    @foreach ($report->shows->movie->movie_has_tax as $tax)
                                                        @php
                                                            $totalTax = $totalTax + $tax->tax->percentage;
                                                        @endphp
                                                    @endforeach
                                                    @php
                                                        $totalPrice = $report->shows->movie->price + ($report->shows->movie->price * $totalTax) / 100;
                                                    @endphp
                                                    @php
                                                        $totalPricePerSeat = $totalPricePerSeat + $totalPrice;
                                                    @endphp
                                                    RS. {{ $totalPrice }}
                                                </td>
                                                <td>
                                                    @php
                                                        $total=$total+($totalPrice * $totalSeat);
                                                    @endphp
                                                    RS. {{ $totalPrice * $totalSeat }}
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="5">Total</th>
                                            <th> RS. {{ $totalPricePerSeat }} </th>
                                            <th> RS. {{$total}} </th>
                                        </tr>
                                        <tr>
                                            <th>#</th>
                                            <th>SN</th>
                                            <th>Movie</th>
                                            <th>Booked Date</th>
                                            <th>Seat</th>
                                            <th>Price (Per Seat)</th>
                                            <th>Total Price</th>
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
