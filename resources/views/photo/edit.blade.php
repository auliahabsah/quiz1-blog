@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Photo</h3>
    <form action="{{ url('/photo/' . $row->photo_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="photo_tanggal" class="form-control" value="{{ $row->photo_tanggal }}">
        </div>
        <div class="form-group">
            <label for="">JUDUL</label>
            <input type="text" name="photo_judul" class="form-control" value="{{ $row->photo_judul }}">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <input type="text" name="photo_text" class="form-control" value="{{ $row->photo_text }}">
        </div>
        <div class="form-group">
            <label for="">POST ID</label>
            <input type="text" name="photo_post_id" class="form-control" value="{{ $row->photo_post_id }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection