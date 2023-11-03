@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Users</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @isset($user->id)
            @push('script')
                <script>
                    $("#modal-default").modal('show');
                </script>
            @endpush
        @endisset


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Users Table</h3>
                                    <button class="rounded btn btn-info btn-flat" data-toggle="modal"
                                        data-target="#modal-default" style="width: max-content">Add Users</button>
                                </div>
                                {{-- Model --}}
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add New Users</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ $user->id ? route('users.update', $user) : route('users.store') }}"
                                                    method="POST">
                                                    @csrf
                                                    @isset($user->id)
                                                        @method('PUT')
                                                    @endisset
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Name</label>
                                                        <input type="text" name="name" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Name"
                                                            value="{{ old('name', $user->name) }}" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Email</label>
                                                        <input type="text" name="email" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Email"
                                                            value="{{ old('email', $user->email) }}" required>
                                                    </div>
                                                    @if (!$user->id)
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="text" name="password" class="form-control"
                                                                id="exampleInputPassword1" placeholder="Password"
                                                                value="{{ old('password', $user->password) }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Confirm Password</label>
                                                            <input type="text" name="" class="form-control"
                                                                id="exampleInputPassword1" placeholder="Confirm Password"
                                                                value="{{ old('password', $user->password) }}" required>
                                                        </div>
                                                    @endif
                                                    <div class="row">
                                                        <div class="form-group col">
                                                            <label for="exampleInputPassword1">Gender</label>
                                                            <select name="gender" id="" class="form-control">
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col">
                                                            <label for="exampleInputPassword1">Contact</label>
                                                            <input type="text" name="contact" class="form-control"
                                                                id="exampleInputPassword1" placeholder="Contact"
                                                                value="{{ old('contact', $user->contact) }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Avatar</label>
                                                        <input type="file" name="avatar" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Avatar"
                                                            value="{{ old('avatar', $user->avatar) }}">
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit"
                                                            class="btn btn-primary">{{ $user->id ? 'Update' : 'Save' }}</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Contact</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->gender ? $user->gender : 'Not Defined' }}</td>
                                                <td>{{ $user->contact ? $user->contact : 'Not Defined' }}</td>
                                                @if ($user->roles[0]->name != 'super-admin')
                                                    <td class="d-flex">
                                                        <a href="{{ route('users.edit', $user) }}"
                                                            class="btn btn-warning">Edit</a>

                                                        <form action="{{ route('users.destroy', $user) }}"
                                                            onsubmit="return confirm('Are you sure ?')" method="DELETE">
                                                            <button type="submit"
                                                                class="btn btn-danger ml-2">Delete</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Contact</th>
                                            <th>Action</th>
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
