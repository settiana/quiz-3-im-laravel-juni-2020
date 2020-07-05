@extends('layouts.master')

@section('title', 'Edit Artikel')
@section('content')
        <form role="form" action="/artikel/{{$artikel->id}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul" value="{{$artikel->judul}}">
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi" class="form-control" rows="5" placeholder="Masukkan isi artikel">{{$artikel->isi}}</textarea>
            </div>

            <div class="form-group">
                <label for="judul">Tags</label>
                <input type="text" name="tag" class="form-control" id="tag" placeholder="Masukkan tag" value="{{$artikel->tag}}">
                <small class="text-muted">Masukkan tag dipisahkan dengan tanda koma, contoh:tag1,tag2,tag3</small>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
 
@endsection