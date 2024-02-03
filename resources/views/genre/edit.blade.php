@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')

    <div>
        <h2>Edit Post {{ $genre->id }}</h2>
        <form action="/genre/{{ $genre->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" value="{{ $genre->nama }}" id="genre"
                    placeholder="Masukkan Title">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection
