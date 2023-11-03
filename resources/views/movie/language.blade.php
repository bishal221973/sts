@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Movie Language</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Movie Language</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @isset($language->id)
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
                                    <h3 class="card-title">Movie Language Table</h3>
                                    <button class="rounded btn btn-info btn-flat" data-toggle="modal"
                                        data-target="#modal-default" style="width: max-content">Add Movie Language</button>
                                </div>
                                {{-- Model --}}
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Movie Language</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ $language->id ? route('language.update',$language) : route('language.store') }}" method="POST">
                                                    @csrf
                                                    @isset($language->id)
                                                        @method('PUT')
                                                    @endisset
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Language</label>
                                                        <input type="text" name="language" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Language"
                                                            value="{{ old('language',$language->language) }}" required>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">{{$language->id ? 'Update' : 'Save'}}</button>
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
                                            <th>Language</th>
                                            <th>Slug</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($languages as $language)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $language->language }}</td>
                                                <td>{{ $language->slug }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('language.edit', $language) }}"
                                                        class="btn btn-warning">Edit</a>

                                                    <form action="{{ route('language.destroy', $language) }}"
                                                        onsubmit="return confirm('Are you sure ?')" method="DELETE">
                                                        <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>SN</th>
                                            <th>Language</th>
                                            <th>Slug</th>
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
