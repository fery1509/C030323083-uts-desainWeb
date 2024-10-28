<!-- resources/views/bahanbaku/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Bahan Baku</h1>
    <a href="{{ route('bahanbaku.create') }}">Tambah Bahan Baku</a>
    <ul>
        @foreach($bahanBakus as $bahanBaku)
            <li>{{ $bahanBaku->nama }} - Stok: {{ $bahanBaku->stok }} - Harga: {{ $bahanBaku->harga }}</li>
            <a href="{{ route('bahanbaku.edit', $bahanBaku->id) }}">Edit</a>
            <form action="{{ route('bahanbaku.destroy', $bahanBaku->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        @endforeach
    </ul>
@endsection
