@extends('layouts.master')

@section('title', 'Materi Index')

@section('content')
<h1>Materi Index</h1>
<a href="{{ route('materi.create') }}">Tambah Materi</a>
<!-- Tampilkan daftar materi di sini -->
@endsection
