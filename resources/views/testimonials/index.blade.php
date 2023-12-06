@extends('layouts.mainlayout')
@section('page_title','Daftar Testimonial')

@section('content')
<div class="row justify-content-between my-3">
    <div class="col-6">
        <h2>Daftar Testimonial</h2>
    </div>
    <div class="col-2">
        <a href="/add-testimonials" class="btn btn-primary">Tambah Ulasan</a>
    </div>
<div>
@if (Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Comment</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($testimonials as $testimonial)
        <tr>
            <td>{{ $testimonial->name }}</td>
            <td>{{ $testimonial->comment }}</td>
            <td class="col-3 text-center">
                <a href="/testimonials/{{ $testimonial->id }}" class="btn btn-outline-primary btn-sm">Detail</a>
                <a href="/edit-testimonials/{{ $testimonial->id }}" class="btn btn-outline-primary btn-sm">Ubah</a>
                <a href="/delete-testimonials/{{ $testimonial->id }}" class="btn btn-outline-primary btn-sm">hapus</
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection