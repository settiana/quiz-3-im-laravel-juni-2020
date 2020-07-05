@extends('layouts.master')

@section('title', 'Show Artikel')
@section('content')

<div class="card">
  <div class="card-header">
    <h5 class="card-title m-0">Judul: {{$artikel->judul}}</h5>
  </div>
  <div class="card-body">
    <p>Slug: {{$artikel->slug}}</p>
    <p>Isi: {{$artikel->isi}}</p>
    <p>Tags: 
    @if ($artikel->tag)
        @foreach(explode(',', $artikel->tag) as $tag) 
            <span class="btn btn-success btn-sm">{{$tag}}</span>
        @endforeach
    @endif</p>
    <p>Dibuat: {{$artikel->created_at}}</p>
    <p>Diupdate: {{$artikel->updated_at}}<p>
    
    </div>
</div>
 
 
@endsection