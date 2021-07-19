@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Tambah Data Photo</h3>
    <form action="{{ url('/photo') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="photo_tanggal" class="form-control">
        </div>
        <div class="form-group">
            <label for="">JUDUL</label>
            <input type="text" name="photo_judul" class="form-control">
        </div>
        <div class="form-group">
            <label for="">TEXT</label>
            <textarea name="photo_text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">POST ID</label>
            <input type="text" name="photo_post_id" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
        
    </form>
</div>

@endsection