@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Post</h3>
    <form action="{{ url('/post/' . $row->post_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf
        <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="post_tanggal" class="form-control" value="{{ $row->post_tanggal }}">
        </div>
        <div class="form-group">
            <label for="">JUDUL</label>
            <input type="text" name="post_judul" class="form-control" value="{{ $row->post_judul }}">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <input type="text" name="post_text" class="form-control" value="{{ $row->post_text }}">
        </div>
        <div class="form-group">
            <label for="">CATEGORY ID</label>
            <input type="text" name="post_category_id" class="form-control" value="{{ $row->post_category_id }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection