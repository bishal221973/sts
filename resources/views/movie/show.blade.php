@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Movie Show</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Movie Show</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @isset($movieShow->id)
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
                        <div class="card" style="background-color: #ccc">
                            <div class="card-body">
                                <div class="row">
                                    <div style="width: 300px;position: relative;">

                                        <img src="{{ asset('storage') }}{{ '/' }}{{ $movie->thumbnail }}"
                                            style="height: 300px;width:250px" alt="">
                                    </div>
                                    <div class="col px-5">
                                        <h3 class="font-weight-bold">{{ $movie->movie_name }}
                                            <small>({{ $movie->type->type }})</small>
                                        </h3>
                                        <label class="font-weight-normal"></label>
                                        <label class="font-weight-normal">
                                            @foreach ($movie->movie_has_tag as $tag)
                                                {{ $tag->tag->tag }}

                                                @if (!$loop->last)
                                                    ,
                                                @endif
                                            @endforeach
                                        </label>
                                        <br>
                                        <br>
                                        <label>Release On : <span
                                                class="font-weight-normal">{{ $movie->release_date }}</span> </label> <br>
                                        <label>Duration : <span class="font-weight-normal">{{ $movie->duration }}</span>
                                        </label> <br>
                                        <label>Language : <span
                                                class="font-weight-normal">{{ $movie->language->language }}</span> </label>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Movie Show Table</h3>
                                    <button class="rounded btn btn-info btn-flat" data-toggle="modal"
                                        data-target="#modal-default" style="width: max-content">Add Show</button>
                                </div>
                                {{-- Model --}}
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Movie Show</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ $movieShow->id ? route('show.update',$movieShow) : route('show.store') }}" method="POST">
                                                    @csrf

                                                    @isset($movieShow->id)
                                                        @method('PUT')
                                                    @endisset

                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Show Date</label>
                                                        <input type="date" name="date" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Tag"
                                                            value="{{ old('date', $movieShow->date) }}" required>
                                                    </div>
                                                    <input type="hidden" name="movie_id" value="{{ $movie->id }}"
                                                        id="">
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Show Time</label>
                                                        <input type="time" name="time" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Tag"
                                                            value="{{ old('time', $movieShow->time) }}" required>
                                                    </div>

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary"> {{$movieShow->id ? 'Update' : 'Save'}} </button>
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
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($shows as $show)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $show->date }}</td>
                                                <td>{{ $show->time }}</td>
                                                <td class="d-flex">
                                                    <a href="{{ route('show.edit', $show) }}"
                                                        class="btn btn-warning">Edit</a>

                                                    <form action="{{ route('show.destroy', $show) }}"
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
                                            <th>Date</th>
                                            <th>Time</th>
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
