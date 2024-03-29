@extends('layouts.master')

@section('judul')
    <title>Genre</title>



@section('content')

    <a href="/genre/create" class="btn btn-primary mb-3">Tambah</a>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Nomer</th>
                <th scope="col">Nama</th>

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($genre as $key=>$value)
                <tr>
                    <td>{{ $key + 1 }}</th>
                    <td>{{ $value->nama }}</td>

                    <td>
                        
                        <a href="/genre/{{ $value->id }}" class="btn btn-info" >Show</a>
                        <a href="/genre/{{ $value->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/genre/{{ $value->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger my-1" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <tr colspan="3">
                    <td>No data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
