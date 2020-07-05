@extends('layouts.master')
@section('title', 'Artikel')

@section('content')

<div style="float:right">
<a href="/artikel/create" class="btn btn-primary mb-2 ml-3" role="button">Buat Artikel!</a>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Isi</th>
      <th scope="col">Slug</th>
      <th scope="col">Tags</th>
      <th scope="col">Tanggal Dibuat</th>
      <th scope="col" style="width:25%">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($artikels as $key => $artikel)
      <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{ $artikel->judul }}</td>
      <td>{{ $artikel->isi }}</td>
      <td>{{ $artikel->slug }}</td>
      <td>
      @if ($artikel->tag)
        @foreach(explode(',', $artikel->tag) as $tag) 
            <span class="btn btn-success btn-sm">{{$tag}}</span>
        @endforeach
      @endif
      
      </td>
      <td>{{ $artikel->created_at }}</td>
      <td>
        <a class="btn btn-primary btn-sm" href="/artikel/{{$artikel->id}}">Show</a>
        <a class="btn btn-info btn-sm" href="/artikel/{{$artikel->id}}/edit">Edit</a>
        <form action="/artikel/{{$artikel->id}}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete </button>
        </form>
      
      </td>
    </tr>
  @endforeach
    
 
  </tbody>
</table>
@endsection


@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush

