@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Album</h3>
    <form action="{{ url('/album/' . $row->album_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="album_nama" class="form-control" value="{{ $row->album_nama }}">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <textarea name="album_text" class="form-control">{{ $row->album_text }}</textarea>
        </div>
        <div class="form-group">
            <label for="">PHOTO ID</label>
            <input type="text" name="album_photo_id" class="form-control" value="{{ $row->album_photo_id }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection