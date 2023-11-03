@extends('layouts.settings.setting')
@section('setting')
<h4 class="font-weight-bold m-0 p-0">Organization Settings</h4>
<small class="m-0 p-0">STS - STS Cinema</small>

<div class="col-12 setting-detail-box">
    <div class="d-block">
        <h5 class="font-weight-bold m-0 p-0">Organization Name:</h5>
        <p class="px-3">STS - STS Cinema</p>
    </div>
    <div class="d-block">
        <h5 class="font-weight-bold m-0 p-0">Organizational Email:</h5>
        <p class="px-3">sts@gmail.com</p>
    </div>
    <div class="d-block">
        <h5 class="font-weight-bold m-0 p-0">Organization Contact:</h5>
        <p class="px-3">9814668499</p>
    </div>
    <div class="d-block">
        <h5 class="font-weight-bold m-0 p-0">Organization Address:</h5>
        <p class="px-3">Dhangadhi, Kailali</p>
    </div>
    <div class="d-block">
        <h5 class="font-weight-bold m-0 p-0">Organization Logo:</h5>
        <img src="{{ asset('image/sts_logo.jpeg') }}" alt="">
    </div>
</div>
<hr class="col-12">
<div class="col-12">
    <h4 class="font-weight-bold m-0 p-0">Change Organizational Settings</h4>

    <form action="#">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Short Name</label>
                    <input type="text" name="org_short_name" class="form-control"
                        id="exampleInputPassword1" placeholder="Short Name" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Full Name</label>
                    <input type="text" name="org_full_name" class="form-control"
                        id="exampleInputPassword1" placeholder="Full Name" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Organization Email</label>
                    <input type="text" name="org_email" class="form-control"
                        id="exampleInputPassword1" placeholder="Organization Email"
                        value="">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Organization Contact</label>
                    <input type="text" name="org_contact" class="form-control"
                        id="exampleInputPassword1" placeholder="Organization Contact"
                        value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Organization Address</label>
                    <textarea name="org_address" class="form-control" id="" cols="30" rows="3"
                        placeholder="Organization Address"></textarea>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputPassword1">Organization Logo</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="avatar" class="custom-file-input"
                                id="exampleInputFile">
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
