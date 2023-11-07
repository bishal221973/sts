@extends('layouts.settings.setting')
@section('setting')
    <h4 class="font-weight-bold m-0 p-0">Movie Settings</h4>
    <small class="m-0 p-0">STS - STS Cinema</small>
    <br> <br>
    <label class="font-weight-normal">Manage your movie settings including Ticket Serial number and movie ticket
        price.</label>


    @if (session()->has('success'))
        @push('toast')
            <script>
                var Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    icon: 'success',
                    title: '{{ session()->get('success') }}'
                })
            </script>
        @endpush
    @endif
    <hr class="col-12">
    <div class="col-12">
        <h4 class="font-weight-bold m-0 p-0">Ticket Pricing (RS)</h4>

        <form action="{{ route('changePrice') }}" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="gold_ticket_price" class="form-control" id="exampleInputPassword1"
                            placeholder="Gold Ticket Price" required value="{{settings()->get('gold_ticket_price')}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="silver_ticket_price" class="form-control" id="exampleInputPassword1"
                            placeholder="Silver Ticket Price" required value="{{settings()->get('silver_ticket_price')}}">
                    </div>
                </div>

            </div>

            {{-- <a href="#">Forget password ? </a> --}}
            <div class="card-footer mt-3">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>
        </form>
    </div>
    <div class="col-12 mt-3">
        <h4 class="font-weight-bold m-0 p-0">Serial Number</h4>

        <form action="{{ route('serialNumber') }}" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="pre_sn" class="form-control" id="exampleInputPassword1"
                            placeholder="Pre Serial Number (ART 020)" required value="{{settings()->get('pre_sn',$default=null)}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="post_sn" class="form-control" id="exampleInputPassword1"
                            placeholder="Post Serial Number (0001000)" required value="{{settings()->get('post_sn',$default=null)}}">
                    </div>
                </div>

            </div>

            {{-- <a href="#">Forget password ? </a> --}}
            <div class="card-footer mt-3">
                <button type="submit" class="btn btn-primary">Change</button>
            </div>
        </form>
    </div>
@endsection
