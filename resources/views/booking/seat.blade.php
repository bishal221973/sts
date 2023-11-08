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

        @if (session()->has('error'))
        @push('toast')
            <script>
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'error',
                    title: '{{ session()->get('error') }}'
                })
            </script>
        @endpush
    @endif

        <section class="content">
            <div class="col-12 d-flex justify-content-between">
                <div class="d-flex top-menu-selected py-2">
                    <div class="top-item d-flex align-items-center">
                        <div class="mr-2 available"></div>Available
                    </div>
                    <div class="top-item d-flex align-items-center">
                        <div class="mr-2 selected"></div>Selected
                    </div>
                    <div class="top-item d-flex align-items-center">
                        <div class="mr-2 booked"></div>Booked
                    </div>

                </div>

                <div class="d-flex">
                    <span class="d-flex"> Moive : {{ $movie->movie->movie_name }}</span>
                    <span class="px-3">|</span>
                    <span class="d-flex">Total Price : &nbsp; <span id="totalPrice"> 0</span></span>
                </div>
            </div>

            {{-- {{$seats}} --}}

            <form action="{{ route('clientDetail') }}" method="GET">
                @csrf
                <div class="container-fluid mt-3" style="height: 30vh">
                    <div  class="seat-scroll">
                        <div class="grid mt-1">
                            <div class="grid-item  opacity-0">GF21</div>
                            <div class="grid-item  opacity-0">GF22</div>
                            @php
                                $GF18 = collect($seats)
                                    ->where('seat', 'GF18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF18 {{ $GF18 ? 'booked' : '' }}">GF18
                                <input type="checkbox" class="seat-name " data-nums="seatGF18" value="GF18"
                                    name="seatName[]" id="GF18">
                            </div>
                            <input type="checkbox" class="seat-price seatGF18"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">
                            @php
                                $GF17 = collect($seats)
                                    ->where('seat', 'GF17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF17 {{ $GF17 ? 'booked' : '' }}">GF17
                                <input type="checkbox" class="seat-name " data-nums="seatGF17" value="GF17"
                                    name="seatName[]" id="GF17">

                            </div>
                            <input type="checkbox" class="seat-price seatGF17 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF16 = collect($seats)
                                    ->where('seat', 'GF16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF16 {{ $GF16 ? 'booked' : '' }}">GF16
                                <input type="checkbox" class="seat-name " data-nums="seatGF16" value="GF16"
                                    name="seatName[]" id="GF16">
                            </div>
                            <input type="checkbox" class="seat-price seatGF16"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF15 = collect($seats)
                                    ->where('seat', 'GF15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF15 {{ $GF15 ? 'booked' : '' }}">GF15
                                <input type="checkbox" class="seat-name " data-nums="seatGF15" value="GF15"
                                    name="seatName[]" id="GF15">
                            </div>
                            <input type="checkbox" class="seat-price seatGF15"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF14 = collect($seats)
                                    ->where('seat', 'GF14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF14 {{ $GF14 ? 'booked' : '' }}">GF14
                                <input type="checkbox" class="seat-name " data-nums="seatGF14" value="GF14"
                                    name="seatName[]" id="GF14">
                            </div>
                            <input type="checkbox" class="seat-price seatGF14"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF13 = collect($seats)
                                    ->where('seat', 'GF13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF13 {{ $GF13 ? 'booked' : '' }}">GF13
                                <input type="checkbox" class="seat-name " data-nums="seatGF13" value="GF13"
                                    name="seatName[]" id="GF13">
                            </div>
                            <input type="checkbox" class="seat-price seatGF13"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF12 = collect($seats)
                                    ->where('seat', 'GF12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF12 {{ $GF12 ? 'booked' : '' }}">GF12
                                <input type="checkbox" class="seat-name " data-nums="seatGF12" value="GF12"
                                    name="seatName[]" id="GF12">
                            </div>
                            <input type="checkbox" class="seat-price seatGF12"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF11 = collect($seats)
                                    ->where('seat', 'GF11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF11 {{ $GF11 ? 'booked' : '' }}">GF11
                                <input type="checkbox" class="seat-name " data-nums="seatGF11" value="GF11"
                                    name="seatName[]" id="GF11">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF11"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF10 = collect($seats)
                                    ->where('seat', 'GF10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF10 {{ $GF10 ? 'booked' : '' }}">GF10
                                <input type="checkbox" class="seat-name " data-nums="seatGF10" value="GF11"
                                    name="seatName[]" id="GF10">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF10"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF9 = collect($seats)
                                    ->where('seat', 'GF9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF9 {{ $GF9 ? 'booked' : '' }}">GF9
                                <input type="checkbox" class="seat-name " data-nums="seatGF9" value="GF9"
                                    name="seatName[]" id="GF9">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF9"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF8 = collect($seats)
                                    ->where('seat', 'GF8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF8 {{ $GF8 ? 'booked' : '' }}">GF8
                                <input type="checkbox" class="seat-name " data-nums="seatGF8" value="GF8"
                                    name="seatName[]" id="GF8">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF8"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF7 = collect($seats)
                                    ->where('seat', 'GF7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF7 {{ $GF7 ? 'booked' : '' }}">GF7
                                <input type="checkbox" class="seat-name " data-nums="seatGF7" value="GF7"
                                    name="seatName[]" id="GF7">
                            </div>
                            <input type="checkbox" class="seat-price seatGF7 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF6 = collect($seats)
                                    ->where('seat', 'GF6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF6 {{ $GF6 ? 'booked' : '' }}">GF6
                                <input type="checkbox" class="seat-name " data-nums="seatGF6" value="GF6"
                                    name="seatName[]" id="GF6">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF6"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF5 = collect($seats)
                                    ->where('seat', 'GF5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF5 {{ $GF5 ? 'booked' : '' }}">GF5
                                <input type="checkbox" class="seat-name " data-nums="seatGF5" value="GF5"
                                    name="seatName[]" id="GF5">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF5"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF4 = collect($seats)
                                    ->where('seat', 'GF4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF4 {{ $GF4 ? 'booked' : '' }}">GF4
                                <input type="checkbox" class="seat-name " data-nums="seatGF4" value="GF4"
                                    name="seatName[]" id="GF4">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF4"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF3 = collect($seats)
                                    ->where('seat', 'GF3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF3 {{ $GF3 ? 'booked' : '' }}">GF3
                                <input type="checkbox" class="seat-name seatGF3" data-nums="seatGF3" value="GF3"
                                    name="seatName[]" id="GF3">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF3"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF2 = collect($seats)
                                    ->where('seat', 'GF2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF2 {{ $GF2 ? 'booked' : '' }}">GF2
                                <input type="checkbox" class="seat-name " data-nums="seatGF2" value="GF2"
                                    name="seatName[]" id="GF2">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF2"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GF1 = collect($seats)
                                    ->where('seat', 'GF1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GF1 {{ $GF1 ? 'booked' : '' }}">GF1
                                <input type="checkbox" class="seat-name " data-nums="seatGF1" value="GF1"
                                    name="seatName[]" id="GF1">
                            </div>
                            <input type="checkbox" class="seat-price  seatGF1"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            <div class="grid-item  opacity-0">GF19</div>
                            <div class="grid-item  opacity-0">GF20</div>

                        </div>
                        <div class="grid mt-1">
                            <div class="grid-item  opacity-0">GE21</div>
                            <div class="grid-item  opacity-0">GE22</div>
                            @php
                                $GE18 = collect($seats)
                                    ->where('seat', 'GE18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE18 {{ $GE18 ? 'booked' : '' }}">GE18
                                <input type="checkbox" class="seat-name " data-nums="seatGE18" value="GE18"
                                    name="seatName[]" id="GE18">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE18"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE17 = collect($seats)
                                    ->where('seat', 'GE17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE17 {{ $GE17 ? 'booked' : '' }}">GE17
                                <input type="checkbox" class="seat-name " data-nums="seatGE17" value="GE17"
                                    name="seatName[]" id="GE17">
                            </div>
                            <input type="checkbox" class="seat-price seatGE17 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE16 = collect($seats)
                                    ->where('seat', 'GE16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE16 {{ $GE16 ? 'booked' : '' }}">GE16
                                <input type="checkbox" class="seat-name " data-nums="seatGE16" value="GE16"
                                    name="seatName[]" id="GE16">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE16"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE15 = collect($seats)
                                    ->where('seat', 'GE15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE15 {{ $GE15 ? 'booked' : '' }}">GE15
                                <input type="checkbox" class="seat-name " data-nums="seatGE15" value="GE15"
                                    name="seatName[]" id="GE15">
                            </div>
                            <input type="checkbox" class="seat-price seatGE15 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE14 = collect($seats)
                                    ->where('seat', 'GE14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE14 {{ $GE14 ? 'booked' : '' }}">GE14
                                <input type="checkbox" class="seat-name " data-nums="seatGE14" value="GE14"
                                    name="seatName[]" id="GE14">
                            </div>
                            <input type="checkbox" class="seat-price seatGE14 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE13 = collect($seats)
                                    ->where('seat', 'GE13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE13 {{ $GE13 ? 'booked' : '' }}">GE13
                                <input type="checkbox" class="seat-name " data-nums="seatGE13" value="GE13"
                                    name="seatName[]" id="GE13">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE13"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE12 = collect($seats)
                                    ->where('seat', 'GE12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE12 {{ $GE12 ? 'booked' : '' }}">GE12
                                <input type="checkbox" class="seat-name " data-nums="seatGE12" value="GE12"
                                    name="seatName[]" id="GE12">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE12"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE11 = collect($seats)
                                    ->where('seat', 'GE11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE11 {{ $GE11 ? 'booked' : '' }}">GE11
                                <input type="checkbox" class="seat-name " data-nums="seatGE11" value="GE11"
                                    name="seatName[]" id="GE11">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE11"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE10 = collect($seats)
                                    ->where('seat', 'GE10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE10 {{ $GE10 ? 'booked' : '' }}">GE10
                                <input type="checkbox" class="seat-name " data-nums="seatGE10" value="GE10"
                                    name="seatName[]" id="GE10">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE10"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE9 = collect($seats)
                                    ->where('seat', 'GE9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE9 {{ $GE9 ? 'booked' : '' }}">GE9
                                <input type="checkbox" class="seat-name " data-nums="seatGE9" value="GE9"
                                    name="seatName[]" id="GE9">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE9"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE8 = collect($seats)
                                    ->where('seat', 'GE8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE8 {{ $GE8 ? 'booked' : '' }}">GE8
                                <input type="checkbox" class="seat-name " data-nums="seatGE8" value="GE8"
                                    name="seatName[]" id="GE8">
                            </div>
                            <input type="checkbox" class="seat-price seatGE8 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE7 = collect($seats)
                                    ->where('seat', 'GE7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE7 {{ $GE7 ? 'booked' : '' }}">GE7
                                <input type="checkbox" class="seat-name " data-nums="seatGE7" value="GE7"
                                    name="seatName[]" id="GE7">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE7"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE6 = collect($seats)
                                    ->where('seat', 'GE6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE6 {{ $GE6 ? 'booked' : '' }}">GE6
                                <input type="checkbox" class="seat-name " data-nums="seatGE6" value="GE6"
                                    name="seatName[]" id="GE6">
                            </div>
                            <input type="checkbox" class="seat-price seatGE6 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE5 = collect($seats)
                                    ->where('seat', 'GE5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE5 {{ $GE5 ? 'booked' : '' }}">GE5
                                <input type="checkbox" class="seat-name " data-nums="seatGE5" value="GE5"
                                    name="seatName[]" id="GE5">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE5"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE4 = collect($seats)
                                    ->where('seat', 'GE4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE4 {{ $GE4 ? 'booked' : '' }}">GE4
                                <input type="checkbox" class="seat-name " data-nums="seatGE4" value="GE4"
                                    name="seatName[]" id="GE4">
                            </div>
                            <input type="checkbox" class="seat-price seatGE4 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE3 = collect($seats)
                                    ->where('seat', 'GE3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE3 {{ $GE3 ? 'booked' : '' }}">GE3
                                <input type="checkbox" class="seat-name " data-nums="seatGE3" value="GE3"
                                    name="seatName[]" id="GE3">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE3"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE2 = collect($seats)
                                    ->where('seat', 'GE2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE2 {{ $GE2 ? 'booked' : '' }}">GE2
                                <input type="checkbox" class="seat-name " data-nums="seatGE2" value="GE2"
                                    name="seatName[]" id="GE2">
                            </div>
                            <input type="checkbox" class="seat-price seatGE2 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GE1 = collect($seats)
                                    ->where('seat', 'GE1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GE1 {{ $GE1 ? 'booked' : '' }}">GE1
                                <input type="checkbox" class="seat-name " data-nums="seatGE1" value="GE1"
                                    name="seatName[]" id="GE1">
                            </div>
                            <input type="checkbox" class="seat-price  seatGE1"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            <div class="grid-item  opacity-0">GE19</div>
                            <div class="grid-item  opacity-0">GE20</div>

                        </div>
                        <div class="grid mt-1">
                            <div class="grid-item  opacity-0">GD21</div>
                            <div class="grid-item  opacity-0">GD22</div>
                            @php
                                $GD1 = collect($seats)
                                    ->where('seat', 'GD1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD18 {{ $GD1 ? 'booked' : '' }}">GD18
                                <input type="checkbox" class="seat-name " data-nums="seatGD18" value="GD18"
                                    name="seatName[]" id="GD18">
                            </div>
                            <input type="checkbox" class="seat-price seatGD18"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD17 = collect($seats)
                                    ->where('seat', 'GD17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD17 {{ $GD17 ? 'booked' : '' }}">GD17
                                <input type="checkbox" class="seat-name " data-nums="seatGD17" value="GD17"
                                    name="seatName[]" id="GD17">
                            </div>
                            <input type="checkbox" class="seat-price seatGD17"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD16 = collect($seats)
                                    ->where('seat', 'GD16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD16 {{ $GD16 ? 'booked' : '' }}">GD16
                                <input type="checkbox" class="seat-name " data-nums="seatGD16" value="GD16"
                                    name="seatName[]" id="GD16">
                            </div>
                            <input type="checkbox" class="seat-price seatGD16"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD15 = collect($seats)
                                    ->where('seat', 'GD15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD15 {{ $GD15 ? 'booked' : '' }}">GD15
                                <input type="checkbox" class="seat-name " data-nums="seatGD15" value="GD15"
                                    name="seatName[]" id="GD15">
                            </div>
                            <input type="checkbox" class="seat-price seatGD15"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD14 = collect($seats)
                                    ->where('seat', 'GD14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD14 {{ $GD14 ? 'booked' : '' }}">GD14
                                <input type="checkbox" class="seat-name " data-nums="seatGD14" value="GD14"
                                    name="seatName[]" id="GD14">
                            </div>
                            <input type="checkbox" class="seat-price seatGD14"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD13 = collect($seats)
                                    ->where('seat', 'GD13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD13 {{ $GD13 ? 'booked' : '' }}">GD13
                                <input type="checkbox" class="seat-name " data-nums="seatGD13" value="GD13"
                                    name="seatName[]" id="GD13">
                            </div>
                            <input type="checkbox" class="seat-price seatGD13"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD12 = collect($seats)
                                    ->where('seat', 'GD12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD12 {{ $GD12 ? 'booked' : '' }}">GD12
                                <input type="checkbox" class="seat-name " data-nums="seatGD12" value="GD12"
                                    name="seatName[]" id="GD12">
                            </div>
                            <input type="checkbox" class="seat-price seatGD12"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD11 = collect($seats)
                                    ->where('seat', 'GD11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD11 {{ $GD11 ? 'booked' : '' }}">GD11
                                <input type="checkbox" class="seat-name " data-nums="seatGD11" value="GD11"
                                    name="seatName[]" id="GD11">
                            </div>
                            <input type="checkbox" class="seat-price seatGD11"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD10 = collect($seats)
                                    ->where('seat', 'GD10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD10 {{ $GD10 ? 'booked' : '' }}">GD10
                                <input type="checkbox" class="seat-name " data-nums="seatGD10" value="GD10"
                                    name="seatName[]" id="GD10">
                            </div>
                            <input type="checkbox" class="seat-price seatGD10"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD9 = collect($seats)
                                    ->where('seat', 'GD9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD9 {{ $GD9 ? 'booked' : '' }}">GD9
                                <input type="checkbox" class="seat-name " data-nums="seatGD9" value="GD9"
                                    name="seatName[]" id="GD9">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD9"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD8 = collect($seats)
                                    ->where('seat', 'GD8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD8 {{ $GD8 ? 'booked' : '' }}">GD8
                                <input type="checkbox" class="seat-name " data-nums="seatGD8" value="GD8"
                                    name="seatName[]" id="GD8">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD8"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD7 = collect($seats)
                                    ->where('seat', 'GD7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD7 {{ $GD7 ? 'booked' : '' }}">GD7
                                <input type="checkbox" class="seat-name " data-nums="seatGD7" value="GD7"
                                    name="seatName[]" id="GD7">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD7"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD6 = collect($seats)
                                    ->where('seat', 'GD6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD6 {{ $GD6 ? 'booked' : '' }}">GD6
                                <input type="checkbox" class="seat-name " data-nums="seatGD6" value="GD6"
                                    name="seatName[]" id="GD6">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD6"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD5 = collect($seats)
                                    ->where('seat', 'GD5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD5 {{ $GD5 ? 'booked' : '' }}">GD5
                                <input type="checkbox" class="seat-name " data-nums="seatGD5" value="GD5"
                                    name="seatName[]" id="GD5">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD5"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD4 = collect($seats)
                                    ->where('seat', 'GD4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD4 {{ $GD4 ? 'booked' : '' }}">GD4
                                <input type="checkbox" class="seat-name " data-nums="seatGD4" value="GD4"
                                    name="seatName[]" id="GD4">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD4"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD3 = collect($seats)
                                    ->where('seat', 'GD3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD3 {{ $GD3 ? 'booked' : '' }}">GD3
                                <input type="checkbox" class="seat-name " data-nums="seatGD3" value="GD3"
                                    name="seatName[]" id="GD3">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD3"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD2 = collect($seats)
                                    ->where('seat', 'GD2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD2 {{ $GD2 ? 'booked' : '' }}">GD2
                                <input type="checkbox" class="seat-name " data-nums="seatGD2" value="GD2"
                                    name="seatName[]" id="GD2">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD2"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GD1 = collect($seats)
                                    ->where('seat', 'GD1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GD1 {{ $GD1 ? 'booked' : '' }}">GD1
                                <input type="checkbox" class="seat-name " data-nums="seatGD1" value="GD1"
                                    name="seatName[]" id="GD1">
                            </div>
                            <input type="checkbox" class="seat-price  seatGD1"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            <div class="grid-item  opacity-0">GD19</div>
                            <div class="grid-item  opacity-0">GD20</div>

                        </div>
                        <div class="grid mt-1">
                            <div class="grid-item  opacity-0">GC21</div>
                            <div class="grid-item  opacity-0">GC22</div>
                            @php
                                $GC18 = collect($seats)
                                    ->where('seat', 'GC18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC18 {{ $GC18 ? 'booked' : '' }}">GC18
                                <input type="checkbox" class="seat-name " data-nums="seatGC18" value="GC18"
                                    name="seatName[]" id="GC18">
                            </div>
                            <input type="checkbox" class="seat-price seatGC18"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC17 = collect($seats)
                                    ->where('seat', 'GC17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC17 {{ $GC17 ? 'booked' : '' }}">GC17
                                <input type="checkbox" class="seat-name " data-nums="seatGC17" value="GC17"
                                    name="seatName[]" id="GC17">
                            </div>
                            <input type="checkbox" class="seat-price seatGC17"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC16 = collect($seats)
                                    ->where('seat', 'GC16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC16 {{ $GC16 ? 'booked' : '' }}">GC16
                                <input type="checkbox" class="seat-name " data-nums="seatGC16" value="GC16"
                                    name="seatName[]" id="GC16">
                            </div>
                            <input type="checkbox" class="seat-price seatGC16"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC15 = collect($seats)
                                    ->where('seat', 'GC15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC15 {{ $GC15 ? 'booked' : '' }}">GC15
                                <input type="checkbox" class="seat-name " data-nums="seatGC15" value="GC15"
                                    name="seatName[]" id="GC15">
                            </div>
                            <input type="checkbox" class="seat-price seatGC15"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC14 = collect($seats)
                                    ->where('seat', 'GC14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC14 {{ $GC14 ? 'booked' : '' }}">GC14
                                <input type="checkbox" class="seat-name " data-nums="seatGC14" value="GC14"
                                    name="seatName[]" id="GC14">
                            </div>
                            <input type="checkbox" class="seat-price seatGC14"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC13 = collect($seats)
                                    ->where('seat', 'GC13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC13 {{ $GC13 ? 'booked' : '' }}">GC13
                                <input type="checkbox" class="seat-name " data-nums="seatGC13" value="GC13"
                                    name="seatName[]" id="GC13">
                            </div>
                            <input type="checkbox" class="seat-price seatGC13"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC12 = collect($seats)
                                    ->where('seat', 'GC12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC12 {{ $GC12 ? 'booked' : '' }}">GC12
                                <input type="checkbox" class="seat-name " data-nums="seatGC12" value="GC12"
                                    name="seatName[]" id="GC12">
                            </div>
                            <input type="checkbox" class="seat-price seatGC12"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC11 = collect($seats)
                                    ->where('seat', 'GC11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC11 {{ $GC11 ? 'booked' : '' }}">GC11
                                <input type="checkbox" class="seat-name " data-nums="seatGC11" value="GC11"
                                    name="seatName[]" id="GC11">
                            </div>
                            <input type="checkbox" class="seat-price seatGC11"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC10 = collect($seats)
                                    ->where('seat', 'GC10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC10 {{ $GC10 ? 'booked' : '' }}">GC10
                                <input type="checkbox" class="seat-name " data-nums="seatGC10" value="GC10"
                                    name="seatName[]" id="GC10">
                            </div>
                            <input type="checkbox" class="seat-price seatGC10"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC9 = collect($seats)
                                    ->where('seat', 'GC9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC9 {{ $GC9 ? 'booked' : '' }}">GC9
                                <input type="checkbox" class="seat-name " data-nums="seatGC9" value="GC9"
                                    name="seatName[]" id="GC9">
                            </div>
                            <input type="checkbox" class="seat-price seatGC9 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC8 = collect($seats)
                                    ->where('seat', 'GC8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC8 {{ $GC8 ? 'booked' : '' }}">GC8
                                <input type="checkbox" class="seat-name " data-nums="seatGC8" value="GC8"
                                    name="seatName[]" id="GC8">
                            </div>
                            <input type="checkbox" class="seat-price seatGC8 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC7 = collect($seats)
                                    ->where('seat', 'GC7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC7 {{ $GC7 ? 'booked' : '' }}">GC7
                                <input type="checkbox" class="seat-name " data-nums="seatGC7" value="GC7"
                                    name="seatName[]" id="GC7">
                            </div>
                            <input type="checkbox" class="seat-price seatGC7 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC6 = collect($seats)
                                    ->where('seat', 'GC6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC6 {{ $GC6 ? 'booked' : '' }}">GC6
                                <input type="checkbox" class="seat-name " data-nums="seatGC6" value="GC6"
                                    name="seatName[]" id="GC6">
                            </div>
                            <input type="checkbox" class="seat-price seatGC6 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC5 = collect($seats)
                                    ->where('seat', 'GC5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC5 {{ $GC5 ? 'booked' : '' }}">GC5
                                <input type="checkbox" class="seat-name " data-nums="seatGC5" value="GC5"
                                    name="seatName[]" id="GC5">
                            </div>
                            <input type="checkbox" class="seat-price seatGC5 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC4 = collect($seats)
                                    ->where('seat', 'GC4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC4 {{ $GC4 ? 'booked' : '' }}">GC4
                                <input type="checkbox" class="seat-name " data-nums="seatGC4" value="GC4"
                                    name="seatName[]" id="GC4">
                            </div>
                            <input type="checkbox" class="seat-price seatGC4 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC3 = collect($seats)
                                    ->where('seat', 'GC3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC3 {{ $GC3 ? 'booked' : '' }}">GC3
                                <input type="checkbox" class="seat-name " data-nums="seatGC3" value="GC3"
                                    name="seatName[]" id="GC3">
                            </div>
                            <input type="checkbox" class="seat-price seatGC3 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC2 = collect($seats)
                                    ->where('seat', 'GC2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC2 {{ $GC2 ? 'booked' : '' }}">GC2
                                <input type="checkbox" class="seat-name " data-nums="seatGC2" value="GC2"
                                    name="seatName[]" id="GC2">
                            </div>
                            <input type="checkbox" class="seat-price seatGC2 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GC1 = collect($seats)
                                    ->where('seat', 'GC1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GC1 {{ $GC1 ? 'booked' : '' }}">GC1
                                <input type="checkbox" class="seat-name " data-nums="seatGC1" value="GC1"
                                    name="seatName[]" id="GC1">
                            </div>
                            <input type="checkbox" class="seat-price seatGC1 "
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            <div class="grid-item  opacity-0">GC19</div>
                            <div class="grid-item  opacity-0">GC20</div>

                        </div>
                        <div class="grid mt-1">
                            <div class="grid-item  opacity-0">GB21</div>
                            <div class="grid-item  opacity-0">GB22</div>
                            @php
                                $GB18 = collect($seats)
                                    ->where('seat', 'GB18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB18 {{ $GB18 ? 'booked' : '' }}">GB18
                                <input type="checkbox" class="seat-name " data-nums="seatGB18" value="GB18"
                                    name="seatName[]" id="GB18">
                            </div>
                            <input type="checkbox" class="seat-price seatGB18"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB17 = collect($seats)
                                    ->where('seat', 'GB17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB17 {{ $GB17 ? 'booked' : '' }}">GB17
                                <input type="checkbox" class="seat-name " data-nums="seatGB17" value="GB17"
                                    name="seatName[]" id="GB17">
                            </div>
                            <input type="checkbox" class="seat-price seatGB17"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB16 = collect($seats)
                                    ->where('seat', 'GB16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB16 {{ $GB16 ? 'booked' : '' }}">GB16
                                <input type="checkbox" class="seat-name " data-nums="seatGB16" value="GB16"
                                    name="seatName[]" id="GB16">
                            </div>
                            <input type="checkbox" class="seat-price seatGB16"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB15 = collect($seats)
                                    ->where('seat', 'GB15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB15 {{ $GB15 ? 'booked' : '' }}">GB15
                                <input type="checkbox" class="seat-name " data-nums="seatGB15" value="GB15"
                                    name="seatName[]" id="GB15">
                            </div>
                            <input type="checkbox" class="seat-price seatGB15"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB14 = collect($seats)
                                    ->where('seat', 'GB14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB14 {{ $GB14 ? 'booked' : '' }}">GB14
                                <input type="checkbox" class="seat-name " data-nums="seatGB14" value="GB14"
                                    name="seatName[]" id="GB14">
                            </div>
                            <input type="checkbox" class="seat-price seatGB14"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB13 = collect($seats)
                                    ->where('seat', 'GB13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB13 {{ $GB13 ? 'booked' : '' }}">GB13
                                <input type="checkbox" class="seat-name " data-nums="seatGB13" value="GB13"
                                    name="seatName[]" id="GB13">
                            </div>
                            <input type="checkbox" class="seat-price seatGB13"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB12 = collect($seats)
                                    ->where('seat', 'GB12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB12 {{ $GB12 ? 'booked' : '' }}">GB12
                                <input type="checkbox" class="seat-name " data-nums="seatGB12" value="GB12"
                                    name="seatName[]" id="GB12">
                            </div>
                            <input type="checkbox" class="seat-price seatGB12"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB11 = collect($seats)
                                    ->where('seat', 'GB11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB11 {{ $GB11 ? 'booked' : '' }}">GB11
                                <input type="checkbox" class="seat-name " data-nums="seatGB11" value="GB11"
                                    name="seatName[]" id="GB11">
                            </div>
                            <input type="checkbox" class="seat-price seatGB11"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB10 = collect($seats)
                                    ->where('seat', 'GB10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB10 {{ $GB10 ? 'booked' : '' }}">GB10
                                <input type="checkbox" class="seat-name " data-nums="seatGB10" value="GB10"
                                    name="seatName[]" id="GB10">
                            </div>
                            <input type="checkbox" class="seat-price seatGB10"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB9 = collect($seats)
                                    ->where('seat', 'GB9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB9 {{ $GB9 ? 'booked' : '' }}">GB9
                                <input type="checkbox" class="seat-name " data-nums="seatGB9" value="GB9"
                                    name="seatName[]" id="GB9">
                            </div>
                            <input type="checkbox" class="seat-price seatGB9"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB8 = collect($seats)
                                    ->where('seat', 'GB8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB8 {{ $GB8 ? 'booked' : '' }}">GB8
                                <input type="checkbox" class="seat-name " data-nums="seatGB8" value="GB8"
                                    name="seatName[]" id="GB8">
                            </div>
                            <input type="checkbox" class="seat-price seatGB8"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB7 = collect($seats)
                                    ->where('seat', 'GB7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB7 {{ $GB7 ? 'booked' : '' }}">GB7
                                <input type="checkbox" class="seat-name " data-nums="seatGB7" value="GB7"
                                    name="seatName[]" id="GB7">
                            </div>
                            <input type="checkbox" class="seat-price seatGB7"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB6 = collect($seats)
                                    ->where('seat', 'GB6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB6 {{ $GB6 ? 'booked' : '' }}">GB6
                                <input type="checkbox" class="seat-name " data-nums="seatGB6" value="GB6"
                                    name="seatName[]" id="GB6">
                            </div>
                            <input type="checkbox" class="seat-price seatGB6"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB5 = collect($seats)
                                    ->where('seat', 'GB5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB5 {{ $GB5 ? 'booked' : '' }}">GB5
                                <input type="checkbox" class="seat-name " data-nums="seatGB5" value="GB5"
                                    name="seatName[]" id="GB5">
                            </div>
                            <input type="checkbox" class="seat-price seatGB5"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB4 = collect($seats)
                                    ->where('seat', 'GB4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB4 {{ $GB4 ? 'booked' : '' }}">GB4
                                <input type="checkbox" class="seat-name " data-nums="seatGB4" value="GB4"
                                    name="seatName[]" id="GB4">
                            </div>
                            <input type="checkbox" class="seat-price seatGB4"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB3 = collect($seats)
                                    ->where('seat', 'GB3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB3 {{ $GB3 ? 'booked' : '' }}">GB3
                                <input type="checkbox" class="seat-name " data-nums="seatGB3" value="GB3"
                                    name="seatName[]" id="GB3">
                            </div>
                            <input type="checkbox" class="seat-price seatGB3"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB2 = collect($seats)
                                    ->where('seat', 'GB2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB2 {{ $GB2 ? 'booked' : '' }}">GB2
                                <input type="checkbox" class="seat-name " data-nums="seatGB2" value="GB2"
                                    name="seatName[]" id="GB2">
                            </div>
                            <input type="checkbox" class="seat-price seatGB2"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GB1 = collect($seats)
                                    ->where('seat', 'GB1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GB1 {{ $GB1 ? 'booked' : '' }}">GB1
                                <input type="checkbox" class="seat-name " data-nums="seatGB1" value="GB1"
                                    name="seatName[]" id="GB1">
                            </div>
                            <input type="checkbox" class="seat-price seatGB1"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            <div class="grid-item  opacity-0">GB19</div>
                            <div class="grid-item  opacity-0">GB20</div>

                        </div>
                        <div class="grid mt-1">
                            <div class="grid-item  opacity-0">GA21</div>
                            <div class="grid-item  opacity-0">GA22</div>
                            @php
                                $GA18 = collect($seats)
                                    ->where('seat', 'GA18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA18 {{ $GA18 ? 'booked' : '' }}">GA18
                                <input type="checkbox" class="seat-name " data-nums="seatGA18" value="GA18"
                                    name="seatName[]" id="GA18">
                            </div>
                            <input type="checkbox" class="seat-price seatGA18"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA17 = collect($seats)
                                    ->where('seat', 'GA17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA17 {{ $GA17 ? 'booked' : '' }}">GA17
                                <input type="checkbox" class="seat-name " data-nums="seatGA17" value="GA17"
                                    name="seatName[]" id="GA17">
                            </div>
                            <input type="checkbox" class="seat-price seatGA17"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA16 = collect($seats)
                                    ->where('seat', 'GA16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA16 {{ $GA16 ? 'booked' : '' }}">GA16
                                <input type="checkbox" class="seat-name " data-nums="seatGA16" value="GA16"
                                    name="seatName[]" id="GA16">
                            </div>
                            <input type="checkbox" class="seat-price seatGA16"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA15 = collect($seats)
                                    ->where('seat', 'GA15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA15 {{ $GA15 ? 'booked' : '' }}">GA15
                                <input type="checkbox" class="seat-name " data-nums="seatGA15" value="GA15"
                                    name="seatName[]" id="GA15">
                            </div>
                            <input type="checkbox" class="seat-price seatGA15"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA14 = collect($seats)
                                    ->where('seat', 'GA14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA14 {{ $GA14 ? 'booked' : '' }}">GA14
                                <input type="checkbox" class="seat-name " data-nums="seatGA14" value="GA14"
                                    name="seatName[]" id="GA14">
                            </div>
                            <input type="checkbox" class="seat-price seatGA14"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA13 = collect($seats)
                                    ->where('seat', 'GA13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA13 {{ $GA13 ? 'booked' : '' }}">GA13
                                <input type="checkbox" class="seat-name " data-nums="seatGA13" value="GA13"
                                    name="seatName[]" id="GA13">
                            </div>
                            <input type="checkbox" class="seat-price seatGA13"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA12 = collect($seats)
                                    ->where('seat', 'GA12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA12 {{ $GA12 ? 'booked' : '' }}">GA12
                                <input type="checkbox" class="seat-name " data-nums="seatGA12" value="GA12"
                                    name="seatName[]" id="GA12">
                            </div>
                            <input type="checkbox" class="seat-price seatGA12"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA11 = collect($seats)
                                    ->where('seat', 'GA11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA11 {{ $GA11 ? 'booked' : '' }}">GA11
                                <input type="checkbox" class="seat-name " data-nums="seatGA11" value="GA11"
                                    name="seatName[]" id="GA11">
                            </div>
                            <input type="checkbox" class="seat-price seatGA11"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA10 = collect($seats)
                                    ->where('seat', 'GA10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA10 {{ $GA10 ? 'booked' : '' }}">GA10
                                <input type="checkbox" class="seat-name " data-nums="seatGA10" value="GA10"
                                    name="seatName[]" id="GA10">
                            </div>
                            <input type="checkbox" class="seat-price seatGA10"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA9 = collect($seats)
                                    ->where('seat', 'GA9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA9 {{ $GA9 ? 'booked' : '' }}">GA9
                                <input type="checkbox" class="seat-name " data-nums="seatGA9" value="GA9"
                                    name="seatName[]" id="GA9">
                            </div>
                            <input type="checkbox" class="seat-price seatGA9"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA8 = collect($seats)
                                    ->where('seat', 'GA8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA8 {{ $GA8 ? 'booked' : '' }}">GA8
                                <input type="checkbox" class="seat-name " data-nums="seatGA8" value="GA8"
                                    name="seatName[]" id="GA8">
                            </div>
                            <input type="checkbox" class="seat-price seatGA8"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA7 = collect($seats)
                                    ->where('seat', 'GA7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA7 {{ $GA7 ? 'booked' : '' }}">GA7
                                <input type="checkbox" class="seat-name " data-nums="seatGA7" value="GA7"
                                    name="seatName[]" id="GA7">
                            </div>
                            <input type="checkbox" class="seat-price seatGA7"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA6 = collect($seats)
                                    ->where('seat', 'GA6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA6 {{ $GA6 ? 'booked' : '' }}">GA6
                                <input type="checkbox" class="seat-name " data-nums="seatGA6" value="GA6"
                                    name="seatName[]" id="GA6">
                            </div>
                            <input type="checkbox" class="seat-price seatGA6"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA5 = collect($seats)
                                    ->where('seat', 'GA5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA5 {{ $GA5 ? 'booked' : '' }}">GA5
                                <input type="checkbox" class="seat-name " data-nums="seatGA5" value="GA5"
                                    name="seatName[]" id="GA5">
                            </div>
                            <input type="checkbox" class="seat-price seatGA5"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA4 = collect($seats)
                                    ->where('seat', 'GA4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA4 {{ $GA4 ? 'booked' : '' }}">GA4
                                <input type="checkbox" class="seat-name " data-nums="seatGA4" value="GA4"
                                    name="seatName[]" id="GA4">
                            </div>
                            <input type="checkbox" class="seat-price seatGA4"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA3 = collect($seats)
                                    ->where('seat', 'GA3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA3 {{ $GA3 ? 'booked' : '' }}">GA3
                                <input type="checkbox" class="seat-name " data-nums="seatGA3" value="GA3"
                                    name="seatName[]" id="GA3">
                            </div>
                            <input type="checkbox" class="seat-price seatGA3"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA2 = collect($seats)
                                    ->where('seat', 'GA2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA2 {{ $GA2 ? 'booked' : '' }}">GA2
                                <input type="checkbox" class="seat-name " data-nums="seatGA2" value="GA2"
                                    name="seatName[]" id="GA2">
                            </div>
                            <input type="checkbox" class="seat-price seatGA2"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            @php
                                $GA1 = collect($seats)
                                    ->where('seat', 'GA1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item GA1 {{ $GA1 ? 'booked' : '' }}">GA1
                                <input type="checkbox" class="seat-name " data-nums="seatGA1" value="GA1"
                                    name="seatName[]" id="GA1">
                            </div>
                            <input type="checkbox" class="seat-price seatGA1"
                                value="{{ settings()->get('gold_ticket_price') }}" name="seatPrice[]">

                            <div class="grid-item  opacity-0">GA19</div>
                            <div class="grid-item  opacity-0">GA20</div>

                        </div>
                        <div class="grid mt-3">
                            @php
                                $M22 = collect($seats)
                                    ->where('seat', 'M22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M22 {{ $M22 ? 'booked' : '' }}">M22
                                <input type="checkbox" class="seat-name " data-nums="seatM22" value="M22"
                                    name="seatName[]" id="M22">
                            </div>
                            <input type="checkbox" class="seat-price seatM22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M21 = collect($seats)
                                    ->where('seat', 'M21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M21 {{ $M21 ? 'booked' : '' }}">M21
                                <input type="checkbox" class="seat-name " data-nums="seatM21" value="M21"
                                    name="seatName[]" id="M21">
                            </div>
                            <input type="checkbox" class="seat-price seatM21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M20 = collect($seats)
                                    ->where('seat', 'M20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M20 {{ $M20 ? 'booked' : '' }}">M20
                                <input type="checkbox" class="seat-name " data-nums="seatM20" value="M20"
                                    name="seatName[]" id="M20">
                            </div>
                            <input type="checkbox" class="seat-price seatM20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M19 = collect($seats)
                                    ->where('seat', 'M19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M19 {{ $M19 ? 'booked' : '' }}">M19
                                <input type="checkbox" class="seat-name " data-nums="seatM19" value="M19"
                                    name="seatName[]" id="M19">
                            </div>
                            <input type="checkbox" class="seat-price seatM19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M18 = collect($seats)
                                    ->where('seat', 'M18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M18 {{ $M18 ? 'booked' : '' }}">M18
                                <input type="checkbox" class="seat-name " data-nums="seatM18" value="M18"
                                    name="seatName[]" id="M18">
                            </div>
                            <input type="checkbox" class="seat-price seatM18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M17 = collect($seats)
                                    ->where('seat', 'M17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M17 {{ $M17 ? 'booked' : '' }}">M17
                                <input type="checkbox" class="seat-name " data-nums="seatM17" value="M17"
                                    name="seatName[]" id="M17">
                            </div>
                            <input type="checkbox" class="seat-price seatM17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M16 = collect($seats)
                                    ->where('seat', 'M16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M16 {{ $M16 ? 'booked' : '' }}">M16
                                <input type="checkbox" class="seat-name " data-nums="seatM16" value="M16"
                                    name="seatName[]" id="M16">
                            </div>
                            <input type="checkbox" class="seat-price seatM16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M15 = collect($seats)
                                    ->where('seat', 'M15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M15 {{ $M15 ? 'booked' : '' }}">M15
                                <input type="checkbox" class="seat-name " data-nums="seatM15" value="M15"
                                    name="seatName[]" id="M15">
                            </div>
                            <input type="checkbox" class="seat-price seatM15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M14 = collect($seats)
                                    ->where('seat', 'M14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M14 {{ $M14 ? 'booked' : '' }}">M14
                                <input type="checkbox" class="seat-name " data-nums="seatM14" value="M14"
                                    name="seatName[]" id="M14">
                            </div>
                            <input type="checkbox" class="seat-price seatM14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M13 = collect($seats)
                                    ->where('seat', 'M13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M13 {{ $M13 ? 'booked' : '' }}">M13
                                <input type="checkbox" class="seat-name " data-nums="seatM13" value="M13"
                                    name="seatName[]" id="M13">
                            </div>
                            <input type="checkbox" class="seat-price seatM13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M12 = collect($seats)
                                    ->where('seat', 'M12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M12 {{ $M12 ? 'booked' : '' }}">M12
                                <input type="checkbox" class="seat-name " data-nums="seatM12" value="M12"
                                    name="seatName[]" id="M12">
                            </div>
                            <input type="checkbox" class="seat-price seatM12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M11 = collect($seats)
                                    ->where('seat', 'M11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M11 {{ $M11 ? 'booked' : '' }}">M11
                                <input type="checkbox" class="seat-name " data-nums="seatM11" value="M11"
                                    name="seatName[]" id="M11">
                            </div>
                            <input type="checkbox" class="seat-price seatM11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M10 = collect($seats)
                                    ->where('seat', 'M10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M10 {{ $M10 ? 'booked' : '' }}">M10
                                <input type="checkbox" class="seat-name " data-nums="seatM10" value="M10"
                                    name="seatName[]" id="M10">
                            </div>
                            <input type="checkbox" class="seat-price seatM10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M9 = collect($seats)
                                    ->where('seat', 'M9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M9 {{ $M9 ? 'booked' : '' }}">M9
                                <input type="checkbox" class="seat-name " data-nums="seatM9" value="M9"
                                    name="seatName[]" id="M9">
                            </div>
                            <input type="checkbox" class="seat-price seatM9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M8 = collect($seats)
                                    ->where('seat', 'M8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M8 {{ $M8 ? 'booked' : '' }}">M8
                                <input type="checkbox" class="seat-name " data-nums="seatM8" value="M8"
                                    name="seatName[]" id="M8">
                            </div>
                            <input type="checkbox" class="seat-price seatM8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M7 = collect($seats)
                                    ->where('seat', 'M7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M7 {{ $M7 ? 'booked' : '' }}">M7
                                <input type="checkbox" class="seat-name " data-nums="seatM7" value="M7"
                                    name="seatName[]" id="M7">
                            </div>
                            <input type="checkbox" class="seat-price seatM7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M6 = collect($seats)
                                    ->where('seat', 'M6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M6 {{ $M6 ? 'booked' : '' }}">M6
                                <input type="checkbox" class="seat-name " data-nums="seatM6" value="M6"
                                    name="seatName[]" id="M6">
                            </div>
                            <input type="checkbox" class="seat-price seatM6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M5 = collect($seats)
                                    ->where('seat', 'M5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M5 {{ $M5 ? 'booked' : '' }}">M5
                                <input type="checkbox" class="seat-name " data-nums="seatM5" value="M5"
                                    name="seatName[]" id="M5">
                            </div>
                            <input type="checkbox" class="seat-price seatM5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M4 = collect($seats)
                                    ->where('seat', 'M4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M4 {{ $M4 ? 'booked' : '' }}">M4
                                <input type="checkbox" class="seat-name " data-nums="seatM4" value="M4"
                                    name="seatName[]" id="M4">
                            </div>
                            <input type="checkbox" class="seat-price seatM4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M3 = collect($seats)
                                    ->where('seat', 'M3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M3 {{ $M3 ? 'booked' : '' }}">M3
                                <input type="checkbox" class="seat-name " data-nums="seatM3" value="M3"
                                    name="seatName[]" id="M3">
                            </div>
                            <input type="checkbox" class="seat-price seatM3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M2 = collect($seats)
                                    ->where('seat', 'M2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M2 {{ $M2 ? 'booked' : '' }}">M2
                                <input type="checkbox" class="seat-name " data-nums="seatM2" value="M2"
                                    name="seatName[]" id="M2">
                            </div>
                            <input type="checkbox" class="seat-price seatM2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $M1 = collect($seats)
                                    ->where('seat', 'M1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item M1 {{ $M1 ? 'booked' : '' }}">M1
                                <input type="checkbox" class="seat-name " data-nums="seatM1" value="M1"
                                    name="seatName[]" id="M1">
                            </div>
                            <input type="checkbox" class="seat-price seatM1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $L22 = collect($seats)
                                    ->where('seat', 'L22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L22 {{ $L22 ? 'booked' : '' }}">L22
                                <input type="checkbox" class="seat-name " data-nums="seatL22" value="L22"
                                    name="seatName[]" id="L22">
                            </div>
                            <input type="checkbox" class="seat-price seatL22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L21 = collect($seats)
                                    ->where('seat', 'L21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L21 {{ $L21 ? 'booked' : '' }}">L21
                                <input type="checkbox" class="seat-name " data-nums="seatL21" value="L21"
                                    name="seatName[]" id="L21">
                            </div>
                            <input type="checkbox" class="seat-price seatL21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L20 = collect($seats)
                                    ->where('seat', 'L20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L20 {{ $L20 ? 'booked' : '' }}">L20
                                <input type="checkbox" class="seat-name " data-nums="seatL20" value="L20"
                                    name="seatName[]" id="L20">
                            </div>
                            <input type="checkbox" class="seat-price seatL20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L19 = collect($seats)
                                    ->where('seat', 'L19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L19 {{ $L19 ? 'booked' : '' }}">L19
                                <input type="checkbox" class="seat-name " data-nums="seatL19" value="L19"
                                    name="seatName[]" id="L19">
                            </div>
                            <input type="checkbox" class="seat-price seatL19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L18 = collect($seats)
                                    ->where('seat', 'L18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L18 {{ $L18 ? 'booked' : '' }}">L18
                                <input type="checkbox" class="seat-name " data-nums="seatL18" value="L18"
                                    name="seatName[]" id="L18">
                            </div>
                            <input type="checkbox" class="seat-price seatL18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L17 = collect($seats)
                                    ->where('seat', 'L17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L17 {{ $L17 ? 'booked' : '' }}">L17
                                <input type="checkbox" class="seat-name " data-nums="seatL17" value="L17"
                                    name="seatName[]" id="L17">
                            </div>
                            <input type="checkbox" class="seat-price seatL17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L16 = collect($seats)
                                    ->where('seat', 'L16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L16 {{ $L16 ? 'booked' : '' }}">L16
                                <input type="checkbox" class="seat-name " data-nums="seatL16" value="L16"
                                    name="seatName[]" id="L16">
                            </div>
                            <input type="checkbox" class="seat-price seatL16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L15 = collect($seats)
                                    ->where('seat', 'L15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L15 {{ $L15 ? 'booked' : '' }}">L15
                                <input type="checkbox" class="seat-name " data-nums="seatL15" value="L15"
                                    name="seatName[]" id="L15">
                            </div>
                            <input type="checkbox" class="seat-price seatL15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L14 = collect($seats)
                                    ->where('seat', 'L14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L14 {{ $L14 ? 'booked' : '' }}">L14
                                <input type="checkbox" class="seat-name " data-nums="seatL14" value="L14"
                                    name="seatName[]" id="L14">
                            </div>
                            <input type="checkbox" class="seat-price seatL14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L13 = collect($seats)
                                    ->where('seat', 'L13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L13 {{ $L13 ? 'booked' : '' }}">L13
                                <input type="checkbox" class="seat-name " data-nums="seatL13" value="L13"
                                    name="seatName[]" id="L13">
                            </div>
                            <input type="checkbox" class="seat-price seatL13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L12 = collect($seats)
                                    ->where('seat', 'L12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L12 {{ $L12 ? 'booked' : '' }}">L12
                                <input type="checkbox" class="seat-name " data-nums="seatL12" value="L12"
                                    name="seatName[]" id="L12">
                            </div>
                            <input type="checkbox" class="seat-price seatL12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L11 = collect($seats)
                                    ->where('seat', 'L11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L11 {{ $L11 ? 'booked' : '' }}">L11
                                <input type="checkbox" class="seat-name " data-nums="seatL11" value="L11"
                                    name="seatName[]" id="L11">
                            </div>
                            <input type="checkbox" class="seat-price seatL11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L10 = collect($seats)
                                    ->where('seat', 'L10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L10 {{ $L10 ? 'booked' : '' }}">L10
                                <input type="checkbox" class="seat-name " data-nums="seatL10" value="L10"
                                    name="seatName[]" id="L10">
                            </div>
                            <input type="checkbox" class="seat-price seatL10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L9 = collect($seats)
                                    ->where('seat', 'L9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L9 {{ $L9 ? 'booked' : '' }}">L9
                                <input type="checkbox" class="seat-name " data-nums="seatL9" value="L9"
                                    name="seatName[]" id="L9">
                            </div>
                            <input type="checkbox" class="seat-price seatL9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L8 = collect($seats)
                                    ->where('seat', 'L8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L8 {{ $L8 ? 'booked' : '' }}">L8
                                <input type="checkbox" class="seat-name " data-nums="seatL8" value="L8"
                                    name="seatName[]" id="L8">
                            </div>
                            <input type="checkbox" class="seat-price seatL8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L7 = collect($seats)
                                    ->where('seat', 'L7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L7 {{ $L7 ? 'booked' : '' }}">L7
                                <input type="checkbox" class="seat-name " data-nums="seatL7" value="L7"
                                    name="seatName[]" id="L7">
                            </div>
                            <input type="checkbox" class="seat-price seatL7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L6 = collect($seats)
                                    ->where('seat', 'L6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L6 {{ $L6 ? 'booked' : '' }}">L6
                                <input type="checkbox" class="seat-name " data-nums="seatL6" value="L6"
                                    name="seatName[]" id="L6">
                            </div>
                            <input type="checkbox" class="seat-price seatL6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L5 = collect($seats)
                                    ->where('seat', 'L5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L5 {{ $L5 ? 'booked' : '' }}">L5
                                <input type="checkbox" class="seat-name " data-nums="seatL5" value="L5"
                                    name="seatName[]" id="L5">
                            </div>
                            <input type="checkbox" class="seat-price seatL5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L4 = collect($seats)
                                    ->where('seat', 'L4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L4 {{ $L4 ? 'booked' : '' }}">L4
                                <input type="checkbox" class="seat-name " data-nums="seatL4" value="L4"
                                    name="seatName[]" id="L4">
                            </div>
                            <input type="checkbox" class="seat-price seatL4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L3 = collect($seats)
                                    ->where('seat', 'L3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L3 {{ $L3 ? 'booked' : '' }}">L3
                                <input type="checkbox" class="seat-name " data-nums="seatL3" value="L3"
                                    name="seatName[]" id="L3">
                            </div>
                            <input type="checkbox" class="seat-price seatL3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L2 = collect($seats)
                                    ->where('seat', 'L2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L2 {{ $L2 ? 'booked' : '' }}">L2
                                <input type="checkbox" class="seat-name " data-nums="seatL2" value="L2"
                                    name="seatName[]" id="L2">
                            </div>
                            <input type="checkbox" class="seat-price seatL2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $L1 = collect($seats)
                                    ->where('seat', 'L1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item L1 {{ $L1 ? 'booked' : '' }}">L1
                                <input type="checkbox" class="seat-name " data-nums="seatL1" value="L1"
                                    name="seatName[]" id="L1">
                            </div>
                            <input type="checkbox" class="seat-price seatL1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $K22 = collect($seats)
                                    ->where('seat', 'K22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K22 {{ $K22 ? 'booked' : '' }}">K22
                                <input type="checkbox" class="seat-name " data-nums="seatK22" value="K22"
                                    name="seatName[]" id="K22">
                            </div>
                            <input type="checkbox" class="seat-price seatK22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K21 = collect($seats)
                                    ->where('seat', 'K21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K21 {{ $K21 ? 'booked' : '' }}">K21
                                <input type="checkbox" class="seat-name " data-nums="seatK21" value="K21"
                                    name="seatName[]" id="K21">
                            </div>
                            <input type="checkbox" class="seat-price seatK21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K20 = collect($seats)
                                    ->where('seat', 'K20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K20 {{ $K20 ? 'booked' : '' }}">K20
                                <input type="checkbox" class="seat-name " data-nums="seatK20" value="K20"
                                    name="seatName[]" id="K20">
                            </div>
                            <input type="checkbox" class="seat-price seatK20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K19 = collect($seats)
                                    ->where('seat', 'K19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K19 {{ $K19 ? 'booked' : '' }}">K19
                                <input type="checkbox" class="seat-name " data-nums="seatK19" value="K19"
                                    name="seatName[]" id="K19">
                            </div>
                            <input type="checkbox" class="seat-price seatK19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K18 = collect($seats)
                                    ->where('seat', 'K18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K18 {{ $K18 ? 'booked' : '' }}">K18
                                <input type="checkbox" class="seat-name " data-nums="seatK18" value="K18"
                                    name="seatName[]" id="K18">
                            </div>
                            <input type="checkbox" class="seat-price seatK18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K17 = collect($seats)
                                    ->where('seat', 'K17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K17 {{ $K17 ? 'booked' : '' }}">K17
                                <input type="checkbox" class="seat-name " data-nums="seatK17" value="K17"
                                    name="seatName[]" id="K17">
                            </div>
                            <input type="checkbox" class="seat-price seatK17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K16 = collect($seats)
                                    ->where('seat', 'K16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K16 {{ $K16 ? 'booked' : '' }}">K16
                                <input type="checkbox" class="seat-name " data-nums="seatK16" value="K16"
                                    name="seatName[]" id="K16">
                            </div>
                            <input type="checkbox" class="seat-price seatK16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K15 = collect($seats)
                                    ->where('seat', 'K15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K15 {{ $K15 ? 'booked' : '' }}">K15
                                <input type="checkbox" class="seat-name " data-nums="seatK15" value="K15"
                                    name="seatName[]" id="K15">
                            </div>
                            <input type="checkbox" class="seat-price seatK15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K14 = collect($seats)
                                    ->where('seat', 'K14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K14 {{ $K14 ? 'booked' : '' }}">K14
                                <input type="checkbox" class="seat-name " data-nums="seatK14" value="K14"
                                    name="seatName[]" id="K14">
                            </div>
                            <input type="checkbox" class="seat-price seatK14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K13 = collect($seats)
                                    ->where('seat', 'K13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K13 {{ $K13 ? 'booked' : '' }}">K13
                                <input type="checkbox" class="seat-name " data-nums="seatK13" value="K13"
                                    name="seatName[]" id="K13">
                            </div>
                            <input type="checkbox" class="seat-price seatK13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K12 = collect($seats)
                                    ->where('seat', 'K12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K12 {{ $K12 ? 'booked' : '' }}">K12
                                <input type="checkbox" class="seat-name " data-nums="seatK12" value="K12"
                                    name="seatName[]" id="K12">
                            </div>
                            <input type="checkbox" class="seat-price seatK12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K11 = collect($seats)
                                    ->where('seat', 'K11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K11 {{ $K11 ? 'booked' : '' }}">K11
                                <input type="checkbox" class="seat-name " data-nums="seatK11" value="K11"
                                    name="seatName[]" id="K11">
                            </div>
                            <input type="checkbox" class="seat-price seatK11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K10 = collect($seats)
                                    ->where('seat', 'K10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K10 {{ $K10 ? 'booked' : '' }}">K10
                                <input type="checkbox" class="seat-name " data-nums="seatK10" value="K10"
                                    name="seatName[]" id="K10">
                            </div>
                            <input type="checkbox" class="seat-price seatK10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K9 = collect($seats)
                                    ->where('seat', 'K9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K9 {{ $K9 ? 'booked' : '' }}">K9
                                <input type="checkbox" class="seat-name " data-nums="seatK9" value="K9"
                                    name="seatName[]" id="K9">
                            </div>
                            <input type="checkbox" class="seat-price seatK9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K8 = collect($seats)
                                    ->where('seat', 'K8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K8 {{ $K8 ? 'booked' : '' }}">K8
                                <input type="checkbox" class="seat-name " data-nums="seatK8" value="K8"
                                    name="seatName[]" id="K8">
                            </div>
                            <input type="checkbox" class="seat-price seatK8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K7 = collect($seats)
                                    ->where('seat', 'K7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K7 {{ $K7 ? 'booked' : '' }}">K7
                                <input type="checkbox" class="seat-name " data-nums="seatK7" value="K7"
                                    name="seatName[]" id="K7">
                            </div>
                            <input type="checkbox" class="seat-price seatK7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K6 = collect($seats)
                                    ->where('seat', 'K6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K6 {{ $K6 ? 'booked' : '' }}">K6
                                <input type="checkbox" class="seat-name " data-nums="seatK6" value="K6"
                                    name="seatName[]" id="K6">
                            </div>
                            <input type="checkbox" class="seat-price seatK6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K5 = collect($seats)
                                    ->where('seat', 'K5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K5 {{ $K5 ? 'booked' : '' }}">K5
                                <input type="checkbox" class="seat-name " data-nums="seatK5" value="K5"
                                    name="seatName[]" id="K5">
                            </div>
                            <input type="checkbox" class="seat-price seatK5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K4 = collect($seats)
                                    ->where('seat', 'K4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K4 {{ $K4 ? 'booked' : '' }}">K4
                                <input type="checkbox" class="seat-name " data-nums="seatK4" value="K4"
                                    name="seatName[]" id="K4">
                            </div>
                            <input type="checkbox" class="seat-price seatK4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K3 = collect($seats)
                                    ->where('seat', 'K3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K3 {{ $K3 ? 'booked' : '' }}">K3
                                <input type="checkbox" class="seat-name " data-nums="seatK3" value="K3"
                                    name="seatName[]" id="K3">
                            </div>
                            <input type="checkbox" class="seat-price seatK3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K2 = collect($seats)
                                    ->where('seat', 'K2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K2 {{ $K2 ? 'booked' : '' }}">K2
                                <input type="checkbox" class="seat-name " data-nums="seatK2" value="K2"
                                    name="seatName[]" id="K2">
                            </div>
                            <input type="checkbox" class="seat-price seatK2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $K1 = collect($seats)
                                    ->where('seat', 'K1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item K1 {{ $K1 ? 'booked' : '' }}">K1
                                <input type="checkbox" class="seat-name " data-nums="seatK1" value="K1"
                                    name="seatName[]" id="K1">
                            </div>
                            <input type="checkbox" class="seat-price seatK1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $J22 = collect($seats)
                                    ->where('seat', 'J22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J22 {{ $J22 ? 'booked' : '' }}">J22
                                <input type="checkbox" class="seat-name " data-nums="seatJ22" value="J22"
                                    name="seatName[]" id="J22">
                            </div>
                            <input type="checkbox" class="seat-price seatJ22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J21 = collect($seats)
                                    ->where('seat', 'J21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J21 {{ $J21 ? 'booked' : '' }}">J21
                                <input type="checkbox" class="seat-name " data-nums="seatJ21" value="J21"
                                    name="seatName[]" id="J21">
                            </div>
                            <input type="checkbox" class="seat-price seatJ21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J20 = collect($seats)
                                    ->where('seat', 'J20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J20 {{ $J20 ? 'booked' : '' }}">J20
                                <input type="checkbox" class="seat-name " data-nums="seatJ20" value="J20"
                                    name="seatName[]" id="J20">
                            </div>
                            <input type="checkbox" class="seat-price seatJ20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J19 = collect($seats)
                                    ->where('seat', 'J19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J19 {{ $J19 ? 'booked' : '' }}">J19
                                <input type="checkbox" class="seat-name " data-nums="seatJ19" value="J19"
                                    name="seatName[]" id="J19">
                            </div>
                            <input type="checkbox" class="seat-price seatJ19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J18 = collect($seats)
                                    ->where('seat', 'J18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J18 {{ $J18 ? 'booked' : '' }}">J18
                                <input type="checkbox" class="seat-name " data-nums="seatJ18" value="J18"
                                    name="seatName[]" id="J18">
                            </div>
                            <input type="checkbox" class="seat-price seatJ18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J17 = collect($seats)
                                    ->where('seat', 'J17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J17 {{ $J17 ? 'booked' : '' }}">J17
                                <input type="checkbox" class="seat-name " data-nums="seatJ17" value="J17"
                                    name="seatName[]" id="J17">
                            </div>
                            <input type="checkbox" class="seat-price seatJ17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J16 = collect($seats)
                                    ->where('seat', 'J16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J16 {{ $J16 ? 'booked' : '' }}">J16
                                <input type="checkbox" class="seat-name " data-nums="seatJ16" value="J16"
                                    name="seatName[]" id="J16">
                            </div>
                            <input type="checkbox" class="seat-price seatJ16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J15 = collect($seats)
                                    ->where('seat', 'J15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J15 {{ $J15 ? 'booked' : '' }}">J15
                                <input type="checkbox" class="seat-name " data-nums="seatJ15" value="J15"
                                    name="seatName[]" id="J15">
                            </div>
                            <input type="checkbox" class="seat-price seatJ15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J14 = collect($seats)
                                    ->where('seat', 'J14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J14 {{ $J14 ? 'booked' : '' }}">J14
                                <input type="checkbox" class="seat-name " data-nums="seatJ14" value="J14"
                                    name="seatName[]" id="J14">
                            </div>
                            <input type="checkbox" class="seat-price seatJ14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J13 = collect($seats)
                                    ->where('seat', 'J13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J13 {{ $J13 ? 'booked' : '' }}">J13
                                <input type="checkbox" class="seat-name " data-nums="seatJ13" value="J13"
                                    name="seatName[]" id="J13">
                            </div>
                            <input type="checkbox" class="seat-price seatJ13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J12 = collect($seats)
                                    ->where('seat', 'J12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J12 {{ $J12 ? 'booked' : '' }}">J12
                                <input type="checkbox" class="seat-name " data-nums="seatJ12" value="J12"
                                    name="seatName[]" id="J12">
                            </div>
                            <input type="checkbox" class="seat-price seatJ12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J11 = collect($seats)
                                    ->where('seat', 'J11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J11 {{ $J11 ? 'booked' : '' }}">J11
                                <input type="checkbox" class="seat-name " data-nums="seatJ11" value="J11"
                                    name="seatName[]" id="J11">
                            </div>
                            <input type="checkbox" class="seat-price seatJ11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J10 = collect($seats)
                                    ->where('seat', 'J10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J10 {{ $J10 ? 'booked' : '' }}">J10
                                <input type="checkbox" class="seat-name " data-nums="seatJ10" value="J10"
                                    name="seatName[]" id="J10">
                            </div>
                            <input type="checkbox" class="seat-price seatJ10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J9 = collect($seats)
                                    ->where('seat', 'J9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J9 {{ $J9 ? 'booked' : '' }}">J9
                                <input type="checkbox" class="seat-name " data-nums="seatJ9" value="J9"
                                    name="seatName[]" id="J9">
                            </div>
                            <input type="checkbox" class="seat-price seatJ9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J8 = collect($seats)
                                    ->where('seat', 'J8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J8 {{ $J8 ? 'booked' : '' }}">J8
                                <input type="checkbox" class="seat-name " data-nums="seatJ8" value="J8"
                                    name="seatName[]" id="J8">
                            </div>
                            <input type="checkbox" class="seat-price seatJ8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J7 = collect($seats)
                                    ->where('seat', 'J7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J7 {{ $J7 ? 'booked' : '' }}">J7
                                <input type="checkbox" class="seat-name " data-nums="seatJ7" value="J7"
                                    name="seatName[]" id="J7">
                            </div>
                            <input type="checkbox" class="seat-price seatJ7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J6 = collect($seats)
                                    ->where('seat', 'J6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J6 {{ $J6 ? 'booked' : '' }}">J6
                                <input type="checkbox" class="seat-name " data-nums="seatJ6" value="J6"
                                    name="seatName[]" id="J6">
                            </div>
                            <input type="checkbox" class="seat-price seatJ6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J5 = collect($seats)
                                    ->where('seat', 'J5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J5 {{ $J5 ? 'booked' : '' }}">J5
                                <input type="checkbox" class="seat-name " data-nums="seatJ5" value="J5"
                                    name="seatName[]" id="J5">
                            </div>
                            <input type="checkbox" class="seat-price seatJ5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J4 = collect($seats)
                                    ->where('seat', 'J4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J4 {{ $J4 ? 'booked' : '' }}">J4
                                <input type="checkbox" class="seat-name " data-nums="seatJ4" value="J4"
                                    name="seatName[]" id="J4">
                            </div>
                            <input type="checkbox" class="seat-price seatJ4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J3 = collect($seats)
                                    ->where('seat', 'J3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J3 {{ $J3 ? 'booked' : '' }}">J3
                                <input type="checkbox" class="seat-name " data-nums="seatJ3" value="J3"
                                    name="seatName[]" id="J3">
                            </div>
                            <input type="checkbox" class="seat-price seatJ3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J2 = collect($seats)
                                    ->where('seat', 'J2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J2 {{ $J2 ? 'booked' : '' }}">J2
                                <input type="checkbox" class="seat-name " data-nums="seatJ2" value="J2"
                                    name="seatName[]" id="J2">
                            </div>
                            <input type="checkbox" class="seat-price seatJ2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $J1 = collect($seats)
                                    ->where('seat', 'J1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item J1 {{ $J1 ? 'booked' : '' }}">J1
                                <input type="checkbox" class="seat-name " data-nums="seatJ1" value="J1"
                                    name="seatName[]" id="J1">
                            </div>
                            <input type="checkbox" class="seat-price seatJ1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $I22 = collect($seats)
                                    ->where('seat', 'I22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I22 {{ $I22 ? 'booked' : '' }}">I22
                                <input type="checkbox" class="seat-name " data-nums="seatI22" value="I22"
                                    name="seatName[]" id="I22">
                            </div>
                            <input type="checkbox" class="seat-price seatI22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I21 = collect($seats)
                                    ->where('seat', 'I21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I21 {{ $I21 ? 'booked' : '' }}">I21
                                <input type="checkbox" class="seat-name " data-nums="seatI21" value="I21"
                                    name="seatName[]" id="I21">
                            </div>
                            <input type="checkbox" class="seat-price seatI21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I20 = collect($seats)
                                    ->where('seat', 'I20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I20 {{ $I20 ? 'booked' : '' }}">I20
                                <input type="checkbox" class="seat-name " data-nums="seatI20" value="I20"
                                    name="seatName[]" id="I20">
                            </div>
                            <input type="checkbox" class="seat-price seatI20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I19 = collect($seats)
                                    ->where('seat', 'I19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I19 {{ $I19 ? 'booked' : '' }}">I19
                                <input type="checkbox" class="seat-name " data-nums="seatI19" value="I19"
                                    name="seatName[]" id="I19">
                            </div>
                            <input type="checkbox" class="seat-price seatI19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I18 = collect($seats)
                                    ->where('seat', 'I18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I18 {{ $I18 ? 'booked' : '' }}">I18
                                <input type="checkbox" class="seat-name " data-nums="seatI18" value="I18"
                                    name="seatName[]" id="I18">
                            </div>
                            <input type="checkbox" class="seat-price seatI18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I17 = collect($seats)
                                    ->where('seat', 'I17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I17 {{ $I17 ? 'booked' : '' }}">I17
                                <input type="checkbox" class="seat-name " data-nums="seatI17" value="I17"
                                    name="seatName[]" id="I17">
                            </div>
                            <input type="checkbox" class="seat-price seatI17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I16 = collect($seats)
                                    ->where('seat', 'I16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I16 {{ $I16 ? 'booked' : '' }}">I16
                                <input type="checkbox" class="seat-name " data-nums="seatI16" value="I16"
                                    name="seatName[]" id="I16">
                            </div>
                            <input type="checkbox" class="seat-price seatI16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I15 = collect($seats)
                                    ->where('seat', 'I15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I15 {{ $I15 ? 'booked' : '' }}">I15
                                <input type="checkbox" class="seat-name " data-nums="seatI15" value="I15"
                                    name="seatName[]" id="I15">
                            </div>
                            <input type="checkbox" class="seat-price seatI15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I14 = collect($seats)
                                    ->where('seat', 'I14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I14 {{ $I14 ? 'booked' : '' }}">I14
                                <input type="checkbox" class="seat-name " data-nums="seatI14" value="I14"
                                    name="seatName[]" id="I14">
                            </div>
                            <input type="checkbox" class="seat-price seatI14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I13 = collect($seats)
                                    ->where('seat', 'I13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I13 {{ $I13 ? 'booked' : '' }}">I13
                                <input type="checkbox" class="seat-name " data-nums="seatI13" value="I13"
                                    name="seatName[]" id="I13">
                            </div>
                            <input type="checkbox" class="seat-price seatI13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I12 = collect($seats)
                                    ->where('seat', 'I12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I12 {{ $I12 ? 'booked' : '' }}">I12
                                <input type="checkbox" class="seat-name " data-nums="seatI12" value="I12"
                                    name="seatName[]" id="I12">
                            </div>
                            <input type="checkbox" class="seat-price seatI12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I11 = collect($seats)
                                    ->where('seat', 'I11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I11 {{ $I11 ? 'booked' : '' }}">I11
                                <input type="checkbox" class="seat-name " data-nums="seatI11" value="I11"
                                    name="seatName[]" id="I11">
                            </div>
                            <input type="checkbox" class="seat-price seatI11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I10 = collect($seats)
                                    ->where('seat', 'I10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I10 {{ $I10 ? 'booked' : '' }}">I10
                                <input type="checkbox" class="seat-name " data-nums="seatI10" value="I10"
                                    name="seatName[]" id="I10">
                            </div>
                            <input type="checkbox" class="seat-price seatI10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I9 = collect($seats)
                                    ->where('seat', 'I9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I9 {{ $I9 ? 'booked' : '' }}">I9
                                <input type="checkbox" class="seat-name " data-nums="seatI9" value="I9"
                                    name="seatName[]" id="I9">
                            </div>
                            <input type="checkbox" class="seat-price seatI9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I8 = collect($seats)
                                    ->where('seat', 'I8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I8 {{ $I8 ? 'booked' : '' }}">I8
                                <input type="checkbox" class="seat-name " data-nums="seatI8" value="I8"
                                    name="seatName[]" id="I8">
                            </div>
                            <input type="checkbox" class="seat-price seatI8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I7 = collect($seats)
                                    ->where('seat', 'I7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I7 {{ $I7 ? 'booked' : '' }}">I7
                                <input type="checkbox" class="seat-name " data-nums="seatI7" value="I7"
                                    name="seatName[]" id="I7">
                            </div>
                            <input type="checkbox" class="seat-price seatI7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I6 = collect($seats)
                                    ->where('seat', 'I6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I6 {{ $I6 ? 'booked' : '' }}">I6
                                <input type="checkbox" class="seat-name " data-nums="seatI6" value="I6"
                                    name="seatName[]" id="I6">
                            </div>
                            <input type="checkbox" class="seat-price seatI6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I5 = collect($seats)
                                    ->where('seat', 'I5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I5 {{ $I5 ? 'booked' : '' }}">I5
                                <input type="checkbox" class="seat-name " data-nums="seatI5" value="I5"
                                    name="seatName[]" id="I5">
                            </div>
                            <input type="checkbox" class="seat-price seatI5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I4 = collect($seats)
                                    ->where('seat', 'I4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I4 {{ $I4 ? 'booked' : '' }}">I4
                                <input type="checkbox" class="seat-name " data-nums="seatI4" value="I4"
                                    name="seatName[]" id="I4">
                            </div>
                            <input type="checkbox" class="seat-price seatI4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I3 = collect($seats)
                                    ->where('seat', 'I3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I3 {{ $I3 ? 'booked' : '' }}">I3
                                <input type="checkbox" class="seat-name " data-nums="seatI3" value="I3"
                                    name="seatName[]" id="I3">
                            </div>
                            <input type="checkbox" class="seat-price seatI3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I2 = collect($seats)
                                    ->where('seat', 'I2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I2 {{ $I2 ? 'booked' : '' }}">I2
                                <input type="checkbox" class="seat-name " data-nums="seatI2" value="I2"
                                    name="seatName[]" id="I2">
                            </div>
                            <input type="checkbox" class="seat-price seatI2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $I1 = collect($seats)
                                    ->where('seat', 'I1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item I1 {{ $I1 ? 'booked' : '' }}">I1
                                <input type="checkbox" class="seat-name " data-nums="seatI1" value="I1"
                                    name="seatName[]" id="I1">
                            </div>
                            <input type="checkbox" class="seat-price seatI1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $H22 = collect($seats)
                                    ->where('seat', 'H22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H22 {{ $H22 ? 'booked' : '' }}">H22
                                <input type="checkbox" class="seat-name " data-nums="seatH22" value="H22"
                                    name="seatName[]" id="H22">
                            </div>
                            <input type="checkbox" class="seat-price seatH22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H21 = collect($seats)
                                    ->where('seat', 'H21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H21 {{ $H21 ? 'booked' : '' }}">H21
                                <input type="checkbox" class="seat-name " data-nums="seatH21" value="H21"
                                    name="seatName[]" id="H21">
                            </div>
                            <input type="checkbox" class="seat-price seatH21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H20 = collect($seats)
                                    ->where('seat', 'H20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H20 {{ $H20 ? 'booked' : '' }}">H20
                                <input type="checkbox" class="seat-name " data-nums="seatH20" value="H20"
                                    name="seatName[]" id="H20">
                            </div>
                            <input type="checkbox" class="seat-price seatH20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H19 = collect($seats)
                                    ->where('seat', 'H19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H19 {{ $H19 ? 'booked' : '' }}">H19
                                <input type="checkbox" class="seat-name " data-nums="seatH19" value="H19"
                                    name="seatName[]" id="H19">
                            </div>
                            <input type="checkbox" class="seat-price seatH19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H18 = collect($seats)
                                    ->where('seat', 'H18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H18 {{ $H18 ? 'booked' : '' }}">H18
                                <input type="checkbox" class="seat-name " data-nums="seatH18" value="H18"
                                    name="seatName[]" id="H18">
                            </div>
                            <input type="checkbox" class="seat-price seatH18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H17 = collect($seats)
                                    ->where('seat', 'H17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H17 {{ $H17 ? 'booked' : '' }}">H17
                                <input type="checkbox" class="seat-name " data-nums="seatH17" value="H17"
                                    name="seatName[]" id="H17">
                            </div>
                            <input type="checkbox" class="seat-price seatH17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H16 = collect($seats)
                                    ->where('seat', 'H16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H16 {{ $H16 ? 'booked' : '' }}">H16
                                <input type="checkbox" class="seat-name " data-nums="seatH16" value="H16"
                                    name="seatName[]" id="H16">
                            </div>
                            <input type="checkbox" class="seat-price seatH16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H15 = collect($seats)
                                    ->where('seat', 'H15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H15 {{ $H15 ? 'booked' : '' }}">H15
                                <input type="checkbox" class="seat-name " data-nums="seatH15" value="H15"
                                    name="seatName[]" id="H15">
                            </div>
                            <input type="checkbox" class="seat-price seatH15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H14 = collect($seats)
                                    ->where('seat', 'H14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H14 {{ $H14 ? 'booked' : '' }}">H14
                                <input type="checkbox" class="seat-name " data-nums="seatH14" value="H14"
                                    name="seatName[]" id="H14">
                            </div>
                            <input type="checkbox" class="seat-price seatH14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H13 = collect($seats)
                                    ->where('seat', 'H13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H13 {{ $H13 ? 'booked' : '' }}">H13
                                <input type="checkbox" class="seat-name " data-nums="seatH13" value="H13"
                                    name="seatName[]" id="H13">
                            </div>
                            <input type="checkbox" class="seat-price seatH13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H12 = collect($seats)
                                    ->where('seat', 'H12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H12 {{ $H12 ? 'booked' : '' }}">H12
                                <input type="checkbox" class="seat-name " data-nums="seatH12" value="H12"
                                    name="seatName[]" id="H12">
                            </div>
                            <input type="checkbox" class="seat-price seatH12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H11 = collect($seats)
                                    ->where('seat', 'H11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H11 {{ $H11 ? 'booked' : '' }}">H11
                                <input type="checkbox" class="seat-name " data-nums="seatH11" value="H11"
                                    name="seatName[]" id="H11">
                            </div>
                            <input type="checkbox" class="seat-price seatH11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H10 = collect($seats)
                                    ->where('seat', 'H10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H10 {{ $H10 ? 'booked' : '' }}">H10
                                <input type="checkbox" class="seat-name " data-nums="seatH10" value="H10"
                                    name="seatName[]" id="H10">
                            </div>
                            <input type="checkbox" class="seat-price seatH10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H9 = collect($seats)
                                    ->where('seat', 'H9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H9 {{ $H9 ? 'booked' : '' }}">H9
                                <input type="checkbox" class="seat-name " data-nums="seatH9" value="H9"
                                    name="seatName[]" id="H9">
                            </div>
                            <input type="checkbox" class="seat-price seatH9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H8 = collect($seats)
                                    ->where('seat', 'H8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H8 {{ $H8 ? 'booked' : '' }}">H8
                                <input type="checkbox" class="seat-name " data-nums="seatH8" value="H8"
                                    name="seatName[]" id="H8">
                            </div>
                            <input type="checkbox" class="seat-price seatH8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H7 = collect($seats)
                                    ->where('seat', 'H7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H7 {{ $H7 ? 'booked' : '' }}">H7
                                <input type="checkbox" class="seat-name " data-nums="seatH7" value="H7"
                                    name="seatName[]" id="H7">
                            </div>
                            <input type="checkbox" class="seat-price seatH7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H6 = collect($seats)
                                    ->where('seat', 'H6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H6 {{ $H6 ? 'booked' : '' }}">H6
                                <input type="checkbox" class="seat-name " data-nums="seatH6" value="H6"
                                    name="seatName[]" id="H6">
                            </div>
                            <input type="checkbox" class="seat-price seatH6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H5 = collect($seats)
                                    ->where('seat', 'H5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H5 {{ $H5 ? 'booked' : '' }}">H5
                                <input type="checkbox" class="seat-name " data-nums="seatH5" value="H5"
                                    name="seatName[]" id="H5">
                            </div>
                            <input type="checkbox" class="seat-price seatH5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H4 = collect($seats)
                                    ->where('seat', 'H4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H4 {{ $H4 ? 'booked' : '' }}">H4
                                <input type="checkbox" class="seat-name " data-nums="seatH4" value="H4"
                                    name="seatName[]" id="H4">
                            </div>
                            <input type="checkbox" class="seat-price seatH4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H3 = collect($seats)
                                    ->where('seat', 'H3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H3 {{ $H3 ? 'booked' : '' }}">H3
                                <input type="checkbox" class="seat-name " data-nums="seatH3" value="H3"
                                    name="seatName[]" id="H3">
                            </div>
                            <input type="checkbox" class="seat-price seatH3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H2 = collect($seats)
                                    ->where('seat', 'H2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H2 {{ $H2 ? 'booked' : '' }}">H2
                                <input type="checkbox" class="seat-name " data-nums="seatH2" value="H2"
                                    name="seatName[]" id="H2">
                            </div>
                            <input type="checkbox" class="seat-price seatH2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $H1 = collect($seats)
                                    ->where('seat', 'H1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item H1 {{ $H1 ? 'booked' : '' }}">H1
                                <input type="checkbox" class="seat-name " data-nums="seatH1" value="H1"
                                    name="seatName[]" id="H1">
                            </div>
                            <input type="checkbox" class="seat-price seatH1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $G22 = collect($seats)
                                    ->where('seat', 'G22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G22 {{ $G22 ? 'booked' : '' }}">G22
                                <input type="checkbox" class="seat-name " data-nums="seatG22" value="G22"
                                    name="seatName[]" id="G22">
                            </div>
                            <input type="checkbox" class="seat-price seatG22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G21 = collect($seats)
                                    ->where('seat', 'G21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G21 {{ $G21 ? 'booked' : '' }}">G21
                                <input type="checkbox" class="seat-name " data-nums="seatG21" value="G21"
                                    name="seatName[]" id="G21">
                            </div>
                            <input type="checkbox" class="seat-price seatG21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G20 = collect($seats)
                                    ->where('seat', 'G20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G20 {{ $G20 ? 'booked' : '' }}">G20
                                <input type="checkbox" class="seat-name " data-nums="seatG20" value="G20"
                                    name="seatName[]" id="G20">
                            </div>
                            <input type="checkbox" class="seat-price seatG20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G19 = collect($seats)
                                    ->where('seat', 'G19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G19 {{ $G19 ? 'booked' : '' }}">G19
                                <input type="checkbox" class="seat-name " data-nums="seatG19" value="G19"
                                    name="seatName[]" id="G19">
                            </div>
                            <input type="checkbox" class="seat-price seatG19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G18 = collect($seats)
                                    ->where('seat', 'G18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G18 {{ $G18 ? 'booked' : '' }}">G18
                                <input type="checkbox" class="seat-name " data-nums="seatG18" value="G18"
                                    name="seatName[]" id="G18">
                            </div>
                            <input type="checkbox" class="seat-price seatG18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G17 = collect($seats)
                                    ->where('seat', 'G17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G17 {{ $G17 ? 'booked' : '' }}">G17
                                <input type="checkbox" class="seat-name " data-nums="seatG17" value="G17"
                                    name="seatName[]" id="G17">
                            </div>
                            <input type="checkbox" class="seat-price seatG17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G16 = collect($seats)
                                    ->where('seat', 'G16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G16 {{ $G16 ? 'booked' : '' }}">G16
                                <input type="checkbox" class="seat-name " data-nums="seatG16" value="G16"
                                    name="seatName[]" id="G16">
                            </div>
                            <input type="checkbox" class="seat-price seatG16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G15 = collect($seats)
                                    ->where('seat', 'G15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G15 {{ $G15 ? 'booked' : '' }}">G15
                                <input type="checkbox" class="seat-name " data-nums="seatG15" value="G15"
                                    name="seatName[]" id="G15">
                            </div>
                            <input type="checkbox" class="seat-price seatG15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G14 = collect($seats)
                                    ->where('seat', 'G14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G14 {{ $G14 ? 'booked' : '' }}">G14
                                <input type="checkbox" class="seat-name " data-nums="seatG14" value="G14"
                                    name="seatName[]" id="G14">
                            </div>
                            <input type="checkbox" class="seat-price seatG14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G13 = collect($seats)
                                    ->where('seat', 'G13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G13 {{ $G13 ? 'booked' : '' }}">G13
                                <input type="checkbox" class="seat-name " data-nums="seatG13" value="G13"
                                    name="seatName[]" id="G13">
                            </div>
                            <input type="checkbox" class="seat-price seatG13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G12 = collect($seats)
                                    ->where('seat', 'G12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G12 {{ $G12 ? 'booked' : '' }}">G12
                                <input type="checkbox" class="seat-name " data-nums="seatG12" value="G12"
                                    name="seatName[]" id="G12">
                            </div>
                            <input type="checkbox" class="seat-price seatG12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G11 = collect($seats)
                                    ->where('seat', 'G11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G11 {{ $G11 ? 'booked' : '' }}">G11
                                <input type="checkbox" class="seat-name " data-nums="seatG11" value="G11"
                                    name="seatName[]" id="G11">
                            </div>
                            <input type="checkbox" class="seat-price seatG11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G10 = collect($seats)
                                    ->where('seat', 'G10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G10 {{ $G10 ? 'booked' : '' }}">G10
                                <input type="checkbox" class="seat-name " data-nums="seatG10" value="G10"
                                    name="seatName[]" id="G10">
                            </div>
                            <input type="checkbox" class="seat-price seatG10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G9 = collect($seats)
                                    ->where('seat', 'G9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G9 {{ $G9 ? 'booked' : '' }}">G9
                                <input type="checkbox" class="seat-name " data-nums="seatG9" value="G9"
                                    name="seatName[]" id="G9">
                            </div>
                            <input type="checkbox" class="seat-price seatG9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G8 = collect($seats)
                                    ->where('seat', 'G8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G8 {{ $G8 ? 'booked' : '' }}">G8
                                <input type="checkbox" class="seat-name " data-nums="seatG8" value="G8"
                                    name="seatName[]" id="G8">
                            </div>
                            <input type="checkbox" class="seat-price seatG8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G7 = collect($seats)
                                    ->where('seat', 'G7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G7 {{ $G7 ? 'booked' : '' }}">G7
                                <input type="checkbox" class="seat-name " data-nums="seatG7" value="G7"
                                    name="seatName[]" id="G7">
                            </div>
                            <input type="checkbox" class="seat-price seatG7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G6 = collect($seats)
                                    ->where('seat', 'G6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G6 {{ $G6 ? 'booked' : '' }}">G6
                                <input type="checkbox" class="seat-name " data-nums="seatG6" value="G6"
                                    name="seatName[]" id="G6">
                            </div>
                            <input type="checkbox" class="seat-price seatG6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G5 = collect($seats)
                                    ->where('seat', 'G5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G5 {{ $G5 ? 'booked' : '' }}">G5
                                <input type="checkbox" class="seat-name " data-nums="seatG5" value="G5"
                                    name="seatName[]" id="G5">
                            </div>
                            <input type="checkbox" class="seat-price seatG5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G4 = collect($seats)
                                    ->where('seat', 'G4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G4 {{ $G4 ? 'booked' : '' }}">G4
                                <input type="checkbox" class="seat-name " data-nums="seatG4" value="G4"
                                    name="seatName[]" id="G4">
                            </div>
                            <input type="checkbox" class="seat-price seatG4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G3 = collect($seats)
                                    ->where('seat', 'G3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G3 {{ $G3 ? 'booked' : '' }}">G3
                                <input type="checkbox" class="seat-name " data-nums="seatG3" value="G3"
                                    name="seatName[]" id="G3">
                            </div>
                            <input type="checkbox" class="seat-price seatG3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G2 = collect($seats)
                                    ->where('seat', 'G2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G2 {{ $G2 ? 'booked' : '' }}">G2
                                <input type="checkbox" class="seat-name " data-nums="seatG2" value="G2"
                                    name="seatName[]" id="G2">
                            </div>
                            <input type="checkbox" class="seat-price seatG2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $G1 = collect($seats)
                                    ->where('seat', 'G1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item G1 {{ $G1 ? 'booked' : '' }}">G1
                                <input type="checkbox" class="seat-name " data-nums="seatG1" value="G1"
                                    name="seatName[]" id="G1">
                            </div>
                            <input type="checkbox" class="seat-price seatG1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $F22 = collect($seats)
                                    ->where('seat', 'F22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F22 {{ $F22 ? 'booked' : '' }}">F22
                                <input type="checkbox" class="seat-name " data-nums="seatF22" value="F22"
                                    name="seatName[]" id="F22">
                            </div>
                            <input type="checkbox" class="seat-price seatF22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F21 = collect($seats)
                                    ->where('seat', 'F21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F21 {{ $F21 ? 'booked' : '' }}">F21
                                <input type="checkbox" class="seat-name " data-nums="seatF21" value="F21"
                                    name="seatName[]" id="F21">
                            </div>
                            <input type="checkbox" class="seat-price seatF21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F20 = collect($seats)
                                    ->where('seat', 'F20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F20 {{ $F20 ? 'booked' : '' }}">F20
                                <input type="checkbox" class="seat-name " data-nums="seatF20" value="F20"
                                    name="seatName[]" id="F20">
                            </div>
                            <input type="checkbox" class="seat-price seatF20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F19 = collect($seats)
                                    ->where('seat', 'F19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F19 {{ $F19 ? 'booked' : '' }}">F19
                                <input type="checkbox" class="seat-name " data-nums="seatF19" value="F19"
                                    name="seatName[]" id="F19">
                            </div>
                            <input type="checkbox" class="seat-price seatF19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F18 = collect($seats)
                                    ->where('seat', 'F18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F18 {{ $F18 ? 'booked' : '' }}">F18
                                <input type="checkbox" class="seat-name " data-nums="seatF18" value="F18"
                                    name="seatName[]" id="F18">
                            </div>
                            <input type="checkbox" class="seat-price seatF18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F17 = collect($seats)
                                    ->where('seat', 'F17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F17 {{ $F17 ? 'booked' : '' }}">F17
                                <input type="checkbox" class="seat-name " data-nums="seatF17" value="F17"
                                    name="seatName[]" id="F17">
                            </div>
                            <input type="checkbox" class="seat-price seatF17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F16 = collect($seats)
                                    ->where('seat', 'F16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F16 {{ $F16 ? 'booked' : '' }}">F16
                                <input type="checkbox" class="seat-name " data-nums="seatF16" value="F16"
                                    name="seatName[]" id="F16">
                            </div>
                            <input type="checkbox" class="seat-price seatF16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F15 = collect($seats)
                                    ->where('seat', 'F15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F15 {{ $F15 ? 'booked' : '' }}">F15
                                <input type="checkbox" class="seat-name " data-nums="seatF15" value="F15"
                                    name="seatName[]" id="F15">
                            </div>
                            <input type="checkbox" class="seat-price seatF15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F14 = collect($seats)
                                    ->where('seat', 'F14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F14 {{ $F14 ? 'booked' : '' }}">F14
                                <input type="checkbox" class="seat-name " data-nums="seatF14" value="F14"
                                    name="seatName[]" id="F14">
                            </div>
                            <input type="checkbox" class="seat-price seatF14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F13 = collect($seats)
                                    ->where('seat', 'F13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F13 {{ $F13 ? 'booked' : '' }}">F13
                                <input type="checkbox" class="seat-name " data-nums="seatF13" value="F13"
                                    name="seatName[]" id="F13">
                            </div>
                            <input type="checkbox" class="seat-price seatF13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F12 = collect($seats)
                                    ->where('seat', 'F12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F12 {{ $F12 ? 'booked' : '' }}">F12
                                <input type="checkbox" class="seat-name " data-nums="seatF12" value="F12"
                                    name="seatName[]" id="F12">
                            </div>
                            <input type="checkbox" class="seat-price seatF12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F11 = collect($seats)
                                    ->where('seat', 'F11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F11 {{ $F11 ? 'booked' : '' }}">F11
                                <input type="checkbox" class="seat-name " data-nums="seatF11" value="F11"
                                    name="seatName[]" id="F11">
                            </div>
                            <input type="checkbox" class="seat-price seatF11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F10 = collect($seats)
                                    ->where('seat', 'F10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F10 {{ $F10 ? 'booked' : '' }}">F10
                                <input type="checkbox" class="seat-name " data-nums="seatF10" value="F10"
                                    name="seatName[]" id="F10">
                            </div>
                            <input type="checkbox" class="seat-price seatF10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F9 = collect($seats)
                                    ->where('seat', 'F9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F9 {{ $F9 ? 'booked' : '' }}">F9
                                <input type="checkbox" class="seat-name " data-nums="seatF9" value="F9"
                                    name="seatName[]" id="F9">
                            </div>
                            <input type="checkbox" class="seat-price seatF9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F8 = collect($seats)
                                    ->where('seat', 'F8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F8 {{ $F8 ? 'booked' : '' }}">F8
                                <input type="checkbox" class="seat-name " data-nums="seatF8" value="F8"
                                    name="seatName[]" id="F8">
                            </div>
                            <input type="checkbox" class="seat-price seatF8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F7 = collect($seats)
                                    ->where('seat', 'F7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F7 {{ $F7 ? 'booked' : '' }}">F7
                                <input type="checkbox" class="seat-name " data-nums="seatF7" value="F7"
                                    name="seatName[]" id="F7">
                            </div>
                            <input type="checkbox" class="seat-price seatF7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F6 = collect($seats)
                                    ->where('seat', 'F6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F6 {{ $F6 ? 'booked' : '' }}">F6
                                <input type="checkbox" class="seat-name " data-nums="seatF6" value="F6"
                                    name="seatName[]" id="F6">
                            </div>
                            <input type="checkbox" class="seat-price seatF6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F5 = collect($seats)
                                    ->where('seat', 'F5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F5 {{ $F5 ? 'booked' : '' }}">F5
                                <input type="checkbox" class="seat-name " data-nums="seatF5" value="F5"
                                    name="seatName[]" id="F5">
                            </div>
                            <input type="checkbox" class="seat-price seatF5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F4 = collect($seats)
                                    ->where('seat', 'F4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F4 {{ $F4 ? 'booked' : '' }}">F4
                                <input type="checkbox" class="seat-name " data-nums="seatF4" value="F4"
                                    name="seatName[]" id="F4">
                            </div>
                            <input type="checkbox" class="seat-price seatF4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F3 = collect($seats)
                                    ->where('seat', 'F3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F3 {{ $F3 ? 'booked' : '' }}">F3
                                <input type="checkbox" class="seat-name " data-nums="seatF3" value="F3"
                                    name="seatName[]" id="F3">
                            </div>
                            <input type="checkbox" class="seat-price seatF3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F2 = collect($seats)
                                    ->where('seat', 'F2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F2 {{ $F2 ? 'booked' : '' }}">F2
                                <input type="checkbox" class="seat-name " data-nums="seatF2" value="F2"
                                    name="seatName[]" id="F2">
                            </div>
                            <input type="checkbox" class="seat-price seatF2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $F1 = collect($seats)
                                    ->where('seat', 'F1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item F1 {{ $F1 ? 'booked' : '' }}">F1
                                <input type="checkbox" class="seat-name " data-nums="seatF1" value="F1"
                                    name="seatName[]" id="F1">
                            </div>
                            <input type="checkbox" class="seat-price seatF1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $E22 = collect($seats)
                                    ->where('seat', 'E22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E22 {{ $E22 ? 'booked' : '' }}">E22
                                <input type="checkbox" class="seat-name " data-nums="seatE22" value="E22"
                                    name="seatName[]" id="E22">
                            </div>
                            <input type="checkbox" class="seat-price seatE22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E21 = collect($seats)
                                    ->where('seat', 'E21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E21 {{ $E21 ? 'booked' : '' }}">E21
                                <input type="checkbox" class="seat-name " data-nums="seatE21" value="E21"
                                    name="seatName[]" id="E21">
                            </div>
                            <input type="checkbox" class="seat-price seatE21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E20 = collect($seats)
                                    ->where('seat', 'E20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E20 {{ $E20 ? 'booked' : '' }}">E20
                                <input type="checkbox" class="seat-name " data-nums="seatE20" value="E20"
                                    name="seatName[]" id="E20">
                            </div>
                            <input type="checkbox" class="seat-price seatE20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E19 = collect($seats)
                                    ->where('seat', 'E19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E19 {{ $E19 ? 'booked' : '' }}">E19
                                <input type="checkbox" class="seat-name " data-nums="seatE19" value="E19"
                                    name="seatName[]" id="E19">
                            </div>
                            <input type="checkbox" class="seat-price seatE19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E18 = collect($seats)
                                    ->where('seat', 'E18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E18 {{ $E18 ? 'booked' : '' }}">E18
                                <input type="checkbox" class="seat-name " data-nums="seatE18" value="E18"
                                    name="seatName[]" id="E18">
                            </div>
                            <input type="checkbox" class="seat-price seatE18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E17 = collect($seats)
                                    ->where('seat', 'E17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E17 {{ $E17 ? 'booked' : '' }}">E17
                                <input type="checkbox" class="seat-name " data-nums="seatE17" value="E17"
                                    name="seatName[]" id="E17">
                            </div>
                            <input type="checkbox" class="seat-price seatE17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E16 = collect($seats)
                                    ->where('seat', 'E16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E16 {{ $E16 ? 'booked' : '' }}">E16
                                <input type="checkbox" class="seat-name " data-nums="seatE16" value="E16"
                                    name="seatName[]" id="E16">
                            </div>
                            <input type="checkbox" class="seat-price seatE16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E15 = collect($seats)
                                    ->where('seat', 'E15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E15 {{ $E15 ? 'booked' : '' }}">E15
                                <input type="checkbox" class="seat-name " data-nums="seatE15" value="E15"
                                    name="seatName[]" id="E15">
                            </div>
                            <input type="checkbox" class="seat-price seatE15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E14 = collect($seats)
                                    ->where('seat', 'E14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E14 {{ $E14 ? 'booked' : '' }}">E14
                                <input type="checkbox" class="seat-name " data-nums="seatE14" value="E14"
                                    name="seatName[]" id="E14">
                            </div>
                            <input type="checkbox" class="seat-price seatE14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E13 = collect($seats)
                                    ->where('seat', 'E13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E13 {{ $E13 ? 'booked' : '' }}">E13
                                <input type="checkbox" class="seat-name " data-nums="seatE13" value="E13"
                                    name="seatName[]" id="E13">
                            </div>
                            <input type="checkbox" class="seat-price seatE13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E12 = collect($seats)
                                    ->where('seat', 'E12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E12 {{ $E12 ? 'booked' : '' }}">E12
                                <input type="checkbox" class="seat-name " data-nums="seatE12" value="E12"
                                    name="seatName[]" id="E12">
                            </div>
                            <input type="checkbox" class="seat-price seatE12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E11 = collect($seats)
                                    ->where('seat', 'E11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E11 {{ $E11 ? 'booked' : '' }}">E11
                                <input type="checkbox" class="seat-name " data-nums="seatE11" value="E11"
                                    name="seatName[]" id="E11">
                            </div>
                            <input type="checkbox" class="seat-price seatE11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E10 = collect($seats)
                                    ->where('seat', 'E10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E10 {{ $E10 ? 'booked' : '' }}">E10
                                <input type="checkbox" class="seat-name " data-nums="seatE10" value="E10"
                                    name="seatName[]" id="E10">
                            </div>
                            <input type="checkbox" class="seat-price seatE10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E9 = collect($seats)
                                    ->where('seat', 'E9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E9 {{ $E9 ? 'booked' : '' }}">E9
                                <input type="checkbox" class="seat-name " data-nums="seatE9" value="E9"
                                    name="seatName[]" id="E9">
                            </div>
                            <input type="checkbox" class="seat-price seatE9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E8 = collect($seats)
                                    ->where('seat', 'E8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E8 {{ $E8 ? 'booked' : '' }}">E8
                                <input type="checkbox" class="seat-name " data-nums="seatE8" value="E8"
                                    name="seatName[]" id="E8">
                            </div>
                            <input type="checkbox" class="seat-price seatE8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E7 = collect($seats)
                                    ->where('seat', 'E7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E7 {{ $E7 ? 'booked' : '' }}">E7
                                <input type="checkbox" class="seat-name " data-nums="seatE7" value="E7"
                                    name="seatName[]" id="E7">
                            </div>
                            <input type="checkbox" class="seat-price seatE7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E6 = collect($seats)
                                    ->where('seat', 'E6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E6 {{ $E6 ? 'booked' : '' }}">E6
                                <input type="checkbox" class="seat-name " data-nums="seatE6" value="E6"
                                    name="seatName[]" id="E6">
                            </div>
                            <input type="checkbox" class="seat-price seatE6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E5 = collect($seats)
                                    ->where('seat', 'E5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E5 {{ $E5 ? 'booked' : '' }}">E5
                                <input type="checkbox" class="seat-name " data-nums="seatE5" value="E5"
                                    name="seatName[]" id="E5">
                            </div>
                            <input type="checkbox" class="seat-price seatE5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E4 = collect($seats)
                                    ->where('seat', 'E4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E4 {{ $E4 ? 'booked' : '' }}">E4
                                <input type="checkbox" class="seat-name " data-nums="seatE4" value="E4"
                                    name="seatName[]" id="E4">
                            </div>
                            <input type="checkbox" class="seat-price seatE4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E3 = collect($seats)
                                    ->where('seat', 'E3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E3 {{ $E3 ? 'booked' : '' }}">E3
                                <input type="checkbox" class="seat-name " data-nums="seatE3" value="E3"
                                    name="seatName[]" id="E3">
                            </div>
                            <input type="checkbox" class="seat-price seatE3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E2 = collect($seats)
                                    ->where('seat', 'E2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E2 {{ $E2 ? 'booked' : '' }}">E2
                                <input type="checkbox" class="seat-name " data-nums="seatE2" value="E2"
                                    name="seatName[]" id="E2">
                            </div>
                            <input type="checkbox" class="seat-price seatE2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $E1 = collect($seats)
                                    ->where('seat', 'E1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item E1 {{ $E1 ? 'booked' : '' }}">E1
                                <input type="checkbox" class="seat-name " data-nums="seatE1" value="E1"
                                    name="seatName[]" id="E1">
                            </div>
                            <input type="checkbox" class="seat-price seatE1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $D22 = collect($seats)
                                    ->where('seat', 'D22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D22 {{ $D22 ? 'booked' : '' }}">D22
                                <input type="checkbox" class="seat-name " data-nums="seatD22" value="D22"
                                    name="seatName[]" id="D22">
                            </div>
                            <input type="checkbox" class="seat-price seatD22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D21 = collect($seats)
                                    ->where('seat', 'D21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D21 {{ $D21 ? 'booked' : '' }}">D21
                                <input type="checkbox" class="seat-name " data-nums="seatD21" value="D21"
                                    name="seatName[]" id="D21">
                            </div>
                            <input type="checkbox" class="seat-price seatD21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D20 = collect($seats)
                                    ->where('seat', 'D20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D20 {{ $D20 ? 'booked' : '' }}">D20
                                <input type="checkbox" class="seat-name " data-nums="seatD20" value="D20"
                                    name="seatName[]" id="D20">
                            </div>
                            <input type="checkbox" class="seat-price seatD20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D19 = collect($seats)
                                    ->where('seat', 'D19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D19 {{ $D19 ? 'booked' : '' }}">D19
                                <input type="checkbox" class="seat-name " data-nums="seatD19" value="D19"
                                    name="seatName[]" id="D19">
                            </div>
                            <input type="checkbox" class="seat-price seatD19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D18 = collect($seats)
                                    ->where('seat', 'D18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D18 {{ $D18 ? 'booked' : '' }}">D18
                                <input type="checkbox" class="seat-name " data-nums="seatD18" value="D18"
                                    name="seatName[]" id="D18">
                            </div>
                            <input type="checkbox" class="seat-price seatD18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D17 = collect($seats)
                                    ->where('seat', 'D17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D17 {{ $D17 ? 'booked' : '' }}">D17
                                <input type="checkbox" class="seat-name " data-nums="seatD17" value="D17"
                                    name="seatName[]" id="D17">
                            </div>
                            <input type="checkbox" class="seat-price seatD17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D16 = collect($seats)
                                    ->where('seat', 'D16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D16 {{ $D16 ? 'booked' : '' }}">D16
                                <input type="checkbox" class="seat-name " data-nums="seatD16" value="D16"
                                    name="seatName[]" id="D16">
                            </div>
                            <input type="checkbox" class="seat-price seatD16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D15 = collect($seats)
                                    ->where('seat', 'D15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D15 {{ $D15 ? 'booked' : '' }}">D15
                                <input type="checkbox" class="seat-name " data-nums="seatD15" value="D15"
                                    name="seatName[]" id="D15">
                            </div>
                            <input type="checkbox" class="seat-price seatD15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D14 = collect($seats)
                                    ->where('seat', 'D14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D14 {{ $D14 ? 'booked' : '' }}">D14
                                <input type="checkbox" class="seat-name " data-nums="seatD14" value="D14"
                                    name="seatName[]" id="D14">
                            </div>
                            <input type="checkbox" class="seat-price seatD14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D13 = collect($seats)
                                    ->where('seat', 'D13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D13 {{ $D13 ? 'booked' : '' }}">D13
                                <input type="checkbox" class="seat-name " data-nums="seatD13" value="D13"
                                    name="seatName[]" id="D13">
                            </div>
                            <input type="checkbox" class="seat-price seatD13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D12 = collect($seats)
                                    ->where('seat', 'D12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D12 {{ $D12 ? 'booked' : '' }}">D12
                                <input type="checkbox" class="seat-name " data-nums="seatD12" value="D12"
                                    name="seatName[]" id="D12">
                            </div>
                            <input type="checkbox" class="seat-price seatD12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D11 = collect($seats)
                                    ->where('seat', 'D11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D11 {{ $D11 ? 'booked' : '' }}">D11
                                <input type="checkbox" class="seat-name " data-nums="seatD11" value="D11"
                                    name="seatName[]" id="D11">
                            </div>
                            <input type="checkbox" class="seat-price seatD11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D10 = collect($seats)
                                    ->where('seat', 'D10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D10 {{ $D10 ? 'booked' : '' }}">D10
                                <input type="checkbox" class="seat-name " data-nums="seatD10" value="D10"
                                    name="seatName[]" id="D10">
                            </div>
                            <input type="checkbox" class="seat-price seatD10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D9 = collect($seats)
                                    ->where('seat', 'D9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D9 {{ $D9 ? 'booked' : '' }}">D9
                                <input type="checkbox" class="seat-name " data-nums="seatD9" value="D9"
                                    name="seatName[]" id="D9">
                            </div>
                            <input type="checkbox" class="seat-price seatD9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D8 = collect($seats)
                                    ->where('seat', 'D8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D8 {{ $D8 ? 'booked' : '' }}">D8
                                <input type="checkbox" class="seat-name " data-nums="seatD8" value="D8"
                                    name="seatName[]" id="D8">
                            </div>
                            <input type="checkbox" class="seat-price seatD8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D7 = collect($seats)
                                    ->where('seat', 'D7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D7 {{ $D7 ? 'booked' : '' }}">D7
                                <input type="checkbox" class="seat-name " data-nums="seatD7" value="D7"
                                    name="seatName[]" id="D7">
                            </div>
                            <input type="checkbox" class="seat-price seatD7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D6 = collect($seats)
                                    ->where('seat', 'D6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D6 {{ $D6 ? 'booked' : '' }}">D6
                                <input type="checkbox" class="seat-name " data-nums="seatD6" value="D6"
                                    name="seatName[]" id="D6">
                            </div>
                            <input type="checkbox" class="seat-price seatD6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D5 = collect($seats)
                                    ->where('seat', 'D5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D5 {{ $D5 ? 'booked' : '' }}">D5
                                <input type="checkbox" class="seat-name " data-nums="seatD5" value="D5"
                                    name="seatName[]" id="D5">
                            </div>
                            <input type="checkbox" class="seat-price seatD5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D4 = collect($seats)
                                    ->where('seat', 'D4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D4 {{ $D4 ? 'booked' : '' }}">D4
                                <input type="checkbox" class="seat-name " data-nums="seatD4" value="D4"
                                    name="seatName[]" id="D4">
                            </div>
                            <input type="checkbox" class="seat-price seatD4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D3 = collect($seats)
                                    ->where('seat', 'D3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D3 {{ $D3 ? 'booked' : '' }}">D3
                                <input type="checkbox" class="seat-name " data-nums="seatD3" value="D3"
                                    name="seatName[]" id="D3">
                            </div>
                            <input type="checkbox" class="seat-price seatD3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D2 = collect($seats)
                                    ->where('seat', 'D2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D2 {{ $D2 ? 'booked' : '' }}">D2
                                <input type="checkbox" class="seat-name " data-nums="seatD2" value="D2"
                                    name="seatName[]" id="D2">
                            </div>
                            <input type="checkbox" class="seat-price seatD2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $D1 = collect($seats)
                                    ->where('seat', 'D1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item D1 {{ $D1 ? 'booked' : '' }}">D1
                                <input type="checkbox" class="seat-name " data-nums="seatD1" value="D1"
                                    name="seatName[]" id="D1">
                            </div>
                            <input type="checkbox" class="seat-price seatD1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $C22 = collect($seats)
                                    ->where('seat', 'C22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C22 {{ $C22 ? 'booked' : '' }}">C22
                                <input type="checkbox" class="seat-name " data-nums="seatC22" value="C22"
                                    name="seatName[]" id="C22">
                            </div>
                            <input type="checkbox" class="seat-price seatC22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C21 = collect($seats)
                                    ->where('seat', 'C21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C21 {{ $C21 ? 'booked' : '' }}">C21
                                <input type="checkbox" class="seat-name " data-nums="seatC21" value="C21"
                                    name="seatName[]" id="C21">
                            </div>
                            <input type="checkbox" class="seat-price seatC21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C20 = collect($seats)
                                    ->where('seat', 'C20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C20 {{ $C20 ? 'booked' : '' }}">C20
                                <input type="checkbox" class="seat-name " data-nums="seatC20" value="C20"
                                    name="seatName[]" id="C20">
                            </div>
                            <input type="checkbox" class="seat-price seatC20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C19 = collect($seats)
                                    ->where('seat', 'C19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C19 {{ $C19 ? 'booked' : '' }}">C19
                                <input type="checkbox" class="seat-name " data-nums="seatC19" value="C19"
                                    name="seatName[]" id="C19">
                            </div>
                            <input type="checkbox" class="seat-price seatC19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C18 = collect($seats)
                                    ->where('seat', 'C18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C18 {{ $C18 ? 'booked' : '' }}">C18
                                <input type="checkbox" class="seat-name " data-nums="seatC18" value="C18"
                                    name="seatName[]" id="C18">
                            </div>
                            <input type="checkbox" class="seat-price seatC18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C17 = collect($seats)
                                    ->where('seat', 'C17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C17 {{ $C17 ? 'booked' : '' }}">C17
                                <input type="checkbox" class="seat-name " data-nums="seatC17" value="C17"
                                    name="seatName[]" id="C17">
                            </div>
                            <input type="checkbox" class="seat-price seatC17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C16 = collect($seats)
                                    ->where('seat', 'C16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C16 {{ $C16 ? 'booked' : '' }}">C16
                                <input type="checkbox" class="seat-name " data-nums="seatC16" value="C16"
                                    name="seatName[]" id="C16">
                            </div>
                            <input type="checkbox" class="seat-price seatC16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C15 = collect($seats)
                                    ->where('seat', 'C15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C15 {{ $C15 ? 'booked' : '' }}">C15
                                <input type="checkbox" class="seat-name " data-nums="seatC15" value="C15"
                                    name="seatName[]" id="C15">
                            </div>
                            <input type="checkbox" class="seat-price seatC15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C14 = collect($seats)
                                    ->where('seat', 'C14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C14 {{ $C14 ? 'booked' : '' }}">C14
                                <input type="checkbox" class="seat-name " data-nums="seatC14" value="C14"
                                    name="seatName[]" id="C14">
                            </div>
                            <input type="checkbox" class="seat-price seatC14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C13 = collect($seats)
                                    ->where('seat', 'C13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C13 {{ $C13 ? 'booked' : '' }}">C13
                                <input type="checkbox" class="seat-name " data-nums="seatC13" value="C13"
                                    name="seatName[]" id="C13">
                            </div>
                            <input type="checkbox" class="seat-price seatC13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C12 = collect($seats)
                                    ->where('seat', 'C12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C12 {{ $C12 ? 'booked' : '' }}">C12
                                <input type="checkbox" class="seat-name " data-nums="seatC12" value="C12"
                                    name="seatName[]" id="C12">
                            </div>
                            <input type="checkbox" class="seat-price seatC12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C11 = collect($seats)
                                    ->where('seat', 'C11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C11 {{ $C11 ? 'booked' : '' }}">C11
                                <input type="checkbox" class="seat-name " data-nums="seatC11" value="C11"
                                    name="seatName[]" id="C11">
                            </div>
                            <input type="checkbox" class="seat-price seatC11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C10 = collect($seats)
                                    ->where('seat', 'C10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C10 {{ $C10 ? 'booked' : '' }}">C10
                                <input type="checkbox" class="seat-name " data-nums="seatC10" value="C10"
                                    name="seatName[]" id="C10">
                            </div>
                            <input type="checkbox" class="seat-price seatC10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C9 = collect($seats)
                                    ->where('seat', 'C9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C9 {{ $C9 ? 'booked' : '' }}">C9
                                <input type="checkbox" class="seat-name " data-nums="seatC9" value="C9"
                                    name="seatName[]" id="C9">
                            </div>
                            <input type="checkbox" class="seat-price seatC9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C8 = collect($seats)
                                    ->where('seat', 'C8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C8 {{ $C8 ? 'booked' : '' }}">C8
                                <input type="checkbox" class="seat-name " data-nums="seatC8" value="C8"
                                    name="seatName[]" id="C8">
                            </div>
                            <input type="checkbox" class="seat-price seatC8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C7 = collect($seats)
                                    ->where('seat', 'C7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C7 {{ $C7 ? 'booked' : '' }}">C7
                                <input type="checkbox" class="seat-name " data-nums="seatC7" value="C7"
                                    name="seatName[]" id="C7">
                            </div>
                            <input type="checkbox" class="seat-price seatC7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C6 = collect($seats)
                                    ->where('seat', 'C6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C6 {{ $C6 ? 'booked' : '' }}">C6
                                <input type="checkbox" class="seat-name " data-nums="seatC6" value="C6"
                                    name="seatName[]" id="C6">
                            </div>
                            <input type="checkbox" class="seat-price seatC6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C5 = collect($seats)
                                    ->where('seat', 'C5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C5 {{ $C5 ? 'booked' : '' }}">C5
                                <input type="checkbox" class="seat-name " data-nums="seatC5" value="C5"
                                    name="seatName[]" id="C5">
                            </div>
                            <input type="checkbox" class="seat-price seatC5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C4 = collect($seats)
                                    ->where('seat', 'C4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C4 {{ $C4 ? 'booked' : '' }}">C4
                                <input type="checkbox" class="seat-name " data-nums="seatC4" value="C4"
                                    name="seatName[]" id="C4">
                            </div>
                            <input type="checkbox" class="seat-price seatC4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C3 = collect($seats)
                                    ->where('seat', 'C3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C3 {{ $C3 ? 'booked' : '' }}">C3
                                <input type="checkbox" class="seat-name " data-nums="seatC3" value="C3"
                                    name="seatName[]" id="C3">
                            </div>
                            <input type="checkbox" class="seat-price seatC3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C2 = collect($seats)
                                    ->where('seat', 'C2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C2 {{ $C2 ? 'booked' : '' }}">C2
                                <input type="checkbox" class="seat-name " data-nums="seatC2" value="C2"
                                    name="seatName[]" id="C2">
                            </div>
                            <input type="checkbox" class="seat-price seatC2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $C1 = collect($seats)
                                    ->where('seat', 'C1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item C1 {{ $C1 ? 'booked' : '' }}">C1
                                <input type="checkbox" class="seat-name " data-nums="seatC1" value="C1"
                                    name="seatName[]" id="C1">
                            </div>
                            <input type="checkbox" class="seat-price seatC1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $B22 = collect($seats)
                                    ->where('seat', 'B22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B22 {{ $B22 ? 'booked' : '' }}">B22
                                <input type="checkbox" class="seat-name " data-nums="seatB22" value="B22"
                                    name="seatName[]" id="B22">
                            </div>
                            <input type="checkbox" class="seat-price seatB22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B21 = collect($seats)
                                    ->where('seat', 'B21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B21 {{ $B21 ? 'booked' : '' }}">B21
                                <input type="checkbox" class="seat-name " data-nums="seatB21" value="B21"
                                    name="seatName[]" id="B21">
                            </div>
                            <input type="checkbox" class="seat-price seatB21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B20 = collect($seats)
                                    ->where('seat', 'B20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B20 {{ $B20 ? 'booked' : '' }}">B20
                                <input type="checkbox" class="seat-name " data-nums="seatB20" value="B20"
                                    name="seatName[]" id="B20">
                            </div>
                            <input type="checkbox" class="seat-price seatB20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B19 = collect($seats)
                                    ->where('seat', 'B19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B19 {{ $B19 ? 'booked' : '' }}">B19
                                <input type="checkbox" class="seat-name " data-nums="seatB19" value="B19"
                                    name="seatName[]" id="B19">
                            </div>
                            <input type="checkbox" class="seat-price seatB19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B18 = collect($seats)
                                    ->where('seat', 'B18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B18 {{ $B18 ? 'booked' : '' }}">B18
                                <input type="checkbox" class="seat-name " data-nums="seatB18" value="B18"
                                    name="seatName[]" id="B18">
                            </div>
                            <input type="checkbox" class="seat-price seatB18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B17 = collect($seats)
                                    ->where('seat', 'B17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B17 {{ $B17 ? 'booked' : '' }}">B17
                                <input type="checkbox" class="seat-name " data-nums="seatB17" value="B17"
                                    name="seatName[]" id="B17">
                            </div>
                            <input type="checkbox" class="seat-price seatB17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B16 = collect($seats)
                                    ->where('seat', 'B16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B16 {{ $B16 ? 'booked' : '' }}">B16
                                <input type="checkbox" class="seat-name " data-nums="seatB16" value="B16"
                                    name="seatName[]" id="B16">
                            </div>
                            <input type="checkbox" class="seat-price seatB16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B15 = collect($seats)
                                    ->where('seat', 'B15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B15 {{ $B15 ? 'booked' : '' }}">B15
                                <input type="checkbox" class="seat-name " data-nums="seatB15" value="B15"
                                    name="seatName[]" id="B15">
                            </div>
                            <input type="checkbox" class="seat-price seatB15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B14 = collect($seats)
                                    ->where('seat', 'B14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B14 {{ $B14 ? 'booked' : '' }}">B14
                                <input type="checkbox" class="seat-name " data-nums="seatB14" value="B14"
                                    name="seatName[]" id="B14">
                            </div>
                            <input type="checkbox" class="seat-price seatB14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B13 = collect($seats)
                                    ->where('seat', 'B13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B13 {{ $B13 ? 'booked' : '' }}">B13
                                <input type="checkbox" class="seat-name " data-nums="seatB13" value="B13"
                                    name="seatName[]" id="B13">
                            </div>
                            <input type="checkbox" class="seat-price seatB13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B12 = collect($seats)
                                    ->where('seat', 'B12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B12 {{ $B12 ? 'booked' : '' }}">B12
                                <input type="checkbox" class="seat-name " data-nums="seatB12" value="B12"
                                    name="seatName[]" id="B12">
                            </div>
                            <input type="checkbox" class="seat-price seatB12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B11 = collect($seats)
                                    ->where('seat', 'B11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B11 {{ $B11 ? 'booked' : '' }}">B11
                                <input type="checkbox" class="seat-name " data-nums="seatB11" value="B11"
                                    name="seatName[]" id="B11">
                            </div>
                            <input type="checkbox" class="seat-price seatB11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B10 = collect($seats)
                                    ->where('seat', 'B10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B10 {{ $B10 ? 'booked' : '' }}">B10
                                <input type="checkbox" class="seat-name " data-nums="seatB10" value="B10"
                                    name="seatName[]" id="B10">
                            </div>
                            <input type="checkbox" class="seat-price seatB10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B9 = collect($seats)
                                    ->where('seat', 'B9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B9 {{ $B9 ? 'booked' : '' }}">B9
                                <input type="checkbox" class="seat-name " data-nums="seatB9" value="B9"
                                    name="seatName[]" id="B9">
                            </div>
                            <input type="checkbox" class="seat-price seatB9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B8 = collect($seats)
                                    ->where('seat', 'B8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B8 {{ $B8 ? 'booked' : '' }}">B8
                                <input type="checkbox" class="seat-name " data-nums="seatB8" value="B8"
                                    name="seatName[]" id="B8">
                            </div>
                            <input type="checkbox" class="seat-price seatB8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B7 = collect($seats)
                                    ->where('seat', 'B7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B7 {{ $B7 ? 'booked' : '' }}">B7
                                <input type="checkbox" class="seat-name " data-nums="seatB7" value="B7"
                                    name="seatName[]" id="B7">
                            </div>
                            <input type="checkbox" class="seat-price seatB7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B6 = collect($seats)
                                    ->where('seat', 'B6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B6 {{ $B6 ? 'booked' : '' }}">B6
                                <input type="checkbox" class="seat-name " data-nums="seatB6" value="B6"
                                    name="seatName[]" id="B6">
                            </div>
                            <input type="checkbox" class="seat-price seatB6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B5 = collect($seats)
                                    ->where('seat', 'B5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B5 {{ $B5 ? 'booked' : '' }}">B5
                                <input type="checkbox" class="seat-name " data-nums="seatB5" value="B5"
                                    name="seatName[]" id="B5">
                            </div>
                            <input type="checkbox" class="seat-price seatB5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B4 = collect($seats)
                                    ->where('seat', 'B4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B4 {{ $B4 ? 'booked' : '' }}">B4
                                <input type="checkbox" class="seat-name " data-nums="seatB4" value="B4"
                                    name="seatName[]" id="B4">
                            </div>
                            <input type="checkbox" class="seat-price seatB4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B3 = collect($seats)
                                    ->where('seat', 'B3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B3 {{ $B3 ? 'booked' : '' }}">B3
                                <input type="checkbox" class="seat-name " data-nums="seatB3" value="B3"
                                    name="seatName[]" id="B3">
                            </div>
                            <input type="checkbox" class="seat-price seatB3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B2 = collect($seats)
                                    ->where('seat', 'B2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B2 {{ $B2 ? 'booked' : '' }}">B2
                                <input type="checkbox" class="seat-name " data-nums="seatB2" value="B2"
                                    name="seatName[]" id="B2">
                            </div>
                            <input type="checkbox" class="seat-price seatB2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $B1 = collect($seats)
                                    ->where('seat', 'B1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item B1 {{ $B1 ? 'booked' : '' }}">B1
                                <input type="checkbox" class="seat-name " data-nums="seatB1" value="B1"
                                    name="seatName[]" id="B1">
                            </div>
                            <input type="checkbox" class="seat-price seatB1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                        </div>
                        <div class="grid mt-1">
                            @php
                                $A22 = collect($seats)
                                    ->where('seat', 'A22')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A22 {{ $A22 ? 'booked' : '' }}">A22
                                <input type="checkbox" class="seat-name " data-nums="seatA22" value="A22"
                                    name="seatName[]" id="A22">
                            </div>
                            <input type="checkbox" class="seat-price seatA22"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A21 = collect($seats)
                                    ->where('seat', 'A21')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A21 {{ $A21 ? 'booked' : '' }}">A21
                                <input type="checkbox" class="seat-name " data-nums="seatA21" value="A21"
                                    name="seatName[]" id="A21">
                            </div>
                            <input type="checkbox" class="seat-price seatA21"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A20 = collect($seats)
                                    ->where('seat', 'A20')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A20 {{ $A20 ? 'booked' : '' }}">A20
                                <input type="checkbox" class="seat-name " data-nums="seatA20" value="A20"
                                    name="seatName[]" id="A20">
                            </div>
                            <input type="checkbox" class="seat-price seatA20"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A19 = collect($seats)
                                    ->where('seat', 'A19')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A19 {{ $A19 ? 'booked' : '' }}">A19
                                <input type="checkbox" class="seat-name " data-nums="seatA19" value="A19"
                                    name="seatName[]" id="A19">
                            </div>
                            <input type="checkbox" class="seat-price seatA19"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A18 = collect($seats)
                                    ->where('seat', 'A18')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A18 {{ $A18 ? 'booked' : '' }}">A18
                                <input type="checkbox" class="seat-name " data-nums="seatA18" value="A18"
                                    name="seatName[]" id="A18">
                            </div>
                            <input type="checkbox" class="seat-price seatA18"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A17 = collect($seats)
                                    ->where('seat', 'A17')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A17 {{ $A17 ? 'booked' : '' }}">A17
                                <input type="checkbox" class="seat-name " data-nums="seatA17" value="A17"
                                    name="seatName[]" id="A17">
                            </div>
                            <input type="checkbox" class="seat-price seatA17"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A16 = collect($seats)
                                    ->where('seat', 'A16')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A16 {{ $A16 ? 'booked' : '' }}">A16
                                <input type="checkbox" class="seat-name " data-nums="seatA16" value="A16"
                                    name="seatName[]" id="A16">
                            </div>
                            <input type="checkbox" class="seat-price seatA16"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A15 = collect($seats)
                                    ->where('seat', 'A15')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A15 {{ $A15 ? 'booked' : '' }}">A15
                                <input type="checkbox" class="seat-name " data-nums="seatA15" value="A15"
                                    name="seatName[]" id="A15">
                            </div>
                            <input type="checkbox" class="seat-price seatA15"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A14 = collect($seats)
                                    ->where('seat', 'A14')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A14 {{ $A14 ? 'booked' : '' }}">A14
                                <input type="checkbox" class="seat-name " data-nums="seatA14" value="A14"
                                    name="seatName[]" id="A14">
                            </div>
                            <input type="checkbox" class="seat-price seatA14"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A13 = collect($seats)
                                    ->where('seat', 'A13')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A13 {{ $A13 ? 'booked' : '' }}">A13
                                <input type="checkbox" class="seat-name " data-nums="seatA13" value="A13"
                                    name="seatName[]" id="A13">
                            </div>
                            <input type="checkbox" class="seat-price seatA13"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A12 = collect($seats)
                                    ->where('seat', 'A12')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A12 {{ $A12 ? 'booked' : '' }}">A12
                                <input type="checkbox" class="seat-name " data-nums="seatA12" value="A12"
                                    name="seatName[]" id="A12">
                            </div>
                            <input type="checkbox" class="seat-price seatA12"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A11 = collect($seats)
                                    ->where('seat', 'A11')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A11 {{ $A11 ? 'booked' : '' }}">A11
                                <input type="checkbox" class="seat-name " data-nums="seatA11" value="A11"
                                    name="seatName[]" id="A11">
                            </div>
                            <input type="checkbox" class="seat-price seatA11"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A10 = collect($seats)
                                    ->where('seat', 'A10')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A10 {{ $A10 ? 'booked' : '' }}">A10
                                <input type="checkbox" class="seat-name " data-nums="seatA10" value="A10"
                                    name="seatName[]" id="A10">
                            </div>
                            <input type="checkbox" class="seat-price seatA10"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A9 = collect($seats)
                                    ->where('seat', 'A9')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A9 {{ $A9 ? 'booked' : '' }}">A9
                                <input type="checkbox" class="seat-name " data-nums="seatA9" value="A9"
                                    name="seatName[]" id="A9">
                            </div>
                            <input type="checkbox" class="seat-price seatA9"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A8 = collect($seats)
                                    ->where('seat', 'A8')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A8 {{ $A8 ? 'booked' : '' }}">A8
                                <input type="checkbox" class="seat-name " data-nums="seatA8" value="A8"
                                    name="seatName[]" id="A8">
                            </div>
                            <input type="checkbox" class="seat-price seatA8"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A7 = collect($seats)
                                    ->where('seat', 'A7')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A7 {{ $A7 ? 'booked' : '' }}">A7
                                <input type="checkbox" class="seat-name " data-nums="seatA7" value="A7"
                                    name="seatName[]" id="A7">
                            </div>
                            <input type="checkbox" class="seat-price seatA7"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A6 = collect($seats)
                                    ->where('seat', 'A6')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A6 {{ $A6 ? 'booked' : '' }}">A6
                                <input type="checkbox" class="seat-name " data-nums="seatA6" value="A6"
                                    name="seatName[]" id="A6">
                            </div>
                            <input type="checkbox" class="seat-price seatA6"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A5 = collect($seats)
                                    ->where('seat', 'A5')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A5 {{ $A5 ? 'booked' : '' }}">A5
                                <input type="checkbox" class="seat-name " data-nums="seatA5" value="A5"
                                    name="seatName[]" id="A5">
                            </div>
                            <input type="checkbox" class="seat-price seatA5"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A4 = collect($seats)
                                    ->where('seat', 'A4')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A4 {{ $A4 ? 'booked' : '' }}">A4
                                <input type="checkbox" class="seat-name " data-nums="seatA4" value="A4"
                                    name="seatName[]" id="A4">
                            </div>
                            <input type="checkbox" class="seat-price seatA4"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A3 = collect($seats)
                                    ->where('seat', 'A3')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A3 {{ $A3 ? 'booked' : '' }}">A3
                                <input type="checkbox" class="seat-name " data-nums="seatA3" value="A3"
                                    name="seatName[]" id="A3">
                            </div>
                            <input type="checkbox" class="seat-price seatA3"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">

                            @php
                                $A2 = collect($seats)
                                    ->where('seat', 'A2')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A2 {{ $A2 ? 'booked' : '' }}">A2
                                <input type="checkbox" class="seat-name" data-nums="seatA2" value="A2"
                                    name="seatName[]" id="A2">
                            </div>
                            <input type="checkbox" class="seat-price seatA2"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">
                            @php
                                $A1 = collect($seats)
                                    ->where('seat', 'A1')
                                    ->isNotEmpty();
                            @endphp
                            <div class="grid-item A1 {{ $A1 ? 'booked' : '' }}">
                                A1
                                <input type="checkbox" class="seat-name" data-nums="seatA1" value="A1"
                                    name="seatName[]" id="A1">
                            </div>
                            <input type="checkbox" class="seat-price seatA1"
                                value="{{ settings()->get('silver_ticket_price') }}" name="seatPrice[]">
                        </div>
                    </div>





                    <input type="hidden" name="show_id" value="{{ $show_id }}" id="">

                    {{-- <div class="screen col-12 d-flex justify-content-center align-items-center">
                        <h4 class="font-weight-bold text-uppercase">Screen</h4>
                    </div> --}}

                    <div class="col-12 d-flex justify-content-end mt-3">
                        <input type="submit" value="Pay" class="btn btn-info col-12" style="height: 50px;">
                    </div>
                </div>
            </form>
            <!-- /.container-fluid -->
        </section>


    </div>
@endsection
