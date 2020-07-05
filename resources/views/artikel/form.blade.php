@extends('layouts.master')

@section('title', 'Buat Artikel')
@section('content')
        <form role="form" action="/artikel" method="POST">
        @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul artikel">
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi" class="form-control" rows="5" placeholder="Masukkan isi artikel"></textarea>
            </div>

            <div class="form-group">
                <label for="judul">Tags</label>
                <input type="text" name="tag" class="form-control" id="tag" placeholder="Masukkan tag">
                <small class="text-muted">Masukkan tag dipisahkan dengan tanda koma, contoh:tag1,tag2,tag3</small>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
 
@endsection