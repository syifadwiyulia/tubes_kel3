@extends('layouts.mainlayout')
@section('page_title','Daftar Testimonial')

@section('content')
    <h3>Hapus Testimonial</h3>
    <form method="post" action="/testimonials/{{ $testimonials->id }}">
        @csrf
        @method('delete')
        <div class="mt-5">
            <p>Apakah Anda yakin akan menghapus ulasan ini</b>? </p>
            <button type="submit" class="btn btn-danger mb-3">Ya</button>
            <a href="/testimonials" class="btn btn-secondary mb-3">Tidak</a>
        </div>
    </form>
@endsection