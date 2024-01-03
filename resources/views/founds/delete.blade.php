@extends('layouts.mainlayout')
@section('page_title','Hapus Barang Ditemukan')

@section('content')
    <h3>Hapus Barang Ditemukan</h3>
    <form method="post" action="/founds/{{ $founds->id }}">
        @csrf
        @method('delete')
        <div class="mt-5"> 
            <p>Apakah Anda yakin akan menghapus barang <b>{{ $founds->items }}</b>? </p>
            <button type="submit" class="btn btn-danger mb-3">Ya</button>
            <a href="/admin.index" class="btn btn-secondary mb-3">Tidak</a>
        </div>
    </form>
@endsection