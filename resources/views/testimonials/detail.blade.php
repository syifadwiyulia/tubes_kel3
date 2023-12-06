@extends('layouts.mainlayout')
@section('page_title','Daftar Testimonial')

@section('content')

<div>
    <div class="row">
        <div class="col-9">{{ $testimonials->name }}</div>
    </div>
    <div class="row">
        <div class="col-9">{{ $testimonials->comment }}</div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="/testimonials" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection