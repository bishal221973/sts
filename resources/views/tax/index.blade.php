@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Movie Tax</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Movie Tax</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        @isset($tax->id)
            @push('script')
                <script>
                    $("#modal-default").modal('show');
                </script>
            @endpush
        @endisset
        @if ($errors->any())
            @push('script')
                <script>
                    $("#modal-default").modal('show');
                </script>
            @endpush
        @endif
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


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <h3 class="card-title">Movie Tax Table</h3>
                                    <button class="rounded btn btn-info btn-flat" data-toggle="modal"
                                        data-target="#modal-default" style="width: max-content">Add Tax</button>
                                </div>
                                {{-- Model --}}
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Movie Tax</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="{{ $tax->id ? route('tax.update', $tax) : route('tax.store') }}"
                                                    method="POST">
                                                    @csrf
                                                    @isset($tax->id)
                                                        @method('PUT')
                                                    @endisset
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Tax *:</label>
                                                        <input type="text" name="tax" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Tax"
                                                            value="{{ old('tax', $tax->tax) }}" required>
                                                        @error('tax')
                                                            <small
                                                                class="font-weight-normal text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Percentage (%) *:</label>
                                                        <input type="number" name="percentage" class="form-control"
                                                            id="exampleInputPassword1" placeholder="Percentage"
                                                            value="{{ old('percentage', $tax->percentage) }}" required>
                                                        @error('percentage')
                                                            <small
                                                                class="font-weight-normal text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Tax For *:</label>
                                                        <select class="form-control select2" required multiple
                                                            style="width: 100%;" name="type_id[]">
                                                            @foreach ($types as $type)
                                                                {{-- @if ($movie->id || $k < $l - 1)
                                                                    @if ($l > 0)
                                                                        <option value="{{ $tax->id }}"
                                                                            {{ $tax->id == $movie->movie_has_tax[$k]->taxe_id ? 'selected' : '' }}>
                                                                            {{ $tax->tax }} ({{ $tax->percentage }}%)
                                                                        </option>


                                                                        @php
                                                                            if ($tax->id == $movie->movie_has_tax[$k]->taxe_id && $k < $l - 1) {
                                                                                $k++;
                                                                            }
                                                                        @endphp
                                                                    @else
                                                                        <option value="{{ $tax->id }}">
                                                                            {{ $tax->tax }} ({{ $tax->percentage }}%)
                                                                        </option>
                                                                    @endif
                                                                @else
                                                                    <option value="{{ $tax->id }}">
                                                                        {{ $tax->tax }} ({{ $tax->percentage }}%)
                                                                    </option>
                                                                @endif --}}
                                                                <option value="{{ $type->id }}">
                                                                    {{$type->type}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        @error('taxe_id')
                                                            <small
                                                                class="font-weight-normal text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit"
                                                            class="btn btn-primary">{{ $tax->id ? 'Update' : 'Save' }}</button>
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
                                <table id="button" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Tax</th>
                                            <th>percentage</th>
                                            <th>Tax On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($taxs as $tax)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $tax->tax }}</td>
                                                <td>{{ $tax->percentage }} %</td>
                                                <td>
                                                    @foreach ($tax->taxFor as $taxFor)
                                                        <div class="badge badge-info">
                                                            {{$taxFor->type->type}}
                                                        </div>
                                                    @endforeach
                                                </td>
                                                <td class="d-flex">
                                                    <a href="{{ route('tax.edit', $tax) }}"
                                                        class="btn btn-warning">Edit</a>

                                                    <form action="{{ route('tax.destroy', $tax) }}"
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
                                            <th>Tax</th>
                                            <th>percentage</th>
                                            <th>Tax On</th>
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
