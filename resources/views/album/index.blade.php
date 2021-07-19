@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>
            Album
            <a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <th>NAMA</th>
                <th>TEXT</th>
                <th>PHOTO ID</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->album_nama }}</td>
                    <td>{{ $row->album_text }}</td>
                    <td>{{ $row->album_photo_id }}</td>
                    <td><a href="{{ url('album/' . $row->album_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ url('/album/' . $row->album_id) }}" method="POST">
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