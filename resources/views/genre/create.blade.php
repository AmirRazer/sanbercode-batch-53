@extends('layouts.master')
@section('title', 'Tambah Data')
@section('content')


    <div>
        <h2>Tambah Data</h2>
        <form action="/genre" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama">Nama Genre</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                @error('nama')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>

@endsection
