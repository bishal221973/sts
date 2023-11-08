{{-- @extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Invoice</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Invoice</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="row">
            <div class="invoice" id="invoice">
                <h3 style="font-size: 17px; font-weight: bold;width:100%;text-align:center">Invoice</h3>
                <h2 style="font-size: 22px;font-weight: bold;width:100%;text-align:center">STS Cinema</h2>
                <h4
                    style="font-size: 15px;margin-top: -6px;font-weight: 510;font-weight: bold;width:100%;text-align:center">
                    Santoshi
                    tol,
                    Dhangadhi</h4>

                <div
                    style="width: 100%;
                display: flex;
                justify-content: space-between; margin-top: 8px;">
                    <div>
                        <span>S.N.: <b>ART 020-0001000</b></span>
                    </div>
                    <div>
                        <span>Vat No.: <b>3254747</b></span>
                    </div>
                </div>

                <div style="width: 100%;
                display: flex;
                justify-content: space-between; margin-top: 3px;">
                    <div>
                        <span>Movie: <b style="font-size: 22px;">Chandramukhi</b></span>
                    </div>

                </div>
                <div style="width: 100%;
                display: flex;
                justify-content: space-between; margin-top: 3px;">
                    <div>
                        <span>Screen: <b>Screen 1</b></span>
                    </div>
                    <div>
                        <span>Type: <b>Silver</b></span>
                    </div>

                </div>

                <div style="width: 100%;
                display: flex;
                justify-content: space-between; margin-top: 8px;">
                    <div style="width: 100%;
                    display: flex;
                    justify-content: space-between;padding-left: 20px;
            padding-right: 20px;">
                        <div style=" display: block;">
                            <div style=" display: flex;
            justify-content: center;">
                                Date
                            </div>
                            <div style=" display: flex;
            justify-content: center;">
                                <b>2000-10-10</b>
                            </div>
                        </div>
                        <div style=" display: block;">
                            <div style=" display: flex;
            justify-content: center;">
                                Time
                            </div>
                            <div style=" display: flex;
            justify-content: center;">
                                <b>08:00 PM</b>
                            </div>
                        </div>
                        <div style=" display: block;">
                            <div style=" display: flex;
            justify-content: center;">
                                Seat Number
                            </div>
                            <div style=" display: flex;
            justify-content: center;">
                                <b>A1</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div style=" width: 100%;
                display: flex;
                justify-content: space-between;margin-top: 15px;">
                    <div>
                        {!! QrCode::size(150)->generate('2587878778') !!}
                    </div>
                    <div style=" display: flex;
            justify-content: end;">
                        <div class="d-block">
                            <span>Entrance Fee : Rs. 224.99</span> <br>
                            <span style=" display: flex;
            justify-content: end;">FDF(15%) : Rs. 33.75</span>
                            <span style=" display: flex;
            justify-content: end;">Local Tax(3%) : Rs. 6.75</span>
                            <span style=" display: flex;
            justify-content: end;">VAT(13%) : Rs. 34.51</span>
                            <span style=" display: flex;
            justify-content: end;">Total Cost : Rs. 300</span> <br>
                        </div>
                    </div>

                </div> <br>
                <div class="d-block">
                    <span style="font-size: 12px;">Terms and Conditions</span> <br>
                    <span style="font-size: 12px;">1. Ticket once sold can not be refunded</span> <br>
                    <span style="font-size: 12px;">2. Lost, stolen or damaged tickets will not be replaced</span> <br>
                    <span style="font-size: 12px;">3. Seat allocation can not be altered after the purchase of the
                        tickets.</span>
                </div>
            </div>

        </div>
    </section>


</div>
@endsection
@push('script1')
    <script>
        $(document).ready(function() {
            var url = "{{ route('printData') }}";

            $.ajax({
                url: url,
                type: "GET",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(dataResult) {
                    for (var i = 0; i < dataResult.length; i++) {
                        prints(dataResult[i]);
                    }
                }
            });
        });

        function prints(id) {

            var contents = generatePrintableContent();

            var printWindow = window.open('', '', '600,600');
            if (printWindow) {
                printWindow.document.open();
                printWindow.document.write(contents);
                printWindow.document.close();
                printWindow.print();
                printWindow.close();
            } else {
                console.error("Failed to open a new window for printing. Make sure pop-up blockers are disabled.");
            }
        }

        function generatePrintableContent() {
            var qrCodeContents = "https://webisora.com";

            var bootstrapStyles = `
            <style>
                /* Add your Bootstrap styles here */
                .container {
                max-width: 100%;
            }
            /* Include other necessary styles */
            </style>`;
            var contents = document.getElementById("invoice").outerHTML;

            contents = contents.replace('<head>', '<head>' + bootstrapStyles);
            console.log(contents);

            return contents;
        }
    </script>
@endpush --}}


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
            <div class="my-div">
                <div class="row">
                    @foreach ($bookId as $item)
                        @php
                            $movie = App\Models\Book::with('shows.movie.type.taxFor.tax')->find($item);
                        @endphp
                        <div class="row px-1" style="overflow: hidden">
                            <div class="invoice" style="width: 550px;">
                                <div class="card" style="width: 550px">
                                    <div class="card-body" id="printThis{{ $item }}">
                                        {{-- <div class="col-12"> --}}
                                        <img src="{{ asset('storage') }}{{ '/' }}{{ settings()->get('logo') }}"
                                            alt="" class="logo-img-print">
                                        {{-- </div> --}}
                                        <h4 class="main-title">
                                            <b>{{ settings()->get('org_full_name', $default = 'STS Cinema') }}</b>
                                        </h4>
                                        <label class="sts-address col-12 m-0 p-0 font-weight-normal"
                                            >{{ settings()->get('org_address', $default = 'Dhangadhi, Kailali') }}</label>
                                        <h5 class="tax-invoice"><b>Tax
                                                Invoice</b></h5>

                                        <div class="d-flex justify-content-between mt-2 mb-0" style="width: 500px">
                                            <div class="d-flex">
                                                <label class="fs-20 font-weight-normal">S.No. &nbsp;:&nbsp;</label>
                                                <h5 class="fs-20">{{ $movie->pre_sn }}-{{ $movie->post_sn }}</h5>
                                            </div>
                                            <div class="d-flex">
                                                <label class="fs-20 font-weight-normal">Vat No. &nbsp;</label>
                                                <h5 class="fs-20">{{ settings()->get('org_vat_number', $default = '123456789') }}</h5>
                                            </div>
                                        </div>

                                        <div class="col-12 d-flex justify-content-between m-0 p-0">
                                            <div class="d-flex">
                                                <label class="fs-20 font-weight-normal">Movie &nbsp;:&nbsp;</label>
                                                <h5 class="fs-20 font-weight-bold">{{ $movie->movie_name }}</h5>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between" style="width: 500px">
                                            <div class="d-flex">
                                                <label class="fs-20 font-weight-normal">Screen &nbsp;:&nbsp;</label>
                                                <h5 class="fs-20">Screen 1</h5>
                                            </div>
                                            <div class="d-flex">
                                                <label class="fs-20 font-weight-normal">Type &nbsp;:&nbsp; </label>
                                                <h5><b class="fs-20">{{ $movie->seat_type }}</b></h5>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between" style="width: 500px">
                                            <div class="d-block">
                                                <h5 class="fs-20 font-weight-normal m-0 p-0 col-12">Date</h5>
                                                <h5 class="fs-20 font-weight-bold">{{ date('d/m/Y', strtotime($movie->date)) }}
                                                </h5>
                                            </div>
                                            <div class="d-block">
                                                <h5 class="fs-20 font-weight-normal m-0 p-0 col-12 text-center">Time</h5>
                                                <h5 class="fs-20 font-weight-bold text-uppercase" style="font-size:25px">
                                                    {{ date('h:i a', strtotime($movie->time)) }} </h5>
                                            </div>

                                            <div class="d-block">
                                                <h5 class="fs-20 font-weight-normal m-0 p-0 col-12 text-center">Seat Number</h5>
                                                <div class="col-12 d-flex justify-content-center">
                                                    <h4 class="fs-20 font-weight-bold" style="font-size:30px">{{ $movie->seat }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex justify-content-between mt-3" style="width: 500px">
                                            <div>
                                                {!! QrCode::size(150)->generate('2587878778') !!}

                                            </div>

                                            @php
                                                $totalTax = 0;
                                                $totalTaxPrice = 0;

                                                $afterVatTaxPrice = 0;
                                                $afterVatPrice = 0;
                                                $priceBeforeTax = 0;
                                            @endphp


                                            @php
                                                $taxs = App\Models\TaxFor::with('tax')
                                                    ->where('type_id', $movie->shows->movie->type->id)
                                                    ->get();
                                            @endphp
                                            @foreach ($taxs as $tax)
                                                @if ($tax->tax->tax == 'VAT')
                                                    @php
                                                        $taxP = 1 + $tax->tax->percentage / 100;
                                                        $afterVatTaxPrice = $movie->price / $taxP;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <div class="d-block">
                                                <div class="d-flex">
                                                    @foreach ($taxs as $tax)
                                                        @if ($tax->tax->tax != 'VAT')
                                                            @php
                                                                $totalTax = $totalTax + $tax->tax->percentage;
                                                            @endphp
                                                        @endif
                                                    @endforeach

                                                    @php
                                                        $taxPP = 1 + $totalTax / 100;
                                                        $priceBeforeTax = $afterVatTaxPrice / $taxPP;
                                                        $totalTaxPrice = $movie->price * ($totalTax / 100);
                                                    @endphp

                                                    <h5 class="fs-20 font-weight-normal">Entrance Fee :</h5>
                                                    <h5 class="fs-20 font-weight-normal">&nbsp;Rs. {{ round($priceBeforeTax, 2) }}
                                                    </h5>
                                                </div>

                                                @foreach ($taxs as $tax)
                                                    @if ($tax->tax->tax != 'VAT')
                                                        <div class="d-flex justify-content-end">
                                                            <h5 class="fs-20 font-weight-normal">{{ $tax->tax->tax }}
                                                                ({{ $tax->tax->percentage }}%)
                                                                :</h5>
                                                            <h5 class="fs-20 font-weight-normal">&nbsp;Rs.
                                                                {{ round($priceBeforeTax * ($tax->tax->percentage / 100), 2) }}
                                                            </h5>

                                                        </div>
                                                    @endif
                                                @endforeach

                                                @php
                                                    $totalAmount = 0;
                                                    $beforeVat = $movie->price + $totalTaxPrice;
                                                @endphp

                                                {{-- @foreach ($movie->shows->movie->movie_has_tax as $tax) --}}
                                                {{-- @endforeach --}}
                                                @foreach ($taxs as $tax)
                                                    @if ($tax->tax->tax == 'VAT')
                                                        <div class="d-flex justify-content-end">
                                                            <h5 class="fs-20 font-weight-normal">{{ $tax->tax->tax }}
                                                                ({{ $tax->tax->percentage }}%)
                                                                :</h5>
                                                            <h5 class="fs-20 font-weight-normal">&nbsp;Rs.
                                                                @php
                                                                    $totalAmount = $beforeVat + $beforeVat * ($tax->tax->percentage / 100);
                                                                @endphp
                                                                {{ round($movie->price - $afterVatTaxPrice, 2) }}</h5>

                                                        </div>
                                                    @endif
                                                @endforeach
                                                <div class="d-flex justify-content-end">
                                                    <h5 class="fs-20 font-weight-normal"><b>Total Cost :</b></h5>
                                                    <h5 class="fs-20 font-weight-normal"><b> &nbsp; Rs.
                                                            {{ round($movie->price, 2) }}</b>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <h3 class="text-center font-weight-bold mt-3">Copy of Original -1</h3> --}}
                                        <label class="mt-3 font-weight-bold fs-18">Terms and Condition.</label>
                                        <ul class="m-0 p-0 pl-3" style="position: relative;top:-5px">
                                            <li class="fs-18">Tickets once sold can not be refunded.</li>
                                            <li class="fs-18">Lost, Stolen or damaged tickets will not be replaced.</li>
                                            <li class="fs-18">Seat allocation can not be altered after the purchase of the tickets.</li>
                                        </ul>

                                        <div class="d-flex justify-content-between" style="width: 500px">
                                            <div class="d-block">
                                                <span class="fs-18">Printed By : {{ Auth()->user()->name }}</span> <br>
                                                <span class="text-uppercase fs-18">Printed By :
                                                    {{ date('Y/m/d', strtotime($movie->created_at)) }} &nbsp;
                                                    {{ date('h:i a', strtotime($movie->created_at)) }}</span>
                                            </div>
                                            <div class="d-block">
                                                <b></b> <br>
                                                <span class="fs-18">Enjoy your movie at Dhangadhi</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>


    </div>
@endsection

@push('script1')
    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
        $(document).ready(function() {
            // Define the URL for retrieving data
            var url = "{{ route('printData') }}";

            $.ajax({
                url: url,
                type: "GET",
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(dataResult) {
                    for (var i = 0; i < dataResult.length; i++) {
                        console.log(dataResult[i]);
                        var divId = 'printThis' + dataResult[i];
                        printDiv(divId);
                    }
                    var id = '{{ $show_id }}';
                    var url = "{{ route('seatDetail', ':id') }}";
                    url = url.replace(':id', id);
                    // window.location.href=url;
                }
            });
        });
    </script>
@endpush
