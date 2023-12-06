@extends('layouts.mainlayout')
@section('page_title', 'Daftar Testimonial')

@section('content')
<h3>Edit Daftar Testimonial</h3>

<div class="mt-5 col-12 m-auto">
    <form action="/testimonials/{{ $testimonials->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <div class="col-1">
                <label for="name" class="col-form-label">Name</label>
            </div>
            <div class="col-2">
                <input type="text" id="name" class="form-control" name="name"
                value="{{ old('name', $testimonials->name) }}">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInLine" class="form-text text-danger">
                    @error('name')
                    <i>{{ $message }}</i>
                        
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-1">
                <label for="comment" class="col-form-label">Comment</label>
            </div>
        <div class="col-4">
                <input type="text" id="comment" class="form-control" name="comment"
                value="{{ old('description', $testimonials->comment) }}">
            </div>
            <div class="col-auto">
                <span id="passwordHelpInLine" class="form-text text-danger">
                    @error('description')
                    <i>{{ $message }}</i>
                        
                    @enderror
                </span>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4">
                <button type="submit" class="btn btn-success mb-3">Perbarui</button>
                <a href="/testimonials" class="btn btn-secondary mb-3">Kembali</a>
            </div>
        </div>
    </form>
</div>

@endsection