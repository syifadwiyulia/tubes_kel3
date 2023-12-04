@extends('layouts.mainlayout')
@section('page_title','Daftar Barang Hilang')

@section('content')

<div class="row justify-content-between my-3">
    <div class="col-6">
        <h2>Daftar Barang Hilang</h2>
    </div>
    <div class="col-2">
        <a href="/add-items" class="btn btn-primary">Tambah Data</a>
    </div>
</div>

@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif

<table class="table" border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Photo</th>
            <th>Items</th>
            <th>Date Lost</th>
            <th>Description</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Lost Place</th>
            <th>Detail Location</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($losts as $losts)
        <tr>
            <td>{{ $losts->name }}</td>
            <td><img src="{{ $losts->photo }}" height="100" width="100" class="card-img-top" alt="..."></td>
            <td>{{ $losts->items }}</td>
            <td>{{ $losts->date_lost }}</td>
            <td>{{ $losts->description }}</td>
            <td>{{ $losts->category }}</td>
            <td>{{ $losts->brand }}</td>
            <td>{{ $losts->lost_place }}</td>
            <td>{{ $losts->detail_loc }}</td>
            <td class="col-3 text-center">
                <a href="/losts/{{ $losts->id }}" class="btn btn-outline-primary btn-sm">Detail</a>
                <a href="/edit-losts/{{  $losts->id }}" class="btn btn-outline-primary btn-sm">Ubah</a>
                <a href="/delete-losts/{{  $losts->id }}" class="btn btn-outline-primary btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection