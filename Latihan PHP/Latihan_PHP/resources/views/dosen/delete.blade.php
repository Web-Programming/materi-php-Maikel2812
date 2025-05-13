@extends('layouts.master')

@section('title', 'Hapus Materi')

@section('content')
<h1>Hapus Dosen</h1>
<p>Apakah Anda yakin ingin menghapus dosen ini?</p>
<form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Hapus</button>
</form>
@endsection