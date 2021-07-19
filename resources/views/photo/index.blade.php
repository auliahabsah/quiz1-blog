@extends('layouts.app')

@section('content')
    <div class="container">

        <h3>
            Photo
            <a href="{{ url('/photo/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>

        </h3>

        <table class="table table-bordered">
            <tr>
                <th>TANGGAL</th>
                <th>JUDUL</th>
                <th>TEXT</th>
                <th>POST ID</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->photo_tanggal }}</td>
                    <td>{{ $row->photo_judul }}</td>
                    <td>{{ $row->photo_text }}</td>
                    <td>{{ $row->photo_post_id }}</td>
                    <td><a href="{{ url('photo/' . $row->photo_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ url('/photo/' . $row->photo_id) }}" method="POST">
                        <input name="_method" type="hidden" value="DELETE">
                        @csrf
                        <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach

        </table>
    </div>

@endsection