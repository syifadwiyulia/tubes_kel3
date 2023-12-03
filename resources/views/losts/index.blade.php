@extends('layouts.mainlayout')
@section('page_title','Daftar Kategori')

@section('content')
    <div class="row justify-content-between my-3">
        <div class="col-3">
            <h2>Daftar Kategori</h2>
        </div>
        <div class="col-2">
            <a href="/add-category" class="btn btn-primary">Tambah Data</a>
        </div>
    <div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $loop->iteration + $categories->firstItem()-1}}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->description }}</td>
            <td class="col-3 text-center">
                <a href="/category/{{ $category->id }}" class="btn btn-outline-primary btn-sm">Detail</a>
                <a href="/edit-category/{{ $category->id }}" class="btn btn-outline-primary btn-sm">Ubah</a>
                <a href="/delete-category/{{ $category->id }}" class="btn btn-outline-primary btn-sm">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection