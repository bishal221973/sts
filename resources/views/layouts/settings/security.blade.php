@extends('layouts.settings.setting')
@section('setting')
    <h4 class="font-weight-bold m-0 p-0">Security and Password</h4>
    <small class="m-0 p-0">STS - STS Cinema</small>
    <br> <br>
    <label class="font-weight-normal">Your password must be at least 8 characters and should include a combination of
        numbers, letters and special characters (!$@%)</label>

    <div class="col-12 setting-detail-box">

        <h5 class="font-weight-bold m-0 p-0">Password Tips</h5>

        <ul>
            <li>Choose a passwort that you don't use anywhere else online.</li>
            <li>Make it easy for you to remmember and difficult for other to guess.</li>
            <li>Never share your password with anyone.</li>
        </ul>

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
    <label class="mt-3 font-weight-normal">If your password is used elsewhere then your account may be less secure. Protect
        yourself by choosing a strong password.</label>
    <hr class="col-12">
    <div class="col-12">
        <h4 class="font-weight-bold m-0 p-0">Change Password</h4>

        <form action="{{ route('changePassword', Auth()->user()) }}" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" name="current_password" class="form-control" id="exampleInputPassword1"
                            placeholder="Current Password" required value="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                            placeholder="New Password" required value="">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1"
                            placeholder="Confirm Password" required value="">
                    </div>
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            {{-- <a href="#">Forget password ? </a> --}}
            <div class="card-footer mt-3">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
        </form>
    </div>
@endsection
