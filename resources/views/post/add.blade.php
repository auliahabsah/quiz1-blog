@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Post</h3>
    <form action="{{ url('/post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="post_tanggal" class="form-control">
        </div>
        <div class="form-group">
            <label for="">JUDUL</label>
            <input type="text" name="post_judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <input type="text" name="post_text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">CATEGORY ID</label>
            <input type="text" name="post_category_id" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
        
</form>
</div>

@endsection