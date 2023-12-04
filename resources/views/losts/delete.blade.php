@extends('layouts.mainlayout')
@section('page_title','Hapus Barang')

@section('content')
    <h3>Hapus Barang</h3>
    <form method="post" action="/losts/{{ $losts->id }}">
        @csrf
        @method('delete')
        <div class="mt-5">
            <p>Apakah Anda yakin akan menghapus barang <b>{{ $losts->items }}</b>? </p>
            <button type="submit" class="btn btn-danger mb-3">Ya</button>
            <a href="/losts" class="btn btn-secondary mb-3">Tidak</a>
        </div>
    </form>
@endsection