@extends('layouts.mainlayout')
@section('page_title','Daftar Barang Ditemukan')

@section('content')

<div class="row justify-content-between my-3">
    <div class="col-6">
        <h2>Daftar Barang Ditemukan</h2>
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
            <th>Date Found</th>
            <th>Description</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Where Found</th>
            <th>Detail Location</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($founds as $founds)
        <tr>
            <td>{{ $founds->name }}</td>
            <td><img src="{{ $founds->photo }}" height="90" width="90" class="card-img-top" alt="..."></td>
            <td>{{ $founds->items }}</td>
            <td>{{ $founds->date_found }}</td>
            <td>{{ $founds->description }}</td>
            <td>{{ $founds->category }}</td>
            <td>{{ $founds->brand }}</td>
            <td>{{ $founds->where_found }}</td>
            <td>{{ $founds->detail_loc }}</td>
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