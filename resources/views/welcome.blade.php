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
            <div class="row">

                    <div class="row px-1">
                        <div class="invoice" style="width: 400px">
                            <div class="card">

                                <div class="card-body" id="printThis">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="{{ asset('storage') }}{{ '/' }}{{ settings()->get('logo') }}"
                                            alt="" style="width: 300px">
                                    </div>
                                    <label class="font-weight-normal col-12 text-center m-0 p-0">Tax Invoice</label>
                                    <h4 class="col-12 text-center font-weight-bold m-0 p-0">
                                        {{ settings()->get('org_full_name', $default = 'STS Cinema') }}</h4>
                                    <label
                                        class="col-12 text-center m-0 p-0">{{ settings()->get('org_address', $default = 'Dhangadhi, Kailali') }}</label>

                                    <div class="col-12 d-flex justify-content-between mt-2 mb-0">
                                        <div class="d-flex">
                                            <label class="font-weight-normal">S.N. :</label>
                                            <h5>1555</h5>
                                        </div>
                                        <div class="d-flex">
                                            <label class="font-weight-normal">Vat No. :</label>
                                            <h5>{{ settings()->get('org_vat_number', $default = '123456789') }}</h5>
                                        </div>
                                    </div>

                                    <div class="col-12 d-flex justify-content-between m-0">
                                        <div class="d-flex">
                                            <label class="font-weight-normal">Movie :</label>
                                            <h5 class="font-weight-bold">Prem Geet</h5>
                                        </div>

                                    </div>

                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="d-flex">
                                            <label class="font-weight-normal">Screen :</label>
                                            <h5>Screen 1</h5>
                                        </div>
                                        <div class="d-flex">
                                            <label class="font-weight-normal">Seat Type :</label>
                                            <h5>Gold</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="d-block">
                                            <h5 class="font-weight-normal m-0 p-0 col-12 text-center">Date</h5>
                                            <h5 class="font-weight-bold">2000/02/02</h5>
                                        </div>
                                        <div class="d-block">
                                            <h5 class="font-weight-normal m-0 p-0 col-12 text-center">Time</h5>
                                            <h5 class="font-weight-bold"> 3:00PM </h5>
                                        </div>

                                        <div class="d-block">
                                            <h5 class="font-weight-normal m-0 p-0 col-12 text-center">Seat</h5>
                                            <div class="col-12 d-flex">
                                                <h4 class="font-weight-bold">A1</h4>
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
                                                <h5 class="font-weight-normal">Rs. {{ round(222.222,2) }}
                                                </h5>
                                            </div>


                                                    <div class="d-flex justify-content-end">
                                                        <h5 class="font-weight-normal">VAT
                                                            (5%)
                                                            :</h5>
                                                        <h5 class="font-weight-normal">Rs.
                                                            {{ round(1*(2.235), 2) }}
                                                        </h5>

                                                    </div>


                                            {{-- @foreach ($movie->shows->movie->movie_has_tax as $tax) --}}
                                            {{-- @endforeach --}}

                                            <div class="d-flex justify-content-end">
                                                <h5 class="font-weight-normal">Total Cost :</h5>
                                                <h5 class="font-weight-normal">Rs. {{ round(200.00, 2) }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <h3 class="text-center font-weight-bold mt-3">Copy of Original -1</h3> --}}
                                    <label class="mt-3">Terms and Conditions</label>
                                    <ul class="m-0 p-0 pl-3">
                                        <li>Tickets once sold can not be refunded.</li>
                                        <li>Lost, Stolen or damaged tickets will not be replaced.</li>
                                        <li>Seat allocation can not be altered after the purchase of the tickets.</li>
                                    </ul>

                                    <div class="col-12 d-flex justify-content-between">
                                        <div class="d-block">
                                            <b>Printed By : {{ Auth()->user()->name }}</b> <br>
                                            <b>Printed By : 222222</b>
                                        </div>
                                        <div class="d-block">
                                            <b></b> <br>
                                            <b>Enjoy your movie at Dhangadhi</b>
                                        </div>
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

@push('script1')
    <script>
        function printDiv(divId) {
            var printContents = document.getElementById(divId).innerHTML;
            var originalContents = document.body.innerHTML;

            // Replace the entire document's contents with the contents of the specified div
            document.body.innerHTML = printContents;

            // Initiate the print dialog
            window.print();

            // Restore the original document contents
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
                }
            });
        });
    </script>
@endpush
