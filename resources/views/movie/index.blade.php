@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Movie</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="content">
            <div class="container-fluid">
                <form action="{{ $movie->id ? route('movie.update', $movie) : route('movie.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @isset($movie->id)
                        @method('PUT')
                    @endisset
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div style="width: 200px;position: relative;">
                                    <input type="file" name="thumbnail" id="fileInput" class="imgPicker">
                                    <div class="no-img" id="NoImg">
                                        <label class="text-muted">Image</label>
                                    </div>
                                    <img id="imagePreview" style="width: 200px" alt="">
                                </div>
                                <div class="col">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Movie Name *:</label>
                                                <input type="text" name="movie_name" class="form-control"
                                                    id="exampleInputPassword1" placeholder="Movie Name"
                                                    value="{{ old('movie_name', $movie->movie_name) }}" required>
                                                @error('movie_name')
                                                    <small class="font-weight-normal text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Movie Language *:</label>
                                                <select class="form-control select2" name="language_id" style="width: 100%;"
                                                    required>
                                                    <option value="">Please select a language</option>
                                                    @foreach ($languages as $language)
                                                        <option value="{{ $language->id }}"
                                                            {{ $movie->language_id == $language->id ? 'selected' : '' }}>
                                                            {{ $language->language }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('language_id')
                                                    <small class="font-weight-normal text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Movie Type *:</label>
                                                <select class="form-control select2" required name="type_id"
                                                    style="width: 100%;">
                                                    <option value="">Please select a movie type</option>
                                                    @foreach ($types as $type)
                                                        <option value="{{ $type->id }}"
                                                            {{ $movie->type_id == $type->id ? 'selected' : '' }}>
                                                            {{ $type->type }}</option>
                                                    @endforeach
                                                </select>
                                                @error('type_id')
                                                    <small class="font-weight-normal text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Movie Tag *:</label>
                                                <select class="form-control select2" multiple required name="tag_id[]"
                                                    style="width: 100%;">
                                                    @php
                                                        $i = 0;
                                                        $j = $movie->movie_has_tag->count();

                                                    @endphp
                                                    @foreach ($tags as $tag)
                                                        @if ($movie->id || $i < $j - 1)
                                                            @if ($j > 0)
                                                                <option value="{{ $tag->id }}"
                                                                    {{ $tag->id == $movie->movie_has_tag[$i]->tag_id ? 'selected' : '' }}>
                                                                    {{ $tag->tag }}
                                                                </option>

                                                                @php
                                                                    if ($tag->id == $movie->movie_has_tag[$i]->tag_id && $i < $j - 1) {
                                                                        $i++;
                                                                    }
                                                                @endphp
                                                            @else
                                                                <option value="{{ $tag->id }}">
                                                                    {{ $tag->tag }}
                                                                </option>
                                                            @endif
                                                        @else
                                                            <option value="{{ $tag->id }}">
                                                                {{ $tag->tag }}
                                                            </option>
                                                        @endif
                                                        {{-- <option value="{{ $tag->id }}"> {{ $tag->tag }} </option> --}}
                                                    @endforeach
                                                </select>
                                                @error('tag_id')
                                                    <small class="font-weight-normal text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Trailer URL</label>
                                                <input type="text" name="trailer" class="form-control"
                                                    id="exampleInputPassword1" placeholder="Trailer URL (Youtube Only)"
                                                    value="{{ old('trailer', $movie->trailer) }}">
                                                @error('trailer')
                                                    <small class="font-weight-normal text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Movie Duration *:</label>
                                                <input type="text" name="duration" class="form-control"
                                                    id="exampleInputPassword1" placeholder="2 Hour 30 Minute"
                                                    value="{{ old('duration', $movie->duration) }}" required>
                                                @error('duration')
                                                    <small class="font-weight-normal text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-xl-3">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Movie Release Date *:</label>
                                                <input type="date" name="release_date" class="form-control"
                                                    id="exampleInputPassword1" placeholder="Email" required
                                                    value="{{ old('release_date', $movie->release_date) }}">
                                                @error('release_date')
                                                    <small class="font-weight-normal text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>

                                        </div>




                                        <div class="col-12 px-3">
                                            <hr class="col-12">
                                        </div>


                                        <div class="card-footer">
                                            <button type="submit"
                                                class="btn btn-primary">{{ $movie->id ? 'Update' : 'Save' }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="button" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Thimbnail</th>
                                    <th>Movie</th>
                                    <th>Language</th>
                                    <th>Tag</th>
                                    <th>Duration</th>
                                    <th>Release Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($movies as $movie)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{asset('storage')}}{{"/"}}{{$movie->thumbnail}}" style="height:70px" alt="">
                                        </td>
                                        <td>
                                            <b>{{ $movie->movie_name }}</b>
                                            <p>{{ $movie->type->type }}</p>
                                        </td>
                                        <td> {{ $movie->language->language }} </td>
                                        <td>
                                            @foreach ($movie->movie_has_tag as $tag)
                                                {{ $tag->tag->tag }}

                                                @if (!$loop->last)
                                                    @php
                                                        echo ', ';
                                                    @endphp
                                                @endif
                                            @endforeach
                                        </td>
                                        <td> {{ $movie->duration }} Hour </td>
                                        <td> {{ $movie->release_date }} </td>

                                        <td class="d-flex">
                                            <a href="{{ route('movie.shows', $movie) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('movie.edit', $movie) }}"
                                                class="ml-2 btn btn-warning">Edit</a>
                                            <form action="{{ route('movie.destroy', $movie) }}"
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
                                    <th>Thimbnail</th>
                                    <th>Movie</th>
                                    <th>Language</th>
                                    <th>Tag</th>
                                    <th>Duration</th>
                                    <th>Release Date</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </div>
@endsection
