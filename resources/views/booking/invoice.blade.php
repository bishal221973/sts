@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Invoice</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <button class="btn btn-warning">Print</button>
                        </div>
                        <div class="card-body">
                            <label class="font-weight-normal col-12 text-center m-0 p-0">Invoice</label>
                            <h4 class="col-12 text-center font-weight-bold m-0 p-0">STS Cinema</h4>
                            <label class="col-12 text-center m-0 p-0">Santoshi Tole, Dhangadhi</label>

                            <div class="col-12 d-flex justify-content-between mt-2 mb-0">
                                <div class="d-flex">
                                    <label class="font-weight-normal">S.N. :</label>
                                    <h5>ART {{ $movie->id }}</h5>
                                </div>
                                <div class="d-flex">
                                    <label class="font-weight-normal">Vat No. :</label>
                                    <h5>300224685</h5>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between m-0">
                                <div class="d-flex">
                                    <label class="font-weight-normal">Movie :</label>
                                    <h5 class="font-weight-bold">{{ $movie->shows->movie->movie_name }}</h5>
                                </div>

                            </div>

                            <div class="col-12 d-flex justify-content-between">
                                <div class="d-flex">
                                    <label class="font-weight-normal">Screen :</label>
                                    <h5>Screen 1</h5>
                                </div>
                                <div class="d-flex">
                                    <label class="font-weight-normal">Type :</label>
                                    <h5>Silver</h5>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-between">
                                <div class="d-block">
                                    <h5 class="font-weight-normal m-0 p-0 col-12 text-center">Date</h5>
                                    <h5 class="font-weight-bold">{{ $movie->shows->date }}</h5>
                                </div>
                                <div class="d-block">
                                    <h5 class="font-weight-normal m-0 p-0 col-12 text-center">Time</h5>
                                    <h5 class="font-weight-bold">{{ $movie->shows->time }}</h5>
                                </div>

                                <div class="d-block">
                                    <h5 class="font-weight-normal m-0 p-0 col-12 text-center">Seat</h5>
                                    <div class="col-12 d-flex">
                                        @foreach ($movie->bookedSeat as $seat)
                                            <h5 class="font-weight-bold">{{ $seat->seat }}</h5>
                                            @if (!$loop->last)
                                                , &nbsp
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between mt-3">
                                <div>
                                    {!! QrCode::size(150)->generate('2587878778') !!}

                                </div>
                                <div class="d-block">
                                    <div class="d-flex">
                                        <h5 class="font-weight-normal">Entrance Fee :</h5>
                                        <h5 class="font-weight-normal">Rs. {{ $movie->shows->movie->price }}</h5>
                                    </div>
                                    @php
                                        $totalTax = 0;
                                        $totalTaxPrice = 0;
                                    @endphp
                                    @foreach ($movie->shows->movie->movie_has_tax as $tax)
                                        <div class="d-flex">
                                            <h5 class="font-weight-normal">{{ $tax->tax->tax }}
                                                ({{ $tax->tax->percentage }}%) :</h5>
                                            <h5 class="font-weight-normal">Rs.
                                                {{ $movie->shows->movie->price * ($tax->tax->percentage / 100) }}</h5>
                                            @php
                                                $totalTax = $totalTax + $tax->tax->percentage;
                                            @endphp
                                        </div>
                                    @endforeach
                                    @php
                                        $totalTaxPrice = $movie->shows->movie->price * ($totalTax / 100);
                                    @endphp
                                    <div class="d-flex">
                                        <h5 class="font-weight-normal">Total Cost :</h5>
                                        <h5 class="font-weight-normal">Rs. {{ $movie->shows->movie->price + $totalTaxPrice }}
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center font-weight-bold mt-3">Copy of Original -1</h3>
                            <label>Terms and Conditions</label>
                            <ul class="m-0 p-0 pl-3">
                                <li>Tickets once sold can not be refunded.</li>
                                <li>Lost, Stolen or damaged tickets will not be replaced.</li>
                                <li>Seat allocation can not be altered after the purchase of the tickets.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->
        </section>


    </div>
@endsection
