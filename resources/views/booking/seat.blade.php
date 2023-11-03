@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Seat Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Seat Detail</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>



        <section class="content">
            <div class="col-12 d-flex top-menu-selected py-2">
                <div class="top-item d-flex align-items-center">
                    <div class="mr-2 available"></div>Available
                </div>
                <div class="top-item d-flex align-items-center">
                    <div class="mr-2 selected"></div>Selected
                </div>
                <div class="top-item d-flex align-items-center">
                    <div class="mr-2 booked"></div>Booked
                </div>
                <div class="top-item d-flex align-items-center">
                    <div class="mr-2 sold"></div>Sold
                </div>
            </div>

            <form action="{{ route('clientDetail') }}" method="POST">
                @csrf
                <div class="container-fluid mt-3">
                    <div class="grid mt-1">
                        <div class="grid-item  opacity-0">GF21</div>
                        <div class="grid-item  opacity-0">GF22</div>
                        @php
                            $GF18 = collect($bookedSeats)
                                ->where('seat', 'GF18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF18 {{ $GF18 ? 'booked' : '' }}">GF18
                        <input type="checkbox" class="seat-name " value="GF18" name="seatName[]" id="GF18">
                        </div>
                        @php
                            $GF17 = collect($bookedSeats)
                                ->where('seat', 'GF17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF17 {{ $GF17 ? 'booked' : '' }}">GF17
                        <input type="checkbox" class="seat-name " value="GF17" name="seatName[]" id="GF17">
                        </div>

                        @php
                            $GF16 = collect($bookedSeats)
                                ->where('seat', 'GF16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF16 {{ $GF16 ? 'booked' : '' }}">GF16
                        <input type="checkbox" class="seat-name " value="GF16" name="seatName[]" id="GF16">
                        </div>

                        @php
                            $GF15 = collect($bookedSeats)
                                ->where('seat', 'GF15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF15 {{ $GF15 ? 'booked' : '' }}">GF15
                        <input type="checkbox" class="seat-name " value="GF15" name="seatName[]" id="GF15">
                        </div>

                        @php
                            $GF14 = collect($bookedSeats)
                                ->where('seat', 'GF14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF14 {{ $GF14 ? 'booked' : '' }}">GF14
                        <input type="checkbox" class="seat-name " value="GF14" name="seatName[]" id="GF14">
                        </div>

                        @php
                            $GF13 = collect($bookedSeats)
                                ->where('seat', 'GF13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF13 {{ $GF13 ? 'booked' : '' }}">GF13
                        <input type="checkbox" class="seat-name " value="GF13" name="seatName[]" id="GF13">
                        </div>

                        @php
                            $GF12 = collect($bookedSeats)
                                ->where('seat', 'GF12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF12 {{ $GF12 ? 'booked' : '' }}">GF12
                        <input type="checkbox" class="seat-name " value="GF12" name="seatName[]" id="GF12">
                        </div>

                        @php
                            $GF11 = collect($bookedSeats)
                                ->where('seat', 'GF11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF11 {{ $GF11 ? 'booked' : '' }}">GF11
                        <input type="checkbox" class="seat-name " value="GF11" name="seatName[]" id="GF11">
                        </div>

                        @php
                            $GF10 = collect($bookedSeats)
                                ->where('seat', 'GF10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF10 {{ $GF10 ? 'booked' : '' }}">GF10
                        <input type="checkbox" class="seat-name " value="name" GF11="seatName[]" id="GF10">
                        </div>

                        @php
                            $GF9 = collect($bookedSeats)
                                ->where('seat', 'GF9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF9 {{ $GF9 ? 'booked' : '' }}">GF9
                        <input type="checkbox" class="seat-name " value="GF9" name="seatName[]" id="GF9">
                        </div>

                        @php
                            $GF8 = collect($bookedSeats)
                                ->where('seat', 'GF8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF8 {{ $GF8 ? 'booked' : '' }}">GF8
                        <input type="checkbox" class="seat-name " value="GF8" name="seatName[]" id="GF8">
                        </div>

                        @php
                            $GF7 = collect($bookedSeats)
                                ->where('seat', 'GF7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF7 {{ $GF7 ? 'booked' : '' }}">GF7
                        <input type="checkbox" class="seat-name " value="GF7" name="seatName[]" id="GF7">
                        </div>

                        @php
                            $GF6 = collect($bookedSeats)
                                ->where('seat', 'GF6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF6 {{ $GF6 ? 'booked' : '' }}">GF6
                        <input type="checkbox" class="seat-name " value="GF6" name="seatName[]" id="GF6">
                        </div>

                        @php
                            $GF5 = collect($bookedSeats)
                                ->where('seat', 'GF5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF5 {{ $GF5 ? 'booked' : '' }}">GF5
                        <input type="checkbox" class="seat-name " value="GF5" name="seatName[]" id="GF5">
                        </div>

                        @php
                            $GF4 = collect($bookedSeats)
                                ->where('seat', 'GF4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF4 {{ $GF4 ? 'booked' : '' }}">GF4
                        <input type="checkbox" class="seat-name " value="GF4" name="seatName[]" id="GF4">
                        </div>

                        @php
                            $GF3 = collect($bookedSeats)
                                ->where('seat', 'GF3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF3 {{ $GF3 ? 'booked' : '' }}">GF3
                        <input type="checkbox" class="seat-name " value="GF3" name="seatName[]" id="GF3">
                        </div>

                        @php
                            $GF2 = collect($bookedSeats)
                                ->where('seat', 'GF2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF2 {{ $GF2 ? 'booked' : '' }}">GF2
                        <input type="checkbox" class="seat-name " value="GF2" name="seatName[]" id="GF2">
                        </div>

                        @php
                            $GF1 = collect($bookedSeats)
                                ->where('seat', 'GF1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GF1 {{ $GF1 ? 'booked' : '' }}">GF1
                        <input type="checkbox" class="seat-name " value="GF1" name="seatName[]" id="GF1">
                        </div>

                        <div class="grid-item  opacity-0">GF19</div>
                        <div class="grid-item  opacity-0">GF20</div>

                    </div>
                    <div class="grid mt-1">
                        <div class="grid-item  opacity-0">GE21</div>
                        <div class="grid-item  opacity-0">GE22</div>
                        @php
                            $GE18 = collect($bookedSeats)
                                ->where('seat', 'GE18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE18 {{ $GE18 ? 'booked' : '' }}">GE18
                        <input type="checkbox" class="seat-name " value="GE18" name="seatName[]" id="GE18">
                        </div>

                        @php
                            $GE17 = collect($bookedSeats)
                                ->where('seat', 'GE17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE17 {{ $GE17 ? 'booked' : '' }}">GE17
                        <input type="checkbox" class="seat-name " value="GE17" name="seatName[]" id="GE17">
                        </div>

                        @php
                            $GE16 = collect($bookedSeats)
                                ->where('seat', 'GE16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE16 {{ $GE16 ? 'booked' : '' }}">GE16
                        <input type="checkbox" class="seat-name " value="GE16" name="seatName[]" id="GE16">
                        </div>

                        @php
                            $GE15 = collect($bookedSeats)
                                ->where('seat', 'GE15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE15 {{ $GE15 ? 'booked' : '' }}">GE15
                        <input type="checkbox" class="seat-name " value="GE15" name="seatName[]" id="GE15">
                        </div>

                        @php
                            $GE14 = collect($bookedSeats)
                                ->where('seat', 'GE14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE14 {{ $GE14 ? 'booked' : '' }}">GE14
                        <input type="checkbox" class="seat-name " value="GE14" name="seatName[]" id="GE14">
                        </div>

                        @php
                            $GE13 = collect($bookedSeats)
                                ->where('seat', 'GE13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE13 {{ $GE13 ? 'booked' : '' }}">GE13
                        <input type="checkbox" class="seat-name " value="GE13" name="seatName[]" id="GE13">
                        </div>

                        @php
                            $GE12 = collect($bookedSeats)
                                ->where('seat', 'GE12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE12 {{ $GE12 ? 'booked' : '' }}">GE12
                        <input type="checkbox" class="seat-name " value="GE12" name="seatName[]" id="GE12">
                        </div>

                        @php
                            $GE11 = collect($bookedSeats)
                                ->where('seat', 'GE11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE11 {{ $GE11 ? 'booked' : '' }}">GE11
                        <input type="checkbox" class="seat-name " value="GE11" name="seatName[]" id="GE11">
                        </div>

                        @php
                            $GE10 = collect($bookedSeats)
                                ->where('seat', 'GE10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE10 {{ $GE10 ? 'booked' : '' }}">GE10
                        <input type="checkbox" class="seat-name " value="GE10" name="seatName[]" id="GE10">
                        </div>

                        @php
                            $GE9 = collect($bookedSeats)
                                ->where('seat', 'GE9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE9 {{ $GE9 ? 'booked' : '' }}">GE9
                        <input type="checkbox" class="seat-name " value="GE9" name="seatName[]" id="GE9">
                        </div>

                        @php
                            $GE8 = collect($bookedSeats)
                                ->where('seat', 'GE8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE8 {{ $GE8 ? 'booked' : '' }}">GE8
                        <input type="checkbox" class="seat-name " value="GE8" name="seatName[]" id="GE8">
                        </div>

                        @php
                            $GE7 = collect($bookedSeats)
                                ->where('seat', 'GE7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE7 {{ $GE7 ? 'booked' : '' }}">GE7
                        <input type="checkbox" class="seat-name " value="GE7" name="seatName[]" id="GE7">
                        </div>

                        @php
                            $GE6 = collect($bookedSeats)
                                ->where('seat', 'GE6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE6 {{ $GE6 ? 'booked' : '' }}">GE6
                        <input type="checkbox" class="seat-name " value="GE6" name="seatName[]" id="GE6">
                        </div>

                        @php
                            $GE5 = collect($bookedSeats)
                                ->where('seat', 'GE5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE5 {{ $GE5 ? 'booked' : '' }}">GE5
                        <input type="checkbox" class="seat-name " value="GE5" name="seatName[]" id="GE5">
                        </div>

                        @php
                            $GE4 = collect($bookedSeats)
                                ->where('seat', 'GE4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE4 {{ $GE4 ? 'booked' : '' }}">GE4
                        <input type="checkbox" class="seat-name " value="GE4" name="seatName[]" id="GE4">
                        </div>

                        @php
                            $GE3 = collect($bookedSeats)
                                ->where('seat', 'GE3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE3 {{ $GE3 ? 'booked' : '' }}">GE3
                        <input type="checkbox" class="seat-name " value="GE3" name="seatName[]" id="GE3">
                        </div>

                        @php
                            $GE2 = collect($bookedSeats)
                                ->where('seat', 'GE2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE2 {{ $GE2 ? 'booked' : '' }}">GE2
                        <input type="checkbox" class="seat-name " value="GE2" name="seatName[]" id="GE2">
                        </div>

                        @php
                            $GE1 = collect($bookedSeats)
                                ->where('seat', 'GE1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GE1 {{ $GE1 ? 'booked' : '' }}">GE1
                        <input type="checkbox" class="seat-name " value="GE1" name="seatName[]" id="GE1">
                        </div>

                        <div class="grid-item  opacity-0">GE19</div>
                        <div class="grid-item  opacity-0">GE20</div>

                    </div>
                    <div class="grid mt-1">
                        <div class="grid-item  opacity-0">GD21</div>
                        <div class="grid-item  opacity-0">GD22</div>
                        @php
                            $GD1 = collect($bookedSeats)
                                ->where('seat', 'GD1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD18 {{ $GD1 ? 'booked' : '' }}">GD18
                        <input type="checkbox" class="seat-name " value="GD18" name="seatName[]" id="GD18">
                        </div>

                        @php
                            $GD17 = collect($bookedSeats)
                                ->where('seat', 'GD17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD17 {{ $GD17 ? 'booked' : '' }}">GD17
                        <input type="checkbox" class="seat-name " value="GD17" name="seatName[]" id="GD17">
                        </div>

                        @php
                            $GD16 = collect($bookedSeats)
                                ->where('seat', 'GD16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD16 {{ $GD16 ? 'booked' : '' }}">GD16
                        <input type="checkbox" class="seat-name " value="GD16" name="seatName[]" id="GD16">
                        </div>

                        @php
                            $GD15 = collect($bookedSeats)
                                ->where('seat', 'GD15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD15 {{ $GD15 ? 'booked' : '' }}">GD15
                        <input type="checkbox" class="seat-name " value="GD15" name="seatName[]" id="GD15">
                        </div>

                        @php
                            $GD14 = collect($bookedSeats)
                                ->where('seat', 'GD14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD14 {{ $GD14 ? 'booked' : '' }}">GD14
                        <input type="checkbox" class="seat-name " value="GD14" name="seatName[]" id="GD14">
                        </div>

                        @php
                            $GD13 = collect($bookedSeats)
                                ->where('seat', 'GD13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD13 {{ $GD13 ? 'booked' : '' }}">GD13
                        <input type="checkbox" class="seat-name " value="GD13" name="seatName[]" id="GD13">
                        </div>

                        @php
                            $GD12 = collect($bookedSeats)
                                ->where('seat', 'GD12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD12 {{ $GD12 ? 'booked' : '' }}">GD12
                        <input type="checkbox" class="seat-name " value="GD12" name="seatName[]" id="GD12">
                        </div>

                        @php
                            $GD11 = collect($bookedSeats)
                                ->where('seat', 'GD11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD11 {{ $GD11 ? 'booked' : '' }}">GD11
                        <input type="checkbox" class="seat-name " value="GD11" name="seatName[]" id="GD11">
                        </div>

                        @php
                            $GD10 = collect($bookedSeats)
                                ->where('seat', 'GD10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD10 {{ $GD10 ? 'booked' : '' }}">GD10
                        <input type="checkbox" class="seat-name " value="GD10" name="seatName[]" id="GD10">
                        </div>

                        @php
                            $GD9 = collect($bookedSeats)
                                ->where('seat', 'GD9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD9 {{ $GD9 ? 'booked' : '' }}">GD9
                        <input type="checkbox" class="seat-name " value="GD9" name="seatName[]" id="GD9">
                        </div>

                        @php
                            $GD8 = collect($bookedSeats)
                                ->where('seat', 'GD8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD8 {{ $GD8 ? 'booked' : '' }}">GD8
                        <input type="checkbox" class="seat-name " value="GD8" name="seatName[]" id="GD8">
                        </div>

                        @php
                            $GD7 = collect($bookedSeats)
                                ->where('seat', 'GD7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD7 {{ $GD7 ? 'booked' : '' }}">GD7
                        <input type="checkbox" class="seat-name " value="GD7" name="seatName[]" id="GD7">
                        </div>

                        @php
                            $GD6 = collect($bookedSeats)
                                ->where('seat', 'GD6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD6 {{ $GD6 ? 'booked' : '' }}">GD6
                        <input type="checkbox" class="seat-name " value="GD6" name="seatName[]" id="GD6">
                        </div>

                        @php
                            $GD5 = collect($bookedSeats)
                                ->where('seat', 'GD5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD5 {{ $GD5 ? 'booked' : '' }}">GD5
                        <input type="checkbox" class="seat-name " value="GD5" name="seatName[]" id="GD5">
                        </div>

                        @php
                            $GD4 = collect($bookedSeats)
                                ->where('seat', 'GD4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD4 {{ $GD4 ? 'booked' : '' }}">GD4
                        <input type="checkbox" class="seat-name " value="GD4" name="seatName[]" id="GD4">
                        </div>

                        @php
                            $GD3 = collect($bookedSeats)
                                ->where('seat', 'GD3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD3 {{ $GD3 ? 'booked' : '' }}">GD3
                        <input type="checkbox" class="seat-name " value="GD3" name="seatName[]" id="GD3">
                        </div>

                        @php
                            $GD2 = collect($bookedSeats)
                                ->where('seat', 'GD2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD2 {{ $GD2 ? 'booked' : '' }}">GD2
                        <input type="checkbox" class="seat-name " value="GD2" name="seatName[]" id="GD2">
                        </div>

                        @php
                            $GD1 = collect($bookedSeats)
                                ->where('seat', 'GD1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GD1 {{ $GD1 ? 'booked' : '' }}">GD1
                        <input type="checkbox" class="seat-name " value="GD1" name="seatName[]" id="GD1">
                        </div>

                        <div class="grid-item  opacity-0">GD19</div>
                        <div class="grid-item  opacity-0">GD20</div>

                    </div>
                    <div class="grid mt-1">
                        <div class="grid-item  opacity-0">GC21</div>
                        <div class="grid-item  opacity-0">GC22</div>
                        @php
                            $GC18 = collect($bookedSeats)
                                ->where('seat', 'GC18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC18 {{ $GC18 ? 'booked' : '' }}">GC18
                        <input type="checkbox" class="seat-name " value="GC18" name="seatName[]" id="GC18">
                        </div>

                        @php
                            $GC17 = collect($bookedSeats)
                                ->where('seat', 'GC17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC17 {{ $GC17 ? 'booked' : '' }}">GC17
                        <input type="checkbox" class="seat-name " value="GC17" name="seatName[]" id="GC17">
                        </div>

                        @php
                            $GC16 = collect($bookedSeats)
                                ->where('seat', 'GC16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC16 {{ $GC16 ? 'booked' : '' }}">GC16
                        <input type="checkbox" class="seat-name " value="GC16" name="seatName[]" id="GC16">
                        </div>

                        @php
                            $GC15 = collect($bookedSeats)
                                ->where('seat', 'GC15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC15 {{ $GC15 ? 'booked' : '' }}">GC15
                        <input type="checkbox" class="seat-name " value="GC15" name="seatName[]" id="GC15">
                        </div>

                        @php
                            $GC14 = collect($bookedSeats)
                                ->where('seat', 'GC14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC14 {{ $GC14 ? 'booked' : '' }}">GC14
                        <input type="checkbox" class="seat-name " value="GC14" name="seatName[]" id="GC14">
                        </div>

                        @php
                            $GC13 = collect($bookedSeats)
                                ->where('seat', 'GC13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC13 {{ $GC13 ? 'booked' : '' }}">GC13
                        <input type="checkbox" class="seat-name " A1"="name GC13="seatName[]" id="GC13">
                        </div>

                        @php
                            $GC12 = collect($bookedSeats)
                                ->where('seat', 'GC12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC12 {{ $GC12 ? 'booked' : '' }}">GC12
                        <input type="checkbox" class="seat-name " value="GC12" name="seatName[]" id="GC12">
                        </div>

                        @php
                            $GC11 = collect($bookedSeats)
                                ->where('seat', 'GC11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC11 {{ $GC11 ? 'booked' : '' }}">GC11
                        <input type="checkbox" class="seat-name " value="GC11" name="seatName[]" id="GC11">
                        </div>

                        @php
                            $GC10 = collect($bookedSeats)
                                ->where('seat', 'GC10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC10 {{ $GC10 ? 'booked' : '' }}">GC10
                        <input type="checkbox" class="seat-name " value="GC10" name="seatName[]" id="GC10">
                        </div>

                        @php
                            $GC9 = collect($bookedSeats)
                                ->where('seat', 'GC9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC9 {{ $GC9 ? 'booked' : '' }}">GC9
                        <input type="checkbox" class="seat-name " value="GC9" name="seatName[]" id="GC9">
                        </div>

                        @php
                            $GC8 = collect($bookedSeats)
                                ->where('seat', 'GC8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC8 {{ $GC8 ? 'booked' : '' }}">GC8
                        <input type="checkbox" class="seat-name " value="GC8" name="seatName[]" id="GC8">
                        </div>

                        @php
                            $GC7 = collect($bookedSeats)
                                ->where('seat', 'GC7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC7 {{ $GC7 ? 'booked' : '' }}">GC7
                        <input type="checkbox" class="seat-name " value="GC7" name="seatName[]" id="GC7">
                        </div>

                        @php
                            $GC6 = collect($bookedSeats)
                                ->where('seat', 'GC6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC6 {{ $GC6 ? 'booked' : '' }}">GC6
                        <input type="checkbox" class="seat-name " value="GC6" name="seatName[]" id="GC6">
                        </div>

                        @php
                            $GC5 = collect($bookedSeats)
                                ->where('seat', 'GC5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC5 {{ $GC5 ? 'booked' : '' }}">GC5
                        <input type="checkbox" class="seat-name " value="GC5" name="seatName[]" id="GC5">
                        </div>

                        @php
                            $GC4 = collect($bookedSeats)
                                ->where('seat', 'GC4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC4 {{ $GC4 ? 'booked' : '' }}">GC4
                        <input type="checkbox" class="seat-name " value="GC4" name="seatName[]" id="GC4">
                        </div>

                        @php
                            $GC3 = collect($bookedSeats)
                                ->where('seat', 'GC3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC3 {{ $GC3 ? 'booked' : '' }}">GC3
                        <input type="checkbox" class="seat-name " value="GC3" name="seatName[]" id="GC3">
                        </div>

                        @php
                            $GC2 = collect($bookedSeats)
                                ->where('seat', 'GC2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC2 {{ $GC2 ? 'booked' : '' }}">GC2
                        <input type="checkbox" class="seat-name " value="GC2" name="seatName[]" id="GC2">
                        </div>

                        @php
                            $GC1 = collect($bookedSeats)
                                ->where('seat', 'GC1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GC1 {{ $GC1 ? 'booked' : '' }}">GC1
                        <input type="checkbox" class="seat-name " value="GC1" name="seatName[]" id="GC1">
                        </div>

                        <div class="grid-item  opacity-0">GC19</div>
                        <div class="grid-item  opacity-0">GC20</div>

                    </div>
                    <div class="grid mt-1">
                        <div class="grid-item  opacity-0">GB21</div>
                        <div class="grid-item  opacity-0">GB22</div>
                        @php
                            $GB18 = collect($bookedSeats)
                                ->where('seat', 'GB18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB18 {{ $GB18 ? 'booked' : '' }}">GB18
                        <input type="checkbox" class="seat-name " value="GB18" name="seatName[]" id="GB18">
                        </div>

                        @php
                            $GB17 = collect($bookedSeats)
                                ->where('seat', 'GB17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB17 {{ $GB17 ? 'booked' : '' }}">GB17
                        <input type="checkbox" class="seat-name " value="GB17" name="seatName[]" id="GB17">
                        </div>

                        @php
                            $GB16 = collect($bookedSeats)
                                ->where('seat', 'GB16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB16 {{ $GB16 ? 'booked' : '' }}">GB16
                        <input type="checkbox" class="seat-name " value="GB16" name="seatName[]" id="GB16">
                        </div>

                        @php
                            $GB15 = collect($bookedSeats)
                                ->where('seat', 'GB15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB15 {{ $GB15 ? 'booked' : '' }}">GB15
                        <input type="checkbox" class="seat-name " value="GB15" name="seatName[]" id="GB15">
                        </div>

                        @php
                            $GB14 = collect($bookedSeats)
                                ->where('seat', 'GB14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB14 {{ $GB14 ? 'booked' : '' }}">GB14
                        <input type="checkbox" class="seat-name " value="GB14" name="seatName[]" id="GB14">
                        </div>

                        @php
                            $GB13 = collect($bookedSeats)
                                ->where('seat', 'GB13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB13 {{ $GB13 ? 'booked' : '' }}">GB13
                        <input type="checkbox" class="seat-name " value="GB13" name="seatName[]" id="GB13">
                        </div>

                        @php
                            $GB12 = collect($bookedSeats)
                                ->where('seat', 'GB12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB12 {{ $GB12 ? 'booked' : '' }}">GB12
                        <input type="checkbox" class="seat-name " value="GB12" name="seatName[]" id="GB12">
                        </div>

                        @php
                            $GB11 = collect($bookedSeats)
                                ->where('seat', 'GB11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB11 {{ $GB11 ? 'booked' : '' }}">GB11
                        <input type="checkbox" class="seat-name " value="GB11" name="seatName[]" id="GB11">
                        </div>

                        @php
                            $GB10 = collect($bookedSeats)
                                ->where('seat', 'GB10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB10 {{ $GB10 ? 'booked' : '' }}">GB10
                        <input type="checkbox" class="seat-name " value="GB10" name="seatName[]" id="GB10">
                        </div>

                        @php
                            $GB9 = collect($bookedSeats)
                                ->where('seat', 'GB9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB9 {{ $GB9 ? 'booked' : '' }}">GB9
                        <input type="checkbox" class="seat-name " value="GB9" name="seatName[]" id="GB9">
                        </div>

                        @php
                            $GB8 = collect($bookedSeats)
                                ->where('seat', 'GB8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB8 {{ $GB8 ? 'booked' : '' }}">GB8
                        <input type="checkbox" class="seat-name " value="GB8" name="seatName[]" id="GB8">
                        </div>

                        @php
                            $GB7 = collect($bookedSeats)
                                ->where('seat', 'GB7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB7 {{ $GB7 ? 'booked' : '' }}">GB7
                        <input type="checkbox" class="seat-name " value="GB7" name="seatName[]" id="GB7">
                        </div>

                        @php
                            $GB6 = collect($bookedSeats)
                                ->where('seat', 'GB6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB6 {{ $GB6 ? 'booked' : '' }}">GB6
                        <input type="checkbox" class="seat-name " value="GB6" name="seatName[]" id="GB6">
                        </div>

                        @php
                            $GB5 = collect($bookedSeats)
                                ->where('seat', 'GB5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB5 {{ $GB5 ? 'booked' : '' }}">GB5
                        <input type="checkbox" class="seat-name " value="GB5" name="seatName[]" id="GB5">
                        </div>

                        @php
                            $GB4 = collect($bookedSeats)
                                ->where('seat', 'GB4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB4 {{ $GB4 ? 'booked' : '' }}">GB4
                        <input type="checkbox" class="seat-name " value="GB4" name="seatName[]" id="GB4">
                        </div>

                        @php
                            $GB3 = collect($bookedSeats)
                                ->where('seat', 'GB3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB3 {{ $GB3 ? 'booked' : '' }}">GB3
                        <input type="checkbox" class="seat-name " value="GB3" name="seatName[]" id="GB3">
                        </div>

                        @php
                            $GB2 = collect($bookedSeats)
                                ->where('seat', 'GB2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB2 {{ $GB2 ? 'booked' : '' }}">GB2
                        <input type="checkbox" class="seat-name " value="GB2" name="seatName[]" id="GB2">
                        </div>

                        @php
                            $GB1 = collect($bookedSeats)
                                ->where('seat', 'GB1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GB1 {{ $GB1 ? 'booked' : '' }}">GB1
                        <input type="checkbox" class="seat-name " value="GB1" name="seatName[]" id="GB1">
                        </div>

                        <div class="grid-item  opacity-0">GB19</div>
                        <div class="grid-item  opacity-0">GB20</div>

                    </div>
                    <div class="grid mt-1">
                        <div class="grid-item  opacity-0">GA21</div>
                        <div class="grid-item  opacity-0">GA22</div>
                        @php
                            $GA18 = collect($bookedSeats)
                                ->where('seat', 'GA18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA18 {{ $GA18 ? 'booked' : '' }}">GA18
                        <input type="checkbox" class="seat-name " value="GA18" name="seatName[]" id="GA18">
                        </div>

                        @php
                            $GA17 = collect($bookedSeats)
                                ->where('seat', 'GA17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA17 {{ $GA17 ? 'booked' : '' }}">GA17
                        <input type="checkbox" class="seat-name " value="GA17" name="seatName[]" id="GA17">
                        </div>

                        @php
                            $GA16 = collect($bookedSeats)
                                ->where('seat', 'GA16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA16 {{ $GA16 ? 'booked' : '' }}">GA16
                        <input type="checkbox" class="seat-name " value="GA16" name="seatName[]" id="GA16">
                        </div>

                        @php
                            $GA15 = collect($bookedSeats)
                                ->where('seat', 'GA15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA15 {{ $GA15 ? 'booked' : '' }}">GA15
                        <input type="checkbox" class="seat-name " value="GA15" name="seatName[]" id="GA15">
                        </div>

                        @php
                            $GA14 = collect($bookedSeats)
                                ->where('seat', 'GA14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA14 {{ $GA14 ? 'booked' : '' }}">GA14
                        <input type="checkbox" class="seat-name " value="GA14" name="seatName[]" id="GA14">
                        </div>

                        @php
                            $GA13 = collect($bookedSeats)
                                ->where('seat', 'GA13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA13 {{ $GA13 ? 'booked' : '' }}">GA13
                        <input type="checkbox" class="seat-name " value="GA13" name="seatName[]" id="GA13">
                        </div>

                        @php
                            $GA12 = collect($bookedSeats)
                                ->where('seat', 'GA12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA12 {{ $GA12 ? 'booked' : '' }}">GA12
                        <input type="checkbox" class="seat-name " value="GA12" name="seatName[]" id="GA12">
                        </div>

                        @php
                            $GA11 = collect($bookedSeats)
                                ->where('seat', 'GA11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA11 {{ $GA11 ? 'booked' : '' }}">GA11
                        <input type="checkbox" class="seat-name " value="GA11" name="seatName[]" id="GA11">
                        </div>

                        @php
                            $GA10 = collect($bookedSeats)
                                ->where('seat', 'GA10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA10 {{ $GA10 ? 'booked' : '' }}">GA10
                        <input type="checkbox" class="seat-name " value="GA10" name="seatName[]" id="GA10">
                        </div>

                        @php
                            $GA9 = collect($bookedSeats)
                                ->where('seat', 'GA9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA9 {{ $GA9 ? 'booked' : '' }}">GA9
                        <input type="checkbox" class="seat-name " value="GA9" name="seatName[]" id="GA9">
                        </div>

                        @php
                            $GA8 = collect($bookedSeats)
                                ->where('seat', 'GA8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA8 {{ $GA8 ? 'booked' : '' }}">GA8
                        <input type="checkbox" class="seat-name " value="GA8" name="seatName[]" id="GA8">
                        </div>

                        @php
                            $GA7 = collect($bookedSeats)
                                ->where('seat', 'GA7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA7 {{ $GA7 ? 'booked' : '' }}">GA7
                        <input type="checkbox" class="seat-name " value="GA7" name="seatName[]" id="GA7">
                        </div>

                        @php
                            $GA6 = collect($bookedSeats)
                                ->where('seat', 'GA6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA6 {{ $GA6 ? 'booked' : '' }}">GA6
                        <input type="checkbox" class="seat-name " value="GA6" name="seatName[]" id="GA6">
                        </div>

                        @php
                            $GA5 = collect($bookedSeats)
                                ->where('seat', 'GA5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA5 {{ $GA5 ? 'booked' : '' }}">GA5
                        <input type="checkbox" class="seat-name " value="GA5" name="seatName[]" id="GA5">
                        </div>

                        @php
                            $GA4 = collect($bookedSeats)
                                ->where('seat', 'GA4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA4 {{ $GA4 ? 'booked' : '' }}">GA4
                        <input type="checkbox" class="seat-name " value="GA4" name="seatName[]" id="GA4">
                        </div>

                        @php
                            $GA3 = collect($bookedSeats)
                                ->where('seat', 'GA3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA3 {{ $GA3 ? 'booked' : '' }}">GA3
                        <input type="checkbox" class="seat-name " value="GA3" name="seatName[]" id="GA3">
                        </div>

                        @php
                            $GA2 = collect($bookedSeats)
                                ->where('seat', 'GA2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA2 {{ $GA2 ? 'booked' : '' }}">GA2
                        <input type="checkbox" class="seat-name " value="GA2" name="seatName[]" id="GA2">
                        </div>

                        @php
                            $GA1 = collect($bookedSeats)
                                ->where('seat', 'GA1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item GA1 {{ $GA1 ? 'booked' : '' }}">GA1
                        <input type="checkbox" class="seat-name " value="GA1" name="seatName[]" id="GA1">
                        </div>

                        <div class="grid-item  opacity-0">GA19</div>
                        <div class="grid-item  opacity-0">GA20</div>

                    </div>
                    <div class="grid mt-3">
                        @php
                            $M22 = collect($bookedSeats)
                                ->where('seat', 'M22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M22 {{ $M22 ? 'booked' : '' }}">M22
                        <input type="checkbox" class="seat-name " value="M22" name="seatName[]" id="M22">
                        </div>

                        @php
                            $M21 = collect($bookedSeats)
                                ->where('seat', 'M21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M21 {{ $M21 ? 'booked' : '' }}">M21
                        <input type="checkbox" class="seat-name " value="M21" name="seatName[]" id="M21">
                        </div>

                        @php
                            $M20 = collect($bookedSeats)
                                ->where('seat', 'M20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M20 {{ $M20 ? 'booked' : '' }}">M20
                        <input type="checkbox" class="seat-name " value="M20" name="seatName[]" id="M20">
                        </div>

                        @php
                            $M19 = collect($bookedSeats)
                                ->where('seat', 'M19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M19 {{ $M19 ? 'booked' : '' }}">M19
                        <input type="checkbox" class="seat-name " value="M19" name="seatName[]" id="M19">
                        </div>

                        @php
                            $M18 = collect($bookedSeats)
                                ->where('seat', 'M18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M18 {{ $M18 ? 'booked' : '' }}">M18
                        <input type="checkbox" class="seat-name " value="M18" name="seatName[]" id="M18">
                        </div>

                        @php
                            $M17 = collect($bookedSeats)
                                ->where('seat', 'M17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M17 {{ $M17 ? 'booked' : '' }}">M17
                        <input type="checkbox" class="seat-name " value="M17" name="seatName[]" id="M17">
                        </div>

                        @php
                            $M16 = collect($bookedSeats)
                                ->where('seat', 'M16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M16 {{ $M16 ? 'booked' : '' }}">M16
                        <input type="checkbox" class="seat-name " value="M16" name="seatName[]" id="M16">
                        </div>

                        @php
                            $M15 = collect($bookedSeats)
                                ->where('seat', 'M15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M15 {{ $M15 ? 'booked' : '' }}">M15
                        <input type="checkbox" class="seat-name " value="M15" name="seatName[]" id="M15">
                        </div>

                        @php
                            $M14 = collect($bookedSeats)
                                ->where('seat', 'M14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M14 {{ $M14 ? 'booked' : '' }}">M14
                        <input type="checkbox" class="seat-name " value="M14" name="seatName[]" id="M14">
                        </div>

                        @php
                            $M13 = collect($bookedSeats)
                                ->where('seat', 'M13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M13 {{ $M13 ? 'booked' : '' }}">M13
                        <input type="checkbox" class="seat-name " value="M13" name="seatName[]" id="M13">
                        </div>

                        @php
                            $M12 = collect($bookedSeats)
                                ->where('seat', 'M12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M12 {{ $M12 ? 'booked' : '' }}">M12
                        <input type="checkbox" class="seat-name " value="M12" name="seatName[]" id="M12">
                        </div>

                        @php
                            $M11 = collect($bookedSeats)
                                ->where('seat', 'M11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M11 {{ $M11 ? 'booked' : '' }}">M11
                        <input type="checkbox" class="seat-name " value="M11" name="seatName[]" id="M11">
                        </div>

                        @php
                            $M10 = collect($bookedSeats)
                                ->where('seat', 'M10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M10 {{ $M10 ? 'booked' : '' }}">M10
                        <input type="checkbox" class="seat-name " value="M10" name="seatName[]" id="M10">
                        </div>

                        @php
                            $M9 = collect($bookedSeats)
                                ->where('seat', 'M9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M9 {{ $M9 ? 'booked' : '' }}">M9
                        <input type="checkbox" class="seat-name " value="M9" name="seatName[]" id="M9">
                        </div>

                        @php
                            $M8 = collect($bookedSeats)
                                ->where('seat', 'M8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M8 {{ $M8 ? 'booked' : '' }}">M8
                        <input type="checkbox" class="seat-name " value="M8" name="seatName[]" id="M8">
                        </div>

                        @php
                            $M7 = collect($bookedSeats)
                                ->where('seat', 'M7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M7 {{ $M7 ? 'booked' : '' }}">M7
                        <input type="checkbox" class="seat-name " value="M7" name="seatName[]" id="M7">
                        </div>

                        @php
                            $M6 = collect($bookedSeats)
                                ->where('seat', 'M6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M6 {{ $M6 ? 'booked' : '' }}">M6
                        <input type="checkbox" class="seat-name " value="M6" name="seatName[]" id="M6">
                        </div>

                        @php
                            $M5 = collect($bookedSeats)
                                ->where('seat', 'M5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M5 {{ $M5 ? 'booked' : '' }}">M5
                        <input type="checkbox" class="seat-name " value="M5" name="seatName[]" id="M5">
                        </div>

                        @php
                            $M4 = collect($bookedSeats)
                                ->where('seat', 'M4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M4 {{ $M4 ? 'booked' : '' }}">M4
                        <input type="checkbox" class="seat-name " value="M4" name="seatName[]" id="M4">
                        </div>

                        @php
                            $M3 = collect($bookedSeats)
                                ->where('seat', 'M3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M3 {{ $M3 ? 'booked' : '' }}">M3
                        <input type="checkbox" class="seat-name " value="M3" name="seatName[]" id="M3">
                        </div>

                        @php
                            $M2 = collect($bookedSeats)
                                ->where('seat', 'M2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M2 {{ $M2 ? 'booked' : '' }}">M2
                        <input type="checkbox" class="seat-name " value="M2" name="seatName[]" id="M2">
                        </div>

                        @php
                            $M1 = collect($bookedSeats)
                                ->where('seat', 'M1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item M1 {{ $M1 ? 'booked' : '' }}">M1
                        <input type="checkbox" class="seat-name " value="M1" name="seatName[]" id="M1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $L22 = collect($bookedSeats)
                                ->where('seat', 'L22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L22 {{ $L22 ? 'booked' : '' }}">L22
                        <input type="checkbox" class="seat-name " value="L22" name="seatName[]" id="L22">
                        </div>

                        @php
                            $L21 = collect($bookedSeats)
                                ->where('seat', 'L21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L21 {{ $L21 ? 'booked' : '' }}">L21
                        <input type="checkbox" class="seat-name " value="L21" name="seatName[]" id="L21">
                        </div>

                        @php
                            $L20 = collect($bookedSeats)
                                ->where('seat', 'L20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L20 {{ $L20 ? 'booked' : '' }}">L20
                        <input type="checkbox" class="seat-name " value="L20" name="seatName[]" id="L20">
                        </div>

                        @php
                            $L19 = collect($bookedSeats)
                                ->where('seat', 'L19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L19 {{ $L19 ? 'booked' : '' }}">L19
                        <input type="checkbox" class="seat-name " value="L19" name="seatName[]" id="L19">
                        </div>

                        @php
                            $L18 = collect($bookedSeats)
                                ->where('seat', 'L18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L18 {{ $L18 ? 'booked' : '' }}">L18
                        <input type="checkbox" class="seat-name " value="L18" name="seatName[]" id="L18">
                        </div>

                        @php
                            $L17 = collect($bookedSeats)
                                ->where('seat', 'L17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L17 {{ $L17 ? 'booked' : '' }}">L17
                        <input type="checkbox" class="seat-name " value="L17" name="seatName[]" id="L17">
                        </div>

                        @php
                            $L16 = collect($bookedSeats)
                                ->where('seat', 'L16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L16 {{ $L16 ? 'booked' : '' }}">L16
                        <input type="checkbox" class="seat-name " value="L16" name="seatName[]" id="L16">
                        </div>

                        @php
                            $L15 = collect($bookedSeats)
                                ->where('seat', 'L15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L15 {{ $L15 ? 'booked' : '' }}">L15
                        <input type="checkbox" class="seat-name " value="L15" name="seatName[]" id="L15">
                        </div>

                        @php
                            $L14 = collect($bookedSeats)
                                ->where('seat', 'L14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L14 {{ $L14 ? 'booked' : '' }}">L14
                        <input type="checkbox" class="seat-name " value="L14" name="seatName[]" id="L14">
                        </div>

                        @php
                            $L13 = collect($bookedSeats)
                                ->where('seat', 'L13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L13 {{ $L13 ? 'booked' : '' }}">L13
                        <input type="checkbox" class="seat-name " value="L13" name="seatName[]" id="L13">
                        </div>

                        @php
                            $L12 = collect($bookedSeats)
                                ->where('seat', 'L12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L12 {{ $L12 ? 'booked' : '' }}">L12
                        <input type="checkbox" class="seat-name " value="L12" name="seatName[]" id="L12">
                        </div>

                        @php
                            $L11 = collect($bookedSeats)
                                ->where('seat', 'L11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L11 {{ $L11 ? 'booked' : '' }}">L11
                        <input type="checkbox" class="seat-name " value="L11" name="seatName[]" id="L11">
                        </div>

                        @php
                            $L10 = collect($bookedSeats)
                                ->where('seat', 'L10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L10 {{ $L10 ? 'booked' : '' }}">L10
                        <input type="checkbox" class="seat-name " value="L10" name="seatName[]" id="L10">
                        </div>

                        @php
                            $L9 = collect($bookedSeats)
                                ->where('seat', 'L9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L9 {{ $L9 ? 'booked' : '' }}">L9
                        <input type="checkbox" class="seat-name " value="L9" name="seatName[]" id="L9">
                        </div>

                        @php
                            $L8 = collect($bookedSeats)
                                ->where('seat', 'L8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L8 {{ $L8 ? 'booked' : '' }}">L8
                        <input type="checkbox" class="seat-name " value="L8" name="seatName[]" id="L8">
                        </div>

                        @php
                            $L7 = collect($bookedSeats)
                                ->where('seat', 'L7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L7 {{ $L7 ? 'booked' : '' }}">L7
                        <input type="checkbox" class="seat-name " value="L7" name="seatName[]" id="L7">
                        </div>

                        @php
                            $L6 = collect($bookedSeats)
                                ->where('seat', 'L6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L6 {{ $L6 ? 'booked' : '' }}">L6
                        <input type="checkbox" class="seat-name " value="L6" name="seatName[]" id="L6">
                        </div>

                        @php
                            $L5 = collect($bookedSeats)
                                ->where('seat', 'L5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L5 {{ $L5 ? 'booked' : '' }}">L5
                        <input type="checkbox" class="seat-name " value="L5" name="seatName[]" id="L5">
                        </div>

                        @php
                            $L4 = collect($bookedSeats)
                                ->where('seat', 'L4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L4 {{ $L4 ? 'booked' : '' }}">L4
                        <input type="checkbox" class="seat-name " value="L4" name="seatName[]" id="L4">
                        </div>

                        @php
                            $L3 = collect($bookedSeats)
                                ->where('seat', 'L3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L3 {{ $L3 ? 'booked' : '' }}">L3
                        <input type="checkbox" class="seat-name " value="L3" name="seatName[]" id="L3">
                        </div>

                        @php
                            $L2 = collect($bookedSeats)
                                ->where('seat', 'L2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L2 {{ $L2 ? 'booked' : '' }}">L2
                        <input type="checkbox" class="seat-name " value="L2" name="seatName[]" id="L2">
                        </div>

                        @php
                            $L1 = collect($bookedSeats)
                                ->where('seat', 'L1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item L1 {{ $L1 ? 'booked' : '' }}">L1
                        <input type="checkbox" class="seat-name " value="L1" name="seatName[]" id="L1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $K22 = collect($bookedSeats)
                                ->where('seat', 'K22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K22 {{ $K22 ? 'booked' : '' }}">K22
                        <input type="checkbox" class="seat-name " value="K22" name="seatName[]" id="K22">
                        </div>

                        @php
                            $K21 = collect($bookedSeats)
                                ->where('seat', 'K21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K21 {{ $K21 ? 'booked' : '' }}">K21
                        <input type="checkbox" class="seat-name " value="K21" name="seatName[]" id="K21">
                        </div>

                        @php
                            $K20 = collect($bookedSeats)
                                ->where('seat', 'K20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K20 {{ $K20 ? 'booked' : '' }}">K20
                        <input type="checkbox" class="seat-name " value="K20" name="seatName[]" id="K20">
                        </div>

                        @php
                            $K19 = collect($bookedSeats)
                                ->where('seat', 'K19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K19 {{ $K19 ? 'booked' : '' }}">K19
                        <input type="checkbox" class="seat-name " value="K19" name="seatName[]" id="K19">
                        </div>

                        @php
                            $K18 = collect($bookedSeats)
                                ->where('seat', 'K18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K18 {{ $K18 ? 'booked' : '' }}">K18
                        <input type="checkbox" class="seat-name " value="K18" name="seatName[]" id="K18">
                        </div>

                        @php
                            $K17 = collect($bookedSeats)
                                ->where('seat', 'K17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K17 {{ $K17 ? 'booked' : '' }}">K17
                        <input type="checkbox" class="seat-name " value="K17" name="seatName[]" id="K17">
                        </div>

                        @php
                            $K16 = collect($bookedSeats)
                                ->where('seat', 'K16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K16 {{ $K16 ? 'booked' : '' }}">K16
                        <input type="checkbox" class="seat-name " value="K16" name="seatName[]" id="K16">
                        </div>

                        @php
                            $K15 = collect($bookedSeats)
                                ->where('seat', 'K15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K15 {{ $K15 ? 'booked' : '' }}">K15
                        <input type="checkbox" class="seat-name " value="K15" name="seatName[]" id="K15">
                        </div>

                        @php
                            $K14 = collect($bookedSeats)
                                ->where('seat', 'K14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K14 {{ $K14 ? 'booked' : '' }}">K14
                        <input type="checkbox" class="seat-name " value="K14" name="seatName[]" id="K14">
                        </div>

                        @php
                            $K13 = collect($bookedSeats)
                                ->where('seat', 'K13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K13 {{ $K13 ? 'booked' : '' }}">K13
                        <input type="checkbox" class="seat-name " value="K13" name="seatName[]" id="K13">
                        </div>

                        @php
                            $K12 = collect($bookedSeats)
                                ->where('seat', 'K12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K12 {{ $K12 ? 'booked' : '' }}">K12
                        <input type="checkbox" class="seat-name " value="K12" name="seatName[]" id="K12">
                        </div>

                        @php
                            $K11 = collect($bookedSeats)
                                ->where('seat', 'K11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K11 {{ $K11 ? 'booked' : '' }}">K11
                        <input type="checkbox" class="seat-name " value="K11" name="seatName[]" id="K11">
                        </div>

                        @php
                            $K10 = collect($bookedSeats)
                                ->where('seat', 'K10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K10 {{ $K10 ? 'booked' : '' }}">K10
                        <input type="checkbox" class="seat-name " value="K10" name="seatName[]" id="K10">
                        </div>

                        @php
                            $K9 = collect($bookedSeats)
                                ->where('seat', 'K9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K9 {{ $K9 ? 'booked' : '' }}">K9
                        <input type="checkbox" class="seat-name " value="K9" name="seatName[]" id="K9">
                        </div>

                        @php
                            $K8 = collect($bookedSeats)
                                ->where('seat', 'K8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K8 {{ $K8 ? 'booked' : '' }}">K8
                        <input type="checkbox" class="seat-name " value="K8" name="seatName[]" id="K8">
                        </div>

                        @php
                            $K7 = collect($bookedSeats)
                                ->where('seat', 'K7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K7 {{ $K7 ? 'booked' : '' }}">K7
                        <input type="checkbox" class="seat-name " value="K7" name="seatName[]" id="K7">
                        </div>

                        @php
                            $K6 = collect($bookedSeats)
                                ->where('seat', 'K6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K6 {{ $K6 ? 'booked' : '' }}">K6
                        <input type="checkbox" class="seat-name " value="K6" name="seatName[]" id="K6">
                        </div>

                        @php
                            $K5 = collect($bookedSeats)
                                ->where('seat', 'K5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K5 {{ $K5 ? 'booked' : '' }}">K5
                        <input type="checkbox" class="seat-name " value="K5" name="seatName[]" id="K5">
                        </div>

                        @php
                            $K4 = collect($bookedSeats)
                                ->where('seat', 'K4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K4 {{ $K4 ? 'booked' : '' }}">K4
                        <input type="checkbox" class="seat-name " value="K4" name="seatName[]" id="K4">
                        </div>

                        @php
                            $K3 = collect($bookedSeats)
                                ->where('seat', 'K3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K3 {{ $K3 ? 'booked' : '' }}">K3
                        <input type="checkbox" class="seat-name " value="K3" name="seatName[]" id="K3">
                        </div>

                        @php
                            $K2 = collect($bookedSeats)
                                ->where('seat', 'K2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K2 {{ $K2 ? 'booked' : '' }}">K2
                        <input type="checkbox" class="seat-name " value="K2" name="seatName[]" id="K2">
                        </div>

                        @php
                            $K1 = collect($bookedSeats)
                                ->where('seat', 'K1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item K1 {{ $K1 ? 'booked' : '' }}">K1
                        <input type="checkbox" class="seat-name " value="K1" name="seatName[]" id="K1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $J22 = collect($bookedSeats)
                                ->where('seat', 'J22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J22 {{ $J22 ? 'booked' : '' }}">J22
                        <input type="checkbox" class="seat-name " value="J22" name="seatName[]" id="J22">
                        </div>

                        @php
                            $J21 = collect($bookedSeats)
                                ->where('seat', 'J21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J21 {{ $J21 ? 'booked' : '' }}">J21
                        <input type="checkbox" class="seat-name " value="J21" name="seatName[]" id="J21">
                        </div>

                        @php
                            $J20 = collect($bookedSeats)
                                ->where('seat', 'J20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J20 {{ $J20 ? 'booked' : '' }}">J20
                        <input type="checkbox" class="seat-name " value="J20" name="seatName[]" id="J20">
                        </div>

                        @php
                            $J19 = collect($bookedSeats)
                                ->where('seat', 'J19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J19 {{ $J19 ? 'booked' : '' }}">J19
                        <input type="checkbox" class="seat-name " value="J19" name="seatName[]" id="J19">
                        </div>

                        @php
                            $J18 = collect($bookedSeats)
                                ->where('seat', 'J18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J18 {{ $J18 ? 'booked' : '' }}">J18
                        <input type="checkbox" class="seat-name " value="J18" name="seatName[]" id="J18">
                        </div>

                        @php
                            $J17 = collect($bookedSeats)
                                ->where('seat', 'J17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J17 {{ $J17 ? 'booked' : '' }}">J17
                        <input type="checkbox" class="seat-name " value="J17" name="seatName[]" id="J17">
                        </div>

                        @php
                            $J16 = collect($bookedSeats)
                                ->where('seat', 'J16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J16 {{ $J16 ? 'booked' : '' }}">J16
                        <input type="checkbox" class="seat-name " value="J16" name="seatName[]" id="J16">
                        </div>

                        @php
                            $J15 = collect($bookedSeats)
                                ->where('seat', 'J15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J15 {{ $J15 ? 'booked' : '' }}">J15
                        <input type="checkbox" class="seat-name " value="J15" name="seatName[]" id="J15">
                        </div>

                        @php
                            $J14 = collect($bookedSeats)
                                ->where('seat', 'J14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J14 {{ $J14 ? 'booked' : '' }}">J14
                        <input type="checkbox" class="seat-name " value="J14" name="seatName[]" id="J14">
                        </div>

                        @php
                            $J13 = collect($bookedSeats)
                                ->where('seat', 'J13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J13 {{ $J13 ? 'booked' : '' }}">J13
                        <input type="checkbox" class="seat-name " value="J13" name="seatName[]" id="J13">
                        </div>

                        @php
                            $J12 = collect($bookedSeats)
                                ->where('seat', 'J12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J12 {{ $J12 ? 'booked' : '' }}">J12
                        <input type="checkbox" class="seat-name " value="J12" name="seatName[]" id="J12">
                        </div>

                        @php
                            $J11 = collect($bookedSeats)
                                ->where('seat', 'J11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J11 {{ $J11 ? 'booked' : '' }}">J11
                        <input type="checkbox" class="seat-name " value="J11" name="seatName[]" id="J11">
                        </div>

                        @php
                            $J10 = collect($bookedSeats)
                                ->where('seat', 'J10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J10 {{ $J10 ? 'booked' : '' }}">J10
                        <input type="checkbox" class="seat-name " value="J10" name="seatName[]" id="J10">
                        </div>

                        @php
                            $J9 = collect($bookedSeats)
                                ->where('seat', 'J9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J9 {{ $J9 ? 'booked' : '' }}">J9
                        <input type="checkbox" class="seat-name " value="J9" name="seatName[]" id="J9">
                        </div>

                        @php
                            $J8 = collect($bookedSeats)
                                ->where('seat', 'J8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J8 {{ $J8 ? 'booked' : '' }}">J8
                        <input type="checkbox" class="seat-name " value="J8" name="seatName[]" id="J8">
                        </div>

                        @php
                            $J7 = collect($bookedSeats)
                                ->where('seat', 'J7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J7 {{ $J7 ? 'booked' : '' }}">J7
                        <input type="checkbox" class="seat-name " value="J7" name="seatName[]" id="J7">
                        </div>

                        @php
                            $J6 = collect($bookedSeats)
                                ->where('seat', 'J6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J6 {{ $J6 ? 'booked' : '' }}">J6
                        <input type="checkbox" class="seat-name " value="J6" name="seatName[]" id="J6">
                        </div>

                        @php
                            $J5 = collect($bookedSeats)
                                ->where('seat', 'J5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J5 {{ $J5 ? 'booked' : '' }}">J5
                        <input type="checkbox" class="seat-name " value="J5" name="seatName[]" id="J5">
                        </div>

                        @php
                            $J4 = collect($bookedSeats)
                                ->where('seat', 'J4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J4 {{ $J4 ? 'booked' : '' }}">J4
                        <input type="checkbox" class="seat-name " value="J4" name="seatName[]" id="J4">
                        </div>

                        @php
                            $J2 = collect($bookedSeats)
                                ->where('seat', 'J2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J2 {{ $J2 ? 'booked' : '' }}">J2
                        <input type="checkbox" class="seat-name " value="J2" name="seatName[]" id="J2">
                        </div>

                        @php
                            $J2 = collect($bookedSeats)
                                ->where('seat', 'J2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J2 {{ $J2 ? 'booked' : '' }}">J2
                        <input type="checkbox" class="seat-name " value="J2" name="seatName[]" id="J2">
                        </div>

                        @php
                            $J1 = collect($bookedSeats)
                                ->where('seat', 'J1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item J1 {{ $J1 ? 'booked' : '' }}">J1
                        <input type="checkbox" class="seat-name " value="J1" name="seatName[]" id="J1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $I22 = collect($bookedSeats)
                                ->where('seat', 'I22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I22 {{ $I22 ? 'booked' : '' }}">I22
                        <input type="checkbox" class="seat-name " value="I22" name="seatName[]" id="I22">
                        </div>

                        @php
                            $I21 = collect($bookedSeats)
                                ->where('seat', 'I21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I21 {{ $I21 ? 'booked' : '' }}">I21
                        <input type="checkbox" class="seat-name " value="I21" name="seatName[]" id="I21">
                        </div>

                        @php
                            $I20 = collect($bookedSeats)
                                ->where('seat', 'I20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I20 {{ $I20 ? 'booked' : '' }}">I20
                        <input type="checkbox" class="seat-name " value="I20" name="seatName[]" id="I20">
                        </div>

                        @php
                            $I19 = collect($bookedSeats)
                                ->where('seat', 'I19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I19 {{ $I19 ? 'booked' : '' }}">I19
                        <input type="checkbox" class="seat-name " value="I19" name="seatName[]" id="I19">
                        </div>

                        @php
                            $I18 = collect($bookedSeats)
                                ->where('seat', 'I18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I18 {{ $I18 ? 'booked' : '' }}">I18
                        <input type="checkbox" class="seat-name " value="I18" name="seatName[]" id="I18">
                        </div>

                        @php
                            $I17 = collect($bookedSeats)
                                ->where('seat', 'I17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I17 {{ $I17 ? 'booked' : '' }}">I17
                        <input type="checkbox" class="seat-name " value="I17" name="seatName[]" id="I17">
                        </div>

                        @php
                            $I16 = collect($bookedSeats)
                                ->where('seat', 'I16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I16 {{ $I16 ? 'booked' : '' }}">I16
                        <input type="checkbox" class="seat-name " value="I16" name="seatName[]" id="I16">
                        </div>

                        @php
                            $I15 = collect($bookedSeats)
                                ->where('seat', 'I15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I15 {{ $I15 ? 'booked' : '' }}">I15
                        <input type="checkbox" class="seat-name " value="I15" name="seatName[]" id="I15">
                        </div>

                        @php
                            $I14 = collect($bookedSeats)
                                ->where('seat', 'I14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I14 {{ $I14 ? 'booked' : '' }}">I14
                        <input type="checkbox" class="seat-name " value="I14" name="seatName[]" id="I14">
                        </div>

                        @php
                            $I13 = collect($bookedSeats)
                                ->where('seat', 'I13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I13 {{ $I13 ? 'booked' : '' }}">I13
                        <input type="checkbox" class="seat-name " value="I13" name="seatName[]" id="I13">
                        </div>

                        @php
                            $I12 = collect($bookedSeats)
                                ->where('seat', 'I12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I12 {{ $I12 ? 'booked' : '' }}">I12
                        <input type="checkbox" class="seat-name " value="I12" name="seatName[]" id="I12">
                        </div>

                        @php
                            $I11 = collect($bookedSeats)
                                ->where('seat', 'I11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I11 {{ $I11 ? 'booked' : '' }}">I11
                        <input type="checkbox" class="seat-name " value="I11" name="seatName[]" id="I11">
                        </div>

                        @php
                            $I10 = collect($bookedSeats)
                                ->where('seat', 'I10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I10 {{ $I10 ? 'booked' : '' }}">I10
                        <input type="checkbox" class="seat-name " value="I10" name="seatName[]" id="I10">
                        </div>

                        @php
                            $I9 = collect($bookedSeats)
                                ->where('seat', 'I9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I9 {{ $I9 ? 'booked' : '' }}">I9
                        <input type="checkbox" class="seat-name " value="I9" name="seatName[]" id="I9">
                        </div>

                        @php
                            $I8 = collect($bookedSeats)
                                ->where('seat', 'I8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I8 {{ $I8 ? 'booked' : '' }}">I8
                        <input type="checkbox" class="seat-name " value="I8" name="seatName[]" id="I8">
                        </div>

                        @php
                            $I7 = collect($bookedSeats)
                                ->where('seat', 'I7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I7 {{ $I7 ? 'booked' : '' }}">I7
                        <input type="checkbox" class="seat-name " value="I7" name="seatName[]" id="I7">
                        </div>

                        @php
                            $I6 = collect($bookedSeats)
                                ->where('seat', 'I6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I6 {{ $I6 ? 'booked' : '' }}">I6
                        <input type="checkbox" class="seat-name " value="I6" name="seatName[]" id="I6">
                        </div>

                        @php
                            $I5 = collect($bookedSeats)
                                ->where('seat', 'I5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I5 {{ $I5 ? 'booked' : '' }}">I5
                        <input type="checkbox" class="seat-name " value="I5" name="seatName[]" id="I5">
                        </div>

                        @php
                            $I4 = collect($bookedSeats)
                                ->where('seat', 'I4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I4 {{ $I4 ? 'booked' : '' }}">I4
                        <input type="checkbox" class="seat-name " value="I4" name="seatName[]" id="I4">
                        </div>

                        @php
                            $I3 = collect($bookedSeats)
                                ->where('seat', 'I3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I3 {{ $I3 ? 'booked' : '' }}">I3
                        <input type="checkbox" class="seat-name " value="I3" name="seatName[]" id="I3">
                        </div>

                        @php
                            $I2 = collect($bookedSeats)
                                ->where('seat', 'I2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I2 {{ $I2 ? 'booked' : '' }}">I2
                        <input type="checkbox" class="seat-name " value="I2" name="seatName[]" id="I2">
                        </div>

                        @php
                            $I1 = collect($bookedSeats)
                                ->where('seat', 'I1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item I1 {{ $I1 ? 'booked' : '' }}">I1
                        <input type="checkbox" class="seat-name " value="I1" name="seatName[]" id="I1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $H22 = collect($bookedSeats)
                                ->where('seat', 'H22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H22 {{ $H22 ? 'booked' : '' }}">H22
                        <input type="checkbox" class="seat-name " value="H22" name="seatName[]" id="H22">
                        </div>

                        @php
                            $H21 = collect($bookedSeats)
                                ->where('seat', 'H21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H21 {{ $H21 ? 'booked' : '' }}">H21
                        <input type="checkbox" class="seat-name " value="H21" name="seatName[]" id="H21">
                        </div>

                        @php
                            $H20 = collect($bookedSeats)
                                ->where('seat', 'H20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H20 {{ $H20 ? 'booked' : '' }}">H20
                        <input type="checkbox" class="seat-name " value="H20" name="seatName[]" id="H20">
                        </div>

                        @php
                            $H19 = collect($bookedSeats)
                                ->where('seat', 'H19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H19 {{ $H19 ? 'booked' : '' }}">H19
                        <input type="checkbox" class="seat-name " value="H19" name="seatName[]" id="H19">
                        </div>

                        @php
                            $H18 = collect($bookedSeats)
                                ->where('seat', 'H18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H18 {{ $H18 ? 'booked' : '' }}">H18
                        <input type="checkbox" class="seat-name " value="H18" name="seatName[]" id="H18">
                        </div>

                        @php
                            $H17 = collect($bookedSeats)
                                ->where('seat', 'H17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H17 {{ $H17 ? 'booked' : '' }}">H17
                        <input type="checkbox" class="seat-name " value="H17" name="seatName[]" id="H17">
                        </div>

                        @php
                            $H16 = collect($bookedSeats)
                                ->where('seat', 'H16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H16 {{ $H16 ? 'booked' : '' }}">H16
                        <input type="checkbox" class="seat-name " value="H16" name="seatName[]" id="H16">
                        </div>

                        @php
                            $H15 = collect($bookedSeats)
                                ->where('seat', 'H15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H15 {{ $H15 ? 'booked' : '' }}">H15
                        <input type="checkbox" class="seat-name " value="H15" name="seatName[]" id="H15">
                        </div>

                        @php
                            $H14 = collect($bookedSeats)
                                ->where('seat', 'H14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H14 {{ $H14 ? 'booked' : '' }}">H14
                        <input type="checkbox" class="seat-name " value="H14" name="seatName[]" id="H14">
                        </div>

                        @php
                            $H13 = collect($bookedSeats)
                                ->where('seat', 'H13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H13 {{ $H13 ? 'booked' : '' }}">H13
                        <input type="checkbox" class="seat-name " value="H13" name="seatName[]" id="H13">
                        </div>

                        @php
                            $H12 = collect($bookedSeats)
                                ->where('seat', 'H12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H12 {{ $H12 ? 'booked' : '' }}">H12
                        <input type="checkbox" class="seat-name " value="H12" name="seatName[]" id="H12">
                        </div>

                        @php
                            $H11 = collect($bookedSeats)
                                ->where('seat', 'H11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H11 {{ $H11 ? 'booked' : '' }}">H11
                        <input type="checkbox" class="seat-name " value="H11" name="seatName[]" id="H11">
                        </div>

                        @php
                            $H10 = collect($bookedSeats)
                                ->where('seat', 'H10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H10 {{ $H10 ? 'booked' : '' }}">H10
                        <input type="checkbox" class="seat-name " value="H10" name="seatName[]" id="H10">
                        </div>

                        @php
                            $H9 = collect($bookedSeats)
                                ->where('seat', 'H9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H9 {{ $H9 ? 'booked' : '' }}">H9
                        <input type="checkbox" class="seat-name " value="H9" name="seatName[]" id="H9">
                        </div>

                        @php
                            $H8 = collect($bookedSeats)
                                ->where('seat', 'H8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H8 {{ $H8 ? 'booked' : '' }}">H8
                        <input type="checkbox" class="seat-name " value="H8" name="seatName[]" id="H8">
                        </div>

                        @php
                            $H7 = collect($bookedSeats)
                                ->where('seat', 'H7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H7 {{ $H7 ? 'booked' : '' }}">H7
                        <input type="checkbox" class="seat-name " value="H7" name="seatName[]" id="H7">
                        </div>

                        @php
                            $H6 = collect($bookedSeats)
                                ->where('seat', 'H6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H6 {{ $H6 ? 'booked' : '' }}">H6
                        <input type="checkbox" class="seat-name " value="H6" name="seatName[]" id="H6">
                        </div>

                        @php
                            $H5 = collect($bookedSeats)
                                ->where('seat', 'H5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H5 {{ $H5 ? 'booked' : '' }}">H5
                        <input type="checkbox" class="seat-name " value="H5" name="seatName[]" id="H5">
                        </div>

                        @php
                            $H4 = collect($bookedSeats)
                                ->where('seat', 'H4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H4 {{ $H4 ? 'booked' : '' }}">H4
                        <input type="checkbox" class="seat-name " value="H4" name="seatName[]" id="H4">
                        </div>

                        @php
                            $H3 = collect($bookedSeats)
                                ->where('seat', 'H3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H3 {{ $H3 ? 'booked' : '' }}">H3
                        <input type="checkbox" class="seat-name " value="H3" name="seatName[]" id="H3">
                        </div>

                        @php
                            $H2 = collect($bookedSeats)
                                ->where('seat', 'H2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H2 {{ $H2 ? 'booked' : '' }}">H2
                        <input type="checkbox" class="seat-name " value="H2" name="seatName[]" id="H2">
                        </div>

                        @php
                            $H1 = collect($bookedSeats)
                                ->where('seat', 'H1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item H1 {{ $H1 ? 'booked' : '' }}">H1
                        <input type="checkbox" class="seat-name " value="H1" name="seatName[]" id="H1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $G22 = collect($bookedSeats)
                                ->where('seat', 'G22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G22 {{ $G22 ? 'booked' : '' }}">G22
                        <input type="checkbox" class="seat-name " value="G22" name="seatName[]" id="G22">
                        </div>

                        @php
                            $G21 = collect($bookedSeats)
                                ->where('seat', 'G21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G21 {{ $G21 ? 'booked' : '' }}">G21
                        <input type="checkbox" class="seat-name " value="G21" name="seatName[]" id="G21">
                        </div>

                        @php
                            $G20 = collect($bookedSeats)
                                ->where('seat', 'G20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G20 {{ $G20 ? 'booked' : '' }}">G20
                        <input type="checkbox" class="seat-name " value="G20" name="seatName[]" id="G20">
                        </div>

                        @php
                            $G19 = collect($bookedSeats)
                                ->where('seat', 'G19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G19 {{ $G19 ? 'booked' : '' }}">G19
                        <input type="checkbox" class="seat-name " value="G19" name="seatName[]" id="G19">
                        </div>

                        @php
                            $G18 = collect($bookedSeats)
                                ->where('seat', 'G18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G18 {{ $G18 ? 'booked' : '' }}">G18
                        <input type="checkbox" class="seat-name " value="G18" name="seatName[]" id="G18">
                        </div>

                        @php
                            $G17 = collect($bookedSeats)
                                ->where('seat', 'G17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G17 {{ $G17 ? 'booked' : '' }}">G17
                        <input type="checkbox" class="seat-name " value="G17" name="seatName[]" id="G17">
                        </div>

                        @php
                            $G16 = collect($bookedSeats)
                                ->where('seat', 'G16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G16 {{ $G16 ? 'booked' : '' }}">G16
                        <input type="checkbox" class="seat-name " value="G16" name="seatName[]" id="G16">
                        </div>

                        @php
                            $G15 = collect($bookedSeats)
                                ->where('seat', 'G15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G15 {{ $G15 ? 'booked' : '' }}">G15
                        <input type="checkbox" class="seat-name " value="G15" name="seatName[]" id="G15">
                        </div>

                        @php
                            $G14 = collect($bookedSeats)
                                ->where('seat', 'G14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G14 {{ $G14 ? 'booked' : '' }}">G14
                        <input type="checkbox" class="seat-name " value="G14" name="seatName[]" id="G14">
                        </div>

                        @php
                            $G13 = collect($bookedSeats)
                                ->where('seat', 'G13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G13 {{ $G13 ? 'booked' : '' }}">G13
                        <input type="checkbox" class="seat-name " value="G13" name="seatName[]" id="G13">
                        </div>

                        @php
                            $G12 = collect($bookedSeats)
                                ->where('seat', 'G12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G12 {{ $G12 ? 'booked' : '' }}">G12
                        <input type="checkbox" class="seat-name " value="G12" name="seatName[]" id="G12">
                        </div>

                        @php
                            $G11 = collect($bookedSeats)
                                ->where('seat', 'G11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G11 {{ $G11 ? 'booked' : '' }}">G11
                        <input type="checkbox" class="seat-name " value="G11" name="seatName[]" id="G11">
                        </div>

                        @php
                            $G10 = collect($bookedSeats)
                                ->where('seat', 'G10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G10 {{ $G10 ? 'booked' : '' }}">G10
                        <input type="checkbox" class="seat-name " value="G10" name="seatName[]" id="G10">
                        </div>

                        @php
                            $G9 = collect($bookedSeats)
                                ->where('seat', 'G9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G9 {{ $G9 ? 'booked' : '' }}">G9
                        <input type="checkbox" class="seat-name " value="G9" name="seatName[]" id="G9">
                        </div>

                        @php
                            $G8 = collect($bookedSeats)
                                ->where('seat', 'G8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G8 {{ $G8 ? 'booked' : '' }}">G8
                        <input type="checkbox" class="seat-name " value="G8" name="seatName[]" id="G8">
                        </div>

                        @php
                            $G7 = collect($bookedSeats)
                                ->where('seat', 'G7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G7 {{ $G7 ? 'booked' : '' }}">G7
                        <input type="checkbox" class="seat-name " value="G7" name="seatName[]" id="G7">
                        </div>

                        @php
                            $G6 = collect($bookedSeats)
                                ->where('seat', 'G6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G6 {{ $G6 ? 'booked' : '' }}">G6
                        <input type="checkbox" class="seat-name " value="G6" name="seatName[]" id="G6">
                        </div>

                        @php
                            $G5 = collect($bookedSeats)
                                ->where('seat', 'G5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G5 {{ $G5 ? 'booked' : '' }}">G5
                        <input type="checkbox" class="seat-name " value="G5" name="seatName[]" id="G5">
                        </div>

                        @php
                            $G4 = collect($bookedSeats)
                                ->where('seat', 'G4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G4 {{ $G4 ? 'booked' : '' }}">G4
                        <input type="checkbox" class="seat-name " value="G4" name="seatName[]" id="G4">
                        </div>

                        @php
                            $G3 = collect($bookedSeats)
                                ->where('seat', 'G3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G3 {{ $G3 ? 'booked' : '' }}">G3
                        <input type="checkbox" class="seat-name " value="G3" name="seatName[]" id="G3">
                        </div>

                        @php
                            $G2 = collect($bookedSeats)
                                ->where('seat', 'G2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G2 {{ $G2 ? 'booked' : '' }}">G2
                        <input type="checkbox" class="seat-name " value="G2" name="seatName[]" id="G2">
                        </div>

                        @php
                            $G1 = collect($bookedSeats)
                                ->where('seat', 'G1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item G1 {{ $G1 ? 'booked' : '' }}">G1
                        <input type="checkbox" class="seat-name " value="G1" name="seatName[]" id="G1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $F22 = collect($bookedSeats)
                                ->where('seat', 'F22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F22 {{ $F22 ? 'booked' : '' }}">F22
                        <input type="checkbox" class="seat-name " value="F22" name="seatName[]" id="F22">
                        </div>

                        @php
                            $F21 = collect($bookedSeats)
                                ->where('seat', 'F21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F21 {{ $F21 ? 'booked' : '' }}">F21
                        <input type="checkbox" class="seat-name " value="F21" name="seatName[]" id="F21">
                        </div>

                        @php
                            $F20 = collect($bookedSeats)
                                ->where('seat', 'F20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F20 {{ $F20 ? 'booked' : '' }}">F20
                        <input type="checkbox" class="seat-name " value="F20" name="seatName[]" id="F20">
                        </div>

                        @php
                            $F19 = collect($bookedSeats)
                                ->where('seat', 'F19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F19 {{ $F19 ? 'booked' : '' }}">F19
                        <input type="checkbox" class="seat-name " value="F19" name="seatName[]" id="F19">
                        </div>

                        @php
                            $F18 = collect($bookedSeats)
                                ->where('seat', 'F18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F18 {{ $F18 ? 'booked' : '' }}">F18
                        <input type="checkbox" class="seat-name " value="F18" name="seatName[]" id="F18">
                        </div>

                        @php
                            $F17 = collect($bookedSeats)
                                ->where('seat', 'F17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F17 {{ $F17 ? 'booked' : '' }}">F17
                        <input type="checkbox" class="seat-name " value="F17" name="seatName[]" id="F17">
                        </div>

                        @php
                            $F16 = collect($bookedSeats)
                                ->where('seat', 'F16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F16 {{ $F16 ? 'booked' : '' }}">F16
                        <input type="checkbox" class="seat-name " value="F16" name="seatName[]" id="F16">
                        </div>

                        @php
                            $F15 = collect($bookedSeats)
                                ->where('seat', 'F15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F15 {{ $F15 ? 'booked' : '' }}">F15
                        <input type="checkbox" class="seat-name " value="F15" name="seatName[]" id="F15">
                        </div>

                        @php
                            $F14 = collect($bookedSeats)
                                ->where('seat', 'F14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F14 {{ $F14 ? 'booked' : '' }}">F14
                        <input type="checkbox" class="seat-name " value="F14" name="seatName[]" id="F14">
                        </div>

                        @php
                            $F13 = collect($bookedSeats)
                                ->where('seat', 'F13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F13 {{ $F13 ? 'booked' : '' }}">F13
                        <input type="checkbox" class="seat-name " value="F13" name="seatName[]" id="F13">
                        </div>

                        @php
                            $F12 = collect($bookedSeats)
                                ->where('seat', 'F12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F12 {{ $F12 ? 'booked' : '' }}">F12
                        <input type="checkbox" class="seat-name " value="F12" name="seatName[]" id="F12">
                        </div>

                        @php
                            $F11 = collect($bookedSeats)
                                ->where('seat', 'F11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F11 {{ $F11 ? 'booked' : '' }}">F11
                        <input type="checkbox" class="seat-name " value="F11" name="seatName[]" id="F11">
                        </div>

                        @php
                            $F10 = collect($bookedSeats)
                                ->where('seat', 'F10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F10 {{ $F10 ? 'booked' : '' }}">F10
                        <input type="checkbox" class="seat-name " value="F10" name="seatName[]" id="F10">
                        </div>

                        @php
                            $F9 = collect($bookedSeats)
                                ->where('seat', 'F9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F9 {{ $F9 ? 'booked' : '' }}">F9
                        <input type="checkbox" class="seat-name " value="F9" name="seatName[]" id="F9">
                        </div>

                        @php
                            $F8 = collect($bookedSeats)
                                ->where('seat', 'F8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F8 {{ $F8 ? 'booked' : '' }}">F8
                        <input type="checkbox" class="seat-name " value="F8" name="seatName[]" id="F8">
                        </div>

                        @php
                            $F7 = collect($bookedSeats)
                                ->where('seat', 'F7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F7 {{ $F7 ? 'booked' : '' }}">F7
                        <input type="checkbox" class="seat-name " value="F7" name="seatName[]" id="F7">
                        </div>

                        @php
                            $F6 = collect($bookedSeats)
                                ->where('seat', 'F6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F6 {{ $F6 ? 'booked' : '' }}">F6
                        <input type="checkbox" class="seat-name " value="F6" name="seatName[]" id="F6">
                        </div>

                        @php
                            $F5 = collect($bookedSeats)
                                ->where('seat', 'F5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F5 {{ $F5 ? 'booked' : '' }}">F5
                        <input type="checkbox" class="seat-name " value="F5" name="seatName[]" id="F5">
                        </div>

                        @php
                            $F4 = collect($bookedSeats)
                                ->where('seat', 'F4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F4 {{ $F4 ? 'booked' : '' }}">F4
                        <input type="checkbox" class="seat-name " value="F4" name="seatName[]" id="F4">
                        </div>

                        @php
                            $F3 = collect($bookedSeats)
                                ->where('seat', 'F3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F3 {{ $F3 ? 'booked' : '' }}">F3
                        <input type="checkbox" class="seat-name " value="F3" name="seatName[]" id="F3">
                        </div>

                        @php
                            $F2 = collect($bookedSeats)
                                ->where('seat', 'F2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F2 {{ $F2 ? 'booked' : '' }}">F2
                        <input type="checkbox" class="seat-name " value="F2" name="seatName[]" id="F2">
                        </div>

                        @php
                            $F1 = collect($bookedSeats)
                                ->where('seat', 'F1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item F1 {{ $F1 ? 'booked' : '' }}">F1
                        <input type="checkbox" class="seat-name " value="F1" name="seatName[]" id="F1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $E22 = collect($bookedSeats)
                                ->where('seat', 'E22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E22 {{ $E22 ? 'booked' : '' }}">E22
                        <input type="checkbox" class="seat-name " value="E22" name="seatName[]" id="E22">
                        </div>

                        @php
                            $E21 = collect($bookedSeats)
                                ->where('seat', 'E21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E21 {{ $E21 ? 'booked' : '' }}">E21
                        <input type="checkbox" class="seat-name " value="E21" name="seatName[]" id="E21">
                        </div>

                        @php
                            $E20 = collect($bookedSeats)
                                ->where('seat', 'E20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E20 {{ $E20 ? 'booked' : '' }}">E20
                        <input type="checkbox" class="seat-name " value="E20" name="seatName[]" id="E20">
                        </div>

                        @php
                            $E19 = collect($bookedSeats)
                                ->where('seat', 'E19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E19 {{ $E19 ? 'booked' : '' }}">E19
                        <input type="checkbox" class="seat-name " value="E19" name="seatName[]" id="E19">
                        </div>

                        @php
                            $E18 = collect($bookedSeats)
                                ->where('seat', 'E18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E18 {{ $E18 ? 'booked' : '' }}">E18
                        <input type="checkbox" class="seat-name " value="E18" name="seatName[]" id="E18">
                        </div>

                        @php
                            $E17 = collect($bookedSeats)
                                ->where('seat', 'E17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E17 {{ $E17 ? 'booked' : '' }}">E17
                        <input type="checkbox" class="seat-name " value="E17" name="seatName[]" id="E17">
                        </div>

                        @php
                            $E16 = collect($bookedSeats)
                                ->where('seat', 'E16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E16 {{ $E16 ? 'booked' : '' }}">E16
                        <input type="checkbox" class="seat-name " value="E16" name="seatName[]" id="E16">
                        </div>

                        @php
                            $E15 = collect($bookedSeats)
                                ->where('seat', 'E15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E15 {{ $E15 ? 'booked' : '' }}">E15
                        <input type="checkbox" class="seat-name " value="E15" name="seatName[]" id="E15">
                        </div>

                        @php
                            $E14 = collect($bookedSeats)
                                ->where('seat', 'E14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E14 {{ $E14 ? 'booked' : '' }}">E14
                        <input type="checkbox" class="seat-name " value="E14" name="seatName[]" id="E14">
                        </div>

                        @php
                            $E13 = collect($bookedSeats)
                                ->where('seat', 'E13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E13 {{ $E13 ? 'booked' : '' }}">E13
                        <input type="checkbox" class="seat-name " value="E13" name="seatName[]" id="E13">
                        </div>

                        @php
                            $E12 = collect($bookedSeats)
                                ->where('seat', 'E12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E12 {{ $E12 ? 'booked' : '' }}">E12
                        <input type="checkbox" class="seat-name " value="E12" name="seatName[]" id="E12">
                        </div>

                        @php
                            $E11 = collect($bookedSeats)
                                ->where('seat', 'E11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E11 {{ $E11 ? 'booked' : '' }}">E11
                        <input type="checkbox" class="seat-name " value="E11" name="seatName[]" id="E11">
                        </div>

                        @php
                            $E10 = collect($bookedSeats)
                                ->where('seat', 'E10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E10 {{ $E10 ? 'booked' : '' }}">E10
                        <input type="checkbox" class="seat-name " value="E10" name="seatName[]" id="E10">
                        </div>

                        @php
                            $E9 = collect($bookedSeats)
                                ->where('seat', 'E9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E9 {{ $E9 ? 'booked' : '' }}">E9
                        <input type="checkbox" class="seat-name " value="E9" name="seatName[]" id="E9">
                        </div>

                        @php
                            $E8 = collect($bookedSeats)
                                ->where('seat', 'E8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E8 {{ $E8 ? 'booked' : '' }}">E8
                        <input type="checkbox" class="seat-name " value="E8" name="seatName[]" id="E8">
                        </div>

                        @php
                            $E7 = collect($bookedSeats)
                                ->where('seat', 'E7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E7 {{ $E7 ? 'booked' : '' }}">E7
                        <input type="checkbox" class="seat-name " value="E7" name="seatName[]" id="E7">
                        </div>

                        @php
                            $E6 = collect($bookedSeats)
                                ->where('seat', 'E6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E6 {{ $E6 ? 'booked' : '' }}">E6
                        <input type="checkbox" class="seat-name " value="E6" name="seatName[]" id="E6">
                        </div>

                        @php
                            $E5 = collect($bookedSeats)
                                ->where('seat', 'E5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E5 {{ $E5 ? 'booked' : '' }}">E5
                        <input type="checkbox" class="seat-name " value="E5" name="seatName[]" id="E5">
                        </div>

                        @php
                            $E4 = collect($bookedSeats)
                                ->where('seat', 'E4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E4 {{ $E4 ? 'booked' : '' }}">E4
                        <input type="checkbox" class="seat-name " value="E4" name="seatName[]" id="E4">
                        </div>

                        @php
                            $E3 = collect($bookedSeats)
                                ->where('seat', 'E3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E3 {{ $E3 ? 'booked' : '' }}">E3
                        <input type="checkbox" class="seat-name " value="E3" name="seatName[]" id="E3">
                        </div>

                        @php
                            $E2 = collect($bookedSeats)
                                ->where('seat', 'E2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E2 {{ $E2 ? 'booked' : '' }}">E2
                        <input type="checkbox" class="seat-name " value="E2" name="seatName[]" id="E2">
                        </div>

                        @php
                            $E1 = collect($bookedSeats)
                                ->where('seat', 'E1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item E1 {{ $E1 ? 'booked' : '' }}">E1
                        <input type="checkbox" class="seat-name " value="E1" name="seatName[]" id="E1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $D22 = collect($bookedSeats)
                                ->where('seat', 'D22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D22 {{ $D22 ? 'booked' : '' }}">D22
                        <input type="checkbox" class="seat-name " value="D22" name="seatName[]" id="D22">
                        </div>

                        @php
                            $D21 = collect($bookedSeats)
                                ->where('seat', 'D21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D21 {{ $D21 ? 'booked' : '' }}">D21
                        <input type="checkbox" class="seat-name " value="D21" name="seatName[]" id="D21">
                        </div>

                        @php
                            $D20 = collect($bookedSeats)
                                ->where('seat', 'D20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D20 {{ $D20 ? 'booked' : '' }}">D20
                        <input type="checkbox" class="seat-name " value="D20" name="seatName[]" id="D20">
                        </div>

                        @php
                            $D19 = collect($bookedSeats)
                                ->where('seat', 'D19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D19 {{ $D19 ? 'booked' : '' }}">D19
                        <input type="checkbox" class="seat-name " value="D19" name="seatName[]" id="D19">
                        </div>

                        @php
                            $D18 = collect($bookedSeats)
                                ->where('seat', 'D18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D18 {{ $D18 ? 'booked' : '' }}">D18
                        <input type="checkbox" class="seat-name " value="D18" name="seatName[]" id="D18">
                        </div>

                        @php
                            $D17 = collect($bookedSeats)
                                ->where('seat', 'D17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D17 {{ $D17 ? 'booked' : '' }}">D17
                        <input type="checkbox" class="seat-name " value="D17" name="seatName[]" id="D17">
                        </div>

                        @php
                            $D16 = collect($bookedSeats)
                                ->where('seat', 'D16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D16 {{ $D16 ? 'booked' : '' }}">D16
                        <input type="checkbox" class="seat-name " value="D16" name="seatName[]" id="D16">
                        </div>

                        @php
                            $D15 = collect($bookedSeats)
                                ->where('seat', 'D15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D15 {{ $D15 ? 'booked' : '' }}">D15
                        <input type="checkbox" class="seat-name " value="D15" name="seatName[]" id="D15">
                        </div>

                        @php
                            $D14 = collect($bookedSeats)
                                ->where('seat', 'D14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D14 {{ $D14 ? 'booked' : '' }}">D14
                        <input type="checkbox" class="seat-name " value="D14" name="seatName[]" id="D14">
                        </div>

                        @php
                            $D13 = collect($bookedSeats)
                                ->where('seat', 'D13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D13 {{ $D13 ? 'booked' : '' }}">D13
                        <input type="checkbox" class="seat-name " value="D13" name="seatName[]" id="D13">
                        </div>

                        @php
                            $D12 = collect($bookedSeats)
                                ->where('seat', 'D12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D12 {{ $D12 ? 'booked' : '' }}">D12
                        <input type="checkbox" class="seat-name " value="D12" name="seatName[]" id="D12">
                        </div>

                        @php
                            $D11 = collect($bookedSeats)
                                ->where('seat', 'D11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D11 {{ $D11 ? 'booked' : '' }}">D11
                        <input type="checkbox" class="seat-name " value="D11" name="seatName[]" id="D11">
                        </div>

                        @php
                            $D10 = collect($bookedSeats)
                                ->where('seat', 'D10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D10 {{ $D10 ? 'booked' : '' }}">D10
                        <input type="checkbox" class="seat-name " value="D10" name="seatName[]" id="D10">
                        </div>

                        @php
                            $D9 = collect($bookedSeats)
                                ->where('seat', 'D9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D9 {{ $D9 ? 'booked' : '' }}">D9
                        <input type="checkbox" class="seat-name " value="D9" name="seatName[]" id="D9">
                        </div>

                        @php
                            $D8 = collect($bookedSeats)
                                ->where('seat', 'D8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D8 {{ $D8 ? 'booked' : '' }}">D8
                        <input type="checkbox" class="seat-name " value="D8" name="seatName[]" id="D8">
                        </div>

                        @php
                            $D7 = collect($bookedSeats)
                                ->where('seat', 'D7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D7 {{ $D7 ? 'booked' : '' }}">D7
                        <input type="checkbox" class="seat-name " value="D7" name="seatName[]" id="D7">
                        </div>

                        @php
                            $D6 = collect($bookedSeats)
                                ->where('seat', 'D6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D6 {{ $D6 ? 'booked' : '' }}">D6
                        <input type="checkbox" class="seat-name " value="D6" name="seatName[]" id="D6">
                        </div>

                        @php
                            $D5 = collect($bookedSeats)
                                ->where('seat', 'D5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D5 {{ $D5 ? 'booked' : '' }}">D5
                        <input type="checkbox" class="seat-name " value="D5" name="seatName[]" id="D5">
                        </div>

                        @php
                            $D4 = collect($bookedSeats)
                                ->where('seat', 'D4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D4 {{ $D4 ? 'booked' : '' }}">D4
                        <input type="checkbox" class="seat-name " value="D4" name="seatName[]" id="D4">
                        </div>

                        @php
                            $D3 = collect($bookedSeats)
                                ->where('seat', 'D3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D3 {{ $D3 ? 'booked' : '' }}">D3
                        <input type="checkbox" class="seat-name " value="D3" name="seatName[]" id="D3">
                        </div>

                        @php
                            $D2 = collect($bookedSeats)
                                ->where('seat', 'D2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D2 {{ $D2 ? 'booked' : '' }}">D2
                        <input type="checkbox" class="seat-name " value="D2" name="seatName[]" id="D2">
                        </div>

                        @php
                            $D1 = collect($bookedSeats)
                                ->where('seat', 'D1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item D1 {{ $D1 ? 'booked' : '' }}">D1
                        <input type="checkbox" class="seat-name " value="D1" name="seatName[]" id="D1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $C2 = collect($bookedSeats)
                                ->where('seat', 'C2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C2 {{ $C2 ? 'booked' : '' }}">C22
                        <input type="checkbox" class="seat-name " value="C22" name="seatName[]" id="C22">
                        </div>

                        @php
                            $C2 = collect($bookedSeats)
                                ->where('seat', 'C2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C2 {{ $C2 ? 'booked' : '' }}">C21
                        <input type="checkbox" class="seat-name " value="C21" name="seatName[]" id="C21">
                        </div>

                        @php
                            $C2 = collect($bookedSeats)
                                ->where('seat', 'C2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C2 {{ $C2 ? 'booked' : '' }}">C20
                        <input type="checkbox" class="seat-name " value="C20" name="seatName[]" id="C20">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C19
                        <input type="checkbox" class="seat-name " value="C19" name="seatName[]" id="C19">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C18
                        <input type="checkbox" class="seat-name " value="C18" name="seatName[]" id="C18">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C17
                        <input type="checkbox" class="seat-name " value="C17" name="seatName[]" id="C17">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C16
                        <input type="checkbox" class="seat-name " value="C16" name="seatName[]" id="C16">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C15
                        <input type="checkbox" class="seat-name " value="C15" name="seatName[]" id="C15">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C14
                        <input type="checkbox" class="seat-name " value="C14" name="seatName[]" id="C14">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C13
                        <input type="checkbox" class="seat-name " value="C13" name="seatName[]" id="C13">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C12
                        <input type="checkbox" class="seat-name " value="C12" name="seatName[]" id="C12">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C11
                        <input type="checkbox" class="seat-name " value="C11" name="seatName[]" id="C11">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C10
                        <input type="checkbox" class="seat-name " value="C10" name="seatName[]" id="C10">
                        </div>

                        @php
                            $C9 = collect($bookedSeats)
                                ->where('seat', 'C9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C9 {{ $C9 ? 'booked' : '' }}">C9
                        <input type="checkbox" class="seat-name " value="C9" name="seatName[]" id="C9">
                        </div>

                        @php
                            $C8 = collect($bookedSeats)
                                ->where('seat', 'C8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C8 {{ $C8 ? 'booked' : '' }}">C8
                        <input type="checkbox" class="seat-name " value="C8" name="seatName[]" id="C8">
                        </div>

                        @php
                            $C7 = collect($bookedSeats)
                                ->where('seat', 'C7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C7 {{ $C7 ? 'booked' : '' }}">C7
                        <input type="checkbox" class="seat-name " value="C7" name="seatName[]" id="C7">
                        </div>

                        @php
                            $C6 = collect($bookedSeats)
                                ->where('seat', 'C6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C6 {{ $C6 ? 'booked' : '' }}">C6
                        <input type="checkbox" class="seat-name " value="C6" name="seatName[]" id="C6">
                        </div>

                        @php
                            $C5 = collect($bookedSeats)
                                ->where('seat', 'C5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C5 {{ $C5 ? 'booked' : '' }}">C5
                        <input type="checkbox" class="seat-name " value="C5" name="seatName[]" id="C5">
                        </div>

                        @php
                            $C4 = collect($bookedSeats)
                                ->where('seat', 'C4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C4 {{ $C4 ? 'booked' : '' }}">C4
                        <input type="checkbox" class="seat-name " value="C4" name="seatName[]" id="C4">
                        </div>

                        @php
                            $C3 = collect($bookedSeats)
                                ->where('seat', 'C3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C3 {{ $C3 ? 'booked' : '' }}">C3
                        <input type="checkbox" class="seat-name " value="C3" name="seatName[]" id="C3">
                        </div>

                        @php
                            $C2 = collect($bookedSeats)
                                ->where('seat', 'C2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C2 {{ $C2 ? 'booked' : '' }}">C2
                        <input type="checkbox" class="seat-name " value="C2" name="seatName[]" id="C2">
                        </div>

                        @php
                            $C1 = collect($bookedSeats)
                                ->where('seat', 'C1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C1
                        <input type="checkbox" class="seat-name " value="C1" name="seatName[]" id="C1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $B22 = collect($bookedSeats)
                                ->where('seat', 'B22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B22 {{ $B22 ? 'booked' : '' }}">B22
                        <input type="checkbox" class="seat-name " value="B22" name="seatName[]" id="B22">
                        </div>

                        @php
                            $B21 = collect($bookedSeats)
                                ->where('seat', 'B21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B21 {{ $B21 ? 'booked' : '' }}">B21
                        <input type="checkbox" class="seat-name " value="B21" name="seatName[]" id="B21">
                        </div>

                        @php
                            $B20 = collect($bookedSeats)
                                ->where('seat', 'B20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B20 {{ $B20 ? 'booked' : '' }}">B20
                        <input type="checkbox" class="seat-name " value="B20" name="seatName[]" id="B20">
                        </div>

                        @php
                            $B19 = collect($bookedSeats)
                                ->where('seat', 'B19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B19 {{ $B19 ? 'booked' : '' }}">B19
                        <input type="checkbox" class="seat-name " value="B19" name="seatName[]" id="B19">
                        </div>

                        @php
                            $B18 = collect($bookedSeats)
                                ->where('seat', 'B18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B18 {{ $B18 ? 'booked' : '' }}">B18
                        <input type="checkbox" class="seat-name " value="B18" name="seatName[]" id="B18">
                        </div>

                        @php
                            $B17 = collect($bookedSeats)
                                ->where('seat', 'B17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B17 {{ $B17 ? 'booked' : '' }}">B17
                        <input type="checkbox" class="seat-name " value="B17" name="seatName[]" id="B17">
                        </div>

                        @php
                            $B16 = collect($bookedSeats)
                                ->where('seat', 'B16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B16 {{ $B16 ? 'booked' : '' }}">B16
                        <input type="checkbox" class="seat-name " value="B16" name="seatName[]" id="B16">
                        </div>

                        @php
                            $B15 = collect($bookedSeats)
                                ->where('seat', 'B15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B15 {{ $B15 ? 'booked' : '' }}">B15
                        <input type="checkbox" class="seat-name " value="B15" name="seatName[]" id="B15">
                        </div>

                        @php
                            $B14 = collect($bookedSeats)
                                ->where('seat', 'B14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B14 {{ $B14 ? 'booked' : '' }}">B14
                        <input type="checkbox" class="seat-name " value="B14" name="seatName[]" id="B14">
                        </div>

                        @php
                            $B13 = collect($bookedSeats)
                                ->where('seat', 'B13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B13 {{ $B13 ? 'booked' : '' }}">B13
                        <input type="checkbox" class="seat-name " value="B13" name="seatName[]" id="B13">
                        </div>

                        @php
                            $B12 = collect($bookedSeats)
                                ->where('seat', 'B12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B12 {{ $B12 ? 'booked' : '' }}">B12
                        <input type="checkbox" class="seat-name " value="B12" name="seatName[]" id="B12">
                        </div>

                        @php
                            $B11 = collect($bookedSeats)
                                ->where('seat', 'B11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B11 {{ $B11 ? 'booked' : '' }}">B11
                        <input type="checkbox" class="seat-name " value="B11" name="seatName[]" id="B11">
                        </div>

                        @php
                            $B10 = collect($bookedSeats)
                                ->where('seat', 'B10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B10 {{ $B10 ? 'booked' : '' }}">B10
                        <input type="checkbox" class="seat-name " value="B10" name="seatName[]" id="B10">
                        </div>

                        @php
                            $B9 = collect($bookedSeats)
                                ->where('seat', 'B9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B9 {{ $B9 ? 'booked' : '' }}">B9
                        <input type="checkbox" class="seat-name " value="B9" name="seatName[]" id="B9">
                        </div>

                        @php
                            $B8 = collect($bookedSeats)
                                ->where('seat', 'B8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B8 {{ $B8 ? 'booked' : '' }}">B8
                        <input type="checkbox" class="seat-name " value="B8" name="seatName[]" id="B8">
                        </div>

                        @php
                            $B7 = collect($bookedSeats)
                                ->where('seat', 'B7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B7 {{ $B7 ? 'booked' : '' }}">B7
                        <input type="checkbox" class="seat-name " value="B7" name="seatName[]" id="B7">
                        </div>

                        @php
                            $B6 = collect($bookedSeats)
                                ->where('seat', 'B6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B6 {{ $B6 ? 'booked' : '' }}">B6
                        <input type="checkbox" class="seat-name " value="B6" name="seatName[]" id="B6">
                        </div>

                        @php
                            $B5 = collect($bookedSeats)
                                ->where('seat', 'B5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B5 {{ $B5 ? 'booked' : '' }}">B5
                        <input type="checkbox" class="seat-name " value="B5" name="seatName[]" id="B5">
                        </div>

                        @php
                            $B4 = collect($bookedSeats)
                                ->where('seat', 'B4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B4 {{ $B4 ? 'booked' : '' }}">B4
                        <input type="checkbox" class="seat-name " value="B4" name="seatName[]" id="B4">
                        </div>

                        @php
                            $B3 = collect($bookedSeats)
                                ->where('seat', 'B3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B3 {{ $B3 ? 'booked' : '' }}">B3
                        <input type="checkbox" class="seat-name " value="B3" name="seatName[]" id="B3">
                        </div>

                        @php
                            $B2 = collect($bookedSeats)
                                ->where('seat', 'B2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B2 {{ $B2 ? 'booked' : '' }}">B2
                        <input type="checkbox" class="seat-name " value="B2" name="seatName[]" id="B2">
                        </div>

                        @php
                            $B1 = collect($bookedSeats)
                                ->where('seat', 'B1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item B1 {{ $B1 ? 'booked' : '' }}">B1
                        <input type="checkbox" class="seat-name " value="B1" name="seatName[]" id="B1">
                        </div>

                    </div>
                    <div class="grid mt-1">
                        @php
                            $A22 = collect($bookedSeats)
                                ->where('seat', 'A22')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A22 {{ $A22 ? 'booked' : '' }}">A22
                        <input type="checkbox" class="seat-name " value="A22" name="seatName[]" id="A22">
                        </div>

                        @php
                            $A21 = collect($bookedSeats)
                                ->where('seat', 'A21')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A21 {{ $A21 ? 'booked' : '' }}">A21
                        <input type="checkbox" class="seat-name " value="A21" name="seatName[]" id="A21">
                        </div>

                        @php
                            $A20 = collect($bookedSeats)
                                ->where('seat', 'A20')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A20 {{ $A20 ? 'booked' : '' }}">A20
                        <input type="checkbox" class="seat-name " value="A20" name="seatName[]" id="A20">
                        </div>

                        @php
                            $A19 = collect($bookedSeats)
                                ->where('seat', 'A19')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A19 {{ $A19 ? 'booked' : '' }}">A19
                        <input type="checkbox" class="seat-name " value="A19" name="seatName[]" id="A19">
                        </div>

                        @php
                            $A18 = collect($bookedSeats)
                                ->where('seat', 'A18')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A18 {{ $A18 ? 'booked' : '' }}">A18
                        <input type="checkbox" class="seat-name " value="A18" name="seatName[]" id="A18">
                        </div>

                        @php
                            $A17 = collect($bookedSeats)
                                ->where('seat', 'A17')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A17 {{ $A17 ? 'booked' : '' }}">A17
                        <input type="checkbox" class="seat-name " value="A17" name="seatName[]" id="A17">
                        </div>

                        @php
                            $A16 = collect($bookedSeats)
                                ->where('seat', 'A16')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A16 {{ $A16 ? 'booked' : '' }}">A16
                        <input type="checkbox" class="seat-name " value="A16" name="seatName[]" id="A16">
                        </div>

                        @php
                            $A15 = collect($bookedSeats)
                                ->where('seat', 'A15')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A15 {{ $A15 ? 'booked' : '' }}">A15
                        <input type="checkbox" class="seat-name " value="A15" name="seatName[]" id="A15">
                        </div>

                        @php
                            $A14 = collect($bookedSeats)
                                ->where('seat', 'A14')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A14 {{ $A14 ? 'booked' : '' }}">A14
                        <input type="checkbox" class="seat-name " value="A14" name="seatName[]" id="A14">
                        </div>

                        @php
                            $A13 = collect($bookedSeats)
                                ->where('seat', 'A13')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A13 {{ $A13 ? 'booked' : '' }}">A13
                        <input type="checkbox" class="seat-name " value="A13" name="seatName[]" id="A13">
                        </div>

                        @php
                            $A12 = collect($bookedSeats)
                                ->where('seat', 'A12')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A12 {{ $A12 ? 'booked' : '' }}">A12
                        <input type="checkbox" class="seat-name " value="A12" name="seatName[]" id="A12">
                        </div>

                        @php
                            $A11 = collect($bookedSeats)
                                ->where('seat', 'A11')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A11 {{ $A11 ? 'booked' : '' }}">A11
                        <input type="checkbox" class="seat-name " value="A11" name="seatName[]" id="A11">
                        </div>

                        @php
                            $A10 = collect($bookedSeats)
                                ->where('seat', 'A10')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A10 {{ $A10 ? 'booked' : '' }}">A10
                        <input type="checkbox" class="seat-name " value="A10" name="seatName[]" id="A10">
                        </div>

                        @php
                            $A9 = collect($bookedSeats)
                                ->where('seat', 'A9')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A9 {{ $A9 ? 'booked' : '' }}">A9
                        <input type="checkbox" class="seat-name " value="A9" name="seatName[]" id="A9">
                        </div>

                        @php
                            $A8 = collect($bookedSeats)
                                ->where('seat', 'A8')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A8 {{ $A8 ? 'booked' : '' }}">A8
                        <input type="checkbox" class="seat-name " value="A8" name="seatName[]" id="A8">
                        </div>

                        @php
                            $A7 = collect($bookedSeats)
                                ->where('seat', 'A7')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A7 {{ $A7 ? 'booked' : '' }}">A7
                        <input type="checkbox" class="seat-name " value="A7" name="seatName[]" id="A7">
                        </div>

                        @php
                            $A6 = collect($bookedSeats)
                                ->where('seat', 'A6')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A6 {{ $A6 ? 'booked' : '' }}">A6
                        <input type="checkbox" class="seat-name " value="A6" name="seatName[]" id="A6">
                        </div>

                        @php
                            $A5 = collect($bookedSeats)
                                ->where('seat', 'A5')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A5 {{ $A5 ? 'booked' : '' }}">A5
                        <input type="checkbox" class="seat-name " value="A5" name="seatName[]" id="A5">
                        </div>

                        @php
                            $A4 = collect($bookedSeats)
                                ->where('seat', 'A4')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A4 {{ $A4 ? 'booked' : '' }}">A4
                        <input type="checkbox" class="seat-name " value="A4" name="seatName[]" id="A4">
                        </div>

                        @php
                            $A3 = collect($bookedSeats)
                                ->where('seat', 'A3')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A3 {{ $A3 ? 'booked' : '' }}">A3
                        <input type="checkbox" class="seat-name " value="A3" name="seatName[]" id="A3">
                        </div>

                        @php
                            $A2 = collect($bookedSeats)
                                ->where('seat', 'A2')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A2 {{ $A2 ? 'booked' : '' }}">A2
                            <input type="checkbox" class="seat-name" value="A2" name="seatName[]" id="A2">
                        </div>
                        @php
                            $A1 = collect($bookedSeats)
                                ->where('seat', 'A1')
                                ->isNotEmpty();
                        @endphp
                        <div class="grid-item A1 {{ $A1 ? 'booked' : '' }}">
                            A1
                            <input type="checkbox" class="seat-name" value="A1" name="seatName[]" id="A1">
                        </div>
                    </div>





                    <input type="hidden" name="show_id" value="{{ $show_id }}" id="">

                    <div class="screen col-12 d-flex justify-content-center align-items-center">
                        <h4 class="font-weight-bold text-uppercase">Screen</h4>
                    </div>

                    <div class="col-12 d-flex justify-content-end mt-3">
                        <input type="submit" value="Next" class="btn btn-info">
                    </div>
                </div>
            </form>
            <!-- /.container-fluid -->
        </section>


    </div>
@endsection
