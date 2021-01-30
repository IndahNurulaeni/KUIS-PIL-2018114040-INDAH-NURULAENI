@extends('layouts.app')

@section('title','Absens')

@section('content')

<a href="/absens/create" class="card-link btn-primary">Tambah Mahasiswa</a>
@foreach ($absens as $absen)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <a href="/absens/{{$absen['id']}}" class="card-title">{{ $absen['waktu_absen'] }}</a>
    <h6 class="card-subtitle mb-2 text-muted">{{ $absen['mahasiswa_id'] }}</h6>
    <p class="card-text">{{ $absen['matakuliah_id'] }}</p>
    <p class="card-text">{{ $absen['keterangan'] }}</p>
    
    <a href="/absens/{{$absen['id']}}/edit" class="card-link btn-warning">Edit Mahasiswa</a>
    <form action="/absens/{{ $absen['id']}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="card-link btn-danger">Delete Mahasiswa</button>
    </form>
  </div>
</div>

@endforeach
<div>
{{ $absens->links() }}
</div>
@endsection

    
