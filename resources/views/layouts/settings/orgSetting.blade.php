@extends('layouts.settings.setting')
@section('setting')
    <h4 class="font-weight-bold m-0 p-0">Organization Settings</h4>
    <small class="m-0 p-0">{{ settings()->get('org_short_name', $default = null) }} -
        {{ settings()->get('org_full_name', $default = null) }}</small>

    <div class="col-12 setting-detail-box">
        <div class="d-block">
            <h5 class="font-weight-bold m-0 p-0">Organization Name:</h5>
            <p class="px-3">{{ settings()->get('org_short_name', $default = null) }} -
                {{ settings()->get('org_full_name', $default = null) }}</p>
        </div>
        <div class="d-block">
            <h5 class="font-weight-bold m-0 p-0">Organizational Email:</h5>
            <p class="px-3">{{ settings()->get('org_email', $default = null) }}</p>
        </div>
        <div class="d-block">
            <h5 class="font-weight-bold m-0 p-0">Organization Contact:</h5>
            <p class="px-3">{{ settings()->get('org_contact', $default = null) }}</p>
        </div>
        <div class="d-block">
            <h5 class="font-weight-bold m-0 p-0">Organization Address:</h5>
            <p class="px-3">{{ settings()->get('org_address', $default = null) }}</p>
        </div>
        <div class="d-block">
            <h5 class="font-weight-bold m-0 p-0">Organization Logo:</h5>
            <img src="{{ asset('storage') }}{{ '/' }}{{ settings()->get('logo') }}" alt="" id="test"
                style="width: 100px" class="rounded" />
        </div>
    </div>
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
        <h4 class="font-weight-bold m-0 p-0">Change Organizational Settings</h4>

        <form action="{{ route('org') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Short Name</label>
                        <input type="text" name="org_short_name" class="form-control" id="exampleInputPassword1"
                            placeholder="Short Name" value="{{ settings()->get('org_short_name', $default = null) }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Full Name</label>
                        <input type="text" name="org_full_name" class="form-control" id="exampleInputPassword1"
                            placeholder="Full Name" value="{{ settings()->get('org_full_name', $default = null) }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Vat Number</label>
                        <input type="text" name="org_vat_number" class="form-control" id="exampleInputPassword1"
                            placeholder="Vat Number" value="{{ settings()->get('org_vat_number', $default = null) }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Organization Email</label>
                        <input type="text" name="org_email" class="form-control" id="exampleInputPassword1"
                            placeholder="Organization Email" value="{{ settings()->get('org_email', $default = null) }}">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Organization Contact</label>
                        <input type="text" name="org_contact" class="form-control" id="exampleInputPassword1"
                            placeholder="Organization Contact"
                            value="{{ settings()->get('org_contact', $default = null) }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Serial Number (Start From)</label>
                        <input type="text" name="sn_number" class="form-control" id="exampleInputPassword1"
                            placeholder="0001000" value="{{ settings()->get('sn_number', $default = null) }}">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Organization Address</label>
                        <textarea name="org_address" class="form-control" id="" cols="30" rows="3"
                            placeholder="Organization Address">{{ settings()->get('org_address', $default = null) }}</textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Organization Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose
                                    file</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
