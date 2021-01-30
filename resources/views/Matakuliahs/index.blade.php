@extends('layouts.app')

@section('title','Matakuliahs')

@section('content')

<a href="/matakuliahs/create" class="card-link btn-primary">Tambah Mata Kuliah</a>


<table class="table table-primary ">
  <thead>
    <tr>
      <th scope="col">Nama Mata Kuliah</th>
      <th scope="col"> Jumlah SKS</th>
      <th scope="col"></th>
     
    </tr>
  </thead>
  <tbody>
  @foreach ($matakuliahs as $matakuliah)
  <tr>
    <td>{{$matakuliah->nama_matakuliah}}</td>
    <td>{{$matakuliah->sks}}</td>
    <td><a href="/matakuliahs/{{$matakuliah->id}}/edit"><button type="button" class="btn btn-outline-primary">Edit</a></button></td>
    <form action="/matakuliahs/{{ $matakuliah->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-danger">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $matakuliahs -> links() }}
    </div>
@endsection





    
